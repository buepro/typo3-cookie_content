<?php declare(strict_types=1);

/*
 * This file is part of the composer package buepro/typo3-cookie-content.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

(static function (): void {
    $newColumns = [
        'tx_cookie_content_show_placeholder' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cookie_content/Resources/Private/Language/locallang_db.xlf:show_placeholder',
            'description' => 'LLL:EXT:cookie_content/Resources/Private/Language/locallang_db.xlf:show_placeholder.description',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        'label' => '',
                    ],
                ],
            ],
        ],
        'tx_cookie_content_reload_page' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cookie_content/Resources/Private/Language/locallang_db.xlf:reload_page',
            'description' => 'LLL:EXT:cookie_content/Resources/Private/Language/locallang_db.xlf:reload_page.description',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        'label' => '',
                    ],
                ],
            ],
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $newColumns
    );
    $GLOBALS['TCA']['tt_content']['palettes']['cookie_content'] = [
        'showitem' => 'tx_cookie_content_show_placeholder, tx_cookie_content_reload_page',
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        '--palette--;LLL:EXT:cookie_content/Resources/Private/Language/locallang_db.xlf:palette.cookie_content;cookie_content',
        '',
        'after: hidden'
    );
})();
