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

$string ['pluginname'] = 'Анотація';
$string ['Annotation'] = 'Анотація';
$string ['Annotations'] = 'Анотації';
$string ['annotation'] = 'анотація';
$string ['annotations'] = 'анотації';
$string ['Annotationfeedback'] = 'Відгук';
$string ['annotationfeedback'] = 'відгук';
$string ['typeannotationfeedback'] = 'Відгуки про анотації';
$string ['allowannotationfeedback'] = 'Дозволити зворотний зв\'зок';
$string ['approvalrequired'] = 'Зворотній зв\'зок модерується. Якщо ви вирішите зробити цей відгук публічним, він не буде видимим для інших, доки його не буде схвалено власником. ';

$string ['canteditnotauthor'] = 'Ви не є автором цього відгуку.';
$string ['annotationfeedbacknotinview'] = 'Відгук %d не на сторінці %d.';
$string ['cantedittooold'] = 'Ви можете редагувати лише зворотний зв\'зок, який не перевищує %d хвилин.';

$string ['cantedithasreplies'] = 'Ви можете редагувати лише останні відгуки.';
$string ['annotationfeedbackmadepublic'] = "Зворотній зв'язок опубліковано";
$string ['annotationfeedbackdeletedauthornotification'] = "Ваш відгук про %s було видалено: \n%s";
$string ['annotationfeedbackdeletednotificationsubject'] = 'Відгук про %s видалено';

$string ['annotationfeedbackremoved'] = 'Відкликання видалено.';
$string ['editannotationfeedbackdescription'] = 'Ви можете оновити свій відгук, якщо він старий менше ніж %d хвилин і не має нових відповідей. Після цього ви все ще зможете видалити свої відгуки та додати нові відгуки. ';
$string ['annotationfeedbackupdated'] = 'Відгуки оновлено.';

$string ['commentremovedbyauthor'] = 'Відгуки, видалені автором';
$string ['commentremovedbyowner'] = 'Відгуки видалені власником';
$string ['commentremovedbyadmin'] = 'Відгуки видалено адміністратором';
$string ['editannotationfeedback'] = 'Змінити відгук';
$string ['placeannotation'] = 'Додати анотацію';
$string ['placeannotationfeedback'] = 'Помістити відгук';

$string ['annotationfeedbacksubmitted'] = 'Відправлено відгук.';
$string ['annotationfeedbacksubmittedmoderatedanon'] = 'Відгук подано, очікується модерація.';
$string ['annotationfeedbacksubmittedprivateanon'] = 'Надіслано приватний відгук.';

$string ['makepublic'] = 'Зробити публічним';
$string ['makepublicnotallowed'] = 'Вам не дозволяється публікувати цей відгук.';
$string ['makepublicrequestsubject'] = 'Запит на зміну приватного відгуку громадськості.';
$string ['makepublicrequestbyownermessage'] = '%s попросив вас зробити свій відгук публічним.';
$string ['groupadmins'] = 'Адміністратори групи';
$string ['makepublicrequestsent'] = 'Повідомлення було надіслано %s для запиту, щоб відгук був оприлюднений.';
$string ['makepublicrequestbyauthormessage'] = '%s попросив вас зробити свій відгук публічним.';

$string ['annotationempty'] = 'Це поле обов\'зкове.';
$string ['annotationfeedbackempty'] = 'Ваш відгук порожній. Введіть повідомлення. ';

$string ['newannotationfeedbacknotificationsubject'] = 'Новий відгук на %s';
$string ['reallydeletethisannotationfeedback'] = 'Ви впевнені, що хочете видалити цей відгук?';
$string ['annotationfeedbackisprivate'] = 'Цей відгук є приватним.';
$string ['youhaverequestedpublic'] = 'Ви просили, щоб цей відгук був оприлюднений.';

$string ['annotationfeedbacknotificationhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>%s розміщено відгук про анотацію %s </strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p><a href="%s">Відповісти на цей відгук онлайн</a></p>
</div> ';
$string ['annotationfeedbacknotificationtext'] = '%s розмістив відгук про анотацію %s
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути та відповісти на відгуки в Інтернеті, перейдіть за цим посиланням:
%s ';
$string ['annotationfeedbackdeletedhtml'] = '<div style="padding: 0.5em 0; border-bottom: 1px solid #999;"><strong>Відгуки про анотацію %s видалено </strong><br>%s</div>

<div style="margin: 1em 0;">%s</div>

<div style="font-size: smaller; border-top: 1px solid #999;">
<p> <a href="%s">%s</a></p>
</div> ';
$string ['annotationfeedbackdeletedtext'] = 'Відгук про анотацію %s видалено
%s
-------------------------------------------------- ----------------------

%s

-------------------------------------------------- ----------------------
Щоб переглянути %s онлайн, перейдіть за цим посиланням:
%s ';

$string ['artefactdefaultpermissions'] = 'Дозвіл за замовчуванням за замовчуванням';
$string ['artefactdefaultpermissionsdescription'] = 'Вибрані типи артефактів матимуть зворотний зв\'зок при створенні. Користувачі можуть змінити ці налаштування для окремих артефактів. ';

$string ['annotationinformationerror'] = 'У нас немає потрібної інформації для відображення анотації.';

$string ['invalidannotationfeedbacklinkerror'] = 'Зворотній зв\'зок має бути пов\'заний з артефактом або сторінкою.';
$string ['entriesimportedfromleapexport'] = 'Записи, імпортовані з експорту Leap2A, які не могли бути імпортовані перенесено в інше місце';
$string ['unknownstrategyforimport'] = 'Невідома стратегія, обрана для імпортування запису.';
$string ['invalidcreateannotationfeedback'] = 'Не вдається створити власний відгук.';
$string ['nannotationfeedback'] = array(
	"1 відгук",
	"%s відгуків",
);
$string ['progress_annotation'] = array(
	"Додати 1 анотацію до сторінки",
	"Додати %s анотацій до сторінок",
);
$string ['progress_annotationfeedback'] = array(
	"Надіслати 1 відгук до анотації іншого користувача",
	"Надіслати %s відгуків до анотацій інших користувачів",
);
$string ['duplicatedannotation'] = 'Анотація дубльована';
$string ['existingannotation'] = 'Існуючі відгуки';
$string ['duplicatedannotationfeedback'] = 'Дубльована анотація';
$string ['existingannotationfeedback'] = 'Існуючі відгуки';
$string ['private'] = 'Приватний';
$string ['public'] = 'Публічний';
$string ['enteron'] = 'увімкнено';
$string ['noreflectionentryfound'] = 'Неможливо знайти запис відображення для анотації.';
$string ['nofeedback'] = 'Ще немає коментарів для цього коментаря.';
$string ['assessmentchangedto'] = 'Оцінка: %s';
