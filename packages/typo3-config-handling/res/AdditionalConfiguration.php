<?php
// Auto generated by helhum/typo3-config-handling
// Do not edit this file
\Helhum\Typo3ConfigHandling\ConfigLoader::create(
    getenv('TYPO3_PATH_COMPOSER_ROOT') . '/conf/',
    \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()->isProduction() ? 'prod' : 'dev'
)->populate();
