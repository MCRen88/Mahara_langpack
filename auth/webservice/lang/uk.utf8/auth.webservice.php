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

$string ['webservice'] = 'Веб-служби';
$string ['title'] = 'Веб-служби';
$string ['description'] = 'Користувачі лише веб-служб, які автентифікувалися щодо бази даних Mahara';
$string ['webservicesconfig'] = 'Конфігурація';
$string ['webservicesconfigdesc'] = 'Тут ви можете налаштувати різні правила веб-сервісів і включити або вимкнути їх.';
$string ['webservicesconfigdescshort'] = 'Налаштування та керування доступом до веб-служб для вашого сайту';
$string ['webserviceconnectionsconfigdesc'] = "Встановити об'єкти підключення, які можуть використовувати зареєстровані плагіни для зв'язку з зовнішніми системами";
$string ['completeregistration'] = 'Повна реєстрація';
$string ['emailalreadytaken'] = 'Ця адреса електронної пошти вже зареєстрована тут';
$string ['iagreetothetermsandconditions'] = 'Я погоджуюся з Умовами.';
$string ['passwordinvalidform1'] = 'Ваш пароль повинен містити принаймні %s символів. Паролі чутливі до регістру і повинні відрізнятися від вашого імені користувача. Ваш пароль повинен містити %s. ';
$string ['registeredemailsubject'] = 'Ви зареєструвались на %s';
$string ['Registeredemailmessagetext'] = 'Привіт %s,

Дякуємо за реєстрацію облікового запису на %s. Перейдіть за цим посиланням
завершити процес реєстрації:

%s register.php? ключ = %s

Термін дії посилання закінчується через 24 години.

-
З повагою,
Команда %s ';
$string ['registeredemailmessagehtml'] = '<p> Привіт %s, </p>
<p> Дякуємо за реєстрацію облікового запису на %s. Перейдіть за цим посиланням
Щоб завершити процес реєстрації: </p>
<p> <a href="%sregister.php?key=%s">%s register.php? ключ = %s </a> </p>
<p> Посилання закінчується через 24 години. </p>

<pre> -
З повагою,
Команда %s </pre> ';
$string ['registeredok'] = '<p> Ви успішно зареєструвалися. Перевірте свій обліковий запис електронної пошти, щоб дізнатися, як активувати обліковий запис. </p> ';
$string ['registrationnosuchkey'] = 'На жаль, реєстрація не здійснюється за допомогою цього ключа. Можливо, ви чекали більше 24 годин, щоб завершити реєстрацію? Інакше це може бути наша вина. ';
$string ['registrationunsuccessful'] = 'Вибачте, ваша спроба реєстрації була невдалою. Це наша вина, а не ваша. Будь-ласка спробуйте пізніше.';
$string ['usernameinvalidform'] = 'Імена користувачів можуть містити літери, цифри та найпоширеніші символи, а довжиною від 3 до 30 символів. Пробіли не дозволені. ';
$string ['usernameinvalidadminform'] = 'Імена користувачів можуть містити літери, цифри та найпоширеніші символи і повинні мати від 3 до 236 символів. Пробіли не дозволені. ';
$string ['youmaynotregisterwithouttandc'] = 'Ви не можете зареєструватися, якщо ви не погоджуєтесь дотримуватися <a href="terms.php"> Загальних положень та умов </a>.';
$string ['pluginconnections'] = "Об'єкти підключення";
$string ['nodefinedconnections'] = 'У жодному плагіні не встановлено підключень до веб-служб. Спочатку визначте підключення. ';
$string ['instancelistempty'] = "Немає об'єктів підключення для цієї установи.";
$string ['addconnection'] = 'Додати підключення клієнта';
$string ['editconnection'] = 'Редагувати підключення клієнта';
$string ['clientconnections'] = "Клієнтське з'єднання";
$string ['plugin'] = 'Плагін підключення';
$string ['clienturl'] = 'URL веб-служби';
$string ['password'] = 'Пароль';
$string ['parameters'] = 'Виправлені параметри для передачі';
$string ['certificate'] = 'Сертифікат партнера XML-RPC';
$string ['enable'] = 'Підключення включено';
$string ['json'] = 'Кодування JSON';
$string ['isfatal'] = 'Фатальна помилка';
$string ['type'] = 'Тип веб-служби';
$string ['nameexists'] = "Ім'я вже використовується";
$string ['emptytoken'] = 'Маркер повинен бути наданий';
$string ['emptyuser'] = 'Користувач повинен бути наданий';
$string ['emptyuserpass'] = 'Пароль повинен бути наданий';
$string ['emptycert'] = 'Потрібно надати сертифікат';
$string ['header'] = "Ім'я заголовка";
$string ['useheader'] = 'Поставити аутентифікацію в заголовок';
$string ['invalidauthtypecombination'] = 'Неправильний тип аутентифікації, вибраний для %s';
$string ['emptycertextended'] = "При використанні авторизації на основі сертифіката необхідно також ввести маркер або ім'я користувача / пароль";
$string ['emptyoauthkey'] = 'Ключ споживача повинен бути наданий для OAuth1.x';
$string ['emptyoauthsecret'] = 'Секрет має бути наданий для OAuth1.x';
$string ['consumer'] = 'Ключ користувача';
$string ['secret'] = 'Секрет';

// тут починаються основні веб-сервіси
$string ['control_webservices'] = 'Увімкнути чи вимкнути веб-служби:';
$string ['webservice_requester_enabled_label'] = 'Головний перемикач веб-запитувача';
$string ['webservice_requester_enabled_label2'] = 'Дозволити запити вихідних веб-служб:';
$string ['webservice_provider_enabled_label'] = 'Головний перемикач постачальника веб-послуг';
$string ['webservice_provider_enabled_label2'] = 'Приймати запити вхідних веб-служб:';
$string ['formatdate'] = '';
$string ['webservice_master_switches'] = 'Увімкнути функціональність веб-сервісу';
$string ['connectionsswitch'] = "Увімкнути чи вимкнути керовані клієнтські з'єднання";
$string ['manage_protocols1'] = 'Увімкнути або вимкнути протоколи, що підтримуються в якості постачальника веб-послуг:';
$string ['protocol'] = 'Протокол';
$string ['oauth'] = 'OAuth';
$string ['rest'] = 'REST';
$string ['soap'] = 'SOAP';
$string ['xmlrpc'] = 'XML-RPC';
$string ['manage_certificates'] = 'Це сертифікати, створені як частина <a href="%s"> мереж </a>. Ці значення використовуються Mahara, коли підписи безпеки веб-служб і шифрування включені для певного маркера веб-служб або користувача послуг (тільки XML-RPC і спадщина MNet). ';
$string ['certificates'] = 'Мережеві сертифікати';

$string ['servicefunctiongroups'] = 'Керування групами послуг';
$string ['servicegroup'] = 'Група послуг:%s';
$string ['sfgdescription'] = 'Створити списки функцій у групи послуг, які можуть бути виділені користувачам, дозволеним до виконання.';
$string ['name'] = "Ім'я";
$string ['component'] = 'Компонент';
$string ['customservicegroup'] = '(Custom)';
$string ['functions'] = 'Функції';
$string ['enableervice'] = 'Увімкнути або вимкнути службу';
$string ['restrictuserswarning'] = 'Попередження: для цього сервісу існують користувачі, які не можуть отримати доступ до нього, якщо ви ввімкнули "%s".';
$string ['tokenuserswarning'] = 'Попередження: для цього сервісу існують користувачі, які не можуть отримати доступ до нього, якщо ви вимкнете "%s".';
$string ['usersonly'] = 'Лише користувачі';
$string ['tokensonly'] = 'Лише маркери';
$string ['switchtousers'] = 'Перейти до користувачів';
$string ['switchtotokens'] = 'Перейти до маркерів';
$string ['invalidservice'] = 'Вибрано недійсну послугу';
$string ['invalidfunction'] = 'Вибрано недійсну функцію';
$string ['tokengenerationfailed'] = 'Помилка генерації маркерів';
$string ['parametercannotbevalueoptional'] = "Параметр не може бути необов'язковим";
$string ['invalidresponse'] = 'Недійсна відповідь';
$string ['invalidstatedetected'] = 'Виявлено невірний стан';
$string ['codingerror'] = 'Помилка кодування';
$string ['accessextfunctionnotconf'] = "Доступ до зовнішньої функції не налаштований";
$string ['missingfuncname'] = "Відсутнє ім'я функції";
$string ['invalidretdesc'] = 'Недійсний опис повернення';
$string ['invalidparamdesc'] = 'Неправильний опис параметра';
$string ['missingretvaldesc'] = 'Відсутній опис повернених значень';
$string ['missingparamdesc'] = 'Немає опису параметрів';
$string ['missingimplofmeth'] = 'Відсутній метод реалізації "%s"';
$string ['cannotfindimplfile'] = 'Не вдається знайти файл із реалізацією зовнішньої функції';
$string ['servicenamemustbeunique'] = 'Ця назва вже використовується іншою групою послуг.';
$string ['serviceshortnamemustbeunique'] = "Це коротке ім'я вже використовується іншою групою послуг.";
$string ['apptokens'] = 'Підключення до програми';
$string ['apptokensdesc'] = 'Створення маркерів для доступу до веб-служб';
$string ['connections'] = "Менеджер з'єднань";
$string ['connectionsdesc'] = "Керувати існуючими з'єднаннями веб-служб";
$string ['servicetokens'] = 'Керування маркерами доступу до служб';
$string ['tokens'] = 'Токени доступу до служби';
$string ['users'] = 'Користувачі служби';
$string ['stdescription'] = 'Створити маркери доступу та виділити користувачів групам послуг';
$string ['username'] = 'Користувач';
$string ['owner'] = 'Власник';
$string ['servicename'] = 'Служба';
$string ['generate'] = 'Створити маркер';
$string ['invalidtoken'] = 'Обраний недійсний маркер';
$string ['invalidtokennotsupplied'] = 'Вибраний недійсний токен або не наданий';
$string ['token'] = 'Маркер';
$string ['tokenid'] = 'Маркер "%s"';
$string ['invaliduserselected'] = 'Вибраний недійсний користувач';
$string ['invaliduserselectedinstitution'] = 'Недійсний користувач для маркетингової установи, вибраний з пошуку користувачів';
$string ['noservices'] = 'Не налаштовані служби';
$string ['wssigenc'] = 'Увімкнути безпеку веб-служб (тільки XML-RPC)';
$string ['titlewssigenc'] = 'Безпека веб-служб';
$string ['last_access'] = 'Останній доступ';
$string ['verifier'] = 'Маркер перевірки';
$string ['oob'] = 'Перевірка OAuth поза зоною';
$string ['oobinfo'] = 'Нижче наведено код підтвердження, який дозволить вашій зовнішній програмі мати доступ до затверджених даних. Скопіюйте та вставте код у відповідний запит програми, щоб продовжити. ';
$string ['instructions'] = 'Інструкції';
$string ['webservicelogs'] = 'Журнали веб-служб';
$string ['webservicelogsdesc'] = 'Налаштування та перегляд журналів для веб-служб';
$string ['webservicelogsnav'] = 'Журнали';
$string ['timetaken'] = 'Час зайнято';
$string ['timelogged'] = 'Коли';
$string ['info'] = 'Інформація';
$string ['errors'] = 'Лише помилки';
$string ['manageerviceusers'] = 'Керування користувачами служби';
$string ['sudescription'] = 'Виділяти користувачів на групи послуг та установи. Користувача потрібно налаштовувати лише один раз. Всі користувачі повинні мати метод аутентифікації "webservice". Примірник методу аутентифікації "webservice" користувача повинен бути з установи, до якої вони належать. ';
$string ['serviceuser'] = 'Власник служби';
$string ['serviceusername'] = 'Власник служби "%s"';
$string ['invalidserviceuser'] = 'Вибрано невірний користувач служби';
$string ['nouser'] = 'Будь ласка, виберіть користувача';
$string ['duplicateuser'] = 'Обліковий запис користувача вже налаштовано для веб-служб.';
$string ['servicefunctionlist'] = 'Функції розподіляючої служби';
$string ['sfldescription'] = 'Створити список функцій, доступних для цієї служби.';
$string ['functionname'] = "Ім'я функції";
$string ['classname'] = "Ім'я класу";
$string ['methodname'] = 'Назва методу';
$string ['invalidinput'] = 'Неправильний вхід';
$string ['configsaved'] = 'Конфігурація збережена';
$string ['webservices_title'] = 'Конфігурація веб-служб';
$string ['headerusersearchtoken'] = 'Веб-служби: пошук користувача токена';
$string ['headerusersearchuser'] = 'Веб-сервіси: пошук користувачів послуги';
$string ['usersearchinstructions'] = "Виберіть користувача, який можна зв'язати з веб-службою, натиснувши на його аватар. Ви можете шукати користувачів, натиснувши на ініціали імені та прізвища або ввівши ім'я в поле пошуку. Ви також можете ввести адресу електронної пошти у вікні пошуку, якщо ви бажаєте шукати адреси електронної пошти. ";
$string ['sha1fingerprint'] = 'Відбиток SHA1:%s';
$string ['md5fingerprint'] = 'Відбиток MD5:%s';
$string ['publickeyexpireson'] = 'Відкритий ключ закінчується: %s';

// wsdoc
$string ['function'] = 'Функція';
$string ['wsdocdescription'] = 'Опис';
$string ['component'] = 'Компонент';
$string ['method'] = 'Метод';
$string ['class'] = 'Клас';
$string ['arguments'] = 'Аргументи';
$string ['invalidparameter'] = 'Визначено недійсне значення параметра; виконання не може продовжуватися. ';
$string ['wsdoc'] = 'Документація веб-служб';

// testclient
$string ['testclient'] = 'Клієнт тестування веб-служб';
$string ['testclientnav'] = 'Тестовий клієнт';
$string ['tokenauth'] = 'Маркер';
$string ['userauth'] = 'Користувач';
$string ['certauth'] = 'Сертифікат';
$string ['wsseauth'] = 'WSSE';
$string ['oauth1auth'] = 'OAuth1.x';
$string ['authtype'] = 'Тип аутентифікації';
$string ['sauthtype'] = 'Авторизація';
$string ['enterparameters'] = 'Введіть параметри функції';
$string ['testclientinstructions'] = 'Це інтерактивний клієнт тесту для веб-служб. Це дає змогу вибрати функцію, а потім виконати її у поточній системі. Майте на увазі, що будь-яка функція, яку ви виконуєте, буде виконуватися реально. ';
$string ['execut'] = 'Виклик функції виконано';
$string ['invaliduserpass'] = 'Неправильний пароль для веб-служб / веб-служб, наданий для "%s"';
$string ['invalidtoken'] = 'Введено недійсний маркер веб-служб';
$string ['iterationtitle'] = 'Ітерація %s:%s';
$string ['unabletoruntestclient'] = 'Клієнт тестування веб-сервісу має бути запущений під https у виробничому режимі або у вашому config.php $ cfg-> productionmode = false';

// oauth серверний реєстр
$string ['accesstokens'] = 'Токени доступу OAuth';
$string ['notokens'] = 'У вас немає маркерів додатків';
$string ['externalapps'] = 'Зовнішні програми';
$string ['externalappsdesc'] = 'Зареєструвати зовнішні програми для доступу до веб-служб';
$string ['oauth1'] = 'OAuth1.x';
$string ['externalappsregister'] = 'Реєстрація зовнішніх додатків';
$string ['userapplications1'] = 'Налаштування для зовнішніх програм';
$string ['accessto'] = 'Доступ до';
$string ['application'] = 'Додаток';
$string ['callback'] = 'URI зворотного виклику';
$string ['consumer_key'] = 'Ключ споживача';
$string ['consumer_secret'] = 'Секрет користувача';
$string ['add'] = 'Додати';
$string ['application'] = 'Додаток';
$string ['oauthserverdeleted'] = 'Сервер видалено';
$string ['oauthtokendeleted'] = 'Маркер програми видалено';
$string ['errorregister'] = 'Не вдалося реєструвати сервер';
$string ['application_uri'] = 'URI програми';
$string ['application_title'] = 'Заголовок програми';
$string ['errorupdate'] = 'Не вдалося оновити';
$string ['erroruser'] = 'Недійсний вказаний користувач';
$string ['authorize'] = 'Авторизація доступу до програми';
$string ['oauth_access'] = 'Ця програма матиме доступ до ваших даних і ресурсів користувачів';
$string ['oauth_instructions'] = 'Якщо ви хочете надати доступ до цієї програми, натисніть "Авторизувати доступ до програми". Якщо ви не хочете надавати доступ, натисніть "Скасувати". ';
$string ['setauthinstancefailed'] = 'Встановлення автентифікації "Веб-служби" для установи "%s" не вдалося. Спробуйте додати його через Адміністрування -> Інституції -> Налаштування сторінки. ';

// запуск повідомлень webservices
$string ['accesstofunctionnotallowed'] = 'Доступ до функції %s () заборонено. Перевірте, чи ввімкнено службу, що містить цю функцію. У налаштуваннях служби: Якщо послуга обмежена, перевірте, чи вказано користувачеві. Ще в налаштуваннях служби перевіряються обмеження ІВ або якщо для послуги потрібні можливості. ';
$string ['accessexception'] = 'Виключення контролю доступу';
$string ['accessnotallowed'] = 'Доступ до веб-служби не дозволений';
$string ['addfunction'] = 'Додати функцію';
$string ['addfunctions'] = 'Додати функції';
$string ['addservice'] = 'Додати нову службу: {$ a-> name} (id: {$ a-> id})';
$string ['apiexplorer'] = 'Провідник API';
$string ['arguments'] = 'Аргументи';
$string ['authmethod'] = 'Метод аутентифікації';
$string ['context'] = 'Контекст';
$string ['createtoken'] = 'Створити маркер';
$string ['createtokenforuser'] = 'Створити маркер для користувача';
$string ['createuser'] = 'Створити конкретного користувача ';
$string ['default'] = 'За замовчуванням %s';
$string ['deleteservice'] = 'Видалення служби: {$ a-> name} (id: {$ a-> id})';
$string ['doc'] = 'Документація';
$string ['documentation'] = 'документація для веб-служб';
$string ['allowedocumentation'] = 'Увімкнути документацію для розробників';
$string ['enableprotocols'] = 'Увімкнути протоколи';
$string ['enablews'] = 'Увімкнути веб-служби';
$string ['error'] = 'Помилка:%s';
$string ['errorcodes'] = 'Повідомлення про помилку';
$string ['errorinvalidparam'] = 'Параметр "%s" недійсний.';
$string ['errorinvalidparamsapi'] = 'Недійсний зовнішній параметр api';
$string ['errorinvalidparamsdesc'] = 'Недійсний зовнішній опис API';
$string ['errorinvalidresponseapi'] = 'Недійсний зовнішній відповідь API';
$string ['errorinvalidresponsedesc'] = 'Недійсне опис відповіді зовнішнього API';
$string ['errormissingkey'] = 'Відсутній необхідний ключ в одній структурі:%s';
$string ['errornotemptydefaultparamarray'] = 'Параметр опису веб-сервісу, який називається "%s", є однією або декількома структурами. Типовим може бути тільки порожній масив. Перевірте опис веб-служби. ';
$string ['erroronlyarray'] = 'Приймаються лише масиви.';
$string ['erroroptionalparamarray'] = 'Параметр опису веб-сервісу, який називається "%s", є однією або декількома структурами. Його не можна встановити як VALUE_OPTIONAL. Перевірте опис веб-служби. ';
$string ['errorresponsemissingkey'] = 'Помилка у відповіді: відсутній наступний необхідний ключ в одній структурі:%s';
$string ['errorscalartype'] = "Очікується скалярний тип, отримано масив або об'єкт";
$string ['errorunexpectedkey'] = 'Неочікувані ключі (%s) виявлені в масиві параметрів.';
$string ['errorunexpectedcustomkey'] = 'Неочікувані користувацькі ключі (%s) виявлені в масиві параметрів. Вони ігноруються Махарою. Це повідомлення є інформаційним, тому ви можете переглянути параметри та знати, що вони ігноруються. ';
$string ['execute'] = 'Виконати';
$string ['expires'] = 'Закінчується';
$string ['externalservice'] = 'Зовнішня служба';
$string ['function'] = 'Функція';
$string ['generalstructure'] = 'Загальна структура';
$string ['information'] = 'Інформація';
$string ['invalidlogin'] = "Не вдалося зареєструватися. Будь ласка, перевірте своє ім'я користувача та пароль.";
$string ['invalidaccount'] = 'Неправильний обліковий запис веб-служб: Перевірте конфігурацію користувача служби';
$string ['invalidextparam'] = 'Неправильний параметр зовнішнього API:%s';
$string ['invalidextresponse'] = 'Недійсна відповідь зовнішнього API:%s';
$string ['invalidiptoken'] = 'Неправильний маркер: Ваш IP не підтримується';
$string ['invalidtimedtoken'] = 'Недійсний маркер: термін закінчення терміну дії';
$string ['invalidtoken'] = 'Неправильний маркер: маркер не знайдено';
$string ['invalidtokensession'] = 'Недійсний маркер на основі сеансу: сеанс не знайдено або минув';
$string ['iprestriction'] = 'Обмеження ІР';
$string ['list'] = 'список';
$string ['key'] = 'Ключ';
$string ['missingpassword'] = 'Відсутній пароль';
$string ['missingusername'] = "Відсутнє ім'я користувача";
$string ['notoken'] = 'Список токенів порожній.';
$string ['nowsprotocolsenabled'] = 'Не ввімкнено протоколи веб-служб. Для цього потрібно включити принаймні один <a href="%s"> протокол </a>. ';
$string ['onesystemcontrolling'] = 'Одна система керування махарою з токеном';
$string ['operation'] = 'Операція';
$string ['optional'] = 'Додатково';
$string ['phpparam'] = 'XML-RPC (структура PHP)';
$string ['potusers'] = 'Не авторизовані користувачі';
$string ['print'] = 'Друкувати все';
$string ['protocol'] = 'Протокол';
$string ['removefunction'] = 'Видалити';
$string ['required'] = "Обов'язково";
$string ['resettokenconfirm'] = 'Ви дійсно бажаєте скинути цей ключ веб-сервісу для <strong> {%s} </strong> у службі <strong> {%s} </strong>?';
$string ['response'] = 'Відповідь';
$string ['restcode'] = 'REST';
$string ['restexception'] = 'REST';
$string ['restparam'] = 'REST (параметри POST)';
$string ['restrictusers'] = 'Лише авторизовані користувачі';
$string ['fortokenusers'] = 'Доступ до маркерів користувача';
$string ['usertokens'] = 'Особисті маркери користувача';
$string ['serviceaccess'] = 'Доступ до служби';
$string ['tokenclient'] = 'Клієнтська програма';
$string ['tokenclientunknown'] = '(Не вказано)';
$string ['tokenmanuallycreated'] = 'Створено вручну';
$string ['gen'] = 'Створити';
$string ['no_token'] = 'Маркер не створено';
$string ['token_generated'] = 'Створений токен';
$string ['securitykey'] = 'Ключ безпеки (маркер)';
$string ['selectedcapability'] = 'Вибрано';
$string ['selectspecificuser'] = 'Виберіть конкретного користувача';
$string ['service'] = 'Служба';
$string ['serviceusers'] = 'Авторизовані користувачі';
$string ['servicenamelabel'] = "Ім'я";
$string ['servicenamedesc'] = "Зчитане людиною ім'я цієї групи послуг.";
$string ['serviceshortnamelabel'] = "Коротке ім'я";
$string ['serviceshortnamedesc'] = "Машиночитане ім'я для цієї групи послуг. Це ім'я, яке буде використано, якщо зовнішня служба повинна звертатися до цієї групи послуг. ";
$string ['servicecomponentnote'] = 'Ця служба надає функціональність для компонента "%s"';
$string ['simpleauthlog'] = 'Вхід для простого аутентифікації';
$string ['step'] = 'Крок';
$string ['testclient'] = 'Клієнт тестування веб-служб';
$string ['testclientdescshort'] = 'Тестування веб-служб за допомогою функцій на вашому сайті';
$string ['testclientdescription'] = '* Клієнт тестування веб-служб <strong> виконує </strong> функції для <strong> REAL </strong>. Не тестуйте функції, які ви не знаєте. <br/> * Усі існуючі функції веб-служби ще не впроваджені в тестовий клієнт. <br/> * Щоб перевірити, що користувач не має доступу до деяких функцій, ви можете перевірити деякі функції, які ви не дозволили. <br/> * Щоб побачити більш чіткі повідомлення про помилки, налаштуйте налагодження на <strong> {$ a-> mode} </strong> у {$ a-> atag} <br/> * Доступ до {$ a-> amfatag}. ';
$string ['testwithtestclient'] = 'Перевірити службу';
$string ['tokenauthlog'] = 'Аутентифікація маркера';
$string ['userasclients'] = 'Користувачі як клієнти з токеном';
$string ['validuntil'] = 'Дійсний до';
$string ['wrongusernamepassword'] = "Неправильне ім'я користувача або пароль";
$string ['institutiondenied'] = 'Відмовлено у доступі до установи';
$string ['wsauthnotenabled'] = 'Додаток автентифікації веб-служби вимкнено.';
$string ['wsdocumentation'] = 'Документація веб-служби';
$string ['wspassword'] = 'Пароль веб-служби';
$string ['wsusername'] = "Ім'я користувача веб-служби";
$string ['webservicesenabled'] = 'Веб-сервіси включені';
$string ['webservicesnotenabled'] = 'Вам потрібно включити принаймні один протокол';

// Помилки функцій веб-служби
$string ['nooauth'] = 'Не ввімкнено для OAuth';
$string ['accessdenied'] = 'заборонений доступ';
$string ['accessdeniedforinst'] = 'доступ заборонений для установи "%s"';
$string ['accessdeniedforinstuser'] = 'заборонений доступ для установи "%s" з користувачем "%s"';
$string ['accessdeniedforinstgroup'] = 'доступ заборонений для установи "%s" у групі "%s"';
$string ['usernameexists2'] = "Ім'я користувача '%s' недійсне.";
$string ['invalidauthtype'] = 'Недійсний тип аутентифікації "%s"';
$string ['invalidauthtypeuser'] = 'Недійсний тип аутентифікації "%s" з користувачем "%s"';
$string ['invalidsocialprofile'] = 'Недійсний соціальний профіль "%s"';
$string ['instexceedmax'] = 'Установа перевищила максимально допустимий "%s"';
$string ['cannotdeleteaccount'] = 'не може видалити обліковий запис, який був використаний і не призупинено. Ідентифікатор користувача "%s" ';
$string ['nousernameorid'] = 'ні ім"я користувача, ні ідентифікатор';
$string ['nousernameoridgroup'] = 'ні ім"я користувача, ні ідентифікатор для групи "%s"';
$string ['invaliduser'] = 'недійсний користувач "%s"';
$string ['invaliduserid'] = 'недійсний ідентифікатор користувача "%s"';
$string ['invalidusergroup'] = 'неправильний користувач "%s" для групи "%s"';
$string ['mustsetauth'] = 'має встановити авторизацію та установу для оновлення авторизації користувача "%s"';
$string ['invalidusername'] = 'Неправильне ім"я користувача "%s"';
$string ['invalidremoteusername'] = 'Недійсне віддалене ім"я користувача "%s"';
$string ['musthaveid'] = 'Потрібно мати ідентифікатор, ідентифікатор користувача або ім"я користувача';
$string ['notauthforuseridinstitution'] = 'Не дозволено доступ до ідентифікатора користувача "%s" для установи "%s"';
$string ['notauthforuseridinstitutiongroup'] = 'Не дозволено доступ до ідентифікатора користувача "%s" для установи "%s" до групи "%s"';
$string ['invalidfavourite'] = 'Неправильний фаворит "%s"';
$string ['groupexists'] = 'Група вже існує "%s"';
$string ['instmustbeongroup'] = 'установа повинна бути встановлена ​​в групі "%s"';
$string ['noname'] = 'не вказано ім"я або коротке ім"я';
$string ['catinvalid'] = 'категорія "%s " недійсна';
$string ['invalidjointype'] = 'неприпустима комбінація типу приєднання "%s"';
$string ['correctjointype'] = 'необхідно вибрати правильний тип об"єднання, відкрити, запитувати та / або керувати';
$string ['groupeditroles'] = 'ролі редагування групи вказані "%s" повинні бути однією з:%s';
$string ['invalidmemroles'] = 'Неправильна роль членства групи "%s" для користувача "%s"';
$string ['groupnotexist'] = 'Група "%s" не існує ';
$string ['instmustset'] = 'установа повинна бути встановлена ​​для "%s"';
$string ['nogroup'] = 'не вказано жодної групи';
$string ['membersinvalidaction'] = 'неправильна дія "%s" для користувача "%s" у групі "%s"';
$string ['passwordmustbechangedviawebsite'] = 'Вам потрібно змінити пароль. Щоб оновити пароль, увійдіть через веб-переглядач. ';
$string ['featuredisabled'] = 'Ця функція веб-служб не активована. Для отримання додаткової інформації зверніться до адміністратора сайту. ';
$string ['institutionunknown'] = '- невідомо -';
$string ['unabletodeleteadmin'] = 'Неможливо видалити користувача з ідентифікатором "%s", оскільки він є адміністратором';
$string ['notuserblog'] = 'Журнал не належить "%s"';
