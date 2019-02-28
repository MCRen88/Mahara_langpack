<?php
/**
 *
 * @package    mahara
 * @subpackage lang/behat
 * @author     Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

// струни lang для behat
$string ['errorbehatcommand'] = 'Помилка під час запуску команди Behat CLI. Спробуйте запустити "{$a} --help" вручну від CLI, щоб більше дізнатися про проблему.';
$string ['errorcomposer'] = 'Залежності Composer не встановлено.';
$string ['errordataroot'] = '$CFG->behat_dataroot не встановлено або недійсний.';
$string ['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_dbprefix та $CFG->behat_wwwroot повинні бути встановлені в config.php.';
$string ['erroruniqueconfig'] = 'Значення $CFG->behat_dataroot, $CFG->behat_dbprefix та $CFG->behat_wwwroot повинні відрізнятися від значень $CFG->dataroot, $CFG->dbprefix, $ CFG->wwwroot, $CFG->phpunit_dataroot та $CFG->phpunit_prefix. ';