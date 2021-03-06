<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "bootstrap_package".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Bootstrap Package',
    'description' => 'Boostrap Package delivers a full configured frontend for TYPO3 CMS 6.2, based on the Bootstrap CSS Framework.',
    'category' => 'templates',
    'shy' => 0,
    'version' => '6.2.5-dev',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => 'top',
    'loadOrder' => '',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'modify_tables' => 'tt_content',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Benjamin Kott',
    'author_email' => 'info@bk2k.info',
    'author_company' => 'private',
    'CGLcompliance' => NULL,
    'CGLcompliance_note' => NULL,
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-6.3.99',
            'css_styled_content' => '6.2.0-6.3.99',
            'realurl' => '1.12.8-1.12.99',
        ),
        'conflicts' => array(
            'fluidpages' => '*',
        ),
        'suggests' => array()
    ),
);