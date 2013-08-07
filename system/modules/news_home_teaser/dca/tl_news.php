<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

// change the palette
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace
(
    'teaser;',
    'teaser;teaser_home;',
    $GLOBALS['TL_DCA']['tl_news']['palettes']['default']
);

// Add field configuration
$GLOBALS['TL_DCA']['tl_news']['fields']['teaser_home'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_news']['teaser_home'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'textarea',
	'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr')
);

?>