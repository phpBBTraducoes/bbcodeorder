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
	'BBCODEORDER_EXPLAIN'		=> '<hr><h3>Uso e dicas:</h3><br /><strong>Padrão BBCode:</strong> Os bbcodes padrão têm novas opções, como a possibilidade de serem classificados ou ocultos. Infelizmente, eles não podem ser editados diretamente daqui, como os BBCodes personalizados<br /><strong>BBcodes personalizados:</strong> Os BBcodes personalizados também podem ser classificados, ter um ícone personalizado, definir permissão de grupo, etc.<br /><strong>Uso geral:</strong> Você pode adicionar "divisores", que basicamente dividem grupos de botões. Eles são marcados como "-" e você pode adicionar quantos deles quiser e também podem ser movidos/ordenados (você também pode usar arrastar e soltar)<br />Você pode criar grupos de botões ou botões individuais diferentes.<br />Há também um divisor especial marcado como "-", que marca o início da caixa de seleção no front-end.<br />Qualquer bbcode ordenado abaixo desta divisória especial será exibido na opção caixa de seleção, sim até mesmo bbcodes padrão :-). Cor e fonte são as exceções, porque você não pode colocar uma caixa de seleção em outra caixa de seleção.<br />Flash e tamanho de fonte geralmente são apenas uma desordem e, idealmente, seria melhor tê-los escondidos para ter mais espaço para outros elementos.<br /> <a href="http://sitesplat.com/phpBB3/marketplace.php?mode=view&item_id=11" target="blank" title="">Smart Snappy Reply</a> também é suportada nativamente.',	
	'NEW_DIVIDER'				=> 'Adicionar um novo divisor',
	'HIDE'						=> 'Esconder',
	'SHOW'						=> 'Mostrar',
	'BBCODE_HIDDEN'				=> 'O BBCode foi escondido.',
	'BBCODES_ORDERED'			=> 'A ordem do BBCode foi atualizada.',
	'BBCODES_DIVIDERS_PROBLEM'	=> 'Você não pode posicionar o divisor após o início da caixa de seleção.',
	'BBCODE_ICON'				=> 'Ícone',
	'BBCODE_ICON_EXPLAIN'		=> '<a href="http://fontawesome.io/icons/">Font Awesome icon</a> sem o prefixo fa-.',
	'BBCODE_GROUP'				=> 'Gerenciar grupos que podem usar este BBCode',
	'BBCODE_GROUP_EXPLAIN'		=> 'Se nenhum grupo for selecionado, todos os usuários poderão usar este BBCode. Use CTRL+CLIQUE (ou CMD+CLIQUE no Mac) para selecionar/desselecionar mais de um grupo.',
	'BBCODEORDER_IMGUR_UPLOAD'	=> 'Clique para enviar ao IMGUR',
		
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
