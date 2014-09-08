<?php

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array =  array(
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
		'eveonline'				=> 'EVE Online',
		'uc_faction'			=> 'Fraktion',
		'uc_class'				=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'EVE Online Settings',
		'uc_faction'				=> 'Fraktion',
		'uc_faction_help'			=> 'Wähle deine Standard-Fraktion',
	),
);

?>