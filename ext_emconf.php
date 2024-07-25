<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage_skeleton".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage Skeleton',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'TomasNorre\\SitepackageSkeleton\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tomas Norre Mikkelsen',
    'author_email' => 'tomasnorre@gmail.com',
    'author_company' => 'Tomas Norre',
    'version' => '1.0.0',
];
