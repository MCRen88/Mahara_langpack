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

$string ['pluginname'] = 'Профіль';
$string ['profile'] = 'Профіль';
$string ['requiredfields'] = 'Обов"язкові поля';
$string ['bindingfieldsdescription'] = 'Поля профілю, які необхідно заповнити';
$string ['searchablefields'] = 'Поля пошуку';
$string ['searchablefieldsdescription'] = 'Поля профілю, які можна шукати на інших';
$string ['adminusersearchfields'] = 'Пошук користувача для адміністрування';
$string ['adminusersearchfieldsdescription'] = 'Поля профілів, які відображаються у вигляді стовпців у списку пошуку користувачів адміністрування';

$string ['aboutdescription'] = 'Введіть своє справжнє ім"я та прізвище. Якщо ви хочете, щоб люди в системі показували іншу назву, вкажіть це ім"я як своє відображуване ім"я. ';
$string ['infoisprivate'] = 'Ця інформація є приватною, поки ви не включите її до сторінки, яка спільно використовується з іншими користувачами.';
$string ['viewmyprofile'] = 'Переглянути мій профіль';
$string ['aboutprofilelinkdescription'] = '<p> Перейдіть на сторінку <a href="%s"> Профіль </a>, щоб розмістити інформацію, яку ви бажаєте відобразити іншим користувачам. </p>';

// категорії профілів
$string ['aboutme'] = 'Про мене';
$string ['contact'] = 'Контактна інформація';
$string ['social'] = 'Соціальні медіа';
$string ['messaging'] = 'Соціальні медіа';

// поля профілю
$string ['firstname'] = 'Ім"я';
$string ['lastname'] = 'Прізвище';
$string ['fullname'] = 'Повне ім"я';
$string ['institution'] = 'Установа';
$string ['studentid'] = 'Ідентифікатор студента';
$string ['preferredname'] = 'Відображається ім"я';
$string ['introduction'] = 'Вступ';
$string ['email'] = 'Адреса електронної пошти';
$string ['maildisabled'] = 'Електронна пошта відключена';
$string ['officialwebsite'] = 'Офіційна адреса веб-сайту';
$string ['personalwebsite'] = 'Особиста адреса веб-сайту';
$string ['blogaddress'] = 'Адреса блогу';
$string ['address'] = 'Поштова адреса';
$string ['town'] = 'Місто';
$string ['city'] = 'Місто / регіон';
$string ['country'] = 'Країна';
$string ['homenumber'] = 'Домашній телефон';
$string ['businessnumber'] = 'Бізнес-телефон';
$string ['mobilenumber'] = 'Мобільний телефон';
$string ['faxnumber'] = 'Номер факсу';
$string ['aim.input'] = 'Ім"я для AIM';
$string ['aim'] = 'AIM';
$string ['icq.input'] = 'номер ICQ';
$string ['icq'] = 'ICQ';
$string ['jabber.input'] = 'Ім"я користувача Jabber ';
$string ['jabber'] = 'Jabber';
$string ['skype.input'] = 'Ім"я користувача Skype';
$string ['skype'] = 'Skype';
$string ['yahoo.input'] = 'Yahoo Messenger';
$string ['yahoo'] = 'Yahoo Messenger';
$string ['facebook.input'] = 'URL URL';
$string ['facebook'] = 'Facebook';
$string ['twitter.input'] = 'Ім"я користувача Twitter';
$string ['twitter'] = 'Twitter';
$string ['instagram.input'] = 'Ім"я користувача Instagram';
$string ['instagram'] = 'Instagram';
$string ['tumblr.input'] = 'URL Tumblr';
$string ['tumblr'] = 'Tumblr';
$string ['pinterest.input'] = 'Ім"я користувача';
$string ['pinterest'] = 'Pinterest';
$string ['occupation'] = 'Професія';
$string ['industry'] = 'Промисловість';

// Імена полів для перегляду користувача та відображення користувальницького пошуку
$string ['name'] = 'Ім"я';
$string ['principalemailaddress'] = 'Первинна електронна пошта';
$string ['emailaddress'] = 'Альтернативна електронна пошта';
$string ['saveprofile'] = 'Зберегти профіль';
$string ['profilesaved'] = 'Профіль успішно збережений';
$string ['profilefailedsaved'] = 'Помилка збереження профілю';
$string ['emailvalidation_subject'] = 'Перевірка електронної пошти';
$string ['emailvalidation_body1'] = <<< EOF
Вітаємо, % s,

Ви додали адресу електронної пошти% s до облікового запису користувача у % s. Щоб активувати цю адресу, перейдіть за посиланням нижче.

% s

Якщо це повідомлення належить вам, але ви не попросили додати його до свого облікового запису % s, перейдіть за посиланням нижче, щоб відхилити активацію електронної пошти.

% s
EOF;
$string ['newemailalert_subject'] = 'Нова адреса електронної пошти додана до вашого облікового запису % s';
$string ['newemailalert_body_text1'] = <<< EOF
Вітаємо, % s,

Ви додали наступні адреси електронної пошти в обліковий запис у % s:

% s

Якщо ви не подали запит на цю зміну в обліковому записі % s, зверніться до адміністратора сайту.

% scontact.php

EOF;
$string ['newemailalert_body_html1'] = <<< EOF
<p> Привіт % s, </p>

<p> Ви додали наступні адреси електронної пошти до свого облікового запису в % s: </p>

<p> % s </p>

<p> Якщо ви не подали запит на цю зміну в обліковому записі % s, <a href="%scontact.php"> зв’яжіться з адміністратором сайту </a>. </p>

EOF;

$string ['validationemailwillbesent'] = 'Повідомлення про перевірку буде надіслано, коли ви збережете свій профіль.';
$string ['validationemailsent'] = 'Надіслано повідомлення про перевірку.';
$string ['emailactivation'] = 'Активація електронної пошти';
$string ['emailactivationsucceeded'] = 'Активація електронної пошти успішна';
$string ['emailalreadyactivated'] = 'Електронна пошта вже активована';
$string ['emailactivationfailed'] = 'Помилка активації електронної пошти';
$string ['emailactivationdeclined'] = 'Активація електронної пошти відхилена успішно';
$string ['verificationlinkexpired'] = 'Посилання для перевірки закінчилося';
$string ['invalidemailaddress'] = 'Неправильна адреса електронної пошти';
$string ['unvalidatedemailalreadytaken'] = 'Адреса електронної пошти, яку ви намагаєтеся перевірити, вже зайнята.';
$string ['addbutton'] = 'Додати';
$string ['cancelbutton'] = 'Скасувати';
$string ['emailingfailed '] =' Профіль збережено, але повідомлення не були надіслані: % s ';
$string ['loseyourchanges'] = 'Втратити зміни?';
$string ['Title'] = 'Заголовок';
$string ['Created'] = 'Створено';
$string ['Description'] = 'Опис';
$string ['Download'] = 'Завантажити';
$string ['lastmodified'] = 'Остання зміна';
$string ['Owner'] = 'Власник';
$string ['Preview'] = 'Попередній перегляд';
$string ['Size'] = 'Розмір';
$string ['Type'] = 'Тип';
$string ['profileinformation'] = 'Інформація про профіль';
$string ['profilepage'] = 'Сторінка профілю';
$string ['viewprofilepage'] = 'Переглянути сторінку профілю';
$string ['viewallprofileinformation'] = 'Переглянути всю інформацію про профіль';
$string ['Note'] = 'Примітка';
$string ['noteTitle'] = 'Заголовок примітки';
$string ['blockTitle'] = 'Заголовок блоку';
$string ['Notes'] = 'Примітки';
$string ['mynotes'] = 'Мої нотатки';
$string ['notesfor'] = "Примітки для % s";
$string ['containin'] = "Міститься в";
$string ['currenttitle'] = "Заголовок";
$string ['notesdescription1'] = 'Це нотатки HTML, створені в блоках приміток на ваших сторінках.';
$string ['editnote'] = 'Редагувати нотатку';
$string ['confirmdeletenote'] = 'Ця примітка використовується у% d блоках і% d сторінках. Якщо ви вилучите його, всі блоки, які зараз містять текст, з"являться порожніми. ';
$string ['noteeleted'] = 'Примітка видалена';
$string ['noteupdated'] = 'Примітка оновлена';
$string ['html'] = 'Примітка';
$string ['duplicatedprofilefieldvalue'] = 'Дубльоване значення';
$string ['existingprofilefieldvalues'] = 'Існуючі значення';
$string ['progressbaritem_messaging'] = 'Повідомлення';
$string ['progressbaritem_joingroup'] = 'Приєднатися до групи';
$string ['progressbaritem_makefriend'] = 'Зробити друга';
$string ['progress_firstname'] = 'Додайте своє ім"я';
$string ['progress_lastname'] = 'Додати своє прізвище';
$string ['progress_studentid'] = 'Додати ваш студентський ідентифікатор';
$string ['progress_preferredname'] = 'Додати відображуване ім"я';
$string ['progress_introduction'] = 'Додати вступ про себе';
$string ['progress_email'] = 'Додати адресу електронної пошти';
$string ['progress_officialwebsite'] = 'Додати офіційний веб-сайт';
$string ['progress_personalwebsite'] = 'Додати свій персональний сайт';
$string ['progress_blogaddress'] = 'Додати адресу блогу';
$string ['progress_address'] = 'Додайте свою поштову адресу';
$string ['progress_town'] = 'Додати місто';
$string ['progress_city'] = 'Додати місто / регіон';
$string ['progress_country'] = 'Додати країну';
$string ['progress_homenumber'] = 'Додати домашній телефон';
$string ['progress_businessnumber'] = 'Додати бізнес-телефон';
$string ['progress_mobilenumber'] = 'Додати мобільний телефон';
$string ['progress_faxnumber'] = 'Додати номер факсу';
$string ['progress_messaging'] = 'Додати інформацію про повідомлення';
$string ['progress_occupation'] = 'Додати своє заняття';
$string ['progress_industry'] = 'Додати вашу галузь';
$string ['progress_joingroup'] = array(
	"Приєднатися до групи",
	"Приєднатися до груп % s",
);
$string ['progress_makefriend'] = array(
	"Зробити друга",
	"Зробити % s друзями",
);

// Соціальні профілі
$string ['socialprofile'] = 'Соціальні медіа';
$string ['socialprofiles'] = 'Облікові записи соціальних медіа';
$string ['service'] = 'Соціальна мережа';
$string ['servicedesc'] = 'Введіть назву мережі соціальних медіа, наприклад, Facebook, LinkedIn, Twitter та ін. ';
$string ['profileurl'] = 'Ваш URL або ім"я користувача';
$string ['profileurldesc'] = 'URL вашої сторінки профілю або вашого імені користувача.';
$string ['profileurlexists'] = 'Цей обліковий запис соціальних медіа не може бути доданий, оскільки його ім"я користувача або URL є дублікатом того, що ви вже ввели.';
$string ['profiletype'] = 'Соціальна мережа';
$string ['deleteprofile'] = 'Видалити обліковий запис соціальних медіа';
$string ['deletethisprofile'] = 'Видалення облікового запису соціальних медіа: "% s"';
$string ['deleteprofileconfirm'] = 'Ви впевнені, що хочете видалити цей обліковий запис соціальних медіа?';
$string ['editthisprofile'] = 'Редагувати обліковий запис соціальних медіа: "% s"';
$string ['newsocialprofile'] = 'Новий обліковий запис соціальних медіа';
$string ['notvalidprofileurl'] = 'Це не дійсний URL соціального профілю. Введіть дійсний URL або виберіть службу обміну повідомленнями зі списку вище. ';
$string ['profiledeletedsuccessfully'] = 'Обліковий запис соціальних медіа успішно видалено';
$string ['profilesavedsuccessfully'] = 'Обліковий запис соціальних медіа успішно збережено';
$string ['socialprofilerequired'] = 'Потрібний принаймні один обліковий запис соціальних медіа.';
$string ['duplicateurl'] = 'Це ім"я користувача або URL облікового запису в соціальних мережах є дублікатом того, що ви вже ввели.';