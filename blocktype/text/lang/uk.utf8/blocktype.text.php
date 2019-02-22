<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-text
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string ['title'] = 'Текст';
$string ['description'] = 'Додати фрагменти тексту на сторінку';
$string ['blockcontent'] = 'Блокувати вміст';
$string ['optionlegend'] = 'Перетворити "Примітка" блоки ';
$string ['convertdescriptionfeatures'] = 'Ви можете конвертувати всі повторно використовувані блоки "Примітка", які не використовують розширені функції, у прості блоки "Текст". Ці блоки існують лише на сторінці, на якій вони були створені, і не можуть бути вибрані для використання на інших сторінках. Додаткові функції включають:
    <ul>
        <li> повторне використання в іншому блоці </li>
        <li> використання ліцензії </li>
        <li> використовувати теги </li>
        <li> вкладення </li>
        <li> коментарі до відображеного артефакту примітки </li>
    </ul> ';
$string ['convertdescription'] = array(
    0 => 'Примітка % s може розглядатися для перетворення. Якщо вибрати опцію конвертувати цю нотатку, будь ласка, майте на увазі, що це може зайняти деякий час. Після завершення конверсії на цій сторінці з"явиться повідомлення про успіх. ',
    1 => 'Є % d приміток, які можна вважати для перетворення. Якщо вибрати опцію конвертувати ці нотатки, будь ласка, майте на увазі, що це може зайняти деякий час. Після завершення конверсії на цій сторінці з"явиться повідомлення про успіх. '
);
$string ['convertibleokmessage'] = array(
    0 => 'Блок успішно перетворений 1" Примітка "в блок" Текст "',
    1 => 'Успішно конвертовано % d "Примітка" блокується до блоків "Текст".',
);
$string ['switchdescription'] = 'Конвертувати всі блоки "Примітка", які не використовують жодні розширені функції, у прості блоки "Текст"';