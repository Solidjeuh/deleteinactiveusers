<?php
/**
*
* @package phpBB Extension - Delete Inactive Users
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'DELETE_INACTIVE_USERS_ALLOW'						=> 'Schakel Verwijder inactieve gebruikers in',
	'DELETE_INACTIVE_USERS_ALLOW_EXPLAIN'				=> 'Als deze optie is ingesteld op Ja, staat cron voor gebruikers op ingeschakeld.',
	'DELETE_INACTIVE_USERS_TIME_VALUE'					=> 'Stel de tijdsperiode in voor het snoeien/verwijderen van gebruikers',
	'DELETE_INACTIVE_USERS_TIME_VALUE_EXPLAIN'			=> 'Met deze optie wordt de snoeien/verwijderen timer ingesteld. Standaard is 24 uur.',
	'DELETE_INACTIVE_USERS_HOURS'	=> array(
		1 => 'Uur',
		2 => 'Uren',
	),
	'DELETE_INACTIVE_USERS_POSTS'						=> 'Stel het aantal berichten in',
	'DELETE_INACTIVE_USERS_POSTS_EXPLAIN'				=> 'Stel het aantal berichten voor gebruikers in. Standaard is 0.',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD'				=> 'Selecteer periode',
	'DELETE_INACTIVE_USERS_INACTIVE_PERIOD_EXPLAIN'		=> 'Stel de periode van inactiviteit van gebruikers in. Registratiedatum en laatste activiteitsdatum.',
	'DELETE_INACTIVE_USERS_SAVED'						=> 'Verwijder inactieve gebruikers instellingen opgeslagen..',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS'			=> 'Groep uitsluitingen',
	'DELETE_INACTIVE_USERS_GROUP_EXCEPTIONS_EXPLAIN'	=> 'Sluit de groepen hier uit die niet zullen worden gesnoeid.<br>Selecteer meerdere groepen door <samp>CTRL</samp> (of <samp>&#8984;CMD</samp> op Mac) ingedrukt te houden en te klikken.',
]);
