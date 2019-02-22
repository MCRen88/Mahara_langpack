<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-internal
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

require_once('file.php');

class PluginArtefactFile extends PluginArtefact {

    public static function get_artefact_types() {
        return array(
            'file',
            'folder',
            'image',
            'profileicon',
            'archive',
            'video',
            'audio',
        );
    }

    public static function get_block_types() {
        return array('image');
    }

    public static function get_plugin_name() {
        return 'file';
    }

    public static function menu_items() {
        return array(
            'create/files' => array(
                'path' => 'create/files',
                'url' => 'artefact/file/index.php',
                'title' => get_string('Files', 'artefact.file'),
                'weight' => 20,
            ),
        );
    }

    public static function right_nav_menu_items() {
        return array(
            'profileicons' => array(
                'path' => 'profileicons',
                'url' => 'artefact/file/profileicons.php',
                'title' => get_string('profileicons', 'artefact.file'),
                'weight' => 15,
                'iconclass' => 'id-badge',
            ),
        );
    }

    public static function group_tabs($groupid, $role) {
        if ($role) {
            return array(
                'files' => array(
                    'path' => 'groups/files',
                    'url' => 'artefact/file/groupfiles.php?group='.$groupid,
                    'title' => get_string('Files', 'artefact.file'),
                    'weight' => 80,
                ),
            );
        }
        else {
            return array();
        }
    }

    public static function get_event_subscriptions() {
        $subscriptions = array(
            (object)array(
                'plugin'       => 'file',
                'event'        => 'createuser',
                'callfunction' => 'newuser',
            ),
            (object)array(
                'plugin'        => 'file',
                'event'         => 'saveartefact',
                'callfunction'  => 'eventlistener_savedeleteartefact',
            ),
            (object)array(
                'plugin'        => 'file',
                'event'         => 'deleteartefact',
                'callfunction'  => 'eventlistener_savedeleteartefact',
            ),
            (object)array(
                'plugin'        => 'file',
                'event'         => 'deleteartefacts',
                'callfunction'  => 'eventlistener_savedeleteartefact',
            ),
            (object)array(
                'plugin'        => 'file',
                'event'         => 'updateuser',
                'callfunction'  => 'eventlistener_savedeleteartefact',
            ),
        );

        return $subscriptions;
    }

    public static function postinst($prevversion) {
        if ($prevversion == 0) {
            // Set default quotas to 50MB
            set_config_plugin('artefact', 'file', 'defaultquota', 52428800);
            set_config_plugin('artefact', 'file', 'defaultgroupquota', 52428800);
            set_config_plugin('artefact', 'file', 'folderdownloadzip', 1);
            set_config_plugin('artefact', 'file', 'folderdownloadkeepzipfor', 3600);
            self::set_quota_triggers();
        }
        set_config_plugin('artefact', 'file', 'commentsallowedimage', 1);
        self::resync_filetype_list();
    }

    public static function set_quota_triggers() {
        set_config_plugin('artefact', 'file', 'quotanotifylimit', 80);
        set_config_plugin('artefact', 'file', 'quotanotifyadmin', false);

        // Create triggers to reset the quota notification flag
        if (is_postgres()) {
            $sql = "DROP FUNCTION IF EXISTS {unmark_quota_exeed_upd_set}() CASCADE;";
            execute_sql($sql);

            db_create_trigger(
                'unmark_quota_exceed_upd_usr_set',
                'AFTER', 'UPDATE', 'usr', "
                UPDATE {usr_account_preference}
                SET value = 0 FROM {artefact_config}
                WHERE {usr_account_preference}.field = 'quota_exceeded_notified'
                AND {usr_account_preference}.usr = NEW.id
                AND {artefact_config}.plugin = 'file'
                AND {artefact_config}.field = 'quotanotifylimit'
                AND CAST(NEW.quotaused AS float)/CAST(NEW.quota AS float) < CAST({artefact_config}.value AS float)/100;"
            );
        }
        else {
            $sql = "DROP TRIGGER IF EXISTS {unmark_quota_exceed_upd_set}";
            execute_sql($sql);

            db_create_trigger(
                'unmark_quota_exceed_upd_usr_set',
                'AFTER', 'UPDATE', 'usr', "
                UPDATE {usr_account_preference}, {artefact_config}
                SET {usr_account_preference}.value = 0
                WHERE {usr_account_preference}.field = 'quota_exceeded_notified'
                AND {usr_account_preference}.usr = NEW.id
                AND {artefact_config}.plugin = 'file'
                AND {artefact_config}.field = 'quotanotifylimit'
                AND NEW.quotaused/NEW.quota < {artefact_config}.value/100;"
            );
        }
    }

    public static function newuser($event, $user) {
        $user = is_object($user) ? (array)$user : $user;
        if (empty($user['quota'])) {
            update_record('usr', array('quota' => get_config_plugin('artefact', 'file', 'defaultquota')), array('id' => $user['id']));
        }
    }


    public static function sort_child_data($a, $b) {
        if ($a->container && !$b->container) {
            return -1;
        }
        else if (!$a->container && $b->container) {
            return 1;
        }
        return strnatcasecmp($a->text, $b->text);
    }

    public static function jsstrings($type) {
        static $jsstrings = array(
            'filebrowser' => array(
                'mahara' => array(
                    'remove',
                    'cancel',
                    'defaulthint',
                ),
                'artefact.file' => array(
                    'confirmdeletefile',
                    'confirmdeletefolder',
                    'confirmdeletefolderandcontents',
                    'defaultprofileicon',
                    'editfile',
                    'editfolder',
                    'fileappearsinviews',
                    'fileattachedtoportfolioitems',
                    'fileappearsinskins',
                    'filewithnameexists',
                    'folderappearsinviews',
                    'foldercontainsprofileicons',
                    'foldernamerequired',
                    'foldernotempty',
                    'maxuploadsize',
                    'fileisfolder',
                    'nametoolong',
                    'namefieldisrequired',
                    'upload',
                    'uploadingfiletofolder',
                    'youmustagreetothecopyrightnotice',
                    'moveto',
                ),
            ),
        );
        return $jsstrings[$type];
    }

    public static function jshelp($type) {
        static $jshelp = array(
            'filebrowser' => array(
                'artefact.file' => array(
                    'notice',
                    'quota_message',
                    'uploadfile',
                    'tags',
                ),
            ),
        );
        return $jshelp[$type];
    }


    /**
     * Resyncs the allowed filetypes list with the XML configuration file.
     *
     * This can be called on install (and is, in the postinst method above),
     * and every time an upgrade is made that changes the file.
     */
    public static function resync_filetype_list() {
        require_once('xmlize.php');
        db_begin();

        delete_records('artefact_file_mime_types');

        $newlist     = xmlize(file_get_contents(get_config('docroot') . 'artefact/file/filetypes.xml'));
        $filetypes   = $newlist['filetypes']['#']['filetype'];

        foreach ($filetypes as $filetype) {
            $description = $filetype['#']['description'][0]['#'];
            foreach ($filetype['#']['mimetypes'][0]['#']['mimetype'] as $type) {
                $mimetype = $type['#'];
                execute_sql("INSERT INTO {artefact_file_mime_types} (mimetype, description) VALUES (?,?)", array($mimetype, $description));
            }
        }

        db_commit();

        log_info('Synced filetype list with filetypes.xml');
    }

    public static function get_mimetypes_from_description($description=null, $getrecords=false) {
        static $allmimetypes = null;

        if (is_null($allmimetypes)) {
            $allmimetypes = get_records_array('artefact_file_mime_types');
        }

        if (is_string($description)) {
            $description = array($description);
        }

        $mimetypes = array();

        foreach ($allmimetypes as $r) {
            if (is_null($description) || in_array($r->description, $description)) {
                if ($getrecords) {
                    $mimetypes[$r->mimetype] = $r;
                }
                else {
                    $mimetypes[] = $r->mimetype;
                }
            }
        }

        return $mimetypes;
    }

    public static function can_be_disabled() {
        return false;
    }

    public static function get_artefact_type_content_types() {
        return array(
            'file'        => array('file'),
            'image'       => array('image'),
            'profileicon' => array('image'),
            'archive'     => array('file'),
            'video'       => array('file'),
            'audio'       => array('file'),
        );
    }

    public static function get_attachment_types() {
        return array(
            'file',
            'image',
            'archive',
            'video',
            'audio'
        );
    }

    public static function recalculate_quota() {
        $data = get_records_sql_assoc("
            SELECT a.owner, SUM(f.size) AS bytes
            FROM {artefact} a JOIN {artefact_file_files} f ON a.id = f.artefact
            WHERE a.artefacttype IN (" . join(',',  array_map('db_quote', PluginArtefactFile::get_artefact_types())) . ")
            AND a.owner IS NOT NULL
            GROUP BY a.owner", array()
        );
        if ($data) {
            return array_map(function($a) { return $a->bytes; }, $data);
        }
        return array();
    }

    public static function recalculate_group_quota() {

        $data = get_records_sql_assoc("
            SELECT a.group, SUM(f.size) AS bytes
            FROM {artefact} a JOIN {artefact_file_files} f ON a.id = f.artefact
            WHERE a.artefacttype IN (" . join(',',  array_map('db_quote', PluginArtefactFile::get_artefact_types())) . ")
            AND a.group IS NOT NULL
            GROUP BY a.group", array()
        );
        if ($data) {
            return array_map(function($a) { return $a->bytes; }, $data);
        }
        return array();
    }

    public static function progressbar_link($artefacttype) {
        switch ($artefacttype) {
         case 'profileicon':
            return 'artefact/file/profileicons.php';
            break;
         default:
            return 'artefact/file/index.php';
        }
    }

    /**
     * The "file" artefact type should count uploads of all file types.
     * @param object $plugin
     * @return object
     */
    public static function progressbar_metaartefact_count($name) {
        global $USER;
        if ($name == 'file') {
            $meta = new stdClass();
            $meta->artefacttype = $name;
            $count = count_records_select('artefact', "owner=? and artefacttype in ('file','image','archive','video','audio')", array($USER->get('id')));
            $meta->completed = $count;
            return $meta;
        }
        else {
            return false;
        }
    }

    /**
     * eventlistener to respond to saveartefact, deleteartefact and
     * deleteartefacts.
     * Check if the user just passed the critical amount of his quota with a new
     * artefact or just deleted an artefact and now is below the critical percentage
     *
     * @param type $event
     * @param type $eventdata
     */
    public static function eventlistener_savedeleteartefact($event, $eventdata) {
        $userid = $group = null;
        $owner = null;
        $addsize = 0;

        safe_require('notification', 'internal');

        $filesize = 0;
        $quotatypes = array('file','audio','video','image','archive','profileicon');
        if (('saveartefact' === $event) && in_array($eventdata->get('artefacttype'), $quotatypes)) {
            $owner = array($eventdata->get('owner'));
            $group = $eventdata->get('group');
            $filesize = $eventdata->get('size');
        }
        else if (('deleteartefact' === $event) && in_array($eventdata->get('artefacttype'), $quotatypes)) {
            $owner = array($eventdata->get('owner'));
            $group = $eventdata->get('group');
            // we want to remove the size of the file from the quota check so we make it a negative integer
            $filesize = intval('-' . $eventdata->get('size'));
        }
        else if ('updateuser' === $event) {
            $userid = $eventdata;
            if (is_array($userid)) {
                $userid = reset($userid);
            }
        }
        else if (is_array($eventdata)) {
            foreach ($eventdata as $artefactid) {
                if (!is_int($artefactid)) {
                    continue;
                }
                $artefact = artefact_instance_from_id($artefactid);
                $owner = $artefact->get('owner');
                break;
            }
        }

        if (is_array($owner)) {
            $userid = reset($owner);
        }

        $quotanotifylimit = get_config_plugin('artefact', 'file', 'quotanotifylimit');
        if ($quotanotifylimit <= 0 || $quotanotifylimit >= 100) {
            $quotanotifylimit = 100;
        }

        if ($userid !== null) {
            $userdata = get_user($userid);
            $userdata->quotausedpercent = empty($userdata->quota) ? 0 : (($userdata->quotaused + $filesize ) / $userdata->quota) * 100;
            $overlimit = false;
            if ($quotanotifylimit <= $userdata->quotausedpercent) {
                $overlimit = true;
            }

            $notified = get_field('usr_account_preference', 'value', 'field', 'quota_exceeded_notified', 'usr', $userid);

            if ($overlimit && '1' !== $notified) {
                $notifyadmin = get_config_plugin('artefact', 'file', 'quotanotifyadmin');
                ArtefactTypeFile::notify_users_threshold_exceeded(array($userdata), $notifyadmin);
            }
            else if ($notified && !$overlimit) {
                set_account_preference($userid, 'quota_exceeded_notified', false);
            }
        }
        else if ($group !== null) {
            $groupdata = get_group_by_id($group, true);

            $groupdata->quotausedpercent = empty($groupdata->quota) ? 0 : (($groupdata->quotaused + $filesize ) / $groupdata->quota) * 100;
            $overlimit = false;
            if ($quotanotifylimit <= $groupdata->quotausedpercent) {
                $overlimit = true;
            }
            if ($overlimit) {
                require_once(get_config('docroot') . 'artefact/file/lib.php');
                ArtefactTypeFile::notify_groups_threshold_exceeded(array($groupdata));
            }
        }
    }
}

abstract class ArtefactTypeFileBase extends ArtefactType {

    public function __construct($id = 0, $data = null) {
        parent::__construct($id, $data);

        if (empty($this->id)) {
            $allowcomments = get_config_plugin('artefact', 'file', 'commentsallowed' . $this->artefacttype);
            $this->allowcomments = !is_null($allowcomments) ? $allowcomments : $this->allowcomments;
        }
    }

    public static function is_singular() {
        return false;
    }

    /**
     * This function checks if a artefact can be deleted
     */
    public function can_be_deleted() {
        return true;
    }

    public static function get_icon($options=null) {

    }

    public static function collapse_config() {
        return 'file';
    }

    public function move($newparentid) {
        $this->set('parent', $newparentid);
        $this->commit();
        return true;
    }

    /**
     * Return an instance of external filesystem class or False if not configured.
     *
     * @return external_file_system
     */
    final public static function get_external_filesystem_instance() {
        global $CFG;

        if (is_using_external_filesystem()) {
            $classname = $CFG->externalfilesystem['class'];
            return new $classname();
        }

        return false;
    }

    // Check if something exists in the db with a given title and parent,
    // either in adminfiles or with a specific owner.
    public static function file_exists($title, $owner, $folder, $institution=null, $group=null) {
        $filetypesql = "('" . join("','", PluginArtefactFile::get_artefact_types()) . "')";
        $ownersql = artefact_owner_sql($owner, $group, $institution);
        return get_field_sql('SELECT a.id FROM {artefact} a
            LEFT OUTER JOIN {artefact_file_files} f ON f.artefact = a.id
            WHERE a.title = ?
            AND a.' . $ownersql . '
            AND a.parent ' . (empty($folder) ? ' IS NULL' : ' = ' . (int)$folder) . '
            AND a.artefacttype IN ' . $filetypesql, array($title));
    }


    // Sort folders before files; then use nat sort order.
    public static function my_files_cmp($a, $b) {
        return strnatcasecmp((-2 * isset($a->isparent) + ($a->artefacttype != 'folder')) . 'a' . $a->title,
                             (-2 * isset($b->isparent) + ($b->artefacttype != 'folder')) . 'a' . $b->title);
    }

    // Sort folders before files in descending order; then use nat sort order descending.
    public static function my_files_cmp_desc($a, $b) {
        return strnatcasecmp((+2 * isset($b->isparent) + ($b->artefacttype == 'folder')) . 'a' . $b->title,
                             (+2 * isset($a->isparent) + ($a->artefacttype == 'folder')) . 'a' . $a->title);
    }

    /**
     * Gets a list of files in one folder
     *
     * @param integer $parentfolderid    Artefact id of the folder
     * @param integer $userid            Id of the owner, if the owner is a user
     * @param integer $group             Id of the owner, if the owner is a group
     * @param string  $institution       Id of the owner, if the owner is a institution
     * @param array   $filters           Filters to apply to the results. An array with keys 'artefacttype', 'filetype',
     *                                   where array values are arrays of artefacttype or mimetype strings.
     * @return array  A list of artefacts
     */
    public static function get_my_files_data($parentfolderid, $userid, $group=null, $institution=null, $filters=null) {
        global $USER;
        $select = '
            SELECT
                a.id, a.artefacttype, a.mtime, f.size, fi.orientation, a.title, a.description, a.license, a.licensor, a.licensorurl, a.locked, a.allowcomments, u.profileicon AS defaultprofileicon,
                COUNT(DISTINCT c.id) AS childcount, COUNT (DISTINCT aa.artefact) AS attachcount, COUNT(DISTINCT va.view) AS viewcount, COUNT(DISTINCT s.id) AS skincount,
                COUNT(DISTINCT api.id) AS profileiconcount';
        $from = '
            FROM {artefact} a
                LEFT OUTER JOIN {artefact_file_files} f ON f.artefact = a.id
                LEFT OUTER JOIN {artefact_file_image} fi ON fi.artefact = a.id
                LEFT OUTER JOIN {artefact} c ON c.parent = a.id
                LEFT OUTER JOIN {artefact} api ON api.parent = a.id AND api.artefacttype = \'profileicon\'
                LEFT OUTER JOIN {view_artefact} va ON va.artefact = a.id
                LEFT OUTER JOIN {artefact_attachment} aa ON aa.attachment = a.id
                LEFT OUTER JOIN {skin} s ON (s.bodybgimg = a.id OR s.viewbgimg = a.id)
                LEFT OUTER JOIN {usr} u ON a.id = u.profileicon AND a.owner = u.id';

        if (!empty($filters['artefacttype'])) {
            $artefacttypes = $filters['artefacttype'];
            $artefacttypes[] = 'folder';
        }
        else {
            $artefacttypes = PluginArtefactFile::get_artefact_types();
        }
        $where = "
            WHERE a.artefacttype IN (" . join(',',  array_map('db_quote', $artefacttypes)) . ")";
        if (!empty($filters['filetype']) && is_array($filters['filetype'])) {
            $where .= "
            AND (a.artefacttype = 'folder' OR f.filetype IN (" . join(',',  array_map('db_quote', $filters['filetype'])) . '))';
        }

        $groupby = '
            GROUP BY
                a.id, a.artefacttype, a.mtime, f.size, a.title, a.description, a.license, a.licensor, a.licensorurl, a.locked, a.allowcomments,
                u.profileicon, fi.orientation';

        $phvals = array();

        if ($institution) {
            if ($institution == 'mahara' && !$USER->get('admin')) {
                // If non-admins are browsing site files, only let them see the public folder & its contents
                $publicfolder = ArtefactTypeFolder::admin_public_folder_id();
                $where .= '
                AND (a.path = ? OR a.path LIKE ?)';
                $phvals = array("/$publicfolder", "/$publicfolder/%");
            }
            else {
                $from .= '
                    LEFT OUTER JOIN {usr_institution} ui ON ui.institution = a.institution';
                $where .= ' AND a.institution = ? ';
                $phvals[] = $institution;
                // Check if user is an admin in this institution.
                if (!$USER->get('admin')) {
                    $where .= ' AND ui.admin = 1 AND ui.usr = ? ';
                    $phvals[] = $USER->get('id');
                }
            }
        }
        else if ($group) {
            $select .= ',
                r.can_edit, r.can_view, r.can_republish, a.author';
            $from .= '
                LEFT OUTER JOIN (
                    SELECT ar.artefact, ar.can_edit, ar.can_view, ar.can_republish
                    FROM {artefact_access_role} ar
                    INNER JOIN {group_member} gm ON ar.role = gm.role
                    WHERE gm.group = ? AND gm.member = ?
                ) r ON r.artefact = a.id';
            $phvals[] = $group;
            $phvals[] = $USER->get('id');
            $where .= '
            AND a.group = ? AND (r.can_view = 1 OR a.author = ?)';
            $phvals[] = $group;
            $phvals[] = $USER->get('id');
            $groupby .= ', r.can_edit, r.can_view, r.can_republish, a.author';
        }
        else {
            $where .= '
            AND a.institution IS NULL AND a.owner = ?';
            $phvals[] = $userid;
        }

        if ($parentfolderid) {
            $where .= '
            AND a.parent = ? ';
            $phvals[] = $parentfolderid;
            $parent = artefact_instance_from_id($parentfolderid);
            $can_view_parent = $USER->can_view_artefact($parent);
            if (!$can_view_parent) {
                return null;
            }
            $can_edit_parent = $USER->can_edit_artefact($parent);
        }
        else {
            $where .= '
            AND a.parent IS NULL';
            $can_edit_parent = true;
            $can_view_parent = true;
        }

        $filedata = get_records_sql_assoc($select . $from . $where . $groupby, $phvals);
        if (!$filedata) {
            $filedata = array();
        }
        else {
            foreach ($filedata as $item) {
                $item->mtime = format_date(strtotime($item->mtime), 'strfdaymonthyearshort');
                $item->tags = array();
                $item->allowcomments = (bool) $item->allowcomments;
                $item->icon = call_static_method(generate_artefact_class_name($item->artefacttype), 'get_icon', array('id' => $item->id));
                if ($item->size) { // Doing this here now for non-js users
                    $item->size = ArtefactTypeFile::short_size($item->size, true);
                }
                if ($group) {
                  if ( $institution == 'mahara' && $USER->get('admin')) {
                    //site files inside and outside public folder (only admin user)
                    $item->can_edit = 1;
                    $item->can_view = 1;
                    $item->can_republish = 1;
                  }
                  else if ($institution == 'mahara' && ArtefactTypeFolder::admin_public_folder_id() == $parentfolderid) {
                       // site public files, not admin user
                       $item->can_edit = 0;
                       $item->can_view = 1;
                       $item->can_republish = 1;
                  }
                  else if (!empty($item->author) && $item->author == $USER->get('id')) {
                      $item->can_edit = 1;
                      $item->can_view = 1;
                      $item->can_republish = 1;
                  }
                  else {
                      $item->can_edit = $can_edit_parent && $item->can_edit;
                      $item->can_view = $can_view_parent && $item->can_view;
                      $item->can_republish = $can_view_parent && $item->can_republish;
                  }
                }
                if (!empty($item->author)) {
                    if ($group && $item->author == $USER->get('id')) {
                        $item->can_edit = 1;    // This will show the delete, edit buttons in filelist, but doesn't change the actual permissions in the checkbox
                    }
                }
                if ($item->artefacttype == 'folder') {
                    if ($item->childcount > 0 && defined('FOLDER_SIZE')) {
                        $foldersize = get_record_sql("SELECT SUM(aff.size) AS size FROM {artefact} a
                                                      JOIN {artefact_file_files} aff ON aff.artefact = a.id
                                                      WHERE a.path LIKE ?", array('%/' . $item->id . '/%'));
                        $item->foldersize = ArtefactTypeFile::short_size($foldersize->size, true);
                    }
                    else {
                        $item->foldersize = ArtefactTypeFile::short_size(0, true);
                    }
                }
            }
            $tagwhere = "'" . join("','", array_keys($filedata)) . "'";
            $typecast = is_postgres() ? '::varchar' : '';
            $tags = get_records_sql_array("
                SELECT
                    (CASE
                        WHEN t.tag LIKE 'tagid_%' THEN CONCAT(i.displayname, ': ', t2.tag)
                        ELSE t.tag
                    END) AS tag, t.resourceid
                FROM {tag} t
                LEFT JOIN {tag} t2 ON t2.id" . $typecast . " = SUBSTRING(t.tag, 7)
                LEFT JOIN {institution} i ON i.name = t2.ownerid
                WHERE t.resourcetype = 'artefact' AND t.resourceid IN (" . $tagwhere . ")");
            if ($tags) {
                foreach ($tags as $t) {
                    $filedata[$t->resourceid]->tags[] = $t->tag;
                }
            }
            $where = 'artefact IN (' . join(',', array_keys($filedata)) . ')';
            if ($group) {  // Fetch permissions for each artefact
                $perms = get_records_select_array('artefact_access_role', $where);
                if ($perms) {
                    foreach ($perms as $perm) {
                        $filedata[$perm->artefact]->permissions[$perm->role] = array(
                            'view' => $perm->can_view,
                            'edit' => $perm->can_edit,
                            'republish' => $perm->can_republish
                        );
                    }
                }
            }
        }

        // Add parent folder to the list
        if (!empty($parentfolderid)) {
            $grandparentid = (int) get_field('artefact', 'parent', 'id', $parentfolderid);
            $filedata[$grandparentid] = (object) array(
                'title'        => get_string('parentfolder', 'artefact.file'),
                'artefacttype' => 'folder',
                'description'  => get_string('parentfolder', 'artefact.file'),
                'isparent'     => true,
                'id'           => $grandparentid
            );
        }

        uasort($filedata, array("ArtefactTypeFileBase", "my_files_cmp"));

        return $filedata;
    }


    /**
     * Creates pieforms definition for forms on the my files, group files, etc. pages.
     */
    public static function files_form($page='', $group=null, $institution=null, $folder=null, $highlight=null, $edit=null) {
        global $USER;
        $resizeonuploaduserdefault = $USER->get_account_preference('resizeonuploaduserdefault');

        $folder = param_integer('folder', 0);
        $edit = param_variable('edit', 0);
        if (is_array($edit)) {
            $edit = array_keys($edit);
            $edit = $edit[0];
        }
        $edit = (int) $edit;
        $highlight = null;
        if ($file = param_integer('file', 0)) {
            $highlight = array($file); // todo convert to file1=1&file2=2 etc
        }

        // Check whether the user may upload files; either the group needs to
        // be within its edit window (if one is set) or the user needs to be
        // the group admin.
        if (!empty($group)) {
            $editfilesfolders = group_within_edit_window($group);
        }
        else {
            $editfilesfolders = true;
        }

        $form = array(
            'name'               => 'files',
            'jsform'             => true,
            'newiframeonsubmit'  => true,
            'jssuccesscallback'  => 'files_callback',
            'jserrorcallback'    => 'files_callback',
            'renderer'           => 'div',
            'plugintype'         => 'artefact',
            'pluginname'         => 'file',
            'configdirs'         => array(get_config('libroot') . 'form/', get_config('docroot') . 'artefact/file/form/'),
            'group'              => $group,
            'institution'        => $institution,
            'elements'           => array(
                'filebrowser' => array(
                    'type'         => 'filebrowser',
                    'folder'       => $folder,
                    'highlight'    => $highlight,
                    'edit'         => $edit,
                    'page'         => $page,
                    'config'       => array(
                        'upload'          => $editfilesfolders,
                        'uploadagreement' => get_config_plugin('artefact', 'file', 'uploadagreement'),
                        'resizeonuploaduseroption' => get_config_plugin('artefact', 'file', 'resizeonuploaduseroption'),
                        'resizeonuploaduserdefault' => $resizeonuploaduserdefault,
                        'createfolder'    => $editfilesfolders,
                        'edit'            => $editfilesfolders,
                        'select'          => false,
                    ),
                ),
            ),
        );
        return $form;
    }

    public static function files_js() {
        return "function files_callback(form, data) { files_filebrowser.callback(form, data); }";
    }

    public static function count_user_files($owner=null, $group=null, $institution=null) {
        $filetypes = PluginArtefactFile::get_artefact_types();
        foreach ($filetypes as $k => $v) {
            if ($v == 'folder') {
                unset($filetypes[$k]);
            }
        }
        $filetypesql = "('" . join("','", $filetypes) . "')";

        $ownersql = artefact_owner_sql($owner, $group, $institution);
        return (object) array(
            'files'   => count_records_select('artefact', "artefacttype IN $filetypesql AND $ownersql", array()),
            'folders' => count_records_select('artefact', "artefacttype = 'folder' AND $ownersql", array())
        );
    }

    public static function artefactchooser_get_file_data($artefact) {
        $artefact->icon = call_static_method(generate_artefact_class_name($artefact->artefacttype), 'get_icon', array('id' => $artefact->id));
        if ($artefact->artefacttype == 'profileicon') {
            $artefact->hovertitle  =  $artefact->note;
            if ($artefact->title) {
                $artefact->hovertitle .= ': ' . $artefact->title;
            }
        }
        else {
            $artefact->hovertitle  =  $artefact->title;
            if ($artefact->description) {
                $artefact->hovertitle .= ': ' . $artefact->description;
            }
        }

        $folderdata = self::artefactchooser_folder_data($artefact);

        if ($artefact->artefacttype == 'profileicon') {
            $artefact->description = str_shorten_text($artefact->title, 30);
        }
        else {
            $path = $artefact->parent ? self::get_full_path($artefact->parent, $folderdata->data) : '';
            $artefact->description = str_shorten_text($folderdata->ownername . $path . $artefact->title, 30);
        }

        return $artefact;
    }

    public static function artefactchooser_folder_data(&$artefact) {
        // Grab data about all folders the artefact owner has, so we
        // can make full paths to them, and show the artefact owner if
        // it's a group or institution.
        static $folderdata = array();

        $ownerkey = $artefact->owner . '::' . $artefact->group . '::' . $artefact->institution;
        if (!isset($folderdata[$ownerkey])) {
            $ownersql = artefact_owner_sql($artefact->owner, $artefact->group, $artefact->institution);
            $folderdata[$ownerkey] = new stdClass();
            $folderdata[$ownerkey]->data = get_records_select_assoc('artefact', "artefacttype='folder' AND $ownersql", array(), '', 'id, title, parent');
            if ($artefact->group) {
                $folderdata[$ownerkey]->ownername = get_field('group', 'name', 'id', $artefact->group) . ':';
            }
            else if ($artefact->institution) {
                if ($artefact->institution == 'mahara') {
                    $folderdata[$ownerkey]->ownername = get_config('sitename') . ':';
                }
                else {
                    $folderdata[$ownerkey]->ownername = get_field('institution', 'displayname', 'name', $artefact->institution) . ':';
                }
            }
            else {
                $folderdata[$ownerkey]->ownername = '';
            }
        }

        return $folderdata[$ownerkey];
    }

    /**
     * Works out a full path to a folder, given an ID. Implemented this way so
     * only one query is made.
     */
    public static function get_full_path($id, &$folderdata) {
        $path = '';
        while (!empty($id)) {
            $path = $folderdata[$id]->title . '/' . $path;
            $id = $folderdata[$id]->parent;
        }
        return $path;
    }

    public function default_parent_for_copy(&$view, &$template, $artefactstoignore) {
        static $folderids;

        $viewid = $view->get('id');

        if (isset($folderids[$viewid])) {
            return $folderids[$viewid];
        }

        $viewfilesfolder = ArtefactTypeFolder::get_folder_id(get_string('viewfilesdirname', 'view'), get_string('viewfilesdirdesc', 'view'),
                                                             null, true, $view->get('owner'), $view->get('group'), $view->get('institution'), $artefactstoignore);
        $foldername = $viewid;
        $existing = get_column_sql("
            SELECT title
            FROM {artefact}
            WHERE parent = ? AND title LIKE ? || '%'", array($viewfilesfolder, $foldername));
        $sep = '';
        $ext = '';
        if ($existing) {
            while (in_array($foldername . $sep . $ext, $existing)) {
                $sep = '-';
                $ext++;
            }
        }
        $data = (object) array(
            'title'       => $foldername . $sep . $ext,
            'description' => get_string('filescopiedfromviewtemplate', 'view', $template->get('title')),
            'owner'       => $view->get('owner'),
            'group'       => $view->get('group'),
            'institution' => $view->get('institution'),
            'parent'      => $viewfilesfolder,
        );
        $folder = new ArtefactTypeFolder(0, $data);
        $folder->commit();

        $folderids[$viewid] = $folder->get('id');

        return $folderids[$viewid];
    }

    /**
     * Return a unique artefact title for a given owner & parent.
     *
     * Try to add digits before the filename extension: If the desired
     * title contains a ".", add "." plus digits before the final ".",
     * otherwise append "." and digits.
     *
     * @param string $desired
     * @param integer $parent
     * @param integer $owner
     * @param integer $group
     * @param string $institution
     */
    public static function get_new_file_title($desired, $parent, $owner=null, $group=null, $institution=null) {
        $bits = explode('\.', $desired);
        if (count($bits) > 1 && preg_match('/[^0-9]/', end($bits))) {
            $start = join('.', array_slice($bits, 0, count($bits)-1));
            $end = '.' . end($bits);
        }
        else {
            $start = $desired;
            $end = '';
        }

        $where = ($parent && is_int($parent)) ? "parent = $parent" : 'parent IS NULL';
        $where .=  ' AND ' . artefact_owner_sql($owner, $group, $institution);

        $taken = get_column_sql("
            SELECT title FROM {artefact}
            WHERE artefacttype IN ('" . join("','", PluginArtefactFile::get_artefact_types()) . "')
            AND title LIKE ? || '%' || ? AND " . $where, array($start, $end));
        $taken = array_flip($taken);

        $i = 0;
        $newname = $start . $end;
        while (isset($taken[$newname])) {
            $i++;
            $newname = $start . '.' . $i . $end;
        }
        return $newname;
    }

    public static function blockconfig_filebrowser_element(&$instance, $default=array()) {
        global $USER;
        $resizeonuploaduserdefault = $USER->get_account_preference('resizeonuploaduserdefault');
        return array(
            'name'         => 'filebrowser',
            'type'         => 'filebrowser',
            'title'        => get_string('file', 'artefact.file'),
            'folder'       => (int) param_variable('folder', 0),
            'highlight'    => null,
            'browse'       => true,
            'page'         => get_config('wwwroot') . 'view/blocks.php' . View::make_base_url(),
            'config'       => array(
                'upload'          => true,
                'resizeonuploaduseroption' => get_config_plugin('artefact', 'file', 'resizeonuploaduseroption'),
                'resizeonuploaduserdefault' => $resizeonuploaduserdefault,
                'uploadagreement' => get_config_plugin('artefact', 'file', 'uploadagreement'),
                'createfolder'    => false,
                'edit'            => false,
                'tag'             => true,
                'select'          => true,
                'alwaysopen'      => true,
                'publishing'      => true,
            ),
            'tabs'         => $instance->get_view()->ownership(),
            'defaultvalue' => $default,
            'selectlistcallback' => 'artefact_get_records_by_id',
        );
    }

    /**
     * returns duplicated file/folder artefacts
     *
     * @param array $values
     */
    public static function get_duplicated_artefacts(array $values) {
        return array();
    }
    public static function get_existing_artefacts(array $values) {
        return array();
    }
}


class ArtefactTypeFile extends ArtefactTypeFileBase {

    protected $size;

    // The original filename extension (when the file is first
    // uploaded) is saved here.  This is used as a workaround for IE's
    // detecting filetypes by extension: when the file is downloaded,
    // the extension can be appended to the name if it's not there
    // already.
    protected $oldextension;

    // The id used for the filename on the filesystem.  Usually this
    // is the same as the artefact id, but it can be different if the
    // file is a copy of another file artefact.
    protected $fileid;

    // Mime type
    protected $filetype;

    // File content hash. It could be used by external file systems.
    protected $contenthash;

    /**
     * Array with remote file system settings like 'includefilepath' and 'class'
     *
     * @var external_file_system
     */
    protected $externalfilesystem;

    public function __construct($id = 0, $data = null) {
        parent::__construct($id, $data);

        if ($this->id && ($filedata = get_record('artefact_file_files', 'artefact', $this->id))) {
            foreach($filedata as $name => $value) {
                if (property_exists($this, $name)) {
                    $this->{$name} = $value;
                }
            }

            // If contenthash is not set for some reason, set it now.
            if (empty($this->contenthash)) {
                $this->save_content_hash();
            }
        }

        $this->externalfilesystem = ArtefactTypeFileBase::get_external_filesystem_instance();
    }

    /**
     * This function checks if a file artefact can be deleted
     */
    public function can_be_deleted() {
        return !$this->get('locked');
    }

    /**
     * This function updates or inserts the artefact.  This involves putting
     * some data in the artefact table (handled by parent::commit()), and then
     * some data in the artefact_file_files table.
     */
    public function commit() {
        // Just forget the whole thing when we're clean.
        if (empty($this->dirty)) {
            return;
        }

        // We need to keep track of newness before and after.
        $new = empty($this->id);

        // Commit to the artefact table.
        parent::commit();

        // Reset dirtyness for the time being.
        $this->dirty = true;

        $data = (object)array(
            'artefact'      => $this->get('id'),
            'size'          => $this->get('size'),
            'oldextension'  => $this->get('oldextension'),
            'fileid'        => $this->get('fileid'),
            'filetype'      => $this->get('filetype'),
            'contenthash'   => $this->get('contenthash'),
        );

        if ($new) {
            if (empty($data->fileid)) {
                $data->fileid = $data->artefact;
            }

            if (empty($this->fileid)) {
                $this->fileid = $data->fileid;
            }
            insert_record('artefact_file_files', $data);
        }
        else {
            update_record('artefact_file_files', $data, 'artefact');
        }

        $this->dirty = false;
    }

    protected function save_content_hash() {
        // We set generateifpossible = false because if we dont have a hash, then the file must be local or missing.
        // This also avoids calling ensure_local for images, which would call this infinitely.
        $this->contenthash = self::generate_content_hash($this->get_local_path(array(), false));

        if (!empty($this->contenthash)) {
            $this->dirty = true;
        }
    }

    public static function generate_content_hash($path) {
        if (!file_exists($path)) {
            // We don't want to throw any exception here, because mahara doesn't catch them properly.
            // Let's just return empty hash.
            return '';
        }

        return hash_file('sha256', $path);
    }

    public static function get_file_directory($id) {
        return "artefact/file/originals/" . ($id % 256);
    }

    public function get_path($data=array()) {
        if (!empty($this->externalfilesystem)) {
            return $this->externalfilesystem->get_path($this);
        }
        else {
            return $this->get_local_path($data);
        }
    }

    public function get_local_path($data = array(), $generateifpossible = true) {
        return get_config('dataroot') . self::get_file_directory($this->fileid) . '/' .  $this->fileid;
    }

    public function ensure_local() {
        if (!empty($this->externalfilesystem)) {
            $this->externalfilesystem->ensure_local($this);
        }
    }

    /**
     * Test file type and return a new Image or File.
     */
    public static function new_file($path, $data) {
        $data->contenthash = self::generate_content_hash($path);

        if (is_image_file($path)) {
            // If it's detected as an image, overwrite the browser mime type
            $imageinfo      = getimagesize($path);
            $data->filetype = $imageinfo['mime'];
            $data->width    = $imageinfo[0];
            $data->height   = $imageinfo[1];
            return new ArtefactTypeImage(0, $data);
        }

        $data->guess = file_mime_type($path, "foo.{$data->oldextension}");
        // The guessed mimetype tends to be more accurate than what the browser tells us.
        // Use the guess, unless it failed to find a match.
        // But if it failed to find a match *and* there is no browser-supplied mimetype,
        // then just use the guess.
        if ($data->guess != 'application/octet-stream' || empty($data->filetype)) {
            $data->filetype = $data->guess;
        }

        foreach (array('video', 'audio', 'archive') as $artefacttype) {
            $classname = 'ArtefactType' . ucfirst($artefacttype);
            if (call_user_func_array(array($classname, 'is_valid_file'), array($path, &$data))) {
                return new $classname(0, $data);
            }
        }

        return new ArtefactTypeFile(0, $data);
    }

    /**
     * Moves a file into the myfiles area.
     * Takes the name of a file outside the myfiles area.
     * Returns a boolean indicating success or failure.
     *
     * Note: this method is crappy because it returns false instead of throwing
     * exceptions. It's not used in many places, and should probably die in a
     * future version. So think twice before using it :)
     */
    public static function save_file($pathname, $data, User &$user=null, $outsidedataroot=false) {
        global $USER;

        $dataroot = get_config('dataroot');
        if (!$outsidedataroot) {
            $pathname = $dataroot . $pathname;
        }
        if (!file_exists($pathname) || !is_readable($pathname)) {
            return false;
        }
        $size = filesize($pathname);
        $f = self::new_file($pathname, $data);
        $f->set('size', $size);

        // if an extension has been provided (only from self::extract() at this stage), use it
        if (!empty($data->extension)) {
            $f->set('oldextension', $data->extension);
        }

        $f->commit();
        $id = $f->get('id');

        $newdir = $dataroot . self::get_file_directory($id);
        check_dir_exists($newdir);
        $newname = $newdir . '/' . $id;
        if (!rename($pathname, $newname)) {
            $f->delete();
            return false;
        }
        chmod($newname, get_config('filepermissions'));
        $owner = null;
        if ($user) {
            $owner = $user;
        }
        else if ($data->owner == $USER->get('id')) {
            $owner = $USER;
            $owner->quota_refresh();
        }
        else if (!empty($data->owner)) {
            $owner = new User;
            $owner->find_by_id($data->owner);
        }
        try {
            if ($owner) {
                $owner->quota_add($size);
                $owner->commit();
            }
            else if (!empty($data->group)) {
                require_once('group.php');
                group_quota_add($data->group, $size);
            }
            return $id;
        }
        catch (QuotaExceededException $e) {
            $f->delete();
            return false;
        }
    }


    /**
     * Processes a newly uploaded file, copies it to disk, and creates
     * a new artefact object.
     * Takes the name of a file input.
     * Returns false for no errors, or a string describing the error.
     */
    public static function save_uploaded_file($inputname, $data, $inputindex=null, $resized=false) {
        require_once('uploadmanager.php');
        $um = new upload_manager($inputname, false, $inputindex);
        if ($error = $um->preprocess_file()) {
            throw new UploadException($error);
        }
        if (isset($inputindex)) {
            if ($resized) {
                $um->file['size'][$inputindex] = filesize($um->file['tmp_name'][$inputindex]);
            }
            $size = $um->file['size'][$inputindex];
            $tmpname = $um->file['tmp_name'][$inputindex];
            $filetype = $um->file['type'][$inputindex];
        }
        else {
            if ($resized) {
                $um->file['size'] = filesize($um->file['tmp_name']);
            }
            $size = $um->file['size'];
            $tmpname = $um->file['tmp_name'];
            $filetype = $um->file['type'];
        }
        if (!empty($data->owner)) {
            global $USER;
            if ($data->owner == $USER->get('id')) {
                $owner = $USER;
                $owner->quota_refresh();
            }
            else {
                $owner = new User;
                $owner->find_by_id($data->owner);
            }
            if (!$owner->quota_allowed($size)) {
                throw new QuotaExceededException(get_string('uploadexceedsquota', 'artefact.file'));
            }
        }
        if (!empty($data->group)) {
            require_once('group.php');
            if (!group_quota_allowed($data->group, $size)) {
                throw new QuotaExceededException(get_string('uploadexceedsquotagroup', 'artefact.file'));
            }
        }
        $data->size = $size;
        $data->filetype = $filetype;
        $data->oldextension = $um->original_filename_extension();
        $f = self::new_file($tmpname, $data);
        $f->commit();
        $id = $f->get('id');
        // Save the file using its id as the filename, and use its id modulo
        // the number of subdirectories as the directory name.
        if ($error = $um->save_file(self::get_file_directory($id) , $id)) {
            $f->delete();
            throw new UploadException($error);
        }
        else if (isset($owner)) {
            $owner->quota_add($size);
            $owner->commit();
        }
        else if (!empty($data->group)) {
            group_quota_add($data->group, $size);
        }
        return $id;
    }


    // Return the title with the original extension appended to it if
    // it's not already there.
    public function download_title() {
        $extn = $this->get('oldextension');
        $name = $this->get('title');
        if (empty($extn) || substr($name, -1-strlen($extn)) == '.' . $extn) {
            return $name;
        }
        return $name . (substr($name, -1) == '.' ? '' : '.') . $extn;
    }

    public function render_self($options) {
        global $USER;

        require_once('license.php');
        $options['id'] = $this->get('id');

        $downloadpath = get_config('wwwroot') . 'artefact/file/download.php?file=' . $this->get('id');
        if (isset($options['viewid'])) {
            $downloadpath .= '&view=' . $options['viewid'];
        }
        $filetype = get_string($this->get('oldextension'), 'artefact.file');
        if (substr($filetype, 0, 2) == '[[') {
            $filetype = $this->get('oldextension') . ' ' . get_string('file', 'artefact.file');
        }

        $smarty = smarty_core();
        // $smarty->assign('iconpath', $this->get_icon($options));
        $smarty->assign('downloadpath', $downloadpath);
        $smarty->assign('filetype', $filetype);
        if ($USER->is_logged_in()) {
            $smarty->assign('ownername', $this->display_owner());
        }
        $smarty->assign('view', (isset($options['viewid']) ? $options['viewid'] : null));
        $smarty->assign('created', strftime(get_string('strftimedaydatetime'), $this->get('ctime')));
        $smarty->assign('modified', strftime(get_string('strftimedaydatetime'), $this->get('mtime')));
        $smarty->assign('size', $this->describe_size() . ' (' . $this->get('size') . ' ' . get_string('bytes', 'artefact.file') . ')');
        if (get_config('licensemetadata')) {
            $smarty->assign('license', render_license($this));
        }
        else {
            $smarty->assign('license', false);
        }

        foreach (array('title', 'description', 'artefacttype', 'owner', 'tags') as $field) {
            $smarty->assign($field, $this->get($field));
        }

        return array('html' => $smarty->fetch('artefact:file:file_render_self.tpl'), 'javascript' => '');
    }


    public static function get_admin_files($public) {
        $pubfolder = ArtefactTypeFolder::admin_public_folder_id();
        $artefacts = get_records_sql_assoc("
            SELECT
                a.id, a.title, a.parent, a.artefacttype
            FROM {artefact} a
                LEFT OUTER JOIN {artefact_file_files} f ON f.artefact = a.id
            WHERE a.institution = 'mahara'
            AND artefacttype NOT IN ('blog', 'blogpost')", array());

        $files = array();
        if (!empty($artefacts)) {
            foreach ($artefacts as $a) {
                if ($a->artefacttype != 'folder') {
                    $title = $a->title;
                    $parent = $a->parent;
                    while (!empty($parent)) {
                        if ($public && $parent == $pubfolder) {
                            $files[] = array('name' => $title, 'id' => $a->id);
                            continue 2;
                        }
                        $title = $artefacts[$parent]->title . '/' . $title;
                        $parent = $artefacts[$parent]->parent;
                    }
                    if (!$public) {
                        $files[] = array('name' => $title, 'id' => $a->id);
                    }
                }
            }
        }
        return $files;
    }

    public function delete() {
        if (empty($this->id)) {
            return;
        }
        $file = $this->get_path();

        if (is_file($file)) {
            $size = filesize($file);
            // Only delete the file on disk if no other artefacts point to it
            if (count_records('artefact_file_files', 'fileid', $this->get('id')) == 1) {
                if (!empty($this->externalfilesystem)) {
                    // We trust an external filesystem to do it.
                    $this->externalfilesystem->delete_file($this);
                }
                else {
                    unlink($file);
                }
            }
            global $USER;
            // Deleting other users' files won't lower their quotas yet...
            if (!$this->institution && $USER->id == $this->get('owner')) {
                $USER->quota_remove($size);
                $USER->commit();
            }
            if (!empty($this->group)) {
                require_once('group.php');
                group_quota_remove($this->group, $size);
            }
        }

        delete_records('artefact_attachment', 'attachment', $this->id);
        delete_records('artefact_file_files', 'artefact', $this->id);
        delete_records('site_menu', 'file', $this->id);
        parent::delete();
    }

    public static function bulk_delete($artefactids, $log=false) {
        global $USER;
        require_once('group.php');

        if (empty($artefactids)) {
            return;
        }

        $idstr = join(',', array_map('intval', $artefactids));

        db_begin();
        // Get the size of all the files we're about to delete that belong to
        // the user.
        if ($group = group_current_group()) {
            $totalsize = get_field_sql('
                SELECT SUM(size)
                FROM {artefact_file_files} f JOIN {artefact} a ON f.artefact = a.id
                WHERE a.group = ? AND f.artefact IN (' . $idstr . ')',
                array($group->id)
            );
        }
        else {
            $totalsize = get_field_sql('
                SELECT SUM(size)
                FROM {artefact_file_files} f JOIN {artefact} a ON f.artefact = a.id
                WHERE a.owner = ? AND f.artefact IN (' . $idstr . ')',
                array($USER->get('id'))
            );
        }

        // Get all files so that we can delete the files on filesystem
        $filerecords = get_records_sql_assoc('
            SELECT aff.*, art.artefacttype
            FROM {artefact_file_files} aff
            JOIN {artefact} art ON aff.artefact = art.id
            WHERE fileid IN (
                SELECT fileid
                FROM {artefact_file_files} aff1
                JOIN {artefact} a ON aff1.artefact = a.id
                WHERE artefact IN (' . $idstr . ')
                GROUP BY fileid
                HAVING COUNT(aff1.artefact) IN
                   (SELECT COUNT(aff2.artefact)
                    FROM {artefact_file_files} aff2
                    WHERE aff1.fileid = aff2.fileid)
            )'
        );

        // The current rule is that file deletion should be logged in the artefact_log table
        // only for group-owned files.  To save time we will be slightly naughty here and
        // log deletion for all these files if at least one is group-owned.
        $log = (bool) count_records_select('artefact', 'id IN (' . $idstr . ') AND "group" IS NOT NULL');

        delete_records_select('artefact_attachment', 'attachment IN (' . $idstr . ')');
        delete_records_select('artefact_file_files', 'artefact IN (' . $idstr . ')');
        parent::bulk_delete($artefactids, $log);

        $externalfilesystem = ArtefactTypeFileBase::get_external_filesystem_instance();

        if (!empty($filerecords)) {
            foreach ($filerecords as $filerecord) {
                if (!empty($externalfilesystem)) {
                    // We can't use artefact_instance_from_id() as we've removed all artefacts already
                    $classname = generate_artefact_class_name($filerecord->artefacttype);
                    $fileartefact = new $classname(0, $filerecord);
                    $externalfilesystem->delete_file($fileartefact);
                }
                else {
                    $file = get_config('dataroot') . self::get_file_directory($filerecord->fileid) . '/' . $filerecord->fileid;
                    if (is_file($file)) {
                        unlink($file);
                    }
                }
            }
        }

        if ($totalsize) {
            if ($group) {
                group_quota_remove($group->id, $totalsize);
            }
            else {
                $USER->quota_remove($totalsize);
                $USER->commit();
            }
        }
        db_commit();
    }

    public static function has_config() {
        return true;
    }

    public static function get_icon($options=null) {
        global $THEME;
        return false;
    }

    public static function get_config_options() {
        $elements = array();
        $defaultquota = get_config_plugin('artefact', 'file', 'defaultquota');
        if (empty($defaultquota)) {
            $defaultquota = 1024 * 1024 * 50;
        }
        $elements['userquotafieldset'] = array(
            'type' => 'fieldset',
            'legend' => get_string('defaultuserquota', 'artefact.file'),
            'elements' => array(
                'defaultquotadescription' => array(
                    'type' => 'html',
                    'value' => get_string('defaultquotadescription', 'artefact.file')
                ),
                'defaultquota' => array(
                    'title'        => get_string('defaultquota', 'artefact.file'),
                    'type'         => 'bytes',
                    'defaultvalue' => $defaultquota,
                ),
                'updateuserquotas' => array(
                    'title'        => get_string('updateuserquotas', 'artefact.file'),
                    'description'  => get_string('updateuserquotasdesc2', 'artefact.file'),
                    'type'         => 'switchbox',
                )
            ),
            'collapsible' => true,
            'collapsed' => true
        );

        $maxquota = get_config_plugin('artefact', 'file', 'maxquota');
        $maxquotaenabled = get_config_plugin('artefact', 'file', 'maxquotaenabled');
        if (empty($maxquota)) {
            $maxquota = 1024 * 1024 * 1024;
        }
        $elements['userquotafieldset']['elements']['maxquotaenabled'] = array(
            'type'         => 'switchbox',
            'title'        => get_string('maxquotaenabled', 'artefact.file'),
            'description'  => get_string('maxquotadescription', 'artefact.file'),
            'defaultvalue' => $maxquotaenabled,
        );
        $elements['userquotafieldset']['elements']['maxquota'] = array(
            'title'        => get_string('maxquota', 'artefact.file'),
            'type'         => 'bytes',
            'defaultvalue' => $maxquota,
        );

        $elements['userquotafieldset']['elements']['quotanotifylimit'] = array(
            'type'          => 'text',
            'size'          => 4,
            'title'         => get_string('quotanotifylimittitle1', 'artefact.file'),
            'description'   => get_string('quotanotifylimitdescr1', 'artefact.file'),
            'defaultvalue'  => get_config_plugin('artefact', 'file', 'quotanotifylimit'),
            'rules' => array(
                'required' => true,
                'integer'  => true,
            )
        );
        $elements['userquotafieldset']['elements']['quotanotifyadmin'] = array(
            'type'          => 'switchbox',
            'title'         => get_string('quotanotifyadmin1', 'artefact.file'),
            'description'   => get_string('quotanotifyadmindescr3', 'artefact.file'),
            'defaultvalue'  => get_config_plugin('artefact', 'file', 'quotanotifyadmin'),
        );

        $override = get_config_plugin('artefact', 'file', 'institutionaloverride');
        $elements['userquotafieldset']['elements']['institutionaloverride'] = array(
            'type'         => 'switchbox',
            'title'        => get_string('institutionoverride1', 'artefact.file'),
            'defaultvalue' => $override,
            'description'  => get_string('institutionoverridedescription2', 'artefact.file')
        );

        $defaultgroupquota = get_config_plugin('artefact', 'file', 'defaultgroupquota');
        if (empty($defaultgroupquota)) {
            $defaultgroupquota = 1024 * 1024 * 10;
        }
        $elements['groupquotafieldset'] = array(
            'type' => 'fieldset',
            'legend' => get_string('defaultgroupquota', 'artefact.file'),
            'elements' => array(
                'defaultgroupquotadescription' => array(
                    'value' => get_string('defaultgroupquotadescription', 'artefact.file')
                ),
                'defaultgroupquota' => array(
                    'title'        => get_string('defaultgroupquota', 'artefact.file'),
                    'type'         => 'bytes',
                    'class'        => 'form-inline',
                    'defaultvalue' => $defaultgroupquota,
                ),
                'updategroupquotas' => array(
                    'title'        => get_string('updategroupquotas', 'artefact.file'),
                    'description'  => get_string('updategroupquotasdesc2', 'artefact.file'),
                    'type'         => 'switchbox',
                )
            ),
            'collapsible' => true,
            'collapsed' => true
        );

        // Require user agreement before uploading files
        // Rework this when/if we provide translatable agreements
        $uploadagreement = get_config_plugin('artefact', 'file', 'uploadagreement');
        $usecustomagreement = get_config_plugin('artefact', 'file', 'usecustomagreement');
        $elements['uploadagreementfieldset'] = array(
            'type' => 'fieldset',
            'legend' => get_string('uploadagreement', 'artefact.file'),
            'elements' => array(
                'uploadagreementdescription' => array(
                    'value' => get_string('uploadagreementdescription', 'artefact.file')
                ),
                'uploadagreement' => array(
                    'title'        => get_string('requireagreement', 'artefact.file'),
                    'type'         => 'switchbox',
                    'defaultvalue' => $uploadagreement,
                ),
                'defaultagreement' => array(
                    'type'         => 'html',
                    'title'        => get_string('defaultagreement', 'artefact.file'),
                    'value'        => get_string('uploadcopyrightdefaultcontent', 'install'),
                ),
                'usecustomagreement' => array(
                    'title'        => get_string('usecustomagreement', 'artefact.file'),
                    'type'         => 'switchbox',
                    'defaultvalue' => $usecustomagreement,
                ),
                'customagreement' => array(
                    'name'         => 'customagreement',
                    'title'        => get_string('customagreement', 'artefact.file'),
                    'type'         => 'wysiwyg',
                    'rows'         => 10,
                    'cols'         => 80,
                    'defaultvalue' => get_field('site_content', 'content', 'name', 'uploadcopyright', 'institution', 'mahara'),
                    'rules'        => array('maxlength' => 65536),
                ),
            ),
            'collapsible' => true,
            'collapsed' => true
        );

        // Option to resize images on upload
        $resizeonuploadenable = get_config_plugin('artefact', 'file', 'resizeonuploadenable');
        $resizeonuploaduseroption = get_config_plugin('artefact', 'file', 'resizeonuploaduseroption');
        $currentmaxwidth = get_config_plugin('artefact', 'file', 'resizeonuploadmaxwidth');
        $currentmaxheight = get_config_plugin('artefact', 'file', 'resizeonuploadmaxheight');
        if (!isset($currentmaxwidth)) {
            $currentmaxwidth = get_config('imagemaxwidth');
        }
        if (!isset($currentmaxheight)) {
            $currentmaxheight = get_config('imagemaxheight');
        }

        $elements['resizeonuploadfieldset'] = array(
            'type' => 'fieldset',
            'legend' => get_string('resizeonupload', 'artefact.file'),
            'elements' => array(
                'resizeonuploaddescription' => array(
                    'type' => 'html',
                    'value' => get_string('resizeonuploaddescription', 'artefact.file'),
                ),
                'resizeonuploadenable' => array(
                    'type'         => 'switchbox',
                    'title'        => get_string('resizeonuploadenable1', 'artefact.file'),
                    'defaultvalue' => $resizeonuploadenable,
                    'description'  => get_string('resizeonuploadenabledescription3', 'artefact.file'),
                ),
                'resizeonuploaduseroption' => array(
                    'title'        => get_string('resizeonuploaduseroption1', 'artefact.file'),
                    'type'         => 'switchbox',
                    'defaultvalue' => $resizeonuploaduseroption,
                    'description'  => get_string('resizeonuploaduseroptiondescription3', 'artefact.file'),
                ),
                'resizeonuploadmaxwidth' => array(
                     'type' => 'text',
                     'size' => 4,
                     'suffix' => get_string('widthshort'),
                     'title' => get_string('resizeonuploadmaxwidth', 'artefact.file'),
                     'defaultvalue' => $currentmaxwidth,
                     'rules' => array(
                         'required' => true,
                         'integer'  => true,
                     )
                ),
                'resizeonuploadmaxheight' => array(
                    'type' => 'text',
                    'suffix' => get_string('heightshort'),
                    'size' => 4,
                    'title' => get_string('resizeonuploadmaxheight', 'artefact.file'),
                    'defaultvalue' => $currentmaxheight,
                    'rules' => array(
                        'required' => true,
                        'integer'  => true,
                    ),
                    'help' => true,
                ),
            ),
            'collapsible' => true,
            'collapsed' => true
        );

        // Profile icon size
        $currentwidth = get_config_plugin('artefact', 'file', 'profileiconwidth');
        $currentheight = get_config_plugin('artefact', 'file', 'profileiconheight');
        $elements['profileiconsize'] = array(
            'type' => 'fieldset',
            'legend' => get_string('profileiconsize', 'artefact.file'),
            'elements' => array(
                'profileiconwidth' => array(
                    'type' => 'text',
                    'size' => 4,
                    'suffix' => get_string('widthshort'),
                    'title' => get_string('width'),
                    'defaultvalue' => ((!empty($currentwidth)) ? $currentwidth : 100),
                    'rules' => array(
                        'required' => true,
                        'integer'  => true,
                    )
                ),
                'profileiconheight' => array(
                    'type' => 'text',
                    'suffix' => get_string('heightshort'),
                    'size' => 4,
                    'title' => get_string('height'),
                    'defaultvalue' => ((!empty($currentheight)) ? $currentheight : 100),
                    'rules' => array(
                        'required' => true,
                        'integer'  => true,
                    ),
                    'help' => true,
                ),
            ),
            'collapsible' => true,
            'collapsed' => true
        );

        $commentdefaults = array();
        foreach(PluginArtefactFile::get_artefact_types() as $at) {
            $commentdefaults[] = array(
                'title'        => get_string($at, 'artefact.file'),
                'value'        => $at,
                'defaultvalue' => get_config_plugin('artefact', 'file', 'commentsallowed' . $at),
            );
        }

        $elements['comments'] = array(
            'type'     => 'fieldset',
            'legend'   => get_string('Comments', 'artefact.comment'),
            'elements' => array(
                'commentdefault' => array(
                    'class'        => 'stacked',
                    'type'         => 'checkboxes',
                    'title'        => get_string('artefactdefaultpermissions', 'artefact.comment'),
                    'description'  => get_string('artefactdefaultpermissionsdescription', 'artefact.comment'),
                    'elements'     => $commentdefaults,
                ),
            ),
            'collapsible' => true,
            'collapsed' => true
        );

        $keepfor = get_config_plugin('artefact', 'file', 'folderdownloadkeepzipfor');

        $elements['folderdownloadzip'] = array(
            'type' => 'fieldset',
            'class' => 'last',
            'legend' => get_string('zipdownloadheading', 'artefact.file'),
            'elements' => array(
                'folderdownloadkeepzipfor' => array(
                    'type' => 'text',
                    'title' => get_string('keepzipfor', 'artefact.file'),
                    'description' => get_string('keepzipfordescription', 'artefact.file'),
                    'defaultvalue' => empty($keepfor) ? 3600 : $keepfor,
                    'size' => 4,
                    'rules' => array(
                        'required' => true,
                        'integer'  => true,
                    ),
                ),
            ),
            'collapsible' => true,
            'collapsed' => true
        );

        return array(
            'elements' => $elements,
            // Don't apply "panel panel-body" style to this form.
            'class' => null,
        );
    }

    public static function validate_config_options($form, $values) {
        global $USER;
        if ($values['maxquotaenabled'] && $values['maxquota'] < $values['defaultquota']) {
            $form->set_error('maxquota', get_string('maxquotatoolow', 'artefact.file'));
        }
        if (!is_numeric($values['quotanotifylimit']) || 0 > $values['quotanotifylimit'] || $values['quotanotifylimit'] > 100) {
            $form->set_error('quotanotifylimit', get_string('quotanotifylimitoutofbounds', 'artefact.file'));
        }
    }

    public static function save_config_options(Pieform $form, $values) {
        global $USER;
        $updatingquota = false;

        $oldquotalimit = get_config_plugin('artefact', 'file', 'quotanotifylimit');

        if ($values['updateuserquotas'] && $values['defaultquota']) {
            set_field('usr', 'quota', $values['defaultquota'], 'deleted', 0);
            $updatingquota = true;
        }
        if ($values['updategroupquotas'] && $values['defaultgroupquota']) {
            set_field('group', 'quota', $values['defaultgroupquota'], 'deleted', 0);
            // We need to alert group admins that the group may now be over the threshold that wasn't before
            $sqlwhere = " ((g.quotaused / g.quota) * 100) ";
            if (is_postgres()) {
                $sqlwhere = " ((CAST(g.quotaused AS float) / CAST(g.quota AS float)) * 100) ";
            }
            if ($groups = get_records_sql_assoc("SELECT g.id, g.name, g.quota, " . $sqlwhere . " AS quotausedpercent FROM {group} g WHERE " . $sqlwhere . " >= ?", array($values['quotanotifylimit']))) {
                ArtefactTypeFile::notify_groups_threshold_exceeded($groups);
            }
        }
        set_config_plugin('artefact', 'file', 'defaultquota', $values['defaultquota']);
        set_config_plugin('artefact', 'file', 'defaultgroupquota', $values['defaultgroupquota']);
        set_config_plugin('artefact', 'file', 'institutionaloverride', $values['institutionaloverride']);
        set_config_plugin('artefact', 'file', 'maxquota', $values['maxquota']);
        set_config_plugin('artefact', 'file', 'maxquotaenabled', $values['maxquotaenabled']);
        set_config_plugin('artefact', 'file', 'profileiconwidth', $values['profileiconwidth']);
        set_config_plugin('artefact', 'file', 'profileiconheight', $values['profileiconheight']);
        set_config_plugin('artefact', 'file', 'uploadagreement', $values['uploadagreement']);
        set_config_plugin('artefact', 'file', 'usecustomagreement', $values['usecustomagreement']);
        set_config_plugin('artefact', 'file', 'resizeonuploadenable', $values['resizeonuploadenable']);
        set_config_plugin('artefact', 'file', 'resizeonuploaduseroption', $values['resizeonuploaduseroption']);
        set_config_plugin('artefact', 'file', 'resizeonuploadmaxwidth', $values['resizeonuploadmaxwidth']);
        set_config_plugin('artefact', 'file', 'resizeonuploadmaxheight', $values['resizeonuploadmaxheight']);
        set_config_plugin('artefact', 'file', 'folderdownloadkeepzipfor', $values['folderdownloadkeepzipfor']);
        set_config_plugin('artefact', 'file', 'quotanotifylimit', $values['quotanotifylimit']);
        set_config_plugin('artefact', 'file', 'quotanotifyadmin', $values['quotanotifyadmin']);

        if (($oldquotalimit != $values['quotanotifylimit']) || $updatingquota) {
            // We need to alert anyone that may now be over the threshold that wasn't before
            $sqlwhere = " ((u.quotaused / u.quota) * 100) ";
            if (is_postgres()) {
                $sqlwhere = " ((CAST(u.quotaused AS float) / CAST(u.quota AS float)) * 100) ";
            }
            if ($users = get_records_sql_assoc("SELECT u.id, u.quota, " . $sqlwhere . " AS quotausedpercent FROM {usr} u WHERE " . $sqlwhere . " >= ?", array($values['quotanotifylimit']))) {
                $notifyadmin = get_config_plugin('artefact', 'file', 'quotanotifyadmin');
                ArtefactTypeFile::notify_users_threshold_exceeded($users, $notifyadmin);
            }
            else if ($users = get_records_sql_assoc("SELECT * FROM {usr} u, {usr_account_preference} uap WHERE " . $sqlwhere . " < ? AND uap.usr = u.id AND uap.field = ? AND uap.value = ?", array($values['quotanotifylimit'], 'quota_exceeded_notified', '1'))) {
                foreach ($users as $user) {
                    set_account_preference($user->id, 'quota_exceeded_notified', false);
                }
            }
        }
        $data = new stdClass();
        $data->name    = 'uploadcopyright';
        $data->content = $values['customagreement'];
        $data->mtime   = db_format_timestamp(time());
        $data->mauthor = $USER->get('id');
        $data->institution = 'mahara';
        if (record_exists('site_content', 'name', $data->name, 'institution', $data->institution)) {
            update_record('site_content', $data, array('name', 'institution'));
        }
        else {
            $data->ctime = db_format_timestamp(time());
            insert_record('site_content', $data);
        }
        foreach(PluginArtefactFile::get_artefact_types() as $at) {
            set_config_plugin('artefact', 'file', 'commentsallowed' . $at, (int) in_array($at, $values['commentdefault']));
        }
    }

    /**
     * Notify users if their quota is above the quota threshold.
     * And notify admins if required as well
     *
     * @param $users         array of user objects - the $user object needs to include a quotausedpercent
     *                       that is set by: (quotaused / quota) * 100
     * @param $notifyadmins  bool
     */
    function notify_users_threshold_exceeded($users, $notifyadmins = false) {
        // if we have just been given a $user object
        if (is_object($users)) {
            $users[] = $users;
        }
        require_once(get_config('docroot') . 'lib/activity.php');
        safe_require('notification', 'internal');
        foreach ($users as $user) {
            // check that they have not already been notified about being over the limit
            if (!get_record('usr_account_preference','usr', $user->id, 'field', 'quota_exceeded_notified', 'value', '1')) {
                $data = array(
                    'subject' => get_string('usernotificationsubject', 'artefact.file'),
                    'message' => get_string('usernotificationmessage', 'artefact.file', ceil((int)$user->quotausedpercent), display_size($user->quota)),
                    'users' => array($user->id),
                    'type' => 1,
                );
                $activity = new ActivityTypeMaharamessage($data);
                $activity->notify_users();

                // notify admins
                if ($notifyadmins) {
                    $data = array(
                        'subject'   => get_string('adm_notificationsubject', 'artefact.file'),
                        'message'   => get_string('adm_notificationmessage', 'artefact.file', display_name($user) , ceil((int)$user->quotausedpercent), display_size($user->quota)),
                        'users'     => get_column('usr', 'id', 'admin', 1),
                        'url'       => 'admin/users/edit.php?id=' . $user->id,
                        'urltext'   => get_string('textlinktouser', 'artefact.file', display_name($user)),
                        'type'      => 1,
                    );
                    $activity = new ActivityTypeMaharamessage($data);
                    $activity->notify_users();
                }
                set_account_preference($user->id, 'quota_exceeded_notified', true);
            }
        }
    }

    /**
     * Notify group admins if the group quota is above the quota threshold.
     *
     * @param $groups        array of group objects - the $group object needs to include a quotausedpercent
     *                       that is set by: (quotaused / quota) * 100
     */
    function notify_groups_threshold_exceeded($groups) {
        // if we have just been given a $group object
        if (is_object($groups)) {
            $groups[] = $groups;
        }
        require_once(get_config('docroot') . 'lib/activity.php');
        safe_require('notification', 'internal');
        foreach ($groups as $group) {
            // find the group admins and notify them - there should be at least 1 admin for a group
            if ($admins = group_get_admin_ids($group->id)) {
                $data = array(
                    'subject'   => get_string('adm_group_notificationsubject', 'artefact.file'),
                    'message'   => get_string('adm_group_notificationmessage', 'artefact.file', $group->name, ceil((int)$group->quotausedpercent), display_size($group->quota)),
                    'users'     => $admins,
                    'url'       => 'artefact/file/groupfiles.php?group=' . $group->id,
                    'urltext'   => get_string('textlinktouser', 'artefact.file', $group->name),
                    'type'      => 1,
                );
                $activity = new ActivityTypeMaharamessage($data);
                $activity->notify_users();
            }
        }
    }

    public static function short_size($bytes, $abbr=false) {
        if ($bytes < 1024) {
            return $bytes <= 0 ? '0' : ($bytes . ($abbr ? 'b' : (' ' . get_string('bytes', 'artefact.file'))));
        }
        if ($bytes < 1048576) {
            return floor(($bytes / 1024) * 10 + 0.5) / 10 . 'K';
        }
        return floor(($bytes / 1048576) * 10 + 0.5) / 10 . 'M';
    }

    public function describe_size() {
        return ArtefactTypeFile::short_size($this->get('size'));
    }

    public static function get_links($id) {
        $wwwroot = get_config('wwwroot');

        return array(
            '_default' => $wwwroot . 'artefact/file/download.php?file=' . $id,
            get_string('folder', 'artefact.file') => $wwwroot . 'artefact/file/index.php?folder=' . $id,
        );
    }

    public function override_content_type() {
        static $extensions;
        if (empty($extensions)) {
            $extensions = array(
                'wmv' => 'video/x-ms-wmv',
                'flv' => 'video/x-flv',
            );
        }
        if (array_key_exists($this->get('oldextension'), $extensions)) {
            return $extensions[$this->get('oldextension')];
        }
        return false;
    }

    public static function get_quota_usage($artefact) {
        return get_field('artefact_file_files', 'size', 'artefact', $artefact);
    }

    public function copy_extra($new) {
        global $USER;
        if ($new->get('owner') && $new->get('owner') == $USER->get('id')) {
            // TODO test what happens when quota is exceeded!
            $USER->quota_add($new->get('size'));
            $USER->commit();
        }
    }

    // Only changes to group files get put in the artefact_log table
    public function can_be_logged() {
        return (bool) $this->get('group');
    }

    public static function is_countable_progressbar() {
        return true;
    }

    public static function get_title_progressbar() {
        return get_string('anytypeoffile','artefact.file');
    }

    /**
     * For the progress bar, this one is a metaartefact. Its progress should be based
     * on how many of *any* file type has been uploaded.
     * @return boolean
     */
    public static function is_metaartefact() {
        return true;
    }
}

class ArtefactTypeFolder extends ArtefactTypeFileBase {

    public function __construct($id = 0, $data = null) {

        parent::__construct($id, $data);

        if (empty($this->id)) {
            $this->container = 1;
            $this->size = null;
        }

    }

    /**
     * This function checks if a folder artefact can be deleted
     */
    public function can_be_deleted() {
        if ($this->get('locked')) {
            return false;
        }
        // Check if its children files and sub-folders can be deleted or not
        if ($childrecords = $this->folder_contents()) {
            foreach ($childrecords as $child) {
                $c = artefact_instance_from_id($child->id);
                if (!$c->can_be_deleted()) {
                    return false;
                }
            }
        }
        return true;
    }

    public function delete() {
        // ArtefactType::delete() deletes all the child artefacts one by one.
        // If the folder contains a lot of artefacts, it's too slow to do this
        // but for very small directories it seems to be slightly faster.
        $descendants = artefact_get_descendants(array($this->id));
        if (count($descendants) < 10) {
            parent::delete();
        }
        else {
            ArtefactType::delete_by_artefacttype($descendants);
        }
    }

    public function folder_contents() {
        return get_records_array('artefact', 'parent', $this->get('id'));
    }

    public function render_self($options) {
        $smarty = smarty_core();
        $smarty->assign('title', $this->get('title'));
        $smarty->assign('description', $this->get('description'));
        $smarty->assign('tags', $this->get('tags'));
        $smarty->assign('owner', $this->get('owner'));
        $smarty->assign('viewid', isset($options['viewid']) ? $options['viewid'] : 0);
        $smarty->assign('simpledisplay', isset($options['simpledisplay']) ? $options['simpledisplay'] : false);
        $smarty->assign('folderid', $this->get('id'));
        $smarty->assign('downloadfolderzip', get_config_plugin('blocktype', 'folder', 'folderdownloadzip') ? !empty($options['folderdownloadzip']) : false);

        $childrecords = false;
        if (!empty($options['existing_artefacts'])) {
            $childrecords = get_records_sql_array("SELECT * FROM {artefact} WHERE id IN (" . join(',', (array)$options['existing_artefacts']) . ")");
        }
        else {
            $childrecords = $this->folder_contents();
        }

        if ($childrecords) {
            $sortorder = (isset($options['sortorder']) && $options['sortorder'] == 'desc') ? 'my_files_cmp_desc' : 'my_files_cmp';
            usort($childrecords, array('ArtefactTypeFileBase', $sortorder));
            $children = array();
            foreach ($childrecords as &$child) {
                $c = artefact_instance_from_id($child->id);
                $child->title = $child->hovertitle = $c->get('title');
                $child->date = format_date(strtotime($child->mtime), 'strftimedaydatetime');
                $child->iconsrc = call_static_method(generate_artefact_class_name($child->artefacttype), 'get_icon', array('id' => $child->id, 'viewid' => isset($options['viewid']) ? $options['viewid'] : 0));
            }
            $smarty->assign('children', $childrecords);
        }
        return array('html' => $smarty->fetch('artefact:file:folder_render_self.tpl'),
                     'javascript' => null);
    }

    public function describe_size() {
        return $this->count_children() . ' ' . get_string('files', 'artefact.file');
    }

    public static function get_icon($options=null) {
        global $THEME;
        return false;
    }

    public static function collapse_config() {
        return 'file';
    }

    public static function admin_public_folder_id() {
        // There is one public files directory and many admins, so the
        // name of the directory uses the site language rather than
        // the language of the admin who first creates it.
        $name = get_string_from_language(get_config('lang'), 'adminpublicdirname', 'admin');
        $folders = get_records_select_array(
            'artefact',
            'title = ? AND artefacttype = ? AND institution = ? AND parent IS NULL',
            array($name, 'folder', 'mahara'),
            'id', 'id', 0, 1
        );
        if (!$folders) {
            $description = get_string_from_language(get_config('lang'), 'adminpublicdirdescription', 'admin');
            $data = (object) array('title' => $name,
                                   'description' => $description,
                                   'institution' => 'mahara');
            $f = new ArtefactTypeFolder(0, $data);
            $f->commit();
            $folderid = $f->get('id');
            return $folderid;
        }
        return $folders[0]->id;
    }

    public static function change_public_folder_name($oldlang, $newlang) {
        $oldname = get_string_from_language($oldlang, 'adminpublicdirname', 'admin');
        $folders = get_records_select_array(
            'artefact',
            'title = ? AND artefacttype = ? AND institution = ? AND parent IS NULL',
            array($oldname, 'folder', 'mahara'),
            'id', 'id', 0, 1
        );
        if (!$folders) {
            return;
        }
        $folderid = $folders[0]->id;
        $name = get_string_from_language($newlang, 'adminpublicdirname', 'admin');
        $description = get_string_from_language($newlang, 'adminpublicdirdescription', 'admin');
        if (!empty($name)) {
            $artefact = artefact_instance_from_id($folderid);
            $artefact->set('title', $name);
            $artefact->set('description', $description);
            $artefact->commit();
        }
    }

    /**
     * Retrieves info from the artefact table about the folder with the given
     * name, in the specified directory, owned by the specified
     * user/group/institution.
     *
     * @param string $name        The name of the folder to search for
     * @param int $parentfolderid The ID of the parent folder in which to look.
     * @param int $userid         The ID of the user who owns the folder
     * @param int $groupid        The ID of the group who owns the folder
     * @param string $institution The name of the institution who owns the folder
     * @param array $artefactstoignore A list of IDs to not consider as the given folder. See {@link default_parent_for_copy()}
     */
    public static function get_folder_by_name($name, $parentfolderid=null, $userid=null, $groupid=null, $institution=null, $artefactstoignore=array()) {
        $parentclause = ($parentfolderid && is_int($parentfolderid)) ? 'parent = ' . $parentfolderid : 'parent IS NULL';
        $ownerclause = artefact_owner_sql($userid, $groupid, $institution);
        $ignoreclause = $artefactstoignore ? ' AND id NOT IN(' . implode(', ', array_map('db_quote', $artefactstoignore)) . ')' : '';
        $records = get_records_sql_array('
           SELECT * FROM {artefact}
           WHERE title = ? AND ' . $parentclause . ' AND ' . $ownerclause . "
           AND artefacttype = 'folder'" . $ignoreclause,
           array($name), 0, 1
        );
        return $records ? $records[0] : false;
    }

    /**
     * Get the id of a folder, creating the folder if necessary
     *
     * @param string $name        The name of the folder to search for
     * @param string $description The description for the folder, should a new folder need creating
     * @param int $parentfolderid The ID of the parent folder in which to look.
     * @param boolean $create     Whether to create a new folder if one isn't found
     * @param int $userid         The ID of the user who owns the folder
     * @param int $groupid        The ID of the group who owns the folder
     * @param string $institution The name of the institution who owns the folder
     * @param array $artefactstoignore A list of IDs to not consider as the given folder. See {@link default_parent_for_copy()}
     */
    public static function get_folder_id($name, $description, $parentfolderid=null, $create=true, $userid=null, $groupid=null, $institution=null, $artefactstoignore=array()) {
        if (!$record = self::get_folder_by_name($name, $parentfolderid, $userid, $groupid, $institution, $artefactstoignore)) {
            if (!$create) {
                return false;
            }
            $data = new stdClass();
            $data->title = $name;
            $data->description = $description;
            $data->owner = $userid;
            $data->group = $groupid;
            $data->institution = $institution;
            $data->parent = $parentfolderid;
            $f = new ArtefactTypeFolder(0, $data);
            $f->commit();
            return $f->get('id');
        }
        return $record->id;
    }

    // append the view id to to the end of image and anchor urls so they are visible to logged out users also
    public static function append_view_url($postcontent, $view_id) {
        $postcontent = preg_replace('#(<a[^>]+href="(/|' . get_config('wwwroot') . ')artefact/file/download\.php\?file=\d+)#', '\1&amp;view=' . $view_id , $postcontent);
        $postcontent = preg_replace('#(<img[^>]+src="(/|' . get_config('wwwroot') . ')artefact/file/download\.php\?file=\d+)#', '\1&amp;view=' . $view_id, $postcontent);

        // Find images inside <a> tags and temporarily draft them out of the
        // content. This is so we can link up unlinked images to open to
        // download.php.
        //
        // This is a hack really - will probably need refinement/replacement
        // later (if only we could do this with HTMLPurifier!)
        $marker = '<aPONY>';
        $matches = array();
        $imginsidea = '#(<a[^>]+><img[^>]+></a>)#';
        preg_match_all($imginsidea, $postcontent, $matches);
        $postcontent = preg_replace($imginsidea, $marker, $postcontent);

        $postcontent = preg_replace('#(<img[^>]+src="([^>]+artefact/file/download\.php\?file=\d+&amp;view=\d+)"[^>]*>)#', '<a href="\2">\1</a>', $postcontent);

        // Now put the <a><img>s we drafted out back in again
        $i = 0;
        $count = count($matches[1]);
        while (false !== ($pos = strpos($postcontent, $marker)) && $i < $count) {
            $postcontent = substr($postcontent, 0, $pos) . $matches[1][$i] . substr($postcontent, $pos + strlen($marker));
            $i++;
        }

        return $postcontent;
    }

    public static function get_links($id) {
        $wwwroot = get_config('wwwroot');

        return array(
            '_default' => $wwwroot . 'artefact/file/index.php?folder=' . $id,
        );
    }

    public static function change_language($userid, $oldlang, $newlang) {
        $oldname = get_string_from_language($oldlang, 'feedbackattachdirname', 'view');
        $artefact = ArtefactTypeFolder::get_folder_by_name($oldname, null, $userid);
        if (empty($artefact)) {
            return;
        }

        $name = get_string_from_language($newlang, 'feedbackattachdirname', 'view');
        $description = get_string_from_language($newlang, 'feedbackattachdirdesc', 'view');
        if (!empty($name)) {
            $artefact = artefact_instance_from_id($artefact->id);
            $artefact->set('title', $name);
            $artefact->set('description', $description);
            $artefact->commit();
        }
    }

    public static function is_countable_progressbar() {
        return true;
    }
}

class ArtefactTypeImage extends ArtefactTypeFile {

    protected $width;
    protected $height;
    protected $orientation;

    public function __construct($id = 0, $data = null) {
        parent::__construct($id, $data);

        if ($this->id && ($filedata = get_record('artefact_file_image', 'artefact', $this->id))) {
            foreach($filedata as $name => $value) {
                if (property_exists($this, $name)) {
                    $this->{$name} = $value;
                }
            }
        }

    }

    /**
     * This function updates or inserts the artefact.  This involves putting
     * some data in the artefact table (handled by parent::commit()), and then
     * some data in the artefact_file_image table.
     */
    public function commit() {
        // Just forget the whole thing when we're clean.
        if (empty($this->dirty)) {
            return;
        }

        // We need to keep track of newness before and after.
        $new = empty($this->id);

        // Commit to the artefact table.
        parent::commit();

        // Reset dirtyness for the time being.
        $this->dirty = true;

        $data = (object)array(
            'artefact'      => $this->get('id'),
            'width'         => $this->get('width'),
            'height'        => $this->get('height'),
            'orientation'   => $this->get('orientation')
        );

        if ($new) {
            insert_record('artefact_file_image', $data);
        }
        else {
            update_record('artefact_file_image', $data, 'artefact');
        }

        $this->dirty = false;
    }

    public static function collapse_config() {
        return 'file';
   }

    public static function get_icon($options=null) {
        $url = get_config('wwwroot') . 'artefact/file/download.php?';
        $url .= 'file=' . $options['id'];

        if (isset($options['viewid'])) {
            $url .= '&view=' . $options['viewid'];
        }
        if (isset($options['size'])) {
            $url .= '&size=' . $options['size'];
        }
        else {
            $url .= '&maxheight=24&maxwidth=24';
        }

        return $url;
    }

    public function get_local_path($data=array(), $generateifpossible = true) {
        require_once('file.php');
        $result = get_dataroot_image_path('artefact/file/', $this->fileid, $data, $this->orientation, $generateifpossible);
        return $result;
    }

    public function delete() {
        if (empty($this->id)) {
            return;
        }
        delete_records('artefact_file_image', 'artefact', $this->id);
        parent::delete();
    }

    public static function bulk_delete($artefactids, $log=false) {
        if (empty($artefactids)) {
            return;
        }
        db_begin();
        delete_records_select('artefact_file_image', 'artefact IN (' . join(',', array_map('intval', $artefactids)) . ')');
        parent::bulk_delete($artefactids);
        db_commit();
    }

    public function render_self($options) {
        $downloadpath = get_config('wwwroot') . 'artefact/file/download.php?file=' . $this->id;
        $url = get_config('wwwroot') . 'artefact/artefact.php?artefact=' . $this->id;
        if (isset($options['viewid'])) {
            $downloadpath .= '&view=' . $options['viewid'];
            $url .= '&view=' . $options['viewid'];
        }
        $metadataurl = $url . '&details=1';
        if (empty($options['metadata'])) {
            $smarty = smarty_core();
            $smarty->assign('id', $this->id);
            $smarty->assign('title', $this->get('title'));
            $smarty->assign('description', $this->get('description'));
            $smarty->assign('downloadpath', $downloadpath);
            $smarty->assign('metadataurl', $metadataurl);
            return array('html' => $smarty->fetch('artefact:file:image_render_self.tpl'), 'javascript' => '');
        }
        $result = parent::render_self($options);
        // $result['html'] = '<div class="fl filedata-icon"><h4 class="title">'
        //     . get_string('Preview', 'artefact.file') . '</h4><a href="'
        //     . hsc($downloadpath) . '"><img src="' . hsc($downloadpath) . '&maxwidth=400&maxheight=180'
        //     . '" alt=""></a></div>' . $result['html'];
        return $result;
    }

    public static function get_title_progressbar() {
        return get_string('image','artefact.file');
    }

    public static function is_metaartefact() {
        return false;
    }
}

class ArtefactTypeProfileIcon extends ArtefactTypeImage {

    public function delete() {
        global $USER;
        parent::delete();
        if ($USER->get('profileicon') == $this->id) {
            $USER->profileicon = null;
            $USER->commit();
        }
    }

    public static function bulk_delete($artefactids, $log=false) {
        global $USER;
        parent::bulk_delete($artefactids);
        if (in_array($USER->get('profileicon'), $artefactids)) {
            $USER->profileicon = null;
            $USER->commit();
        }
    }

    public static function get_links($id) {
        $wwwroot = get_config('wwwroot');

        return array(
            '_default' => $wwwroot . 'artefact/file/profileicons.php',
        );
    }

    public static function get_icon($options=null) {
        $url = get_config('wwwroot') . 'thumb.php?type=profileiconbyid&id=' . hsc($options['id']);

        if (isset($options['viewid'])) {
            $url .= '&view=' . $options['viewid'];
        }
        if (isset($options['size'])) {
            $url .= '&size=' . $options['size'];
        }
        else {
            $url .= '&size=20x20';
        }

        return $url;
    }

    public function get_local_path($data=array(), $generateifpossible = true) {
        require_once('file.php');
        $result = get_dataroot_image_path('artefact/file/profileicons/', $this->fileid, $data, $this->orientation, $generateifpossible);
        return $result;
    }

    public function in_view_list() {
        return true;
    }

    public function default_parent_for_copy(&$view, &$template, $artefactstoignore) {
        return null;
    }

    public static function get_title_progressbar() {
        return get_string('profileicon','artefact.file');
    }

    /**
     * Render's the icon thumbnail for the specified user
     */
    public static function download_thumbnail_for_user($userid) {
        global $THEME;

        $size = get_imagesize_parameters();
        $earlyexpiry = param_boolean('earlyexpiry', false);

        // Convert ID of user to the ID of a profileicon
        $data = get_record_sql('
            SELECT u.profileicon, u.email, f.filetype
            FROM {usr} u LEFT JOIN {artefact_file_files} f ON u.profileicon = f.artefact
            WHERE u.id = ?',
            array($userid)
        );

        // User has a profile icon file selected. Use it.
        if (!empty($data) && !empty($data->profileicon)) {
            $id = $data->profileicon;
            $mimetype = $data->filetype;

            // Try to print the specified icon
            static::download_thumbnail($id);
            exit();
        }

        // No profile icon file selected. Go through fallback icons.
        // Look for an appropriate image on gravatar.com if not 'root' user
        $useremail = (!empty($data) && $userid !== 0) ? $data->email : false;
        if ($useremail and $gravatarurl = remote_avatar_url($useremail, $size)) {
            redirect($gravatarurl);
        }

        // We couldn't find an image for this user. Attempt to use the 'no user
        // photo' image for the current theme

        if (!get_config('nocache')) {
            // We can cache such images
            $maxage = 604800; // 1 week
            if ($earlyexpiry) {
                $maxage = 600; // 10 minutes
            }
            header('Expires: '. gmdate('D, d M Y H:i:s', time() + $maxage) .' GMT');
            header('Cache-Control: max-age=' . $maxage);
            header('Pragma: public');
        }

        if ($path = get_dataroot_image_path('artefact/file/profileicons/no_userphoto/' . $THEME->basename, 0, $size)) {
            header('Content-type: ' . 'image/png');
            readfile($path);
            perf_to_log();
            exit;
        }

        // If we couldn't find the no user photo picture, we put it into
        // dataroot if we can
        $nouserphotopic = $THEME->get_path('images/no_userphoto.png');
        if ($nouserphotopic) {
            // Move the file into the correct place.
            $directory = get_config('dataroot') . 'artefact/file/profileicons/no_userphoto/' . $THEME->basename . '/originals/0/';
            check_dir_exists($directory);
            copy($nouserphotopic, $directory . '0');
            // Now we can try and get the image in the correct size
            if ($path = get_dataroot_image_path('artefact/file/profileicons/no_userphoto/' . $THEME->basename, 0, $size)) {
                header('Content-type: ' . 'image/png');
                readfile($path);
                perf_to_log();
                exit;
            }
        }

        // Emergency fallback
        header('Content-type: ' . 'image/png');
        readfile($THEME->get_path('images/no_userphoto.png'));
        perf_to_log();
        exit;
    }

    /**
     * Render's the icon's thumbnail and exits
     */
    public static function download_thumbnail($artefactid, $type=null) {
        global $USER;
        $id = $artefactid;
        $size = get_imagesize_parameters();
        $earlyexpiry = param_boolean('earlyexpiry', false);

        $mimetype = get_field('artefact_file_files', 'filetype', 'artefact', $id);

        if ($id && $fileid = get_field('artefact_file_files', 'fileid', 'artefact', $id)) {
            $orientation = get_field('artefact_file_image', 'orientation', 'artefact', $id);
            // Check that the profile icon is allowed to be seen
            // Any profileiconbyid file that has been set as a user's default icon is ok
            // But icons that are not should only be seen by their owner
            // Unless that owner places them in a view that the user can see
            if (!get_field('usr', 'id', 'profileicon', $id)) {
                $viewid = param_integer('view', 0);
                $ok = false;
                if ($viewid) {
                    $ok = artefact_in_view($id, $viewid);
                }
                if (!$ok) {
                    if (
                        ($USER && !$USER->is_logged_in()) ||
                        ($USER->is_logged_in() && $USER->get('id') != get_field('artefact', 'owner', 'id', $id))
                       ) {
                        exit;
                    }
                }
            }
            if ($path = get_dataroot_image_path('artefact/file/profileicons', $fileid, $size, $orientation)) {
                if ($mimetype) {
                    header('Content-type: ' . $mimetype);

                    if (!get_config('nocache')) {
                        // We can't cache 'profileicon' for as long, because the
                        // user can change it at any time. But we can cache
                        // 'profileiconbyid' for quite a while, because it will
                        // never change
                        if ($type == 'profileiconbyid' and !$earlyexpiry) {
                            $maxage = 604800; // 1 week
                        }
                        else {
                            $maxage = 600; // 10 minutes
                        }
                        header('Expires: '. gmdate('D, d M Y H:i:s', time() + $maxage) .' GMT');
                        header('Cache-Control: max-age=' . $maxage);
                        header('Pragma: public');
                    }

                    readfile($path);
                    perf_to_log();
                    exit;
                }
            }
            else {
                // If we can't find the profile icon by id (deleted off server) then show the one
                // for nonexistant user, defaults to no_userphoto
                self::download_thumbnail_for_user(-1);
            }
        }
    }

    public static function save_uploaded_file($inputname, $data, $inputindex=null, $resized=false) {
        global $USER;

        require_once('uploadmanager.php');

        $um = new upload_manager('file');

        if ($error = $um->preprocess_file()) {
            throw new UploadException($error);
        }

        $USER->quota_add($um->file['size']);

        $imageinfo = getimagesize($inputname);
        $data->parent = ArtefactTypeFolder::get_folder_id(get_string('imagesdir', 'artefact.file'), get_string('imagesdirdesc', 'artefact.file'), null, true, $USER->id);
        $data->title = $data->title ? $data->title : $um->file['name'];
        $data->title = ArtefactTypeFileBase::get_new_file_title($data->title, (int)$data->parent, $USER->id);  // unique title
        $data->owner = $USER->id;
        $data->width = $imageinfo[0];
        $data->height = $imageinfo[1];
        $data->filetype = $imageinfo['mime'];
        $data->description = get_string('uploadedprofileicon', 'artefact.file');
        $data->contenthash = parent::generate_content_hash($inputname);
        $data->size = $um->file['size'];
        $data->note = $um->file['name'];
        $data->oldextension = $um->original_filename_extension();

        $artefact = new ArtefactTypeProfileIcon(0, $data);
        $artefact->commit();

        $id = $artefact->get('id');

        // Move the file into the correct place.
        $directory = get_config('dataroot') . 'artefact/file/profileicons/originals/' . ($id % 256) . '/';
        check_dir_exists($directory);
        move_uploaded_file($inputname, $directory . $id);

        $USER->commit();
    }
}

class ArtefactTypeArchive extends ArtefactTypeFile {

    protected $archivetype;
    protected $handle = null;   // Handle for the temporary archive file
    protected $info;
    protected $data = array();
    protected $temparchivepathlength = 0;  // The length of the phar path to the temporary archive

    public function __construct($id = 0, $data = null) {
        parent::__construct($id, $data);

        if ($this->id) {
            $descriptions = self::archive_file_descriptions();
            $validtypes = self::archive_mime_types();
            $this->archivetype = $descriptions[$validtypes[$this->filetype]->description];
        }
    }

    public static function is_valid_file($path, $data) {
        $descriptions = self::archive_file_descriptions();
        $validtypes = self::archive_mime_types();
        if (!isset($validtypes[$data->filetype])) {
            return false;
        }

        $type = $descriptions[$validtypes[$data->filetype]->description];

        // Add tmp extension
        $path = self::copy_to_temp($path);
        if ($path === false) {
            return false;
        }
        try {
            $archive_obj = new PharData($path);
        }
        catch (UnexpectedValueException $e) {
            $path = self::delete_from_temp($path);
            return false;
        }

        $is_valid = false;
        if (is_null($type)) {
            if ($archive_obj->isFileFormat(Phar::ZIP)) {
                $data->filetype = 'application/zip';
                $data->archivetype = 'zip';
                $is_valid = true;
            }
            if ($archive_obj->isFileFormat(Phar::TAR)) {
                switch ($archive_obj->isCompressed()) {
                    case Phar::GZ: $data->filetype = 'application/x-gzip';
                    case Phar::BZ2: $data->filetype = 'application/x-bzip2';
                    default: $data->filetype = 'application/x-tar';
                }
                $data->archivetype = 'tar';
                $is_valid = true;
            }
        }
        else if ($type == 'zip' && ($archive_obj->isFileFormat(Phar::ZIP))
                || $type == 'tar' && ($archive_obj->isFileFormat(Phar::TAR))) {
            $data->archivetype = $type;
            $is_valid = true;
        }

        // Remove the temporary after validate the archive file
        self::delete_from_temp($path);

        return $is_valid;
    }

    public static function archive_file_descriptions() {
        $descriptions = array('tar' => 'tar', 'gz' => 'tar', 'tgz' => 'tar', 'bz2' => 'tar');
        if (function_exists('zip_open')) {
            $descriptions['zip'] = 'zip';
        }
        return $descriptions;
    }

    public static function archive_mime_types() {
        static $mimetypes = null;
        if (is_null($mimetypes)) {
            $descriptions = self::archive_file_descriptions();
            $mimetypes = PluginArtefactFile::get_mimetypes_from_description(array_keys($descriptions), true);
        }
        return $mimetypes;
    }

    public static function get_icon($options=null) {
        global $THEME;
        return false;
    }

    /**
     * Copy the archive file to the system temporary directory
     * and add .tmp to a file name and return the new filename
     * This is a workaround for read and extract a zip/tar file using PharData
     *
     * THIS FUNCTION MUST BE PAIRED WITH delete_from_temp()
     *
     * @param String $path: path to the archive file
     * @return String new path
     * @throws SystemException if can not copy
     */
    public static function copy_to_temp($path) {
        $tempdir = get_config('dataroot') . 'artefact/file/temp';
        check_dir_exists($tempdir);
        $name = tempnam($tempdir, '');
        unlink($name);
        $name .= '.tmp';
        if (file_exists($path)
            && copy($path, $name)) {
            return $name;
        }
        else {
            throw new SystemException(get_string('cannotcopytemparchive', 'artefact/file', $path, $name));
        }
    }

    /**
     * Delete the temporary archive
     * @param String $path: path to the temporary file
     * @return void
     * @throws SystemException if can not delete
     */
    public static function delete_from_temp($path) {
        if (file_exists($path)
            && unlink($path)) {
            return;
        }
        else {
            throw new SystemException(get_string('cannotdeletetemparchive', 'artefact/file', $path));
        }
    }

    public function set_archive_info($zipinfo) {
        $this->info = $zipinfo;
    }

    /**
     * Recursively read the content of an archive
     * and update $this->info
     *
     * @param string $dir
     *      = null : read the content of $this->handle
     * @throws ArchiveException
     */
    private function read_archive_folder($dir=null) {
        if ($this->temparchivepathlength === 0) {
            throw new ArchiveException(get_string('invalidtemparchivepathlength', 'artefact.file'));
        }
        try {
            if (!isset($dir) && !empty($this->handle)) {
                $a = $this->handle;
            }
            else if (isset($dir)) {
                $a = new PharData($dir, RecursiveDirectoryIterator::KEY_AS_PATHNAME);
            }
            else {
                throw new Exception(get_string('invalidarchivehandle', 'artefact.file'));
            }
            foreach ($a as $i) {
                $name = substr($i->getPathName(), $this->temparchivepathlength + 1);
                if ($i->isDir()) {
                    $this->info->foldernames[$name] = 1;
                    $this->info->names[] = $name;
                    $this->info->folders++;

                    $this->read_archive_folder($i->getPathName());
                }
                else {
                    $this->info->names[] = $name;
                    $this->info->files++;
                    $this->info->totalsize += $i->getCompressedSize();
                }
            }
        }
        catch (Exception $e) {
            throw new ArchiveException(get_string('cannotreadarchivecontent', 'artefact.file') . $e->getMessage());
        }
    }

    /**
     * Read the archive content from a temporary archive file
     * and update $this->info
     *
     * @param Bool $keeptemphandle = true: the temporary file and handle
     *                                      will NOT be deleted for later use
     * @return Object archive info
     * @throws ArchiveException
     */
    public function read_archive($keeptemphandle=false) {
        // In mahara all physical file is stored without extension.
        // For some reasons, PharData can not properly read a file without extension
        // We create a temporary file with an extension 'tmp' from the original archive
        // We will delete the file after read/extract actions
        $tmparchivepath = self::copy_to_temp($this->get_path());
        try {
            $this->handle = new PharData($tmparchivepath, RecursiveDirectoryIterator::KEY_AS_PATHNAME);
            $this->temparchivepathlength = strlen('phar://' . $tmparchivepath);
        }
        catch (UnexpectedValueException $e) {
            self::delete_from_temp($tmparchivepath);
            throw new ArchiveException(get_string('cannotopenarchive', 'artefact.file', $tmparchivepath));
        }
        if (empty($this->info)) {
            $this->info = (object) array(
                'files'     => 0,
                'folders'   => 0,
                'totalsize' => 0,
                'names'     => array(),
                'foldernames' => array()
            );

            $this->read_archive_folder();
        }

        if (!$keeptemphandle) {
            // Delete the temporary file
            self::delete_from_temp($tmparchivepath);
            $this->handle = null;
            $this->temparchivepathlength = 0;
        }

        $this->info->displaysize = ArtefactTypeFile::short_size($this->info->totalsize);
        return $this->info;
    }

    public function unzip_directory_name() {
        if (isset($this->data['unzipdir'])) {
            return $this->data['unzipdir'];
        }
        $folderdata = ArtefactTypeFileBase::artefactchooser_folder_data($this);
        $parent = $this->get('parent');
        $strpath = ArtefactTypeFileBase::get_full_path($parent, $folderdata->data);
        $extn = $this->get('oldextension');
        $name = $this->get('title');
        if (substr($name, -1-strlen($extn)) == '.' . $extn) {
            $name = substr($name, 0, strlen($name)-1-strlen($extn));
        }
        $name = ArtefactTypeFileBase::get_new_file_title($name, $parent, $this->get('owner'), $this->get('group'), $this->get('institution'));
        $this->data['unzipdir'] = array('basename' => $name, 'fullname' => $strpath . $name);
        return $this->data['unzipdir'];
    }

    public function create_base_folder() {
        $foldername = $this->unzip_directory_name();
        $foldername = $foldername['basename'];

        $data = (object) array(
            'owner' => $this->get('owner'),
            'group' => $this->get('group'),
            'institution' => $this->get('institution'),
            'title' => $foldername,
            'description' => get_string('filesextractedfromarchive', 'artefact.file'),
            'parent' => $this->get('parent'),
        );
        $basefolder = new ArtefactTypeFolder(0, $data);
        $basefolder->commit();
        return $basefolder->get('id');
    }

    public function create_folder($folder) {
        $newfolder = new ArtefactTypeFolder(0, $this->data['template']);
        $newfolder->commit();
        $this->data['folderids'][$folder] = $newfolder->get('id');
        $this->data['folderscreated']++;
    }

    public function extract($progresscallback=null) {
        global $USER;

        $quotauser = $this->owner ? $USER : null;

        $this->data['basefolderid'] = $this->create_base_folder();
        $this->data['folderids'] = array('.' => $this->data['basefolderid']);
        $this->data['folderscreated'] = 1;
        $this->data['filescreated'] = 0;
        $this->data['template'] = (object) array(
            'owner' => $this->get('owner'),
            'group' => $this->get('group'),
            'institution' => $this->get('institution'),
        );

        $tempdir = get_config('dataroot') . 'artefact/file/temp';
        check_dir_exists($tempdir);

        $this->read_archive($keeptemphandle=true);

        // This is a workaround to extract correctly files in an archive using PharData
        foreach ($this->info->names as $name) {
            if (empty($this->info->foldernames[$name])) {
                file_get_contents($this->handle[$name], null, null, 0, 0);
            }
        }

        // Untar everything into a temp directory first
        $tempsubdir = tempnam($tempdir, '');
        unlink($tempsubdir);
        mkdir($tempsubdir, get_config('directorypermissions'));
        if (!$this->handle->extractTo($tempsubdir)) {
            throw new ArchiveException(get_string('cannotextractarchive', 'artefact.file', $tempsubdir));
        }

        if (!$keeptemphandle) {
            // Delete the temporary file
            self::delete_from_temp($tmparchivepath);
            $this->handle = null;
            $this->temparchivepathlength = 0;
        }

        // Store extracted folders and files into mahara
        $i = 0;
        foreach ($this->info->names as $name) {
            $this->data['template']->parent = $this->data['folderids'][dirname($name)];
            $this->data['template']->title = basename($name);

            // set the file extension for later use (eg by flowplayer)
            $this->data['template']->extension = pathinfo($this->data['template']->title, PATHINFO_EXTENSION);
            $this->data['template']->oldextension = $this->data['template']->extension;

            if (!empty($this->info->foldernames[$name])) {
                $this->create_folder($name);
            }
            else {
                ArtefactTypeFile::save_file($tempsubdir . '/' . $name, $this->data['template'], $quotauser, true);
                $this->data['filescreated']++;
            }

            if ($progresscallback && ++$i % 5 == 0) {
                call_user_func($progresscallback, $i);
            }
        }

        return $this->data;
    }

    public static function get_title_progressbar() {
        return get_string('archive','artefact.file');
    }

    public static function is_metaartefact() {
        return false;
    }
}

class ArtefactTypeVideo extends ArtefactTypeFile {

    protected $videotype;

    public function __construct($id = 0, $data = null) {
        parent::__construct($id, $data);

        if ($this->id) {
            $descriptions = self::video_file_descriptions();
            $validtypes = self::video_mime_types();
            $this->videotype = $descriptions[$validtypes[$this->filetype]->description];
        }
    }

    public static function is_valid_file($path, $data) {
        $validtypes = self::video_mime_types();
        if (isset($validtypes[$data->guess])) {
            $data->filetype = $data->guess;
            return true;
        }
        else if (!empty($validtypes[$data->filetype])) {
            return true;
        }
        return false;
    }

    public static function video_file_descriptions() {
        static $descriptions = null;
        if (is_null($descriptions)) {
            $descriptions = array(
                'flv'       => 'flv',
                'avi'       => 'avi',
                'mpeg'      => 'mpeg',
                'wmv'       => 'wmv',
                'quicktime' => 'quicktime',
                'sgi_movie' => 'sgi_movie',
                'asf'       => 'wmv',
                'ogv'       => 'ogv',
                'mp4'       => 'mp4',
                '3gp'       => '3gp',
                'webm'      => 'webm',
            );
        }
        return $descriptions;
    }

    public static function video_mime_types() {
        static $mimetypes = null;
        if (is_null($mimetypes)) {
            $descriptions = self::video_file_descriptions();
            $mimetypes = PluginArtefactFile::get_mimetypes_from_description(array_keys($descriptions), true);
        }
        return $mimetypes;
    }

    public static function get_icon($options=null) {
        global $THEME;
        return false;
    }

    public static function get_title_progressbar() {
        return get_string('video','artefact.file');
    }

    public static function is_metaartefact() {
        return false;
    }
}

class ArtefactTypeAudio extends ArtefactTypeFile {

    public static function is_valid_file($path, $data) {
        $validtypes = self::audio_mime_types();
        if (isset($validtypes[$data->guess])) {
            $data->filetype = $data->guess;
            return true;
        }
        else if (!empty($validtypes[$data->filetype])) {
            return true;
        }
        return false;
    }

    public static function audio_file_descriptions() {
        static $descriptions = null;
        if (is_null($descriptions)) {
            $descriptions = array(
                'mp3',
                'mp4',
                'wav',
                'ra',
                'au',
                'aiff',
                'm3u',
                'asf',
                'oga',
                'ogg',
            );
        }
        return $descriptions;
    }

    public static function audio_mime_types() {
        static $mimetypes = null;
        if (is_null($mimetypes)) {
            $descriptions = self::audio_file_descriptions();
            $mimetypes = PluginArtefactFile::get_mimetypes_from_description($descriptions, true);
        }
        return $mimetypes;
    }

    public static function get_icon($options=null) {
        global $THEME;
        return false;
    }

    public static function get_title_progressbar() {
        return ucfirst(get_string('audio','artefact.file'));
    }

    public static function is_metaartefact() {
        return false;
    }
}
