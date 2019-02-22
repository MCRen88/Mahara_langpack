<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-externalfeeds
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

defined('INTERNAL') || die();

$string ['title'] = 'Зовнішній канал';
$string ['description'] = 'Вбудовування зовнішнього каналу RSS або ATOM';
$string ['authuser'] = 'Ім"я користувача HTTP';
$string ['authuserdesc'] = 'Ім"я користувача (основна аутентифікація HTTP), необхідне для доступу до цього каналу (якщо потрібно)';
$string ['authpassword'] = 'Пароль HTTP';
$string ['authpassworddesc'] = 'Пароль (основна аутентифікація HTTP), необхідний для доступу до цього каналу (якщо потрібно)';
$string ['feedlocation'] = 'Розташування каналу';
$string ['feedlocationdesc'] = 'URL дійсного каналу RSS або ATOM';
$string ['insecuresslmode'] = 'Небезпечний режим SSL';
$string ['insecuresslmodedesc'] = 'Вимкнути перевірку SSL-сертифіката. Це не рекомендується, але може знадобитися, якщо канал подається з використанням недійсного або ненадійного сертифіката. ';
$string ['itemstoshow'] = 'Елементи для показу';
$string ['itemstoshowdescription'] = 'Між 1 і 20';
$string ['showfeeditemsinfull'] = 'Показувати всі елементи каналу';
$string ['showfeeditemsinfulldesc'] = 'Чи показувати резюме елементів каналу або показувати повний текст для кожного з них.';
$string ['invalidurl'] = 'Ця URL-адреса недійсна. Ви можете переглядати лише канали для URL-адрес http і https. ';
$string ['invalidfeed1'] = 'На цьому URL-адресі не виявлено дійсних каналів.';
$string ['lastupdatedon'] = 'Останнє оновлення на % s';
$string ['publishedon'] = 'Опубліковано на % s';
$string ['defaulttitledescription'] = 'Якщо ви залишите це поле порожнім, буде використаний заголовок каналу.';
$string ['reenterpassword'] = 'Оскільки ви змінили URL-адресу каналу, повторно введіть (або видаліть) пароль.';