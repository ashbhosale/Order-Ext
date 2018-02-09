<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'OrderExt.Orderext',
            'Orderinfomgt',
            'OrderInfoMgt'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('orderext', 'Configuration/TypoScript', 'OrderExt');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_orderext_domain_model_order', 'EXT:orderext/Resources/Private/Language/locallang_csh_tx_orderext_domain_model_order.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_orderext_domain_model_order');

    }
);
