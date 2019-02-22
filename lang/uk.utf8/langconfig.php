<?php

defined('INTERNAL') || die();

$string['locales'] = 'uk_UA.UTF-8,uk_UA.utf8,uk_UA,uk,ukraine';
$string['strfdaymonthyearshort'] = '%%d/%%m/%%Y';
$string['strftimedate'] = '%%#d %%B %%Y';
$string['strftimedateshort'] = '%%d %%B';
$string['strftimedatetime'] = '%%d %%B %%Y, %%l:%%M %%p';
$string['strftimedatetimeshort'] = '%%Y/%%m/%%d %%H:%%M';
$string['strftimedaydate'] = '%%A, %%d %%B %%Y';
$string['strftimedaydatetime'] = '%%A, %%d %%B %%Y, %%l:%%M %%p';
$string['strftimedayshort'] = '%%A, %%d %%B';
$string['strftimedaytime'] = '%%a, %%k:%%M';
$string['strftimemonthyear'] = '%%B %%Y';
$string['strftimerecent'] = '%%d %%b, %%k:%%M';
$string['strftimerecentfull'] = '%%a, %%d %%b %%Y, %%l:%%M %%p';
$string['strftimetime'] = '%%l:%%M %%p';
$string['strftimew3cdate'] = '%%Y-%%m-%%d';
$string['strftimew3cdatetime'] = '%%Y-%%m-%%dT%%H:%%M:%%S%%z';
$string['thislanguage'] = 'Українська';

// Plural forms, added by language pack generator
$string['pluralrule'] = 'n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2';
$string['pluralfunction'] = 'plural_uk_utf8';
function plural_uk_utf8($n) {
    return $n%10==1 && $n%100!=11 ? 0 : $n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2;
}
