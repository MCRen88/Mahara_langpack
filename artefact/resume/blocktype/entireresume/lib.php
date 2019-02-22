<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-entireresume
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

class PluginBlocktypeEntireresume extends MaharaCoreBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.resume/entireresume');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.resume/entireresume');
    }

    public static function get_categories() {
        return array('internal' => 29000);
    }

    public static function get_blocktype_type_content_types() {
        return array('entireresume' => array('resume'));
    }

    public static function render_instance(BlockInstance $instance, $editing=false, $versioning=false) {
        require_once(get_config('docroot') . 'artefact/lib.php');
        $smarty = smarty_core();
        // Get data about the resume fields the user has
        if ($artefacts = get_records_sql_array('
            SELECT va.artefact, a.artefacttype
            FROM {view_artefact} va
            INNER JOIN {artefact} a ON (va.artefact = a.id)
            WHERE va.view = ?
            AND va.block = ?', array($instance->get('view'), $instance->get('id')))) {
            foreach ($artefacts as $artefact) {
                $resumefield = $instance->get_artefact_instance($artefact->artefact);
                $rendered = $resumefield->render_self(array('viewid' => $instance->get('view')));
                $result = $rendered['html'];
                if (!empty($rendered['javascript'])) {
                    $result .= '<script type="application/javascript">' . $rendered['javascript'] . '</script>';
                }
                $smarty->assign($artefact->artefacttype, $result);
            }
        }
        else {
            $smarty->assign('editing', $editing);
            $smarty->assign('noresume', get_string('noresumeselectone', 'blocktype.resume/entireresume'));
        }
        return $smarty->fetch('blocktype:entireresume:content.tpl');
    }

    public static function has_instance_config() {
        return true;
    }

    public static function instance_config_form(BlockInstance $instance) {
        $owner = $instance->get_view()->get('owner');
        if ($owner) {
            $elements = array(
                'tags'  => array(
                    'type'         => 'tags',
                    'title'        => get_string('tags'),
                    'description'  => get_string('tagsdescblock'),
                    'defaultvalue' => $instance->get('tags'),
                    'help'         => false,
                )
            );
        }
        else {
            $elements['blocktemplatehtml'] = array(
                'type' => 'html',
                'value' => get_string('blockinstanceconfigownerauto', 'mahara'),
            );
            $elements['blocktemplate'] = array(
                'type'    => 'hidden',
                'value'   => 1,
            );
        }
        return $elements;
    }

    public static function artefactchooser_element($default=null) {
    }

    /**
     * Subscribe to the blockinstancecommit event to make sure all artefacts
     * that should be in the blockinstance are
     */
    public static function get_event_subscriptions() {
        return array(
            (object)array(
                'event'        => 'blockinstancecommit',
                'callfunction' => 'ensure_resume_artefacts_in_blockinstance',
            ),
        );
    }

    /**
     * Hook for making sure that all resume artefacts are associated with a
     * blockinstance at blockinstance commit time
     */
    public static function ensure_resume_artefacts_in_blockinstance($event, $blockinstance) {
        if ($blockinstance->get('blocktype') == 'entireresume') {
            safe_require('artefact', 'resume');
            $artefacttypes = implode(', ', array_map('db_quote', PluginArtefactResume::get_artefact_types()));

            // Get all artefacts that are resume related and belong to the correct owner
            $artefacts = get_records_sql_array('
                SELECT id
                FROM {artefact}
                WHERE artefacttype IN(' . $artefacttypes . ')
                AND "owner" = (
                    SELECT "owner"
                    FROM {view}
                    WHERE id = ?
                )', array($blockinstance->get('view')));

            if ($artefacts) {
                // Make sure they're registered as being in this view
                foreach ($artefacts as $artefact) {
                    $record = (object)array(
                        'view' => $blockinstance->get('view'),
                        'artefact' => $artefact->id,
                        'block' => $blockinstance->get('id'),
                    );
                    ensure_record_exists('view_artefact', $record, $record);
                }
            }
        }
    }

    public static function get_artefacts(BlockInstance $instance) {
        $configdata = $instance->get('configdata');
        $return = array();
        safe_require('artefact', 'resume');
        $artefacttypes = implode(', ', array_map('db_quote', PluginArtefactResume::get_artefact_types()));
        // Get all artefacts that are resume related and belong to the correct owner
        if ($artefacts = get_records_sql_array('
                SELECT id
                FROM {artefact}
                WHERE artefacttype IN(' . $artefacttypes . ')
                AND "owner" = (
                    SELECT "owner"
                    FROM {view}
                    WHERE id = ?
                )', array($instance->get('view')))) {
            foreach ($artefacts as $artefact) {
                $return[] = $artefact->id;
            }
        }
        return $return;
    }

    public static function default_copy_type() {
        return 'shallow';
    }

    /**
     * Entireresume blocktype is only allowed in personal views, because
     * there's no such thing as group/site resumes
     */
    public static function allowed_in_view(View $view) {
        return true;
    }

}
