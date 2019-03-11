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

// мої групи
$string ['groupname'] = 'Назва групи';
$string ['groupshortname'] = 'Коротка назва';
$string ['associatewithinstitution'] = 'Зв\'язати з закладом';
$string ['associatewithaninstitution'] = 'Приєднати групу %s до закладу.';
$string ['groupassociated'] = 'Група успішно пов\'язана з закладом';
$string ['creategroup'] = 'Створити групу';
$string ['copygroup'] = 'Копіювати групу «%s»';
$string ['groupmemberrequests'] = 'Очікує на отримання запитів на членство';
$string ['membershiprequests'] = 'Запити на членство';
$string ['sendinvitation'] = 'Надіслати запрошення';
$string ['invitetogroupsubject'] = 'Вам було запропоновано приєднатися до групи';
$string ['invitetogroupmessage'] = '%s запросив вас приєднатися до групи «%s»​. Натисніть на посилання нижче для отримання додаткової інформації.';
$string ['inviteuserfailed'] = 'Не вдалося запросити користувача';
$string ['userinvited'] = 'Запрошення надіслано';
$string ['addedtogroupsubject'] = 'Ви були додані до групи';
$string ['addedtogroupmessage'] = '%s додав вас до групи «%s». Натисніть на посилання нижче, щоб побачити групу.';
$string ['adduserfailed'] = 'Не вдалося додати користувача';
$string ['useradded'] = 'Користувача додано';
$string ['editgroup'] = 'Редагувати групу';
$string ['savegroup'] = 'Зберегти групу';
$string ['groupsaved'] = 'Група успішно збережена';
$string ['invalidgroup'] = 'Група не існує';
$string ['canteditdontown'] = 'Ви не можете редагувати цю групу, оскільки ви не є її власником.';
$string ['groupdescription'] = 'Опис групи';
$string ['groupurl'] = 'URL головної сторінки групи';
$string ['groupurldescription'] = 'URL-адреса домашньої сторінки вашої групи. Це поле має бути довжиною 3-30 символів.';
$string ['groupurltaken'] = 'Ця URL-адреса вже зайнята іншою групою.';

$string ['Membership'] = 'Членство';
$string ['Roles'] = 'Ролі';
$string ['Open'] = 'Відкрити';
$string ['opendescription'] = 'Користувачі можуть приєднатися до групи без дозволу адміністраторів групи.';
$string ['requestdescription'] = 'Користувачі можуть надсилати запити на членство адміністраторам групи.';
$string ['Controlled'] = 'Контрольована';
$string ['controlleddescription'] = 'Адміністратори групи можуть додавати користувачів до групи без їхньої згоди та учасники не можуть залишити групу.';
$string ['membershiptype'] = 'Тип членства в групі';
$string ['membershiptype.controlled'] = 'Контрольоване членство';
$string ['membershiptype.approve'] = 'Затверджене членство';
$string ['membershiptype.open'] = 'Відкрити членство';
$string ['membershiptype.abbrev.controlled'] = 'Контрольований';
$string ['membershiptype.abbrev.approve'] = 'Звичайний';
$string ['membershiptype.abbrev.open'] = 'Відкрити';
$string ['membershipopencontrolled'] = 'Членство не може бути відкритим і керованим.';
$string ['membershipopenrequest'] = 'Відкриті групи учасників не приймають запитів на членство.';
$string ['requestmembership'] = 'Запит на членство';
$string ['pendingmembers'] = 'Члени, які очікують на розгляд';
$string ['reason'] = 'Причина';
$string ['approve'] = 'Затвердити';
$string ['reject'] = 'Відхилити';
$string ['groupalreadyexists'] = 'Група з такою назвою вже існує.';
$string ['groupshortnamealreadyexists'] = 'Група з цією короткою назвою вже існує.';
$string ['invalidshortname'] = 'Недійсна коротка назва групи.';
$string ['shortnameformat1'] = 'Короткі назви груп можуть мати довжину від 2 до 255 символів і містити лише буквенно-цифрові символи, «.», «-» та «_».';
$string ['Created'] = 'Створено';
$string ['editable'] = 'Редагуєме';
$string ['editability'] = 'Можливість редагування';
$string ['windowstart'] = 'Дата початку';
$string ['windowstartdesc'] = 'Групу не можна редагувати до цієї дати';
$string ['windowend'] = 'Дата завершення';
$string ['windowenddesc'] = 'Групу не можна редагувати після цієї дати';
$string ['editwindowbetween'] = 'Між %s та %s';
$string ['editwindowfrom'] = 'З %s';
$string ['editwindowuntil'] = 'Поки %s';
$string ['groupadmins'] = 'Адміністратори групи';
$string ['editroles1'] = 'Створити та редагувати';
$string ['editrolesdescription1'] = 'Ролі з дозволом на створення і редагування сторінок групи, журналів і файлів.';
$string ['allexceptmember'] = 'Усі, крім звичайних членів';
$string ['Admin'] = 'Адміністратор';
$string ['publiclyviewablegroup'] = 'Публічно видима група';
$string ['publiclyviewablegroupdescription1'] = 'Дозволити будь-кому онлайн переглядати цю групу, включаючи форуми.';
$string ['Type'] = 'Тип';
$string ['publiclyvisible'] = 'Публічно видимий';
$string ['Public'] = 'Публічний';
$string ['usersautoadded'] = 'Автоматичне додавання користувачів';
$string ['usersautoaddeddescription1'] = 'Автоматично додавати до цієї групи будь-якого користувача, який приєднається до сайту.';
$string ['groupcategory'] = 'Категорія групи';
$string ['allcategories'] = 'Усі категорії';
$string ['groupoptionsset'] = 'Опції групи були оновлені.';
$string ['nocategoryselected'] = 'Не вибрано жодної категорії';
$string ['categoryunassigned'] = 'Категорія непризначена';
$string ['hasrequestedmembership'] = 'запросив членство в цій групі';
$string ['hasbeeninvitedtojoin'] = 'запрошено щоб приєднатися до цієї групи ';
$string ['groupinvitesfrom'] = 'Запрошено приєднатися:';
$string ['requestedmembershipin'] = 'Запитуване членство в:';
$string ['viewnotify'] = 'Сповіщення зі спільними сторінками';
$string ['viewnotifydescription2'] = 'Вибір членів групи, які повинні отримувати сповіщення коли створюється нова сторінка групи та коли учасник групи надсилає одну зі своїх сторінок до групи. Член групи, який поділився цією сторінкою, не отримає цього сповіщення. Для дуже великих груп краще обмежити їх не звичайними членами, оскільки це може зробити багато сповіщень. ';
$string ['commentnotify'] = 'Сповіщення коментарів';
$string ['commentnotifydescription1'] = 'Виберіть, які члени групи повинні отримувати сповіщення, коли коментарі розміщуються на сторінках групи та  артефактів.';
$string ['letsendnow'] = 'Відразу надсилати повідомлення форуму';
$string ['letsendnowdescription1'] = 'Будь-який учасник групи може відразу відправити повідомлення на форумі. Якщо для цього параметра встановлено значення «Вимкнено», це можуть зробити лише адміністратори групи, тьютори та модератори. ';
$string ['hiddengroup'] = 'Приховати групу';
$string ['hiddengroupdescription1'] = 'Приховати цю групу на сторінці «Знайти групи»';
$string ['hidemembers'] = 'Приховати членство';
$string ['hidemembersdescription'] = 'Приховати список учасників групи від не-членів.';
$string ['hidemembersfrommembers'] = 'Приховати членство від учасників';
$string ['hidemembersfrommembersdescription1'] = 'Приховати членів цієї групи. Список членів може бачити лише адміністратори групи. Адміністратори все ще показуються на домашній сторінці групи. ';
$string ['friendinvitations'] = 'Запрошення друзів';
$string ['invitefriendsdescription1'] = 'Дозволити учасникам запрошувати друзів для приєднаня до цієї групи. Незалежно від цього налаштування адміністратори групи можуть завжди надсилати запрошення кожному. ';
$string ['invitefriends'] = 'Запросити друзів';
$string ['Recommendations'] = 'Рекомендації';
$string ['suggestfriendsdescription1'] = 'Дозволити учасникам надсилати рекомендації щодо приєднання цієї групи до своїх друзів за допомогою кнопки на домашній сторінці групи.';
$string ['suggesttofriends'] = 'Рекомендувати друзям';
$string ['userstosendrecommendationsto'] = 'Користувачі, яким буде надіслано рекомендацію';
$string ['suggestgroupnotificationsubject'] = '%s запропонував вам приєднатися до групи';
$string ['suggestgroupnotificationmessage'] = '%s запропонував вам приєднатися до групи «%s» на %s';
$string ['nrecommendationssent'] = array(
    0 => '1 рекомендація надіслана',
    1 => '%d рекомендацій надіслано  ',
);
$string ['suggestinvitefriends'] = 'Ви не можете активувати як запрошення, так і рекомендації.';
$string ['suggestfriendsrequesterror'] = 'Ви можете вмикати рекомендації щодо друзів лише у відкритих групах або групах запитів.';
$string ['editwindowendbeforestart'] = 'Дата завершення має бути після дати початку.';

$string ['editgroupmembership'] = 'Редагувати членство групи';
$string ['editmembershipforuser'] = 'Редагувати членство для %s';
$string ['changedgroupmembership'] = 'Членство в групі успішно оновлено.';
$string ['changedgroupmembershipsubject'] = 'Ваше членство в групі було змінено.';
$string ['addedtongroupsmessage'] = array(
		0 => "%2\$s додав вас до групи:\n\n%3\$s\n\n",
		1 => "%2\$s додав вас до груп:\n\n%3\$s\n\n",
);
$string ['removedfromngroupsmessage'] = array(
		0 => "%2\$s видалив вас з групи:\n\n%3\$s\n\n",
		1 => "%2\$s has видалив вас з груп:\n\n%3\$s\n\n",
);
$string ['cantremovememberfromgroup'] = 'Ви не можете видалити користувачів з %s.';
$string ['current'] = 'Поточний';
$string ['requests'] = 'Запити';
$string ['invites'] = 'Запрошує';

// Використовується для позначення всіх членів групи - НЕ роль групи учасників!
$string ['member'] = 'учасник';
$string ['members'] = 'учасники';
$string ['Members'] = 'Учасники';
$string ['nmembers'] = array(
    '1 учасник',
    '%s учасників',
);

$string ['memberrequests'] = 'Запити на членство';
$string ['rejerequest'] = 'Відхилити запит';
$string ['submittedviews'] = 'Відправлені сторінки';
$string ['submitted'] = 'Відправлено';
$string ['releaseview'] = 'Реліз сторінки';
$string ['releasecollection'] = 'Реліз колекції';
$string ['invite'] = 'Запросити';
$string ['remove'] = 'Видалити';
$string ['updatemembership'] = 'Оновити членство';
$string ['memberchangefailed'] = 'Не вдалося оновити інформацію про членство';
$string ['memberchangesuccess'] = 'Статус членства успішно змінено';
$string ['viewreleasedsubject1'] = 'Ваша сторінка «%s» була випущена %s з групи «%s».';
$string ['viewreleasedmessage1'] = 'Ваша сторінка «%s» була випущена %s з групи «%s».';
$string ['collectionreleasedsubject1'] = 'Ваша колекція «%s» була випущена %s з групи «%s».';
$string ['collectionreleasedmessage1'] = 'Ваша колекція «%s» була випущена %s з групи «%s».';
$string ['viewreleasedsuccess'] = 'Сторінка була випущена успішно.';
$string ['viewreleasedpending'] = 'Сторінку буде випущено після архівування.';
$string ['collectionreleasedsuccess'] = 'Колекція була випущена успішно.';
$string ['collectionreleasedpending '] =' Колекцію буде випущено після архівування. ';
$string ['leavegroup'] = 'Залишити цю групу';
$string ['joingroup'] = 'Приєднатися до цієї групи';
$string ['requestjoingroup'] = 'Запит на приєднання до цієї групи';
$string ['grouphaveinvite'] = 'Вас запросили приєднатися до цієї групи.';
$string ['grouphaveinvitewithrole'] = 'Вас запросили приєднатися до цієї групи з роллю';
$string ['groupnotinvited'] = 'Ви не були запрошені приєднатися до цієї групи.';
$string ['groupinviteaccepted'] = 'Запрошення прийнято успішно. Тепер ви є членом групи. ';
$string ['groupinvitedeclined'] = 'Запрошення відхилено успішно.';
$string ['acceptinvitegroup'] = 'Прийняти';
$string ['reduceinvitegroup'] = 'Відхилити';
$string ['leftgroup'] = 'Ви зараз залишили цю групу.';
$string ['leftgroupfailed'] = 'Помилка залишення групи';
$string ['couldnotleavegroup'] = 'Ви не можете залишити цю групу.';
$string ['joingroup'] = 'Ви тепер є учасником групи.';
$string ['couldnotjoingroup'] = 'Ви не можете приєднатися до цієї групи.';
$string ['membershipcontrolled'] = 'Членство в цій групі контролюється.';
$string ['membershipbyinvitationonly'] = 'Членство в цій групі здійснюється лише за запрошенням.';
$string ['grouprequestsent'] = 'Відправлено запит на членство в групі';
$string ['couldnotrequestgroup'] = 'Не вдалося надіслати запит на членство в групі';
$string ['cannotrequestjoingroup'] = 'Ви не можете просити приєднатися до цієї групи.';
$string ['grouprequestsubject'] = 'Новий запит на членство в групі';
$string ['grouprequestmessage'] = '%s хотів би приєднатися до вашої групи %s.';
$string ['grouprequestmessagereason'] = "%s хотів би приєднатися до вашої групи %s. Причиною приєднання є:\n\n%s";
$string ['cantdeletegroup'] = 'Ви не можете видалити цю групу.';
$string ['groupconfirmdelete'] = 'Це призведе до видалення всіх сторінок, файлів і форумів, які пов\'язані з групою. Ви впевнені, що бажаєте повністю видалити цю групу і весь її контент?';
$string ['deletegroup'] = 'Група успішно видалена';
$string ['deletegroup1'] = 'Видалити групу';
$string ['allmygroups'] = 'Усі мої групи';
$string ['groupsimin'] = 'Групи, в яких є я';
$string ['groupsiown'] = 'Групи, якими я володію';
$string ['groupsiminvitedto'] = 'Групи, до яких я запрошений';
$string ['groupsiwanttojoin'] = 'Групи, до яких я хочу приєднатися';
$string ['groupsicanjoin'] = 'Групи, до яких я можу приєднатися';
$string ['requestedtojoin'] = 'Ви запросили приєднатися до цієї групи';
$string ['groupnotfound'] = 'Група з id %s не знайдена';
$string ['groupnotfoundname'] = 'Група %s не знайдена';
$string ['groupconfirmleave'] = 'Ви впевнені, що хочете залишити цю групу?';
$string ['cantleavegroup'] = 'Ви не можете залишити цю групу.';
$string ['usercantleavegroup'] = 'Цей користувач не може залишити цю групу.';
$string ['usercannotchangetothisrole'] = 'Користувач не може змінити цю роль.';
$string ['leavespecifiedgroup'] = 'Залишити групу «%s» ';
$string ['memberslist'] = 'Учасники:';
$string ['nogroups'] = 'Немає груп';
$string ['deletespecifiedgroup'] = 'Видалити групу «%s»';
$string ['requestjoinspecifiedgroup'] = 'Запит на приєднання до групи «%s»';
$string ['youaregroupmember'] = 'Ви є учасником цієї групи.';
$string ['youaregroupadmin'] = 'Ви адміністратор цієї групи.';
$string ['youowngroup'] = 'Ви є власником цієї групи.';
$string ['groupsnotin'] = 'Групи, де мене немає';
$string ['allgroups'] = 'Усі групи';
$string ['allgroupmembers'] = 'Всі учасники групи';
$string ['trysearchingforgroups'] = 'Спробуйте %ssearching для groups%s, щоб приєднатися.';
$string ['nogroupsfound'] = 'Не знайдено груп.';
$string ['group'] = 'група';
$string ['Group'] = 'Група';
$string ['groups'] = 'групи';
$string ['notamember'] = 'Ви не є членом цієї групи.';
$string ['notmembermayjoin'] = 'Ви повинні приєднатися до групи «%s», щоб побачити цю сторінку.';
$string ['rejerequestsuccess'] = 'Запит на членство в групі успішно відхилено.';
$string ['notpublic'] = 'Ця група не є загальнодоступною.';
$string ['moregroups'] = 'Більше груп';
$string ['deletegroupnotificationsubject'] = 'Група «%s» була видалена ';
$string ['deletegroupnotificationmessage'] = 'Ви були членом групи %s на %s. Цю групу тепер видалено. ';
$string ['hidegroupmembers'] = 'Приховати учасників';
$string ['hideonlygrouptutors'] = 'Приховати тьютора';

// Масове додавання, запрошення
$string ['addmembers'] = 'Додати учасників';
$string ['invitationssent'] = 'відправлено %d запрошень';
$string ['newmembersadded'] = 'Додано %d нових учасників';
$string ['potentialmembers'] = 'Потенційні учасники';
$string ['sendinvitations'] = 'Надіслати запрошення';
$string ['userstobeadded'] = 'Користувачі для додавання';
$string ['userstobeinvited'] = 'Користувачі для запрошень';

// список друзів
$string ['reasonoptional'] = 'Причина (необов\'язково)';
$string ['request'] = 'Запит';

$string ['friendformaddsuccess'] = 'Додано %s до вашого списку друзів';
$string ['friendformremovesuccess'] = 'Вилучено %s з вашого списку друзів';
$string ['friendformrequestsuccess'] = 'Надіслано запит дружби з %s';
$string ['friendformacceptsuccess'] = 'Прийнято запит на дружбу';
$string ['friendformrejectsuccess'] = 'Відхилено запит на дружбу';

$string ['addtofriendslist'] = 'Додати до друзів';
$string ['requestfriendship'] = 'Запитати друзів';

$string ['addedtofriendslistsubject'] = '%s додав вас до друзів';
$string ['addedtofriendslistmessage'] = '%s додав вас до друзів. Це означає, що тепер %s є у вашому списку друзів.' 
    . ' Натисніть на посилання нижче, щоб переглянути сторінку профайлу.';

$string ['requestedfriendlistsubject'] = 'Запит нового друга';
$string ['requestedfriendlistinboxmessage'] = '%s запросив додати його як друга.'
	.'Ви можете зробити це, натиснувши наступне посилання або перейшовши на сторінку списку друзів.';

$string ['requestedfriendlistmessageexplanation'] = '%s запросив додати його як друга.'
	.'Ви можете зробити це, натиснувши на наступне посилання або перейшовши на сторінку списку друзів'
    .'Його причина:
    ';

$string ['removefromfriendslist'] = 'Вилучити з друзів';
$string ['removefromfriends'] = 'Вилучити %s з друзів';
$string ['removedfromfriendslistsubject'] = 'Вилучено зі списку друзів';
$string ['removedfromfriendslistmessage'] = '%s видалив вас зі списку друзів';
$string ['removedfromfriendslistmessagereason'] = '%s видалив вас зі списку друзів. Його причиною було: ';
$string ['cantremovefriend'] = 'Ви не можете видалити цього користувача зі свого списку друзів';

$string ['friendshipalreadyrequested'] = 'Ви просили додати до списку друзів %s';
$string ['friendshipalreadyrequestedowner'] = '%s запросив додати до вашого списку друзів';
$string ['rejectfriendshipreason'] = 'Причина відхилення запиту';
$string ['alreadyfriends'] = 'Ви вже дружите з %s';

$string ['friendrequestacceptedsubject'] = 'Запит на дружбу прийнято';
$string ['friendrequestacceptedmessage'] = '%s прийняв ваш запит про дружбу, і вони були додані до вашого списку друзів.';
$string ['friendrequestrejectedsubject'] = 'Запит на дружбу відхилено';
$string ['friendrequestrejectedmessage'] = '%s відхилив ваш запит про дружбу.';
$string ['friendrequestrejectedmessagereason'] = '%s відхилив ваш запит про дружбу. Їх причиною було: ';
$string ['acceptfriendshiprequestfailed'] = 'Не вдалося прийняти запит про дружбу.';
$string ['addtofriendsfailed'] = 'Не вдалося додати %s до вашого списку друзів.';

$string ['allfriends'] = 'Усі друзі';
$string ['currentfriends'] = 'Поточні друзі';
$string ['pendingfriends'] = 'В очікуванні друзів';
$string ['backtofriendslist'] = 'Повернутися до списку друзів';
$string ['findnewfriends'] = 'Знайти нових друзів';
$string ['Collections'] = 'Колекції';
$string ['Views'] = 'Сторінки';
$string ['Viewscollections'] = 'Сторінки та колекції';
$string ['Files'] = 'Файли';
$string ['noviewstosee'] = 'Нічого, що ви можете бачити';
$string ['whymakemeyourfriend'] = 'Ось чому ви повинні зробити мене своїм другом:';
$string ['approverequest'] = 'Затвердити запит';
$string ['denyrequest'] = 'Відхилити запит';
$string ['pending'] = 'очікує';
$string ['pendingsince'] = 'очікує від %s';
$string ['requestedsince'] = 'запит, оскільки %s';
$string ['trysearchingforfriends'] = 'Спробуйте %ssearching для нових друзів %s, щоб збільшити вашу мережу.';
$string ['nobodyawaitsfriendapproval'] = 'Ніхто не чекає на ваше схвалення, щоб стати вашим другом.';
$string ['sendfriendrequest'] = 'Надіслати запит на дружбу';
$string ['addtomyfriends'] = 'Додати до моїх друзів';
$string ['friendshiprequested'] = 'Запит на дружбу';
$string ['existingfriend'] = 'друг, який існує';
$string ['nosearchresultsfound'] = 'Не знайдено результатів пошуку';
$string ['friend'] = 'друг';
$string ['friends'] = 'друзі';
$string ['user'] = 'користувач';
$string ['users'] = 'користувачі';
$string ['Friends'] = 'Друзі';
$string ['Everyone'] = 'Усі';
$string ['myinstitutions'] = 'Мої заклади';

$string ['friendlistfailure'] = 'Не вдалося змінити ваш список друзів';
$string ['userdoesntwantfriends'] = 'Цей користувач не бажає нових друзів.';
$string ['cannotrequestfriendshipwithself'] = 'Ви не можете просити дружбу з собою.';
$string ['cantrequestfriendship'] = 'Ви не можете просити дружбу з цим користувачем.';

// Повідомлення між користувачами
$string ['messagebody'] = 'Надіслати повідомлення'; // wtf
$string ['sendmessage'] = 'Надіслати повідомлення';
$string ['messagesent'] = 'Повідомлення надіслано';
$string ['messagenotsent'] = 'Не вдалося надіслати повідомлення';
$string ['newusermessage'] = 'Нове повідомлення від %s';
$string ['newusermessageemailbody'] = '%s надіслав вам повідомлення. Щоб переглянути це повідомлення, відвідайте

%s ';
$string ['sendmessageto'] = 'Надіслати повідомлення %s';
$string ['viewmessage'] = 'Переглянути повідомлення';
$string ['Відповідь'] = 'Відповісти';

$string ['denyfriendrequest'] = 'Відхілити запит на дружбу';
$string ['sendfriendshiprequest'] = 'Надіслати %s запит про дружбу';
$string ['cantdenyrequest'] = 'Це не є дійсним запитом про дружбу.';
$string ['cantmessageuser'] = 'Ви не можете надіслати цьому користувачеві повідомлення.';
$string ['cantmessageuserdeleted'] = 'Ви не можете надіслати цьому користувачеві повідомлення, оскільки обліковий запис видалено.';
$string ['cantviewmessage'] = 'Ви не можете переглядати це повідомлення.';
$string ['requestedfriendship'] = 'запитано дружбу';
$string ['notinanygroups'] = 'Ні в яких групах';
$string ['addusertogroup'] = 'Додати до';
$string ['inviteusertojoingroup'] = 'Запросити до';
$string ['invitemembertogroup'] = 'Запросити %s приєднатися до «%s» ';
$string ['cannotinvitetogroup'] = 'Ви не можете запросити цього користувача до цієї групи.';
$string ['useralreadyinvitedtogroup'] = 'Цей користувач вже запрошений або вже є членом цієї групи.';
$string ['removefriend'] = 'Видалити друга';
$string ['denyfriendrequestlower'] = 'Відхилити запит на дружбу';

// Групові взаємодії (дії)
$string ['groupinteractions'] = 'Групова діяльність';
$string ['nointeractions'] = 'У цій групі немає жодної діяльності.';
$string ['notallowedtoeditinteractions'] = 'Вам не дозволено додавати або редагувати діяльність у цій групі.';
$string ['notallowedtodeleteinteractions'] = 'Вам не дозволяється видаляти діяльності в цій групі.';
$string ['interactionsaved'] = '%s успішно збережено';
$string ['deleteinteraction'] = 'Видалити %s «%s» ';
$string ['deleteinteractionsure'] = 'Ви впевнені, що хочете це зробити? Цю дію не можна скасувати. ';
$string ['interactiondeleted'] = '%s видалено успішно';
$string ['addnewinteraction'] = 'Додати новий %s';
$string ['title'] = 'Заголовок';
$string ['Role'] = 'Роль';
$string ['changerole'] = 'Змінити роль';
$string ['changeroleofuseringroup'] = 'Змінити роль %s у %s';
$string ['changerolepermissions'] = 'Зміна ролі %s для %s';
$string ['currentrole'] = 'Поточна роль';
$string ['changerolefromto'] = 'Змінити роль з %s на';
$string ['rolechanged'] = 'Роль змінено';
$string ['removefromgroup'] = 'Видалити з групи';
$string ['userremoved'] = 'Користувача видалено';
$string ['About'] = 'Про';
$string ['aboutgroup'] = 'Про %s';

$string ['Joined'] = 'Зареєстровано';

$string ['invitemembersdescription'] = 'Можна запросити користувачів приєднатися до цієї групи на своїх сторінках профайлу або <a href="%s">відправити декілька запрошень одразу</a>.';
$string ['membersdescription: controlled'] = 'Це група з контролем членства. Ви можете додати користувачів безпосередньо через їхні сторінки профайлу або <a href="%s">додати багато користувачів одночасно</a>. ';

// Переглянути подання
$string ['submit'] = 'Надіслати';
$string ['allowssubmissions'] = 'Дозволяє подання';
$string ['letsubmissions'] = 'Дозволити подання';
$string ['allowssubmissionsdescription1'] = 'Учасники можуть надсилати сторінки до групи, які попередньо будуть заблоковані. Ці сторінки не можна редагувати, доки їх не буде видано тьютором або адміністратором групи.';
$string ['allowssubmissionsdescription'] = 'Учасники можуть надсилати сторінки до групи.';
$string ['letsarchives'] = 'Дозволити архівування подань';
$string ['letsarchivesdescription'] = 'Сторінки / колекції архівуються як архівовані файли Leap2A під час процесу видачі подання.';

// Групові звіти
$string ['report'] = 'Звіт';
$string ['grouphasntcreatedanyviewsyet'] = 'Ця група ще не створила жодної сторінки.';
$string ['noviewssharedwithgroupyet'] = 'Немає жодної сторінки, якою користується ця група.';
$string ['groupsharedviewsscrolled'] = 'Ви прокрутили кінець списку спільних сторінок';
$string ['groupcreatedviewsscrolled'] = 'Ви прокрутили список кінцевих сторінок групи.';
$string ['nnonmembers'] = array(
    '1 не-член',
    '%s не членів',
);
$string ['membercommenters'] = 'Залучені учасники';
$string ['extcommenters'] = 'Залучені не учасники';
$string ['groupparticipationreports'] = 'Звіт про участь';
$string ['groupparticipationreportsdesc1'] = 'Адміністратори групи можуть отримати доступ до звіту, який показує всі групи та спільні сторінки, і хто коментує їх';

$string ['returntogroupportfolios'] = 'Повернутися до сторінок групи та колекцій';