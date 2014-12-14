<?php
/*	Project:	EQdkp-Plus
 *	Package:	Eve Online game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Admin',
		2	=> 'Combat',
		3	=> 'ISD',
		4	=> 'Resource',
		5	=> 'Services'
	),
	'factions' => array(
		0	=> 'Amarr',
		1	=> 'Caldari',
		2	=> 'Gallente',
		3	=> 'Minmatar'
	),
	'lang' => array(
		'eveonline'					=> 'EVE Online',
		'core_sett_fs_gamesettings'	=> 'EVE Online Settings',
		'uc_faction'				=> 'Faction',
		'uc_class'					=> 'Class',
		'uc_faction_help'			=> 'Select the default faction',
	),
);

?>