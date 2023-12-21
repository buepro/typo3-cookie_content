.. include:: /Includes.rst.txt

.. _start:

=================
Cookie content
=================

:Extension key:
   cookie_content

:Package name:
   buepro/typo3-cookie-content

:Version:
   |release|

:Language:
   en

:Author:
   Roman Büchler

:Email:
   rb@buechler.pro

:License:
   This document is published under the Open Content License
   available from https://www.openhub.net/licenses/opl.

:Rendered:
   |today|

----

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

.. figure:: /Images/Placeholder.webp
   :alt: Cookie content placeholder

|
This extension is intended to make websites GDPR compliant by not rendering
data critical content by default. Instead a placeholder message is shown helping
the user to understand the legal context. Requires the
`Bootstrap Package <https://extensions.typo3.org/extension/bootstrap_package>`__.

Usage
=====

Define the behaviour on the content element access register.

.. figure:: /Images/ContentElement.webp
   :alt: Access register from content element

Installation
============

Add the static configuration to your template record:

.. figure:: /Images/Template.webp
   :alt: Template record with static configuration for cookie content

Configuration
=============

Typoscript setup
----------------

Define the data protection declaration page with the following typoscript
setup:

.. code-block:: typoscript

   lib {
       contentElement.stdWrap.override.cObject {
           settings {
               dataProtectionDeclarationTypolink = t3://page?uid=344
           }
       }
   }

Note that the link has to be adjusted. Adjust `t3://page?uid=344` according
your site.

Javascript
----------

Modules might includes data protection related code independent of a content
element usage. Prevent embedding such code using the following typoscript
setup pattern:

.. code-block:: typoscript

   [{$page.theme.cookieconsent.enable} == 1 && request && traverse(request.getCookieParams(), 'cookieconsent_status') != 'allow']
   // Define here the conditional javascript
   [END]


References
==========

:Bootstrap Package:    https://extensions.typo3.org/extension/bootstrap_package
:Osano cookie consent: https://github.com/osano/cookieconsent
:Repository:           https://github.com/buepro/typo3-cookie_content
:Read online:          https://docs.typo3.org/p/buepro/typo3-cookie_content/main/en-us/
:TER:                  https://extensions.typo3.org/extension/cookie_content
