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
$string ['host'] = 'Ім"я хосту або адреса';
$string ['wwwroot'] = 'Корень WWW';
$string ['protocol'] = 'Протокол';
$string ['port'] = 'Порт';
$string ['changepasswordurl'] = 'URL-адреса зміни пароля';
$string ['cannotremove'] = 'Ми не можемо видалити цей модуль аутентифікації, оскільки він є єдиним модулем, що існує для цієї станови.';
$string ['cannotremoveinuse'] = 'Ми не можемо видалити цей плагін автентифікації, оскільки його використовують деякі користувачі';
$string ['saveinstitutiondetailsfirst'] = 'Будь ласка, збережіть деталі установи перед налаштуванням модулів аутентифікації.';

$string ['editauthority'] = 'Редагувати повноваження';
$string ['addauthority'] = 'Додати авторизацію';

$string ['updateuserinfoonlogin'] = 'Оновити інформацію про користувача під час входу';
$string ['updateuserinfoonlogindescription'] = 'Отримати інформацію про користувача з віддаленого сервера та оновити свій локальний запис користувача кожного разу, коли користувач входить в систему.';
$string ['xmlrpcserverurl'] = 'URL-адреса сервера XML-RPC';
$string ['ipaddress'] = 'IP-адреса';
$string ['shortname'] = 'Коротка назва вашого сайту';
$string ['name'] = 'Назва сайту';
$string ['nodataforinstance'] = 'Не вдалося знайти дані для екземпляра автентифікації';
$string ['authname'] = 'Ім"я авторитету';
$string ['weautocreateusers'] = 'Ми автоматично створюємо користувачів';
$string ['theyautocreateusers'] = 'Вони автоматично створюють користувачів';
$string ['parent'] = 'Головний орган';
$string ['wessoout'] = 'Вимкнено SSO';
$string ['weimportcontent'] = 'Імпортуємо контент';
$string ['weimportcontentdescription'] = '(лише деякі програми)';
$string ['theyssoin'] = 'Вони у SSO';
$string ['authloginmsg2'] = 'Якщо ви не вибрали батьківський орган, введіть повідомлення для відображення, коли користувач намагається увійти через форму для входу.';
$string ['authloginmsgnoparent'] = 'Введіть повідомлення для відображення, коли користувач намагається увійти через форму для входу.';
$string ['application'] = 'Додаток';
$string ['cantretrievekey'] = 'Сталася помилка при отриманні відкритого ключа з віддаленого сервера. <br> Переконайтеся, що кореневі поля Application і WWW коректні і що мережа включена на віддаленому хості.';
$string ['ssodirection'] = 'Напрямок SSO';
$string ['active'] = 'Активний';

$string ['errorcertificateinvalidwwwroot'] = 'Цей сертифікат претендує на %s, але ви намагаєтеся використовувати його для %s.';
$string ['errorcouldnotgeneratenewsslkey'] = 'Не вдалося створити новий ключ SSL. Ви впевнені, що на цьому комп"ютері встановлено і openssl, і модуль PHP для openssl? ';
$string ['errnoauthinstances'] = 'Ми не маємо жодного примірника додатків для аутентифікації, налаштованого для хосту в %s.';
$string ['errornotvalidsslcertificate'] = 'Це не є дійсним сертифікатом SSL.';
$string ['errnoxmlrpcinstances'] = 'Нам не здається, що примірники аутентифікації XML-RPC налаштовані для хосту в %s.';
$string ['errnoxmlrpcwwwroot'] = 'Ми не маємо запису для будь-якого хосту в %s.';
$string ['errnoxmlrpcuser1'] = 'Зараз ми не змогли перевірити автентичність. Можливі причини:

    * Ваш сеанс SSO може закінчитися. Поверніться до іншої програми та натисніть посилання, щоб знову увійти до %s.
    * Можливо, вам не дозволено SSO до %s. Будь ласка, зверніться до свого адміністратора, якщо ви вважаєте, що вам буде дозволено. ';

$string ['toomanytries'] = 'Ви перевищили максимальні спроби входу. Цей обліковий запис заблоковано до 5 хвилин. ';
$string ['unabletosigninviasso'] = 'Не вдається ввійти через SSO.';
$string ['xmlrpccouldnotlogyouin'] = 'Вибачте, ми не змогли ввійти до вас.';
$string ['xmlrpccouldnotlogyouindetail1'] = 'На жаль, ми не змогли ввійти до %s в цей час. Повторіть спробу ще раз. Якщо проблема не зникає, зверніться до адміністратора. ';

$string ['requiredfields'] = 'Поля обов"язкових профілів';
$string ['requiredfieldsset'] = 'Необхідні поля профілю';
$string ['primaryemaildescription'] = 'Основна адреса електронної пошти. Ви отримаєте повідомлення електронної пошти, що містить посилання на посилання, - слідуйте за цим, щоб підтвердити адресу та увійти до системи ';
$string ['validationprimaryemailsent'] = 'Надіслано повідомлення електронної пошти перевірки. Натисніть посилання, щоб перевірити адресу';
$string ['noauthpluginconfigoptions'] = 'Немає параметрів конфігурації, пов"язаних з цим плагіном.';

$string ['hostwwwrootinuse'] = 'Корень WWW, який вже використовується іншою установою (%s).';

// Повідомлення про помилки для зовнішніх імен користувачів
$string ['duplicateremoteusername'] = 'Це зовнішнє ідентифікаційне ім"я користувача вже використовується користувачем %s. Зовнішні імена користувачів автентифікації повинні бути унікальними в межах способу аутентифікації. ';
$string ['duplicateremoteusernameformerror'] = 'Імена користувачів зовнішньої аутентифікації повинні бути унікальними в межах способу аутентифікації.';
$string ['cannotjumpasmasqueradeduser'] = 'Ви не можете переходити до іншої програми під час маскування як іншого користувача.';

// Спільні попереджувальні повідомлення.
$string ['warninstitutionregistration'] = '$ cfg-> usersuniquebyusername увімкнено, але реєстрація допускається для установи. За секундуПричини, за яких всі установи повинні мати \ t Щоб налаштувати це через веб-інтерфейс, потрібно тимчасово встановити $ cfg-> usersuniquebyusername = false. ';
$string ['warninstitutionregistrationinstitutions'] = array(
	0 => "Наступна установа має включену реєстрацію: n%2s ",
	1 => "Включено наступні установи: n%2s ",
);
$string ['warnmultiinstitutionsoff'] = '$ cfg-> usersuniquebyusername увімкнено, але параметр сайту "Користувачі дозволено декільком установам" вимкнено. Це не має сенсу, оскільки користувачі змінюватимуть установу кожного разу, коли вони входитимуть з іншого місця. Будь ласка, увімкніть цю настройку в Адміністрації -> Налаштувати сайт -> Установки установи. ';