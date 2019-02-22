<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2011 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage blocktype-openbadgedisplayer
 * @author     Discendum Oy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2012 Discedum Oy http://discendum.com
 * @copyright  (C) 2011 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

defined('INTERNAL') || die();

$string ['title'] = 'Відкриті значки';
$string ['description'] = 'Відображення відкритих значків';
$string ['issuerdetails'] = 'Деталі емітента';
$string ['badgedetails'] = 'Деталі значка';
$string ['issuancedetails'] = 'Деталі видачі';
$string ['name'] = "Ім'я";
$string ['url'] = 'URL';
$string ['organisation'] = 'Організація';
$string ['evidence'] = 'Доказ';
$string ['issuon'] = 'Видано';
$string ['expires'] = 'Закінчується';
$string ['desc'] = 'Опис';
$string ['criteria'] = 'Критерії';
$string ['nbadges'] = array('1 значок', 'значки % s');
$string ['nobackpack'] = 'Не знайдено жодного рюкзака. <br> Додайте свою <a href="%s"> Рюкзак </a> електронну адресу до свого <a href="%s"> профілю </ a >. ';

$string ['nobadgegroups'] = 'Не знайдено жодних колекцій / значків';
$string ['nobadgesselectone'] = 'Не вибрано значків';
$string ['nobackpackidin1'] = 'Ваша електронна адреса% s не знайдена у службі % s.';

$string ['nobadgegroupsin1'] = 'У службі % s не знайдено жодних колекцій / значків для електронної пошти % s.';

$string ['confighelp'] = 'Виберіть колекції значків для показу в цьому блоці. <br/> Відвідайте наступні служби для керування колекціями та значками: <br/> % s';

$string ['obppublicbadges'] = 'Усі публічні значки в паспорті Open Badge';
$string ['title_backpack'] = 'Рюкзак Mozilla';

$string ['title_passport'] = 'Відкрити паспорт бейджів';

$string ['fetchingbadges'] = 'Отримання записів. Це може зайняти деякий час. ';

$string ['missingbadgesources'] = 'Встановлення відсутніх джерел. Додайте до вашого файлу config.php, наприклад, <br> <br> $ cfg-> openbadgedisplayer_source = "{"рюкзак": "https://backpack.openbadges.org/"}"';

$string ['selectall'] = 'Вибрати всі';
$string ['selectnone'] = 'Не вибирати жодної';