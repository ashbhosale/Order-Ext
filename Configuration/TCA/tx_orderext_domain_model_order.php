<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order',
        'label' => 'sendername',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'sendername,senderaddress,orderpickupdate,orderdetails,receivername,receiveraddress,orderdeliverydate',
        'iconfile' => 'EXT:orderext/Resources/Public/Icons/tx_orderext_domain_model_order.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sendername, senderaddress, orderpickupdate, orderdetails, receivername, receiveraddress, orderdeliverydate',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, sendername, senderaddress, orderpickupdate, orderdetails, receivername, receiveraddress, orderdeliverydate, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_orderext_domain_model_order',
                'foreign_table_where' => 'AND tx_orderext_domain_model_order.pid=###CURRENT_PID### AND tx_orderext_domain_model_order.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'sendername' => [
            'exclude' => true,
            'label' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order.sendername',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'senderaddress' => [
            'exclude' => true,
            'label' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order.senderaddress',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'orderpickupdate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order.orderpickupdate',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => null,
            ],
        ],
        'orderdetails' => [
            'exclude' => true,
            'label' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order.orderdetails',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'receivername' => [
            'exclude' => true,
            'label' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order.receivername',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'receiveraddress' => [
            'exclude' => true,
            'label' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order.receiveraddress',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'orderdeliverydate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:orderext/Resources/Private/Language/locallang_db.xlf:tx_orderext_domain_model_order.orderdeliverydate',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => null,
            ],
        ],
    
    ],
];
