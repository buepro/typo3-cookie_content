<?php declare(strict_types=1);

/*
 * This file is part of the composer package buepro/typo3-cookie-content.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

(static function (): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'cookie_content',
        'Configuration/TypoScript/BootstrapPackage',
        'Cookie Content: Bootstrap Package'
    );
})();
