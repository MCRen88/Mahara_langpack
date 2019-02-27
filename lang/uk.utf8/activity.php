<?php
/**
 *
 * @package    mahara
 * @subpackage notification-internal
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string ['typemaharamessage'] = 'Системне повідомлення';
$string ['typeusermessage'] = 'Повідомлення від інших користувачів';
$string ['typefeedback'] = 'Коментар';
$string ['typewatchlist'] = 'Список спостереження';
$string ['typeviewaccess'] = 'Новий доступ до сторінки';
$string ['typecontactus'] = 'Зв"яжіться з нами';
$string ['typeobjectionable'] = 'Неприйнятний вміст';
$string ['typevirusrepeat'] = 'Повторити завантаження вірусів';
$string ['typevirusrelease'] = 'Випуск прапора вірусу';
$string ['typeadminmessages'] = 'Повідомлення адміністратора';
$string ['typeinstitutionmessage'] = 'Повідомлення установи';
$string ['typegroupmessage'] = 'Повідомлення групи';
$string ['typenewpost'] = 'Повідомлення форуму';
$string ['type'] = 'Тип діяльності';
$string ['attime'] = 'у';
$string ['prefsdescr'] = 'Якщо ви оберете один з варіантів електронної пошти, сповіщення будуть надходити до папки "Вхідні", але вони автоматично будуть позначені як прочитані.';

$string ['messagetype'] = 'Тип повідомлення';
$string ['subject'] = 'Тема';
$string ['date'] = 'Дата';
$string ['read'] = 'Читати';
$string ['unread'] = 'Непрочитані';
$string ['markasread'] = 'Позначити як прочитане';
$string ['selectall'] = 'Вибрати всі';
$string ['selectallread'] = 'Усі непрочитані сповіщення';
$string ['selectalldelete'] = 'Усі сповіщення про видалення';
$string ['recurseall'] = 'Повторити всі';
$string ['alltypes'] = 'Усі типи';
$string ['nodelete'] = 'Немає сповіщень для видалення';
$string ['youroutboxisempty'] = 'Ваш вихідний лист порожній.';
$string ['yourinboxisempty'] = 'Ваша поштова скринька порожня.';
$string ['noresultsfound'] = 'Не знайдено повідомлень, що відповідають вашим критеріям пошуку.';
$string ['marksasread'] = 'Позначено ваші сповіщення як прочитані';
$string ['failedtomarkasread'] = 'Не вдалося позначити ваші сповіщення як прочитані';

$string ['deletednotifications1'] = array(
	0 => 'Видалено сповіщення %s',
	1 => 'Видалені повідомлення %s'
);
$string ['failedtodeletenotifications'] = 'Не вдалося видалити ваші сповіщення';
$string ['stopmonitoring'] = 'Зупинити моніторинг';
$string ['artefacts'] = 'Артефакти';
$string ['groups'] = 'Групи';
$string ['monitored'] = 'Монітовані';
$string ['stopmonitoringsuccess'] = 'Зупинений моніторинг успішно';
$string ['stopmonitoringfailed'] = 'Не вдалося зупинити моніторинг';
$string ['newwatchlistmessage'] = 'Нова активність у вашому списку спостереження';
$string ['newwatchlistmessageview1'] = 'Сторінка " %s", що належить до %s, була змінена ';
$string ['blockinstancenotification'] = 'Блок " %s" був доданий або змінений ';
$string ['newwatchlistmessageunsubscribe'] = 'Щоб припинити отримання сповіщень про зміни на сторінці " %s", виконайте посилання "Відмінити підписку" %s';
$string ['nonamegiven'] = 'не вказано ім"я';

$string ['newviewsubject'] = 'Нова сторінка створена';
$string ['newviewmessage'] = '%s створив нову сторінку "%s"';

$string ['newcontactusfrom'] = 'Нові контакти з';
$string ['newcontactus'] = 'Нові контакти з нами';

$string ['newcollectionaccessmessage'] = 'Ви були додані до списку доступу для колекції "%s" від %s';
$string ['newcollectionaccessmessageviews'] = 'Ви були додані до списку доступу для сторінок "%s" в колекції "%3$s" від %2$s';
$string ['newviewaccessmessage'] = 'Ви були додані до списку доступу для сторінки "%s" від %s';
$string ['newviewaccessmessageviews'] = 'Ви були додані до списку доступу для сторінок "%s" від %s';
$string ['newcollectionaccessmessagenoowner'] = 'Ви були додані до списку доступу для колекції "%s"';
$string ['newcollectionaccessmessagenoownerviews'] = 'Ви були додані до списку доступу для сторінок "%s" у збірці "%s"';
$string ['newviewaccessmessagenoowner'] = 'Ви були додані до списку доступу для сторінки "%s"';
$string ['newviewaccessmessagenoownerviews'] = 'Ви були додані до списку доступу для сторінок "%s"';
$string ['newcollectionaccesssubject'] = 'Новий доступ до колекції "%s"';
$string ['newviewaccesssubject1'] = 'Новий доступ до сторінки "%s"';
$string ['newviewaccesssubjectviews'] = 'Новий доступ до сторінок "%s"';
$string ['messageaccessfromto1'] = 'Ви можете переглянути цю сторінку між %s і %s.';
$string ['messageaccessfrom1'] = 'Ви можете переглянути цю сторінку після %s.';
$string ['messageaccessto1'] = 'Ви можете переглянути цю сторінку до %s.';

$string ['viewmodified'] = 'сторінка була змінена';
$string ['ongroup'] = 'у групі';
$string ['ownedby'] = 'належить';

$string ['objectionablecontentview'] = 'Неприйнятний вміст на сторінці "%s", про який повідомляє %s';
$string ['objectionablecontentviewartefact'] = 'Неприйнятний вміст на сторінці "%s" у "%s", про який повідомляє %s';

$string ['objectionablecontentviewhtml'] = '<div style = "padding: 0.5em 0; border-bottom: 1px solid # 999;" >

<div style = "margin: 1em 0;">%s </div>

<div style = "font-size: менше; border-top: 1px solid # 999;">
<p> Скарга стосується: <a href="%s">%s </a> </p>
<p> Повідомляють: <a href="%s">%s </a> </p>
</div> ';
$string ['objectionablecontentviewtext'] = 'Неприйнятний вміст "%s", про який повідомляє %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профіль репортера, перейдіть за цим посиланням:
%s ';

$string ['objectionablecontentviewartefacthtml'] = '<div style = "padding: 0.5em 0; border-bottom: 1px solid # 999;"> Неприйнятний вміст "%s" у "%s", про який повідомляє %s <br> %s </div>

<div style = "margin: 1em 0;">%s </div>

<div style = "font-size: менше; border-top: 1px solid # 999;">
<p> Скарга стосується: <a href="%s">%s </a> </p>
<p> Повідомляють: <a href="%s">%s </a> </p>
</div> ';
$string ['objectionablecontentviewartefacttext'] = 'Неприпустимий вміст у %s у "%s", повідомлений %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профіль репортера, перейдіть за цим посиланням:
%s ';

$string ['objectionablereviewview'] = 'Огляд небажаного вмісту на сторінці "%s", запитаний %s';
$string ['objectionablereviewviewartefact'] = 'Огляд небажаного вмісту на сторінці "%s" у "%s", запитаному %s';

$string ['objectionablereviewviewhtml'] = '<div style = "padding: 0.5em 0; border-bottom: 1px solid # 999;"> Огляд небажаного вмісту за запитом "%s" від %s <br> %s < / div>

<div style = "margin: 1em 0;">%s </div>

<div style = "font-size: менше; border-top: 1px solid # 999;">
<p> Запит стосується: <a href="%s">%s </a> </p>
<p> Запитано: <a href="%s">%s </a> </p>
</div> ';
$string ['objectionablereviewviewtext'] = 'Огляд небажаного вмісту за запитом "%s" від %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профіль власника, перейдіть за цим посиланням:
%s ';

$string ['objectionablereviewviewartefacthtml'] = '<div style = "padding: 0.5em 0; border-bottom: 1px solid # 999;"> Огляд небажаного вмісту "%s" у "%s", запитаний %s < br>%s </div>

<div style = "margin: 1em 0;">%s </div>

<div style = "font-size: менше; border-top: 1px solid # 999;">
<p> Запит стосується: <a href="%s">%s </a> </p>
<p> Запитано: <a href="%s">%s </a> </p>
</div> ';
$string ['objectionablereviewviewartefacttext'] = 'Огляд небажаного вмісту на %s у запиті "%s" від %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профіль власника, перейдіть за цим посиланням:
%s ';

$string ['stillobjectionablecontent'] = 'Зміст містить неприйнятний матеріал %s ';
$string ['stillobjectionablecontentsuspended'] = 'Доступ до сторінки тимчасово скасовано, поки не буде виправлено небажаний зміст.';
$string ['newgroupmembersubj'] = '%s тепер є членом групи.';
$string ['removedgroupmembersubj'] = '%s більше не є членом групи.';

$string ['addtowatchlist'] = 'Додати до списку спостереження';
$string ['removefromwatchlist'] = 'Вилучити зі списку спостереження';
$string ['missingparam'] = 'Необхідний параметр %s був порожнім для типу діяльності %s';

$string ['institutionrequestsubject'] = '%s запросив членство %s.';
$string ['institutionrequestmessage'] = 'Ви можете додати користувачів до установ на сторінці "Учасники установи":';

$string ['institutioninvitesubject'] = 'Вам було запропоновано приєднатися до установи %s.';
$string ['institutioninvitemessage'] = 'Ви можете підтвердити своє членство в цій установі на сторінці "Налаштування установи":';

$string ['deleteallnotifications'] = 'Видалити всі сповіщення';
$string ['reallydeleteallnotifications'] = 'Ви впевнені, що хочете видалити всі ваші сповіщення про цей тип діяльності?';

$string ['viewsubmittedsubject1'] = 'Подання до %s';
$string ['viewsubmittedmessage1'] = '%s подав "%s" до %s';

$string ['adminnotificationerror'] = 'Помилка сповіщення користувача, ймовірно, була викликана конфігурацією вашого сервера.';