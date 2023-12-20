.. image:: https://poser.pugx.org/buepro/typo3-cookie-content/v/stable.svg
   :alt: Latest Stable Version
   :target: https://extensions.typo3.org/extension/cookie_content/

.. image:: https://img.shields.io/badge/TYPO3-11-orange.svg
   :alt: TYPO3 11
   :target: https://get.typo3.org/version/11

.. image:: https://poser.pugx.org/buepro/typo3-cookie-content/d/total.svg
   :alt: Total Downloads
   :target: https://packagist.org/packages/buepro/typo3-cookie-content

.. image:: https://poser.pugx.org/buepro/typo3-cookie-content/d/monthly
   :alt: Monthly Downloads
   :target: https://packagist.org/packages/buepro/typo3-cookie-content

==================================
TYPO3 extension ``cookie_content``
==================================

This extension is intended to make websites GDPR compliant by not rendering
data critical content by default. Instead a placeholder message is shown helping
the user to understand the legal context.

Currently the extension works together with the
`Bootstrap Package <https://extensions.typo3.org/extension/bootstrap_package>`__.

Usage
=====

Define the behaviour on the content element access register.

Configuration
=============

In case together with a content element javascript is added to the page the
embedding has to be adjusted. For this move the javascript definitions to a
condition within the typoscript setup:

.. code-block:: typoscript

   [request && traverse(request.getCookieParams(), 'cookieconsent_status') != 'allow']
   // Define here the conditional javascript
   [END]


References
==========
*  `Cookie consent package <https://github.com/osano/cookieconsent>`__

:Repository:  https://github.com/buepro/typo3-cookie_content
:Read online: https://docs.typo3.org/p/buepro/typo3-cookie_content/main/en-us/
:TER:         https://extensions.typo3.org/extension/cookie_content
