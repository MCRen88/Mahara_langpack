<?php
/**
 *
 * @package    mahara
 * @subpackage auth-internal
 * @author     Piers Harding <piers@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string ['attributemapfilenotamap'] = 'Файл мапи атрибутів "% s" не визначив карту атрибутів.';
$string ['attributemapfilenotfound'] = 'Не вдалося знайти файл мапи атрибутів або його не можна записати:% s';
$string ['certificate1'] = 'Сертифікат підпису та шифрування постачальника послуг SAML';
$string ['confirmdeleteidp'] = 'Ви впевнені, що хочете видалити цього постачальника посвідчень?';
$string ['spmetadata'] = 'Метадані постачальника послуг';
$string ['metadatavewlink'] = '<a href="%s"> Переглянути метадані </a>';
$string ['ssphpnotconfigured'] = 'SimpleSAMLPHP не налаштовано.';
$string ['manage_certificate2'] = 'Це сертифікат, створений як частина постачальника послуг SAML.';
$string ['nullprivatecert'] = "Неможливо створити або зберегти закритий ключ";
$string ['nullpubliccert'] = "Неможливо створити або зберегти загальнодоступний сертифікат";
$string ['defaultinstitution'] = 'За замовчуванням установа';
$string ['description'] = 'Перевірка автентичності на службу SAML 2.0 Identity Provider';
$string ['disco'] = 'Виявлення провайдера ідентичності';
$string ['errorbadinstitution'] = 'Установа для підключення користувача не вирішена';
$string ['errorbadssphp'] = 'Неправильний обробник сеансу SimpleSAMLphp: не повинен бути phpsession';
$string ['errorbadssphpmetadata'] = 'Неправильна конфігурація SimpleSAMLphp: метадані постачальника ідентичності не налаштовані';
$string ['errorbadssphpspentityid'] = 'Недійсний постачальник послуг ';
$string ['errorextrarequiredfield'] = 'Це поле є обов"язковим, коли "Ми автоматично створюємо користувачів" включено.';
$string ['errorretryexceeded'] = 'Максимальна кількість повторів перевищено (% s): Виникла проблема з службою ідентифікації';
$string ['errnosamluser'] = 'Не знайдено користувача';
$string ['errorssphpsetup'] = 'SAML не налаштовано правильно. Вам потрібно спочатку запустити "make ssphp" з командного рядка. ';
$string ['errorbadlib'] = 'Файл "autoloader" бібліотеки SimpleSAMLPHP не був знайдений у % s. <br> Переконайтеся, що ви встановили SimpleSAMLphp через "make ssphp" і файл читається.';
$string ['errorupdatelib'] = 'Ваша поточна версія бібліотеки SimpleSAMLPHP застаріла. Вам потрібно запустити "make cleanssphp && make ssphp". ';
$string ['errornovalidsessionhandler'] = 'Обробник сеансу SimpleSAMLphp неправильно налаштований або сервер зараз недоступний.';
$string ['errornomemcache'] = 'Memcache неправильно настроєно для auth / saml або сервер Memcache наразі недоступний.';
$string ['errornomemcache7php'] = 'Memcache неправильно налаштовано для авторизації / saml або сервер Memcache наразі недоступний.';
$string ['errorbadconfig'] = 'Неправильний каталог конфігурації SimpleSAMLPHP % s.';
$string ['errorbadmetadata'] = 'Погано сформовані метадані SAML. Переконайтеся, що XML містить один дійсний постачальник ідентичності. ';
$string ['errorbadinstitutioncombo'] = 'Існує вже існуючий примірник аутентифікації з цією комбінацією атрибутів установи та значення установи.';
$string ['errormissingmetadata'] = 'Ви вибрали додавання нових метаданих провайдера ідентичності, але жоден не надається.';
$string ['errormissinguserattributes1'] = 'Ви, здається, аутентифіковані, але ми не отримали необхідних атрибутів користувача. Переконайтеся, що постачальник ідентичності звільняє поля ім"я, прізвище та адресу електронної пошти для SSO у % s або проінформуйте адміністратора. ';
$string ['errorregistrationenabledwithautocreate1'] = 'Установа має включену реєстрацію. З міркувань безпеки це виключає автоматичне створення користувача, якщо ви не використовуєте віддалені імена користувачів. ';
$string ['errorremoteuser1'] = 'Відповідність "remoteuser" є обов"язковою, якщо вимкнено "usersuniquebyusername"';
$string ['IdPSelection'] = 'Вибір постачальника ідентичності';
$string ['noidpsfound'] = 'Не знайдено постачальників ідентифікаційних даних';
$string ['idpentityid'] = 'Об"єкт постачальника ідентичності';
$string ['idpentityadded'] = 'Додано метадані постачальника ідентичностей для цього екземпляра SAML.';
$string ['idpentityupdated'] = 'Оновлено метадані постачальника ідентичностей для цього екземпляра SAML.';
$string ['idpentityupdatedduplicates'] = array(
	0 => "Оновлено метадані постачальника ідентичностей для цього і ще одного екземпляра SAML.",
	1 => "Оновлено метадані постачальника ідентичностей для цього і % s інших примірників SAML.",
);
$string ['metarefresh_metadata_url'] = 'URL метаданих для автоматичного оновлення';
$string ['idpprovider'] = 'Постачальник';
$string ['idptable'] = 'Встановлені провайдери ідентичності';
$string ['institutionattribute'] = 'Атрибут установи (містить "% s")';
$string ['institutionidp'] = 'Метадані провайдера ідентичності установи';
$string ['institutionidpentity'] = 'Доступні провайдери ідентичності';
$string ['institutions'] = 'Інституції';
$string ['institutionvalue'] = 'Значення установи для перевірки на атрибут';
$string ['libchecks'] = 'Перевірка встановлених правильних бібліотек:% s';
$string ['link'] = 'Об"єднати облікові записи';
$string ['linkaccounts'] = 'Хочете пов"язати віддалений обліковий запис "% s" з місцевим обліковим записом "% s"?';
$string ['loginlink'] = 'Дозволити користувачам пов"язувати власний обліковий запис';
$string ['logintolink'] = 'Локальний вхід до % s для посилання на віддалений обліковий запис';
$string ['logintolinkdesc'] = '<p> <b> Ви підключені до віддаленого користувача "% s". Увійдіть у свій локальний обліковий запис, щоб зв"язати їх або зареєструвати, якщо ви наразі не маєте облікового запису на % s. </b> </p> ';
$string ['logo'] = 'Логотип';
$string ['institutionregex'] = 'Здійснювати часткову відповідність рядка з короткою назвою';
$string ['login'] = 'SSO';
$string ['newidpentity'] = 'Додати нового постачальника ідентичності';
$string ['notusable'] = 'Будь ласка, встановіть бібліотеки SimpleSAMLPHP і налаштуйте сервер Memcache для сеансів.';
$string ['obsoletesamlplugin'] = 'Плагін auth / saml потрібно переконфігурувати. Оновіть плагін за допомогою форми <a href="%s"> налаштування плагіна </a>. ';
$string ['obsoletesamlinstance'] = 'Примірник аутентифікації SAML <a href="%s">% s </a> для установи "% s" потребує оновлення.';
$string ['reallyreallysure1'] = 'Ви намагаєтеся зберегти метадані постачальника послуг для Mahara. Це не може бути скасовано. Існуючі SAML-входи не працюватимуть, поки ви не переробили нові метадані з усіма постачальниками ідентичності.';
$string ['reset'] = 'Скинути метадані';
$string ['resetmetadata'] = 'Скидання сертифікатів для метаданих Mahara. Це не можна скасувати, і вам доведеться повторно поширити метадані на постачальника посвідчень. ';
$string ['samlconfig'] = 'Конфігурація SAML';
$string ['samlfieldforemail'] = 'Поле SSO для електронної пошти';
$string ['samlfieldforfirstname'] = 'Поле SSO для першого імені';
$string ['samlfieldforsurname'] = 'Поле SSO для прізвища';
$string ['samlfieldforstudentid'] = 'Поле SSO для ID студента';
$string ['samlfieldauthloginmsg'] = 'Неправильне ім"я користувача';
$string ['spendityid'] = "Суб'єкт постачальника послуг";
$string ['title'] = 'SAML';
$string ['updateuserinfoonlogin'] = 'Оновити дані користувача для входу';
$string ['userattribute'] = 'Атрибут користувача';
$string ['simplesamlphplib'] = 'Каталог SimpleSAMLPHP';
$string ['simplesamlphpconfig'] = 'Каталог конфігурацій SimpleSAMLPHP';
$string ['weautocreateusers'] = 'Ми автоматично створюємо користувачів';
$string ['remoteuser'] = "Підібрати атрибут ім'я користувача до віддаленого імені користувача";
$string ['selectidp'] = 'Будь ласка, виберіть постачальника ідентичності, з яким ви хочете увійти.';
$string ['sha1'] = 'Спадковий SHA1 (небезпечний)';
$string ['sha256'] = 'SHA256 (за замовчуванням)';
$string ['sha384'] = 'SHA384';
$string ['sha512'] = 'SHA512';
$string ['sigalgo'] = 'Алгоритм підпису';
