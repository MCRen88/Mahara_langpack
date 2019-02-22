<?php
/**
 *
 * @package    mahara
 * @subpackage auth-internal
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string ['title'] = 'LDAP';
$string ['ldapconfig'] = 'Конфігурація LDAP';
$string ['description'] = 'Перевірка автентичності на сервері LDAP';
$string ['notusable'] = 'Будь ласка, встановіть розширення PHP LDAP';
$string ['attributename'] = 'Ім"я атрибута LDAP, що використовується для синхронізації груп на основі його значень (обов"язково і має відповідати випадку)';
$string ['cannotdeleteandsuspend'] = 'Не вдається вказати -d і -s одночасно.';
$string ['cli_info_sync_groups'] = 'Цей скрипт PHP командного рядка спробує синхронізувати список установ з каталогом LDAP.
Відсутні групи будуть створені і названі як "назва установи: назва групи LDAP". ';
$string ['cli_info_sync_groups_attribute'] = 'Цей скрипт PHP командного рядка спробує синхронізувати список установ з каталогом LDAP
на основі різних значень атрибута LDAP.
Відсутні групи будуть створені і названі як "назва установи: значення атрибута LDAP';
$string ['cli_info_sync_users'] = 'Цей скрипт PHP командного рядка спробує синхронізувати список установ з облікових записів Mahara з каталогом LDAP.';
$string ['contexts'] = 'Контексти';
$string ['distinishedname'] = 'Відмінне ім"я';
$string ['dodelete'] = 'Видаляти облікові записи не в LDAP';
$string ['dosuspend'] = 'Призупинення облікових записів більше не в LDAP';
$string ['doupdate'] = 'Оновити існуючі облікові записи з даними LDAP (long)';
$string ['dryrun'] = 'Виконання. Не виконувати жодних операцій бази даних ';
$string ['excludelist'] = 'Виключити групи LDAP, що збігаються з цими регулярними виразами в їхніх іменах';
$string ['extrafilterattribute'] = 'Додатковий фільтр LDAP для обмеження пошуку користувачів';
$string ['grouptype'] = 'Тип групи Mahara для створення; за замовчуванням - "стандартний"';
$string ['hosturl'] = 'URL хосту';
$string ['includelist'] = 'Обробляти тільки групи LDAP, що збігаються з цими регулярними виразами у своїх іменах';
$string ['institutionname'] = 'Назва установи для обробки (обов"язкова)';
$string ['ldapfieldforpreferredname'] = 'Поле LDAP для відображуваного імені';
$string ['ldapfieldforemail'] = 'Поле LDAP для електронної пошти';
$string ['ldapfieldforfirstname'] = 'поле LDAP для першого імені';
$string ['ldapfieldforsurname'] = 'Поле LDAP для прізвища';
$string ['ldapfieldforstudentid'] = 'LDAP поле для ідентифікації студента';
$string ['ldapversion'] = 'Версія LDAP';
$string ['loginlink'] = 'Дозволити користувачам пов"язувати власний обліковий запис';
$string ['nocreate'] = 'Не створювати нові облікові записи';
$string ['nocreatemissinggroups'] = 'Не створювати групи LDAP, якщо вони ще не створені в установі.';
$string ['nomatchingauths'] = 'Не знайдено модуль аутентифікації LDAP для цієї установи';
$string ['starttls'] = 'Шифрування TLS';
$string ['password'] = 'Пароль';
$string ['searchcontexts'] = 'Обмежити пошук у цих контекстах (перевизначити значення, встановлені в модулі аутентифікації)';
$string ['searchsubcontexts'] = 'Пошук підтекстів';
$string ['searchsubcontextscliparam'] = 'Пошук (1) чи ні (0) у субконтекстах (перевизначення значень, встановлених у модулі аутентифікації)';
$string ['syncgroupsautocreate'] = 'Автоматичне створення відсутніх груп';
$string ['syncgroupsbyclass'] = 'Синхронізовані групи, що зберігаються як об"єкти LDAP';
$string ['syncgroupsbyuserfield'] = 'Синхронізовані групи, що зберігаються як атрибути користувача';
$string ['syncgroupscontexts'] = 'Синхронізація груп тільки в цих контекстах';
$string ['syncgroupscontextsdesc'] = 'Залиште пустим значення за умовчанням для контекстів аутентифікації користувачів';
$string ['syncgroupscron'] = 'Синхронізація груп автоматично через завдання cron';
$string ['syncgroupsexcludelist'] = 'Виключити групи LDAP з цими іменами';
$string ['syncgroupsgroupattribute'] = 'Атрибут групи';
$string ['syncgroupsgroupclass'] = 'Груповий клас';
$string ['syncgroupsgrouptype'] = 'Типи ролей у авто-створених групах';
$string ['syncgroupsincludelist'] = 'Включити тільки групи LDAP з цими іменами';
$string ['syncgroupsmemberattribute'] = 'Атрибут члена групи';
$string ['syncgroupsmemberattributeisdn'] = 'Атрибут користувача - це dn?';
$string ['syncgroupsnestedgroups'] = 'Обробляти вкладені групи';
$string ['syncgroupssettings'] = 'Синхронізація групи';
$string ['syncgroupsuserattribute'] = 'Назва групи атрибутів користувача зберігається в';
$string ['syncgroupsusergroupnames'] = 'Лише ці назви груп';
$string ['syncgroupsusergroupnamesdesc'] = 'Залиште порожнім, щоб прийняти будь-яке значення. Розділіть імена груп комами. ';
$string ['syncuserscreate'] = 'Автоматичне створення користувачів у cron';
$string ['syncuserscron'] = 'Синхронізувати користувачів автоматично через завдання cron';
$string ['syncusersextrafilterattribute'] = 'Додатковий фільтр LDAP для синхронізації';
$string ['syncuserssettings'] = 'Синхронізація користувача';
$string ['syncusersupdate'] = 'Оновити інформацію користувача в cron';
$string ['syncusersgonefromldap'] = 'Якщо користувач більше не присутній у LDAP';
$string ['syncusersgonefromldapdonothing'] = 'Нічого не робити';
$string ['syncusersgonefromldapsuspend'] = 'Призупинити обліковий запис користувача';
$string ['syncusersgonefromldapdelete'] = 'Видалити обліковий запис користувача і весь його вміст';
$string ['userattribute'] = 'Атрибут користувача';
$string ['usertype'] = 'Тип користувача';
$string ['weautocreateusers'] = 'Ми автоматично створюємо користувачів';
$string ['updateuserinfoonlogin'] = 'Оновити інформацію про вхід користувача';
$string ['cannotconnect'] = 'Не вдається підключитися до хостів LDAP';
