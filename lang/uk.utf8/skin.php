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

$string ['pluginname'] = 'Ім"я плагіну';
$string ['myskins'] = 'Обкладинки';
$string ['siteskinmenu'] = 'Обкладинки';
$string ['deletethisskin'] = 'Видалити цю обкладинку';
$string ['skindeleted'] = 'Скін видалено';
$string ['cantdeleteskin'] = 'Ви не можете видалити цю обкладинку';
$string ['deletespecifiedskin'] = 'Видалити обкладинку \ _ "% s" \ _';
$string ['deleteskinconfirm'] = 'Ви дійсно хочете видалити цю обкладинку? Її не можна скасувати';
$string ['deleteskinusedinpages'] = array(
	0 => 'обкладинку, яку ви збираєтеся видалити, використовується на сторінці % d.',
	1 => 'обкладинку, яку ви збираєтеся видалити, використовується у % d сторінках.');
$string ['importskins'] = 'Імпортувати обкладинку';
$string ['importskinsnotice'] = 'Будь ласка, виберіть правильний XML-файл для імпорту, який містить обрану обкладинку.';
$string ['validxmlfile'] = 'Дійсний файл XML';
$string ['notvalidxmlfile'] = 'Завантажений файл не є дійсним файлом XML.';
$string ['import'] = 'Імпорт';
$string ['exportthisskin'] = 'Експортувати цю обкладинку';
$string ['exportspecific'] = 'Експортувати "% s"';
$string ['exportskins'] = 'Експортувати обкладинку';
$string ['createkin'] = 'Створити обкладинку';
$string ['editthisskin'] = 'Редагувати цю обкладинку';
$string ['editsiteskin?'] = 'Це обкладинка сайту. Ви хочете її змінити? ';
$string ['editskin'] = 'Редагувати обкладинку';
$string ['skinsaved'] = 'Копія успішно збережена';
$string ['skinimported'] = 'обкладинка успішно імпортована';
$string ['clicktoedit'] = 'Натисніть, щоб редагувати цю обкладинку';
$string ['skinpreview'] = 'Попередній перегляд "% s"';
$string ['skinpreviewedit'] = 'Попередній перегляд "% s" - натисніть для редагування ';
$string ['addtofavorites'] = 'Додати до вибраного';
$string ['addtofavoritesspecific'] = 'Додати до % s до обраного ';
$string ['removefromfavorites'] = 'Видалити з обраних';
$string ['removefromfavoritesspecific'] = 'Вилучити "% s" з вибраного ';
$string ['skinaddedtofavorites'] = 'Обкладинку додано до обраного';
$string ['skinremovedfromfavorites'] = 'Обкладинку видалено з вибраного';
$string ['cantremoveskinfromfavorites'] = 'Можна видалити обкладинку зі списку вибраного';
$string ['viewmetadata'] = 'Перегляд інформації про обкладинку';
$string ['viewmetadataspecific'] = 'Перегляд інформації для "% s"';
$string ['closemetadata'] = 'Закрити інформацію про обкладинку';
$string ['metatitle'] = 'Інформація про обкладинку';
$string ['title'] = 'Заголовок';
$string ['displayname'] = 'Власник';
$string ['description'] = 'Опис';
$string ['creationdate'] = 'Створено';
$string ['modifieddate'] = 'Змінено';
$string ['noskins'] = 'Немає скінів';
$string ['skin'] = 'обкладинка';
$string ['skins'] = 'обкладинки';
$string ['allskins'] = 'Усі обкладинки';
$string ['siteskins'] = 'Обкладини сайту';
$string ['userskins'] = 'Мої обкладинки';
$string ['favoritekins'] = 'Улюблені обкладинки';
$string ['publicskins'] = 'Публічні обкладинки';
$string ['currentskin'] = 'Поточна обкладинка';
$string ['skinnotselected'] = 'Не вибрано обкладинку';
$string ['noskin'] = 'Без обкладинки';

// Створити набори шкірних форм
$string ['skingeneraloptions'] = 'Загальні';
$string ['skinbackgroundoptions1'] = 'Фон';
$string ['viewbackgroundoptions'] = 'Фон сторінки';
$string ['viewheaderoptions'] = 'Заголовок сторінки';
$string ['viewcontentoptions1'] = 'Шрифти і кольори';
$string ['viewtableoptions'] = 'Сторінки та кнопки сторінок';
$string ['viewadvancedoptions'] = 'Додатково';

// Створити форму шкіри
$string ['skintitle'] = 'Заголовок обкладинки';
$string ['skindescription'] = 'Опис обкладинки';
$string ['skinaccessibility1'] = 'Доступ до обкладинки';
$string ['privateskinaccess'] = 'Це приватна обкладинка';
$string ['publicskinaccess'] = 'Це відкрита обкладинка';
$string ['siteskinaccess'] = 'Це обкладинка сайту';
$string ['Untitled'] = 'Без назви';
$string ['backgroundcolor'] = 'Колір';
$string ['bodybgcolor1'] = 'Колір оформлення';
$string ['viewbgcolor'] = 'Колір сторінки';
$string ['textcolor'] = 'Колір тексту';
$string ['textcolordescription'] = 'Це колір звичайного тексту.';
$string ['columncolor'] = 'Колір тексту заголовка';
$string ['headercolordescription'] = 'Це колір заголовка сторінки.';
$string ['highlightizedcolor'] = 'Підкреслений колір тексту';
$string ['highlightizedcolordescription'] = 'Це колір підзаголовків сторінок і підкресленого тексту.';
$string ['bodybgimage1'] = 'Фонове зображення';
$string ['viewbgimage'] = 'Фонове зображення сторінки';
$string ['backgroundrepeat'] = 'Повторне фонове зображення';
$string ['backgroundrepeatboth'] = 'Повторіть обидва напрямки';
$string ['backgroundrepeatx'] = 'Повторити тільки горизонтально';
$string ['backgroundrepeaty'] = 'Повторити тільки вертикально';
$string ['backgroundrepeatno'] = 'Не повторюйте';
$string ['backgroundattachment'] = 'Додаток до фонового зображення';
$string ['backgroundfixed'] = 'Виправлено';
$string ['backgroundscroll'] = 'Прокручування';
$string ['backgroundposition'] = 'Положення фонового зображення';
$string ['topleft'] = 'Зліва вгорі';
$string ['top'] = 'Верх';
$string ['topright'] = 'Праворуч праворуч';
$string ['left'] = 'Ліворуч';
$string ['center'] = 'Центр';
$string ['right'] = 'Право';
$string ['bottomleft'] = 'Внизу ліворуч';
$string ['bottom'] = 'Нижній';
$string ['bottomright'] = 'Нижній праворуч';
$string ['viewwidth'] = 'Ширина сторінки';
$string ['textfontfamily'] = 'Шрифт тексту';
$string ['headingfontfamily'] = 'Шрифт заголовоку';
$string ['fontsize'] = 'Розмір шрифту';
$string ['fontsizesmallest'] = 'найменший';
$string ['fontsizesmaller'] = 'менше';
$string ['fontsizesmall'] = 'маленький';
$string ['fontsizemedium'] = 'середній';
$string ['fontsizelarge'] = 'великий';
$string ['fontsizelarger'] = 'більший';
$string ['fontsizelargest'] = 'найбільший';
$string ['headerlogoimage1'] = 'Логотип';
$string ['headerlogoimagenormal'] = 'Типовий логотип теми';
$string ['headerlogoimagelight1'] = 'Логотип і текст білої махари (підходить для темного тла заголовка)';
$string ['headerlogoimagedark1'] = 'Логотип і текст Dark Mahara (підходить для більш світлих фонів заголовків)';
$string ['normallinkcolor'] = 'Звичайний колір посилання';
$string ['hoverlinkcolor'] = 'Виділений колір посилання';
$string ['linkunderlined'] = 'Підкреслити посилання';
$string ['tableborder'] = 'колір кордону таблиці';
$string ['tableheader'] = 'Колір фону заголовка';
$string ['tableheadertext'] = 'Колір тексту заголовка';
$string ['tableoddrows'] = 'Колір тла для непарних рядків';
$string ['tableevenrows'] = 'Колір фону для парних рядків';
$string ['normalbuttoncolor'] = 'Звичайний колір кнопки';
$string ['hoverbuttoncolor'] = 'Колір кнопки підсвіченого кольору';
$string ['buttontextcolor'] = 'Колір тексту кнопки';
$string ['skincustomcss'] = 'Спеціальний CSS';
$string ['skincustomcssdescription'] = 'Спеціальні CSS не відображатимуться в зображеннях попереднього перегляду скіну';
$string ['chooseviewskin'] = 'Вибрати скін сторінки';
$string ['chooseskin'] = 'Вибрати скін';
$string ['notsavedyet'] = 'Ще не збережено.';
$string ['notcompatiblewiththeme'] = 'Тема сайту "% s" не підтримує обкладинки сторінок. Це означає, що вибраний вами скін не вплине на те, як ви бачите цю сторінку, але це може вплинути на зовнішній вигляд сторінки для інших користувачів, які переглядають сайт з іншою темою. ';
$string ['notcompatiblewithpagetheme'] = 'Тема цієї сторінки "% s" не підтримує обкладинки сторінок. Вибраний тут скін не вплине на зовнішній вигляд сторінки, доки не буде вибрано іншу тему. ';
$string ['viewskinchanged'] = 'Змінено вигляд сторінки';
$string ['manage'] = 'Керування обкладинками';


// * ШКІРИ - ФОНТИ САЙТУ * //
$string ['sitefontsmenu'] = 'Шрифти';
$string ['sitefonts'] = 'Шрифти';
$string ['sitefontsdescription'] = '<p> Наступні шрифти були встановлені на вашому сайті для використання в скінах. </p>';
$string ['installfontinstructions'] = '<p>
Додайте шрифти, які дозволяють вбудовування шрифтів у веб-сторінки за допомогою правила CSS @ font-face. Пам"ятайте, що не всі автори / ливарні це дозволяють.
</p>
<p>
Коли ви знайдете відповідний безкоштовний шрифт, який ви дозволите вбудовувати у веб-сторінку, його потрібно перетворити на такі формати:
Шрифт TrueType, Вбудований шрифт OpenType, веб-шрифт Відкрити шрифт і масштабований векторний графічний шрифт.
</p>
<p>
Ви можете скористатися <a href="http://www.fontsquirrel.com/fontface/generator/"> Генератором шрифтів FontSquirrel </a> для конверсії.
</p> ';
$string ['nofonts'] = 'Немає шрифтів.';
$string ['font'] = 'шрифт';
$string ['fonts'] = 'шрифти';
$string ['installfont'] = 'Встановити шрифт';
$string ['fontinstalled'] = 'Шрифт успішно встановлено';
$string ['addfontvariant'] = 'Додати стиль шрифту';
$string ['fontvariantadded'] = 'Шрифт додано успішно';
$string ['editfont'] = 'Редагувати шрифт';
$string ['fontedited'] = 'Шрифт успішно редагувався';
$string ['editproperties'] = 'Редагувати властивості шрифту';
$string ['viewfontspecimen'] = 'Переглянути зразок шрифту';
$string ['viewfontspecimenfor'] = 'для "% s"';
$string ['deletefont'] = 'Видалити шрифт';
$string ['deletespecifiedfont'] = 'Видалити шрифт"% s" ';
$string ['deletefontconfirm1'] = 'Ви дійсно хочете видалити цей шрифт?';
$string ['deletefontconfirm2'] = 'Його не можна скасувати.';
$string ['deletefontconfirmused'] = array(
	'Цей шрифт використовується у % s. ',
	'Цей шрифт використовується в кодах % s ',
);
$string ['fontdeleted'] = 'Шрифт видалено';
$string ['cantdeletefont'] = 'Ви не можете видалити цей шрифт.';
$string ['fontname'] = 'Назва шрифту';
$string ['invalidfonttitle'] = 'Неправильний заголовок шрифту. Він повинен містити принаймні один буквено-цифровий символ. ';
$string ['genericfontfamily'] = 'Загальна сім"я шрифтів';
$string ['fontstyle'] = 'Стиль шрифту';
$string ['regular'] = 'Регулярний';
$string ['bold'] = 'Жирний';
$string ['italic'] = 'Курсив';
$string ['bolditalic'] = 'Жирний курсив';
$string ['fonttype'] = 'Тип шрифту';
$string ['headerandtext'] = 'Заголовок і текст';
$string ['headingonly'] = 'Лише заголовок';
$string ['fontuploadinstructions'] = '<br /> Щоб завантажити потрібні файли шрифтів, можна або завантажити файл ZIP, створений за допомогою <a href = "http://www.fontsquirrel.com/fontface/generator/" Генератор шрифтів FontSquirrel Online </a>
<br /> або завантажувати окремі файли EOT, SVG, TTF, WOFF та ліцензії. ';
$string ['fontfiles'] = 'Файли шрифтів';
$string ['fontfilemissing'] = 'Файл ZIP не містить файлу шрифту % s \ _';
$string ['zipfontfiles'] = 'Файли шрифтів у архіві ZIP';
$string ['fontfilezip'] = 'Архів ZIP';
$string ['zipdescription'] = 'Файл ZIP, що містить файли EOT, SVG, TTF, WOFF і ліцензії для шрифту';
$string ['fontfileeot'] = 'Файл шрифту EOT';
$string ['eotdescription'] = 'Шрифт OpenType (для Internet Explorer 4+) ';
$string ['notvalidfontfile'] = 'Це не правильний файл шрифту % s.';
$string ['nosuchfont'] = 'Немає шрифту з наведеним ім"ям.';
$string ['fontfilesvg'] = 'Файл шрифту SVG';
$string ['svgdescription'] = 'Шрифт векторної графіки, що масштабується (для iPad і iPhone)';
$string ['fontfilettf'] = 'Файл шрифту TTF';
$string ['ttfdescription'] = 'Шрифт TrueType (для Firefox 3.5+, Opera 10+, Safari 3.1+, Chrome 4.0.249.4+)';
$string ['fontfilewoff'] = 'Файл шрифту WOFF';
$string ['woffdescription'] = 'Шрифт формату шрифту для відкриття веб-сторінок (для Firefox 3.6+, Internet Explorer 9+, Chrome 5+)';
$string ['fontfilelicence'] = 'Файл ліцензії';
$string ['fontnotice'] = 'Повідомлення про шрифт';
$string ['fontnoticedescription'] = 'Один рядок додано до файлу CSS, що описує шрифт і автора.';
$string ['filepathnotwritable'] = 'Не вдається записати файли до % s \ t';
$string ['showfonts'] = 'Показати';
$string ['fonttypes.all'] = 'Усі шрифти';
$string ['fonttype.site'] = 'Місцевий шрифт';
$string ['fonttypes.site'] = 'Місцеві шрифти';
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
$string ['sampletitle12'] = 'Латинський алфавіт (ISO / IEC 8859-1)';
$string ['sampletext12'] = 'Аа БбВа ГДД Æе Çж Éз Йы Ìк Лл Ом Îн Ðп Рр Сс Óт Ôу Õх ых Ьт Ùù Û я ы ы ый';
$string ['sampletitle13'] = 'Латинський алфавіт (ISO / IEC 8859-2)';
$string ['sampletext13'] = 'ă Ăă Čą Č č Č Ē ı Ė Ļļ Ľ Ł Ł Ř Ş Ňň Ňň ı Œ Ŕŕ Ř Ř Ř Ş Ş Š š š Ŭŭ Ŭŭ Ŭŭ Ř Ş Š Š š Š š Ž Żż ſz ſ ';
$string ['sampletitle14'] = 'Кириличний алфавіт (ISO / IEC 8859-5)';
$string ['sampletext14'] = 'Аа Бб Вв Гг Дд Ее Ж З Жз Зз Іі Йй Кк Лл Мм Нн Оо Пп Рр Сс Тт Уу Фф Хх Цц Чч Шш ъ Ыы Ьь Ээ Юю Яя';
$string ['sampletitle15'] = 'Грецький алфавіт (ISO / IEC 8859-7)';
$string ['sampletext15'] = 'Αα Ββ Γγ Δδ Ζζε Ζζη Θθ Ι Κ Λ Ν Ν Ν Ο Π Π Ρ Ρ Ρ;;; ;ω';
$string ['sampletitle18'] = 'Числа і дріб';
$string ['sampletext18'] = '1 2 3 4 5 6 7 8 9 0 ½ ¾ ⅓ ⅔ ⅛ ⅝ ⅝';
$string ['sampletitle19'] = 'Пунктуація';
$string ['sampletext19'] = '&! ? »« @ $ € § * # %% / () {} [] ';
$string ['sampletitle20'] = 'Lorem ipsum ...';
$string ['sampletext20'] = 'Вибрані дані, що допомагають приєднатись до конфігурації.';
$string ['sampletitle21'] = 'Змочущій чарівник ...';
$string ['sampletext21'] = 'Зламиваючі майстри роблять токсичні відвари для зла королеви і Джека.';
$string ['sampletitle22'] = 'Швидка коричнева лисиця ...';
$string ['sampletext22'] = 'Швидка коричнева лисиця перестрибує через ледачу собаку.';

// * ШКІРИ - GOOGLE WEB FONTS * //
$string ['installgwfont'] = 'Встановити шрифт (и) Google';
$string ['archivereadingerror'] = 'Помилка читання архіву ZIP.';
$string ['gwfontadded'] = 'Шрифт (и) Google успішно встановлено';
$string ['gwfontsnotavailable'] = 'Шрифти Google зараз недоступні.';
$string ['gwfinstructions'] = '<ol>
<li> Відвідайте <a href="http://www.google.com/fonts/"> шрифти Google </a> </li>
<li> Виберіть шрифти та додайте їх до своєї колекції </li>
<li> Завантажити шрифти в колекції як файл ZIP </li>
<li> Завантажити цей файл ZIP у цій формі </li>
<li> Установити шрифт (и) Google </li>
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