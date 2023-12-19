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
        'tx_cookie_content_restrict_access' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cookie_content/Resources/Private/Language/locallang_db.xlf:restrict_access',
            'description' => 'LLL:EXT:cookie_content/Resources/Private/Language/locallang_db.xlf:restrict_access.description',
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
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'hidden',
        'tx_cookie_content_restrict_access',
        'after:hidden'
    );
})();
