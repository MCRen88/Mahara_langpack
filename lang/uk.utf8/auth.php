<?php
/**
 *
 * @package    mahara
 * @subpackage lang
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

// IMAP
$string['host'] = 'Ім\'я хосту або адреса';
$string['wwwroot'] = 'WWW root';
$string['protocol'] = 'Протокол';
$string['port'] = 'Порт';
$string['changepasswordurl'] = 'Password-change URL';
$string['cannotremove']  = "Ми не можемо видалити цей плагін ідентифікації, оскільки він є єдиним \nмодулем, що існує для цього закладу.";
$string['cannotremoveinuse']  = "Ми не можемо видалити цей плагін ідентифікації, оскільки його використовують деякі користувачі.\nПотрібно оновити свої записи, перш ніж видалити цей плагін.";
$string['saveinstitutiondetailsfirst'] = 'Будь ласка, збережіть деталі закладу перед налаштуванням плагіну ідентифікації.';

$string['editauthority'] = 'Редагувати сферу компетенції';
$string['addauthority']  = 'Додати сферу компетенції';

$string['updateuserinfoonlogin'] = 'Оновити інформацію про користувача під час входу';
$string['updateuserinfoonlogindescription'] = 'Отримати інформацію про користувача з віддаленого сервера та оновити свій локальний запис користувача кожного разу, коли користувач входить до системи.';
$string['xmlrpcserverurl'] = 'URL-адреса сервера XML-RPC';
$string['ipaddress'] = 'IP-адреса';
$string['shortname'] = 'Коротка назва вашого сайту';
$string['name'] = 'Назва сайту';
$string['nodataforinstance'] = 'Не вдалося знайти дані для екземпляра ідентифікації.';
$string['authname'] = 'Назва сфери компетенції';
$string['weautocreateusers'] = 'Ми автоматично створюємо користувачів';
$string['theyautocreateusers'] = 'Вони автоматично створюють користувачів';
$string['parent'] = 'Батьківська сфера компетенції';
$string['wessoout'] = 'We SSO out';
$string['weimportcontent'] = 'Ми імпортуємо контент';
$string['weimportcontentdescription'] = '(лише деякі додатки)';
$string['theyssoin'] = 'They SSO in';
$string['authloginmsg2'] = "Якщо ви не вибрали батьківську сферу компетенції, введіть повідомлення для показу у формі входу користувача до системи.";
$string['authloginmsgnoparent'] = "Введіть повідомлення для показу у формі входу користувача до системи.";
$string['application'] = 'Додаток';
$string['cantretrievekey'] = 'Сталася помилка під час отримання відкритого ключа з віддаленого сервера.<br>Переконайтеся, що кореневі поля Application і WWW коректні і що мережа включена на віддаленому хості.';
$string['ssodirection'] = 'SSO direction';
$string['active'] = 'Активний';

$string['errorcertificateinvalidwwwroot'] = 'Цей сертифікат призначений для %s, але ви намагаєтеся використовувати його для %s.';
$string['errorcouldnotgeneratenewsslkey'] = 'Не вдалося створити новий ключ SSL. Ви впевнені, що на цьому комп\'ютері встановлено openssl і модуль PHP для openssl? ';
$string['errnoauthinstances']   = 'Ми не маємо жодного плагіна ідентифікації, налаштованого для хосту %s.';
$string['errornotvalidsslcertificate'] = 'Це не є дійсним сертифікатом SSL.';
$string['errnoxmlrpcinstances'] = 'Ми, здається, не маємо будь-якого плагіна ідентифікації XML-RPC, налаштованого для хосту %s.';
$string['errnoxmlrpcwwwroot']   = 'Ми не маємо запису для будь-якого хосту %s.';
$string['errnoxmlrpcuser1']      = "Наразі ми не змогли автентифікувати вас. Можливі причини:

    * Ваш сеанс SSO можливо закінчився. Скористайтеся іншим застосунком та натисніть посилання, щоб знову увійти до %s.
    * Можливо, вам не дозволено SSO до %s. Будь ласка, зверніться до свого адміністратора, якщо ви думаєте, що вам буде дозволено.";

$string['toomanytries'] = 'Ви перевищили максимальну кількість спроб входу. Цей обліковий запис заблоковано на 5 хвилин.';
$string['unabletosigninviasso'] = 'Не вдається ввійти через SSO.';
$string['xmlrpccouldnotlogyouin'] = 'Вибачте, ми не змогли ввійти до вас.';
$string['xmlrpccouldnotlogyouindetail1'] = 'На жаль, ми не змогли ввійти до %s в цей час. Повторіть спробу ще раз. Якщо проблема не зникає, зверніться до адміністратора.';

$string['requiredfields'] = 'Обов\'язкові поля профайлу';
$string['requiredfieldsset'] = 'Встановити обов\'язкові поля профайлу';
$string['primaryemaildescription'] = 'Основна адреса електронної пошти. Ви отримаєте повідомлення електронної пошти, що містить посилання. Перейдіть за цим посиланням, щоб підтвердити адресу та увійти до системи.';
$string['validationprimaryemailsent'] = 'Надіслано повідомлення-підтвердження електронної пошти. Натисніть посилання, щоб перевірити адресу.';
$string['noauthpluginconfigoptions'] = 'Відсутні налаштування конфігурації які пов\'язані з цим плагіном.';

$string['hostwwwrootinuse'] = 'WWW root вже використовується іншим закладом (%s).';

// Error messages for external authentication usernames
$string['duplicateremoteusername'] = 'Це зовнішнє ідентифікаційне ім\'я входу користувача вже використовується користувачем %s. Зовнішні імена ідентифікації користувачів повинні бути унікальними в межах способу ідентифікації.';
$string['duplicateremoteusernameformerror'] = 'Імена користувачів зовнішньої ідентифікації повинні бути унікальними в межах способу ідентифікації.';
$string['cannotjumpasmasqueradeduser'] = 'Ви не можете перейти до іншого додатку під час маскування у якості іншого користувача.';

// Shared warning messages.
$string['warninstitutionregistration'] = '$cfg-> usersuniquebyusername увімкнено, але реєстрація доступна для закладу. З міркувань безпеки всі заклади повинні бути вимкненими у «Дозволах реєстрації». Щоб налаштувати це через веб-інтерфейс потрібно тимчасово встановити $cfg->usersuniquebyusername=false. ';
$string['warninstitutionregistrationinstitutions'] = array(
    0 => "Наступний заклад має включену реєстрацію:\n  %2\$s",
    1 => "Наступні заклади мають реєстрацію:\n  %2\$s",
);
$string['warnmultiinstitutionsoff'] = '$cfg->usersuniquebyusername увімкнено, але опція сайту «Користувачам дозволено декілька закладів» вимкнена. Це не має сенсу, оскільки користувачі змінюватимуть заклад кожного разу, коли вони входитимуть з іншого місця. Будь ласка, увімкніть цю опцію в Адміністрування -> Налаштування сайту -> Налаштування закладу.';
