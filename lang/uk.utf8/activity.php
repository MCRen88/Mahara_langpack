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
$string ['typeviewaccess'] = 'Доступ до нової сторінки';
$string ['typecontactus'] = 'Зв\'яжіться з нами';
$string ['typeobjectionable'] = 'Неприйнятний контент';
$string ['typevirusrepeat'] = 'Повторіть завантаження вірусу';
$string ['typevirusrelease'] = 'Реліз прапора вірусу';
$string ['typeadminmessages'] = 'Повідомлення адміністратора';
$string ['typeinstitutionmessage'] = 'Повідомлення закладу';
$string ['typegroupmessage'] = 'Повідомлення групи';
$string ['typenewpost'] = 'Повідомлення форуму';

$string ['type'] = 'Тип діяльності';
$string ['attime'] = 'у';
$string ['prefsdescr'] = 'Якщо ви оберете один з варіантів електронної пошти, сповіщення будуть надходити до папки "Вхідні", але вони автоматично будуть позначені як прочитані.';

$string ['messagetype'] = 'Тип повідомлення';
$string ['subject'] = 'Тема';
$string ['date'] = 'Дата';
$string ['read'] = 'Читані';
$string ['unread'] = 'Непрочитані';

$string ['markasread'] = 'Позначити як прочитане';
$string ['selectall'] = 'Вибрати всі';
$string ['selectallread'] = 'Усі непрочитані сповіщення';
$string ['selectalldelete'] = 'Усі сповіщення про видалення';
$string ['recurseall'] = 'Повторити всі';
$string ['alltypes'] = 'Усі типи';
$string ['nodelete'] = 'Немає сповіщень для видалення';
$string ['youroutboxisempty'] = 'Ваш вихідна скринька порожня.';
$string ['yourinboxisempty'] = 'Ваша вхідна скринька порожня.';
$string ['noresultsfound'] = 'Не знайдено повідомлень, що відповідають вашим критеріям пошуку.';

$string ['marksasread'] = 'Позначено ваші сповіщення як прочитані';
$string ['failedtomarkasread'] = 'Не вдалося позначити ваші сповіщення як прочитані';

$string ['deletednotifications1'] = array(
0 => 'Видалено сповіщення %s',
1 => 'Видалені сповіщення %s'
);
$string ['failedtodeletenotifications'] = 'Не вдалося видалити ваші сповіщення';

$string ['stopmonitoring'] = 'Зупинити моніторинг';
$string ['artefacts'] = 'Артефакти';
$string ['groups'] = 'Групи';
$string ['monitored'] = 'Контрольовано';

$string ['stopmonitoringsuccess'] = 'Моніторинг зупинено  успішно';
$string ['stopmonitoringfailed'] = 'Не вдалося зупинити моніторинг';

$string ['newwatchlistmessage'] = 'Нова активність у вашому списку спостереження';
$string ['newwatchlistmessageview1'] = 'Сторінка «%s», яка належить %s, була змінена. ';
$string ['blockinstancenotification'] = 'Блок «%s» був доданий або змінений. ';
$string ['newwatchlistmessageunsubscribe'] = 'Щоб припинити отримання сповіщень про зміни на сторінці «%s»", будь ласка, скористайтесь посиланням про відміну підписки %s.';
$string ['nonamegiven'] = 'не вказано ім\'я';

$string ['newviewsubject'] = 'Нову сторінку створено';
$string ['newviewmessage'] = '%s створив нову сторінку «%s»';

$string ['newcontactusfrom'] = 'Новий контакт з';
$string ['newcontactus'] = 'Новий контакт з нами';

$string ['newcollectionaccessmessage'] = 'Вас було додано до списку доступу для колекції «%s» від %s.';
$string ['newcollectionaccessmessageviews'] = 'Вас було додано до списку доступу для сторінок «%s» в колекції «%3$s» від %2$s.';
$string ['newviewaccessmessage'] = 'Вас було додано до списку доступу для сторінки «%s» від %s.';
$string ['newviewaccessmessageviews'] = 'Вас було додано до списку доступу для сторінок «%s» від %s.';
$string ['newcollectionaccessmessagenoowner'] = 'Вас було додано до списку доступу для колекції «%s».';
$string ['newcollectionaccessmessagenoownerviews'] = 'Вас було додано до списку доступу для сторінок «%s» у колекції «%s».';
$string ['newviewaccessmessagenoowner'] = 'Вас було додано до списку доступу для сторінки «%s».';
$string ['newviewaccessmessagenoownerviews'] = 'Вас було додано до списку доступу для сторінок «%s».';
$string ['newcollectionaccesssubject'] = 'Новий доступ до колекції «%s».';
$string ['newviewaccesssubject1'] = 'Новий доступ до сторінки «%s»';
$string ['newviewaccesssubjectviews'] = 'Новий доступ до сторінок «%s»';
$string ['messageaccessfromto1'] = 'Ви можете переглянути цю сторінку між %s та %s.';
$string ['messageaccessfrom1'] = 'Ви можете переглянути цю сторінку після %s.';
$string ['messageaccessto1'] = 'Ви можете переглянути цю сторінку до %s.';

$string ['viewmodified'] = 'змінив(ла) свою сторінку';
$string ['ongroup'] = 'у групі';
$string ['ownedby'] = 'належить';

$string ['objectionablecontentview'] = 'Неприйнятний контент на сторінці «%s», про який повідомлено %s.';
$string ['objectionablecontentviewartefact'] = 'Неприйнятний контент на сторінці «%s» у «%s», про який повідомлено %s.';

$string ['objectionablecontentviewhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Неприйнятний контент на «%s», про який повідомлено %s<br>%s</div>

<div style = "margin: 1em 0;">%s</div>

<div style = "font-size: smaller; border-top: 1px solid #999;">
<p> Скарга стосується: <a href="%s">%s</a></p>
<p> Повідомлено: <a href="%s">%s</a></p>
</div> ';
$string ['objectionablecontentviewtext'] = 'Неприйнятний контент «%s», про який повідомлено %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профайл повідомлювача(ів), перейдіть за цим посиланням:
%s ';

$string ['objectionablecontentviewartefacthtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Неприйнятний контент «%s» у «%s», про який повідомлено %s<br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p> Скарга стосується: <a href="%s">%s</a></p>
<p> Повідомлено: <a href="%s">%s</a></p>
</div>';
$string ['objectionablecontentviewartefacttext'] = 'Неприпустимий контент на %s у «%s», про який повідомлено %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профайл повідомлювача(ів), перейдіть за цим посиланням:
%s ';

$string ['objectionablereviewview'] = 'Огляд неприпустимого контенту на сторінці «%s», запитаний %s';
$string ['objectionablereviewviewartefact'] = 'Огляд неприпустимого контенту на сторінці «%s» у «%s», запитаний %s';

$string ['objectionablereviewviewhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Огляд неприпустимого контенту на «%s» за запитом %s<br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p> Запит стосується: <a href="%s">%s</a></p>
<p> Запитано: <a href="%s">%s</a></p>
</div> ';
$string ['objectionablereviewviewtext'] = 'Огляд неприпустимого контенту на «%s» за запитом %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профайл власника(ів), перейдіть за цим посиланням:
%s ';

$string ['objectionablereviewviewartefacthtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;">Огляд неприпустимого контенту на «%s» у «%s», за запитом %s<br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p> Запит стосується: <a href="%s">%s</a></p>
<p> Запитано: <a href="%s">%s</a></p>
</div> ';
$string ['objectionablereviewviewartefacttext'] = 'Огляд неприпустимого контенту на %s у «%s» за запитом %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути сторінку, перейдіть за цим посиланням:
%s
Щоб переглянути профайл власника(ів), перейдіть за цим посиланням:
%s ';

$string ['stillobjectionablecontent'] = 'Контент містить неприйнятний матеріал.

 %s';
$string ['stillobjectionablecontentsuspended'] = 'Доступ до сторінки тимчасово скасовано поки не буде виправлено неприйнятний контент.';
$string ['newgroupmembersubj'] = '%s тепер є членом групи.';
$string ['removedgroupmembersubj'] = '%s більше не є членом групи.';

$string ['addtowatchlist'] = 'Додати до списку спостереження';
$string ['removefromwatchlist'] = 'Вилучити зі списку спостереження';

$string ['missingparam'] = 'Необхідний параметр %s був порожнім для типу діяльності %s';

$string ['institutionrequestsubject'] = '%s запросив членство %s.';
$string ['institutionrequestmessage'] = 'Ви можете додати користувачів до закладів на сторінці «Учасники закладу»:';

$string ['institutioninvitesubject'] = 'Вам було запропоновано приєднатися до закладу %s.';
$string ['institutioninvitemessage'] = 'Ви можете підтвердити своє членство в цьому закладі на сторінці «Налаштування закладу:';

$string ['deleteallnotifications'] = 'Видалити всі сповіщення';
$string ['reallydeleteallnotifications'] = 'Ви впевнені, що хочете видалити всі ваші сповіщення про цей тип діяльності?';

$string ['viewsubmittedsubject1'] = 'Подання до %s';
$string ['viewsubmittedmessage1'] = '%s подав «%s» до %s';

$string ['adminnotificationerror'] = 'Помилка сповіщення користувача була ймовірно викликана налаштуваннями вашого сервера.';
