<?php
/**
*
* @package BBCodeorder
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
	'ACP_BBCODEORDER'				=> 'BBCodeOrder+',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br />Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'BBCODEORDER_NOTICE'	        => '<div class="phpinfo"><p>As configurações para esta extensão estão em %1$s » %2$s » %3$s.</p></div>',
));

