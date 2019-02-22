<?php
/**
 *
 * @package    mahara
 * @subpackage core
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string['changepassworddesc'] = 'Новий пароль';
$string['changepasswordotherinterface'] = 'Ви можете <a href="%s"> змінити свій пароль </a> через інший інтерфейс.';
$string['oldpasswordincorrect'] = 'Це не ваш поточний пароль.';

$string['changeusernameheading'] = "Змінити ім'я користувача";
$string['changeusername'] = "Нове ім'я користувача";
$string['changeusernamedesc'] = "Ім'я користувача, яке використовується для входу до %s. Імена користувачів мають довжину 3-30 символів і можуть містити літери, цифри та найпоширеніші символи, за винятком пропусків. ";

$string['usernameexists1'] = "Ви можете використовувати це ім'я користувача. Виберіть інше. ";

$string['accountoptionsdesc'] = 'Загальні параметри облікового запису';

$string['changeprofileurl'] = 'Змінити URL-адресу профілю';
$string['profileurl'] = 'URL профілю';
$string['profileurldescription'] = 'Персоналізована URL-адреса для сторінки вашого профілю. Це поле має бути довжиною 3-30 символів. ';
$string['urlalreadytaken'] = 'Ця URL-адреса профілю вже зайнята. Виберіть інше. ';

$string['friendsnobody'] = 'Ніхто не може додати мене як друга';
$string['friendsauth'] = 'Нові друзі потребують моєї авторизації';
$string['friendsauto'] = 'Нові друзі автоматично авторизовані';
$string['friendsdescr'] = 'Контроль друзів';
$string['updatedfriendcontrolsetting'] = 'Оновлений контроль друзів';

$string['wysiwygdescr'] = 'Редактор HTML';

$string['licensedefault'] = 'Стандартна ліцензія';
$string['licensedefaultdescription'] = 'Типова ліцензія для вашого вмісту.';
$string['licensedefaultinherit'] = 'Використовувати установку за умовчанням';

$string['messagesdescr'] = 'Повідомлення інших користувачів';
$string['messagesnobody'] = 'Не дозволяйте нікому надсилати мені повідомлення';
$string['messagesfriends'] = 'Дозволити користувачам зі списку друзів надсилати мені повідомлення';
$string['messagesallow'] = 'Дозволити будь-кому надсилати мені повідомлення';

$string['language'] = 'Мова';

$string['showviewcolumns'] = 'Показувати елементи керування для додавання та видалення стовпців під час редагування сторінки';

$string['tagssideblockmaxtags'] = 'Максимальна кількість тегів у хмарі';
$string['tagssideblockmaxtagsdescription'] = 'Максимальна кількість тегів для відображення в хмарі тегів';

$string['enablemultipleblogs1'] = 'Кілька журналів';
$string['enablemultipleblogsdescription1'] = 'Типово, у вас є один журнал. Якщо ви бажаєте зберегти більше одного журналу, увімкніть цю опцію. ';

$string['hiderealname'] = "Приховати справжнє ім'я";
$string['hiderealnamedescription'] = "Встановіть цей прапорець, якщо ви встановили відображуване ім'я та не бажаєте, щоб інші користувачі могли знайти вас";

$string['showhomeinfo2'] = 'Інформація про інформаційну панель';
$string['showhomeinfodescription1'] = 'Відображення інформації про те, як використовувати %s на інформаційній панелі';
$string['showprogressbar'] = 'Індикатор виконання профілю';
$string['showprogressbardescription'] = 'Відображати панель виконання та поради щодо завершення профілю %s.';

$string['prefssaved'] = 'Налаштування збережено';
$string['prefsnotsaved'] = 'Не вдалося зберегти ваші налаштування.';

$string['maildisabled'] = 'Електронна пошта відключена';
$string['disableemail'] = 'Вимкнути електронну пошту';
$string['maildisabledbounce'] =<<< EOF
Надсилання електронної пошти було вимкнено, оскільки на сервер було повернуто дуже багато повідомлень.
Переконайтеся, що ваш обліковий запис електронної пошти працює як і раніше, перш ніж увімкнути електронну пошту в налаштуваннях облікового запису на %s.
EOF;
$string['maildisableddescription'] = 'Відправлення електронної пошти на ваш обліковий запис було вимкнено. Ви можете <a href="%s"> знову ввімкнути свою електронну пошту </a> зі сторінки налаштувань облікового запису. ';

$string['deleteaccountuser'] = 'Видалити обліковий запис %s';
$string['deleteaccountdescription'] = 'Якщо ви видалите свій обліковий запис, весь вміст буде видалено назавжди. Ви не можете отримати його назад. Інформація про ваш профіль і ваші сторінки більше не буде видимою для інших користувачів. Вміст усіх написаних вами повідомлень на форумі все ще буде видимим, але ваше ім"я більше не відображатиметься. ';
$string['sendnotificationdescription'] = 'Повідомлення буде надіслано адміністратору, який повинен затвердити видалення вашого облікового запису. Якщо ви бажаєте видалити свій обліковий запис, весь ваш особистий вміст буде видалено назавжди. Це означає, що будь-які завантажені вами файли, записи журналу, які ви написали, і створені вами сторінки та колекції будуть видалені. Ви не можете отримати нічого з цього назад. Якщо ви завантажили файли в групи, створили записи журналу та портфоліо, і зробили внески до форумів, вони залишаться на сайті, але ваше ім"я більше не відображатиметься. ';
$string['pendingdeletionsince'] = 'Видалення облікового запису, що очікує, оскільки %s';
$string['pendingdeletionadminemailsubject'] = 'Запит на видалення облікового запису на %s';
$string['resenddeletionadminemailsubject'] = 'Нагадування про запит на видалення облікового запису на %s';
$string['canceldeletionadminemailsubject'] = 'Скасування запиту на видалення облікового запису на %s';
$string['pendingdeletionadminemailtext'] = 'Привіт, адміністратор,

Користувач %s запросив видалення свого облікового запису з сайту.

Ви вказані як адміністратор в установі, до якої належить користувач.
Ви можете вирішити, чи слід затверджувати чи відхиляти запит на видалення. Для цього виберіть наступне посилання: %s

Нижче наведено відомості про запит на видалення облікового запису:

Назва: %s
Електронна пошта: %s
Причина: %s

-
З повагою,
Команда %s ';
$string['pendingdeletionadminemailhtml'] = "<p> Привіт, адміністратор, </p>
<p> Користувач % s запросив видалення свого облікового запису з сайту. </p>
<p> Ви вказані як адміністратор в установі, до якої належить користувач. Ви можете вирішити, чи потрібно затверджувати чи відхиляти запит на видалення. Для цього виберіть посилання: <a href='%s'> %s </a> </p>
<p> Докладніше про запит на видалення облікового запису: </p>
<p> Ім'я: %s </p>
<p> Електронна пошта: %s </p>
<p> Причина: %s </p>
<pre> -
З повагою,
Команда %s </pre> ";

$string['accountdeleted'] = 'Ваш обліковий запис видалено.';
$string['resenddeletionnotification'] = 'Надіслати повідомлення про видалення';
$string['resenddeletionadminemailtext'] = 'Привіт, адміністратор,

Це нагадування про те, що користувач %s запросив видалення свого облікового запису з сайту.

Ви вказані як адміністратор в установі, до якої належить користувач. Ви можете вирішити, чи потрібно затверджувати чи відхиляти запит на видалення. Для цього виберіть наступне посилання: %s

Нижче наведено відомості про запит на видалення облікового запису:

Назва: %s
Електронна пошта: %s
Повідомлення: %s

-
З повагою,
Команда %s ';
$string['resenddeletionadminemailhtml'] = "<p> Привіт, адміністратор, </p>
<p> Це нагадування про те, що користувач% звернувся із запитом на видалення облікового запису з сайту. </p>
<p> Ви вказані як адміністратор в установі, до якої належить користувач. Ви можете вирішити, чи потрібно затверджувати чи відхиляти запит на видалення. Для цього виберіть посилання: <a href='%s'>% s </a> </p>
<p> Докладніше про запит на видалення облікового запису: </p>
<p> Ім'я: %s </p>
<p> Електронна пошта: %s </p>
<p> Повідомлення: %s </p>
<pre> -
З повагою,
Команда %s </pre> ";

$string['pendingdeletionemailsent'] = 'Надіслано сповіщення адміністраторам установи';
$string['cancelrequest'] = 'Скасувати запит';
$string['deleterequestcanceled'] = 'Запит на видалення облікового запису користувача скасовано.';
$string['canceldeletionrequest'] = 'Скасувати запит на видалення';
$string['canceldeletionrequestconfirmation'] = 'Це скасує запит адміністраторам установи на видалення облікового запису %s. Ви дійсно бажаєте продовжити? ';
$string['canceldeletionadminmailtext'] = 'Привіт, адміністратор,

Користувач %s скасував запит на видалення облікового запису з сайту.

Ви вказані як адміністратор в установі, до якої належить користувач.

Докладні відомості про скасований запит наведено нижче:

Назва: %s
Електронна пошта: %s

-
З повагою,
Команда %s ';
$string['canceldeletionadminemailhtml'] = "<p> Привіт, адміністратор, </p>
<p> Користувач %s скасував запит на видалення облікового запису з сайту. </p>
<p> Ви вказані як адміністратор в установі, до якої належить користувач. </p>
<p> Докладніше про скасований запит: </p>
<p> Ім'я: %s </p>
<p> Електронна пошта: %s </p>
<pre> -
З повагою,
Команда %s </pre> ";

$string['resizeonuploaduserdefault1'] = 'Змінити розмір великих зображень при завантаженні';
$string['resizeonuploaduserdefaultdescription2'] = 'Автоматичну зміну розміру зображень увімкнено за замовчуванням. Зображення, що перевищують максимальні розміри, змінюватимуться після завантаження. Ви можете вимкнути це налаштування для кожного зображення окремо. ';

$string['devicedetection'] = 'Виявлення пристрою';
$string['devicedetectiondescription'] = 'Увімкнути виявлення мобільного пристрою під час перегляду цього сайту.';
$string['noprivacystatementsaccepted'] = 'Цей обліковий запис не прийняв жодних поточних заяв про конфіденційність.';