<?php

/*
 * This file is part of the composer package buepro/typo3-cookie-content.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Cookie content',
    'description'      => 'This extension is intended to make websites GDPR compliant by not rendering data critical content by default. Instead a placeholder message is shown helping the user to understand the legal context. Requires the bootstrap package.',
    'category'         => 'fe',
    'version'          => '0.2.0-dev',
    'state'            => 'beta',
    'author'           => 'Roman Büchler',
    'author_email'     => 'rb@buechler.pro',
    'constraints'      => [
        'depends'   => [
            'typo3'                 => '11.5.0-12.99.99',
            'bootstrap_package'     => '12.0.10-14.99.99',
        ],
    ],
];
