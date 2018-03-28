<?php

$dca = &$GLOBALS['TL_DCA']['tl_content'];

/**
 * Palettes
 */
$dca['palettes'][\HeimrichHannot\GoogleMapsBundle\Backend\Content::ELEMENT_GOOGLE_MAP] =
    '{type_legend},type,headline;{config_legend},googlemaps_map,googlemaps_addHtml,googlemaps_addCss,googlemaps_addJs;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';

/**
 * Fields
 */
$fields = [
    'googlemaps_map' => [
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['googlemaps_map'],
        'exclude'                 => true,
        'filter'                  => true,
        'inputType'               => 'select',
//        'options' => [],
//        'reference' => &$GLOBALS['TL_LANG']['tl_']['reference'],
//        'options_callback' => ['HeimrichHannot\Namespace\Class', 'method'],
        'eval'                    => ['tl_class' => 'w50', 'mandatory' => false, 'includeBlankOption' => true, 'submitOnChange' => true],
        'sql'                     => "int(10) unsigned NOT NULL default '0'"
    ],
    'googlemaps_addHtml' => [
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['googlemaps_addHtml'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => ['tl_class' => 'w50'],
        'sql'                     => "char(1) NOT NULL default ''"
    ],
    'googlemaps_addCss' => [
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['googlemaps_addCss'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => ['tl_class' => 'w50'],
        'sql'                     => "char(1) NOT NULL default ''"
    ],
    'googlemaps_addJs' => [
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['googlemaps_addJs'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => ['tl_class' => 'w50'],
        'sql'                     => "char(1) NOT NULL default ''"
    ],
];

$dca['fields'] += $fields;