<?php
/**
*
* BBcodeOrder+
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2019 [ver 1.0.4] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BBCODE_B'						=> 'Negrito',
	'BBCODE_I'						=> 'Itálico',
	'BBCODE_U'						=> 'Sublinhado',
	'BBCODE_L'						=> 'Lista',
	'BBCODE_O'						=> 'Lista ordenada',
	'BBCODE_LISTITEM'				=> 'Listar Item',
	'BBCODE_C'						=> 'Código',
	'BBCODE_Q'						=> 'Citar',
	'BBCODE_IMG'					=> 'Imagem',
	'BBCODE_URL'					=> 'URL',
	'BBCODE_FLASH'					=> 'FLASH',
));
