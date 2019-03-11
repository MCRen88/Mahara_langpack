<?php
/**
 *
 * @package    mahara
 * @subpackage skin
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 * @copyright  (C) 2010-2013 Gregor Anzelj <gregor.anzelj@gmail.com>
 *
 */

defined('INTERNAL') || die();

$string ['pluginname'] = 'Назва плагіну';
$string ['myskins'] = 'Скіни';
$string ['siteskinmenu'] = 'Скіни';

$string ['deletethisskin'] = 'Видалити цей скін';
$string ['skindeleted'] = 'Скін видалено';
$string ['cantdeleteskin'] = 'Ви не можете видалити цей скін';
$string ['deletespecifiedskin'] = 'Видалити скін «%s»';
$string ['deleteskinconfirm'] = 'Ви дійсно хочете видалити цей скін? Цю дію не можна буде скасувати';
$string ['deleteskinusedinpages'] = array(
	0 => 'Скін, який ви збираєтеся видалити, використовується на %d сторінці.',
	1 => 'Скін, який ви збираєтеся видалити, використовується у %d сторінках.');
$string ['importskins'] = 'Імпортувати скін(и)';
$string ['importskinsnotice'] = 'Будь ласка, виберіть правильний XML-файл для імпорту, який містить обраний скін.';
$string ['validxmlfile'] = 'Дійсний файл XML';
$string ['notvalidxmlfile'] = 'Файл, який завантажується, не є дійсним файлом XML.';
$string ['import'] = 'Імпорт';
$string ['exportthisskin'] = 'Експортувати цей скін';
$string ['exportspecific'] = 'Експортувати «%s»';
$string ['exportskins'] = 'Експортувати скін(и)';
$string ['createkin'] = 'Створити скін';
$string ['editthisskin'] = 'Редагувати цей скін';
$string ['editsiteskin?'] = 'Це скін сайту. Ви хочете його змінити? ';
$string ['editskin'] = 'Редагувати скін';
$string ['skinsaved'] = 'Скін успішно збережена';
$string ['skinimported'] = 'Скін успішно імпортовано';
$string ['clicktoedit'] = 'Натисніть, щоб редагувати цей скін';
$string ['skinpreview'] = 'Попередній перегляд «%s»';
$string ['skinpreviewedit'] = 'Попередній перегляд «%s» - натисніть для редагування';
$string ['addtofavorites'] = 'Додати в обране';
$string ['addtofavoritesspecific'] = 'Додати «%s» до обраних ';
$string ['removefromfavorites'] = 'Видалити з обраних';
$string ['removefromfavoritesspecific'] = 'Вилучити «%s» з обраних';
$string ['skinaddedtofavorites'] = 'Скін додано до обраних';
$string ['skinremovedfromfavorites'] = 'Скін видалено з обраних';
$string ['cantremoveskinfromfavorites'] = 'Не можливо видалити скін зі списку обраних';
$string ['viewmetadata'] = 'Переглянути інформацію про скін';
$string ['viewmetadataspecific'] = 'Перегляд інформації для «%s»';
$string ['closemetadata'] = 'Закрити інформацію про скін';
$string ['metatitle'] = 'Інформація про скін';
$string ['title'] = 'Заголовок';
$string ['displayname'] = 'Власник';
$string ['description'] = 'Опис';
$string ['creationdate'] = 'Створено';
$string ['modifieddate'] = 'Змінено';

$string ['noskins'] = 'Немає скінів';
$string ['skin'] = 'скін';
$string ['skins'] = 'скіни';

$string ['allskins'] = 'Всі скіни';
$string ['siteskins'] = 'Скіни сайту';
$string ['userskins'] = 'Мої скіни';
$string ['favoritekins'] = 'Улюблені скіни';
$string ['publicskins'] = 'Публічні скіни';
$string ['currentskin'] = 'Поточний скін';
$string ['skinnotselected'] = 'Не вибрано скін';
$string ['noskin'] = 'Без скіну';

// Створити набори шкірних форм
$string ['skingeneraloptions'] = 'Загальне';
$string ['skinbackgroundoptions1'] = 'Фон';
$string ['viewbackgroundoptions'] = 'Фон сторінки';
$string ['viewheaderoptions'] = 'Заголовок сторінки';
$string ['viewcontentoptions1'] = 'Шрифти і кольори';
$string ['viewtableoptions'] = 'Сторінки та кнопки сторінок';
$string ['viewadvancedoptions'] = 'Додатково';

// Створити форму шкіри
$string ['skintitle'] = 'Заголовок скіну';
$string ['skindescription'] = 'Опис скіну';
$string ['skinaccessibility1'] = 'Доступ до скіну';
$string ['privateskinaccess'] = 'Це приватний скін';
$string ['publicskinaccess'] = 'Це публічний скін';
$string ['siteskinaccess'] = 'Це обкладинка сайту';
$string ['Untitled'] = 'Без назви';

$string ['backgroundcolor'] = 'Колір фону';
$string ['bodybgcolor1'] = 'Колір фону';
$string ['viewbgcolor'] = 'Колір фону сторінки';
$string ['textcolor'] = 'Колір тексту';
$string ['textcolordescription'] = 'Це колір звичайного тексту.';
$string ['columncolor'] = 'Колір тексту заголовка';
$string ['headercolordescription'] = 'Це колір заголовка сторінки.';
$string ['highlightizedcolor'] = 'Підкреслений колір тексту';
$string ['highlightizedcolordescription'] = 'Це колір підзаголовків сторінок і підкресленого тексту.';
$string ['bodybgimage1'] = 'Фонове зображення';
$string ['viewbgimage'] = 'Фонове зображення сторінки';
$string ['backgroundrepeat'] = 'Повторне фонове зображення';
$string ['backgroundrepeatboth'] = 'Повторити обидва напрямки';
$string ['backgroundrepeatx'] = 'Повторити тільки горизонтально';
$string ['backgroundrepeaty'] = 'Повторити тільки вертикально';
$string ['backgroundrepeatno'] = 'Не повторюйте';
$string ['backgroundattachment'] = 'Додаток фонового зображення';
$string ['backgroundfixed'] = 'Виправлено';
$string ['backgroundscroll'] = 'Прокручування';
$string ['backgroundposition'] = 'Положення фонового зображення';
$string ['topleft'] = 'Зліва вгорі';
$string ['top'] = 'До гори';
$string ['topright'] = 'Праворуч вгорі';
$string ['left'] = 'Ліворуч';
$string ['center'] = 'Центр';
$string ['right'] = 'Праворуч';
$string ['bottomleft'] = 'Внизу ліворуч';
$string ['bottom'] = 'До низу';
$string ['bottomright'] = 'Внизу праворуч';
$string ['viewwidth'] = 'Ширина сторінки';

$string ['textfontfamily'] = 'Шрифт тексту';
$string ['headingfontfamily'] = 'Шрифт заголовоку';
$string ['fontsize'] = 'Розмір шрифту';
$string ['fontsizesmallest'] = 'найменший';
$string ['fontsizesmaller'] = 'менший';
$string ['fontsizesmall'] = 'малий';
$string ['fontsizemedium'] = 'середній';
$string ['fontsizelarge'] = 'великий';
$string ['fontsizelarger'] = 'більший';
$string ['fontsizelargest'] = 'найбільший';

$string ['headerlogoimage1'] = 'Логотип';
$string ['headerlogoimagenormal'] = 'Логотип теми за замовчуванням';
$string ['headerlogoimagelight1'] = 'Логотип і текст White Mahara (підходить для темного тла заголовка)';
$string ['headerlogoimagedark1'] = 'Логотип і текст Dark Mahara (підходить для більш світлих фонів заголовків)';

$string ['normallinkcolor'] = 'Звичайний колір посилання';
$string ['hoverlinkcolor'] = 'Підсвічений колір посилання';
$string ['linkunderlined'] = 'Підкреслене посилання';

$string ['tableborder'] = 'Колір межі таблиці';
$string ['tableheader'] = 'Колір фону заголовка';
$string ['tableheadertext'] = 'Колір тексту заголовка';
$string ['tableoddrows'] = 'Колір фону для непарних рядків';
$string ['tableevenrows'] = 'Колір фону для парних рядків';

$string ['normalbuttoncolor'] = 'Звичайний колір кнопки';
$string ['hoverbuttoncolor'] = 'Підсвічений колір кнопки';
$string ['buttontextcolor'] = 'Колір тексту кнопки';

$string ['skincustomcss'] = 'Спеціальний CSS';
$string ['skincustomcssdescription'] = 'Спеціальні CSS не працює в скінах попереднього перегляду зображення';

$string ['chooseviewskin'] = 'Вибрати скін сторінки';
$string ['chooseskin'] = 'Вибрати скін';
$string ['notsavedyet'] = 'Ще не збережено.';
$string ['notcompatiblewiththeme'] = 'Ваша Mahara тема сайту «%s» не підтримує скіни сторінок. Це означає, що вибраний вами скін не вплине на те, як ви побачите цю сторінку, але це може вплинути на зовнішній вигляд сторінки для інших користувачів, які переглядають сайт з іншою темою. ';
$string ['notcompatiblewithpagetheme'] = 'Тема цієї сторінки «%s» не підтримує скіну сторінок. Вибраний тут скін не вплине на зовнішній вигляд сторінки, доки не буде вибрано іншу тему. ';
$string ['viewskinchanged'] = 'Змінено скін сторінки';
$string ['manage'] = 'Керування скінами';


// * ШКІРИ - ФОНТИ САЙТУ * //
$string ['sitefontsmenu'] = 'Шрифти';
$string ['sitefonts'] = 'Шрифти';
$string ['sitefontsdescription'] = '<p>Наступні шрифти були встановлені на вашому сайті для використання у скінах.</p>';
$string ['installfontinstructions'] = '<p>Додайте шрифти, які дозволяють вбудування у веб-сторінки за допомогою правила CSS @font-face. Пам\'ятайте, що не всі автори/фундатори це дозволяють.</p>
<p>
Коли ви знайдете відповідний безкоштовний шрифт, який ви дозволите вбудовувати у веб-сторінку, його потрібно перетворити на такі формати:<br />
TrueType Font, Embedded OpenType Font, Web Open Font Format Font and Scalable Vector Graphic Font.
</p>
<p>
Ви можете скористатися <a href="http://www.fontsquirrel.com/fontface/generator/">FontSquirrel Online Generator</a> для конверсії.
</p> ';

$string ['nofonts'] = 'Немає шрифтів.';
$string ['font'] = 'шрифт';
$string ['fonts'] = 'шрифти';

$string ['installfont'] = 'Встановити шрифт';
$string ['fontinstalled'] = 'Шрифт успішно встановлено';
$string ['addfontvariant'] = 'Додати стиль шрифту';
$string ['fontvariantadded'] = 'Стиль шрифту додано успішно';

$string ['editfont'] = 'Редагувати шрифт';
$string ['fontedited'] = 'Шрифт відредаговано успішно';
$string ['editproperties'] = 'Редагувати властивості шрифту';
$string ['viewfontspecimen'] = 'Переглянути зразок шрифту';
$string ['viewfontspecimenfor'] = 'для «%s»';
$string ['deletefont'] = 'Видалити шрифт';
$string ['deletespecifiedfont'] = 'Видалити шрифт «%s» ';
$string ['deletefontconfirm1'] = 'Ви дійсно хочете видалити цей шрифт?';
$string ['deletefontconfirm2'] = 'Цю дію не можна скасувати.';
$string ['deletefontconfirmused'] = array(
	'Цей шрифт використовується у %s скіні. ',
	'Цей шрифт використовується у %s скінах',
);
$string ['fontdeleted'] = 'Шрифт видалено';
$string ['cantdeletefont'] = 'Ви не можете видалити цей шрифт.';

$string ['fontname'] = 'Назва шрифту';
$string ['invalidfonttitle'] = 'Неправильний заголовок шрифту. Він повинен містити принаймні один буквено-цифровий символ. ';
$string ['genericfontfamily'] = 'Родинні шрифти';

$string ['fontstyle'] = 'Стиль шрифту';
$string ['regular'] = 'Регулярний';
$string ['bold'] = 'Жирний';
$string ['italic'] = 'Курсив';
$string ['bolditalic'] = 'Жирний курсив';

$string ['fonttype'] = 'Тип шрифту';
$string ['headerandtext'] = 'Заголовок і текст';
$string ['headingonly'] = 'Лише заголовок';

$string ['fontuploadinstructions'] = '<br /> Щоб завантажити потрібні файли шрифтів, можна або завантажити файл ZIP, створений за допомогою <a href="http://www.fontsquirrel.com/fontface/generator/">FontSquirrel Online Generator</a>
<br /> або завантажити окремі файли EOT, SVG, TTF, WOFF та файли індивідуальних ліцензій. ';
$string ['fontfiles'] = 'Файли шрифтів';
$string ['fontfilemissing'] = 'Файл ZIP не містить файл шрифту «%s»';
$string ['zipfontfiles'] = 'Файли шрифтів у архіві ZIP';
$string ['fontfilezip'] = 'Архів ZIP';
$string ['zipdescription'] = 'Файл ZIP, що містить файли EOT, SVG, TTF, WOFF і ліцензії для шрифту';
$string ['fontfileeot'] = 'Файл шрифту EOT';
$string ['eotdescription'] = 'Шрифт OpenType (для Internet Explorer 4+) ';
$string ['notvalidfontfile'] = 'Це не правильний файл шрифту %s.';
$string ['nosuchfont'] = 'Немає шрифту з наведеним ім\'ям.';
$string ['fontfilesvg'] = 'Файл шрифту SVG';
$string ['svgdescription'] = 'Шрифт векторної графіки, що масштабується (для iPad і iPhone)';
$string ['fontfilettf'] = 'Файл шрифту TTF';
$string ['ttfdescription'] = 'Шрифт TrueType (для Firefox 3.5+, Opera 10+, Safari 3.1+, Chrome 4.0.249.4+)';
$string ['fontfilewoff'] = 'Файл шрифту WOFF';
$string ['woffdescription'] = 'Web Open Font Format шрифт (для Firefox 3.6+, Internet Explorer 9+, Chrome 5+)';
$string ['fontfilelicence'] = 'Файл ліцензії';
$string ['fontnotice'] = 'Повідомлення про шрифт';
$string ['fontnoticedescription'] = 'Один рядок додано до файлу CSS, що описує шрифт і автора.';
$string ['filepathnotwritable'] = 'Не вдається записати файли до «%s»';

$string ['showfonts'] = 'Показати';
$string ['fonttypes.all'] = 'Усі шрифти';
$string ['fonttype.site'] = 'Локальний шрифт';
$string ['fonttypes.site'] = 'Локальні шрифти';
$string ['fonttype.google'] = 'Веб-шрифт Google';
$string ['fonttypes.google'] = 'Веб-шрифти Google';

// Приклади панграм: http://en.wikipedia.org/wiki/List_of_pangrams
$string ['preview'] = 'Попередній перегляд';
$string ['samplesize'] = 'Розмір';
$string ['samplesort'] = 'Сортування';
$string ['sampletext'] = 'Текст';
$string ['samplefonttitle'] = 'Назва шрифту';
$string ['sampletitle11'] = 'Латинський алфавіт (тільки ASCII)';
$string ['sampletext11'] = 'Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Мм Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz';
$string ['sampletitle12'] = 'Латинський алфавіт (ISO/IEC 8859-1)';
$string ['sampletext12'] = 'Àà Áá Ââ Ãã Ää Åå Ææ Çç Èè Éé Êê Ëë Ìì Íí Îî Ïï Ðð Ññ Òò Óó Ôô Õõ Öö Øø Ùù Úú Ûû Üü Ýý Þþ ß';
$string ['sampletitle13'] = 'Латинський алфавіт (ISO/IEC 8859-2)';
$string ['sampletext13'] = 'Āā Ăă Ąą Ćć Čč Ďď Đđ Ēē Ėė Ęę Ěě Ğğ Ģģ Īī Ĭĭ Įį İı Ķķ Ĺĺ Ļļ Ľľ Łł Ńń Ņņ Ňň Ōō Őő Œœ Ŕŕ Ŗŗ Řř Śś Şş Šš Ţţ Ťť Ūū Ŭŭ Ůů Űű Ųų Źź Żż Žž ſ';
$string ['sampletitle14'] = 'Кириличний алфавіт (ISO/IEC 8859-5)';
$string ['sampletext14'] = 'Аа Бб Вв Гг Дд Ее Ёё Жж Зз Ии Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Фф Хх Цц Чч Шш Щщ Ъъ Ыы Ьь Ээ Юю Яя';
$string ['sampletitle15'] = 'Грецький алфавіт (ISO/IEC 8859-7)';
$string ['sampletext15'] = 'Αα Ββ Γγ Δδ Εε Ζζ Ηη Θθ Ιι Κκ Λλ Μμ Νν Ξξ Οο Ππ Ρρ Σσς Ττ Υυ Φφ Χχ Ψψ Ωω';
$string ['sampletitle18'] = 'Числа і дріб';
$string ['sampletext18'] = '1 2 3 4 5 6 7 8 9 0 ¼ ½ ¾ ⅓ ⅔ ⅛ ⅜ ⅝ ⅞ ¹ ² ³';
$string ['sampletitle19'] = 'Пунктуація';
$string ['sampletext19'] = '& ! ? » « @ $ € § * # %% / () \ {} []';
$string ['sampletitle20'] = 'Lorem ipsum ...';
$string ['sampletext20'] = 'Вибрані дані, що допомагають приєднатись до конфігурації.';
$string ['sampletitle21'] = 'Змочущій чарівник ...';
$string ['sampletext21'] = 'Зламиваючі майстри роблять токсичні відвари для зла королеви і Джека.';
$string ['sampletitle22'] = 'Швидка коричнева лисиця ...';
$string ['sampletext22'] = 'Швидка коричнева лисиця перестрибує через ледачу собаку.';

// * ШКІРИ - GOOGLE WEB FONTS * //
$string ['installgwfont'] = 'Встановити шрифт(и) Google';
$string ['archivereadingerror'] = 'Помилка читання архіву ZIP.';
$string ['gwfontadded'] = 'Шрифт(и) Google успішно встановлено';
$string ['gwfontsnotavailable'] = 'Шрифти Google зараз недоступні.';

$string ['gwfinstructions'] = '<ol>
<li> Відвідайте <a href="http://www.google.com/fonts/"> шрифти Google </a> </li>
<li> Виберіть шрифти та додайте їх до своєї колекції </li>
<li> Вивантажте шрифти з колекції, як файл ZIP </li>
<li> Завантажити цей файл ZIP у цій формі </li>
<li> Втановіть шрифт(и) Google </li>
</ol> ';
$string ['gwfzipfile'] = 'Дійсний файл ZIP';
$string ['gwfzipdescription'] = 'Дійсний файл ZIP, який містить всі вибрані шрифти Google для встановлення.';
$string ['notvalidzipfile'] = 'Це не вірний ZIP-файл.';

$string ['fontlicence'] = 'Ліцензія на шрифт';
$string ['fontlicencenotfound'] = 'Ліцензія на шрифт не знайдена';

$string ['fontsort.alpha'] = 'Алфавіт';
$string ['fontsort.date'] = 'Дата додавання';
$string ['fontsort.popularity'] = 'Популярність';
$string ['fontsort.style'] = 'Кількість стилів';
$string ['fontsort.trending'] = 'Тенденції';
$string['previewheading'] = 'Lorem ipsum';
$string['previewsubhead1'] = 'Scriptum';
$string['previewsubhead2'] = 'Imago';
$string['previewtextline1'] = 'Lorem ipsum dolor sit amet,';
$string['previewtextline2'] = 'consectetur adipiscing elit.';
$string['previewtextline3'] = 'Donec cursus orci turpis.';
$string['previewtextline4'] = 'Donec et bibendum augue.';
$string['previewtextline5'] = 'Vestibulum ante ipsum primis';
$string['previewtextline6'] = 'in faucibus orci luctus et';
$string['previewtextline7'] = 'ultrices posuere cubilia Curae;';
$string['previewtextline8'] = 'Cras odio enim, sodales at';
$string['previewtextline9'] = 'rutrum et, sollicitudin non nisi.';