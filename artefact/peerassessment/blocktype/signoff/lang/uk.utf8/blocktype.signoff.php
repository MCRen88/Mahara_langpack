<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-signoff
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string ['title'] = 'Вихід';
$string ['description'] = 'Блок для відображення параметрів виходу та перевірки сторінок';
$string ['placeholder'] = 'Вміст цього блоку відображається під заголовком сторінки, а не в самому блоці на сторінці.';
$string ['signoff'] = 'Вийти';
$string ['signoffdesc'] = 'Власник портфеля може підписати сторінку, коли всі вимоги були виконані, щоб вказати, що він готовий до оцінки.';

$string ['verify'] = 'Підтвердити';
$string ['verifydesc'] = 'Вирішіть, чи повинен модератор перевірити цю сторінку як частину процесу оцінки портфеля.';
$string ['signatureoff'] = 'Вимкнено';
$string ['verified'] = 'Перевірено';
$string ['signoffpagetitle'] = 'Вийти зі сторінки';
$string ['signoffpagedesc'] = 'Виберіть "Так", щоб підписати цю сторінку і вказати, що ви виконали всі вимоги. Виберіть "Ні", щоб перервати. ';
$string ['signoffpageundodesc'] = 'Якщо ви виберете "Так", ви вилучите стан підписання. Це також призведе до усунення перевірки, якщо це було частиною процесу оцінювання. Виберіть "Ні", щоб перервати. ';
$string ['signoffpageconfirm'] = 'Підтвердити цю дію?';

$string ['verifypagetitle'] = 'Перевірка сторінки';
$string ['verifypagedesc'] = 'Виберіть "Так", щоб переконатися, що власник портфеля виконав усі вимоги до цієї сторінки. Виберіть "Ні", щоб повернутися до сторінки без її підтвердження. ';

$string ['updatesignoff'] = 'Оновити вилучення сторінки';
$string ['updateverify'] = 'Оновити сторінку перевірки';
$string ['removedverifynotificationsubject'] = 'Перевірка %s видалена';
$string ['removedverifynotification'] = 'Власник сторінки %s видаляє їхню реєстрацію. Тому вашу перевірку також було видалено. Перейдіть на сторінку, щоб дізнатися, чи готовий він бути позначений як підтверджений знову. ';
$string ['signoffviewupdated'] = 'Оновлення статусу виходу';
$string ['verifyviewupdated'] = 'Статус перевірки оновлено';
$string ['wrongsignoffviewrequest'] = 'У вас немає дозволу на виконання запитаної дії';