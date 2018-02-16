<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'OrderExt.Orderext',
            'Orderinfomgt',
            [
                'Order' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Order' => 'list, show, new, create, edit, update, delete'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    orderinfomgt {
                        iconIdentifier = orderext-plugin-orderinfomgt
                        title = LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_orderinfomgt.name
                        description = LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_orderinfomgt.description
                        tt_content_defValues {
                            CType = list
                            list_type = orderext_orderinfomgt
                        }
                    }
                }
                show = *
            }
       }'
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'orderext-plugin-orderinfomgt',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:orderext/Resources/Public/Icons/user_plugin_orderinfomgt.svg']
        );
    }
);
