<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$TXFJeXJoc3BOQXEwdHYxcw$zdkT+1U4CMMzdcJyEu+CE0b8vd0v7YqAeoshYKmTmQM',
        'languageDebug' => false,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'dlf' => [
            'annotationServerUrl' => '',
            'embedded3dviewer' => [
                'defaultViewer' => '',
                'viewerModelFormatMapping' => '',
            ],
            'files' => [
                'fileGrpAudio' => 'AUDIO',
                'fileGrpDownload' => 'DOWNLOAD',
                'fileGrpFulltext' => 'FULLTEXT',
                'fileGrpImages' => 'DEFAULT,MAX',
                'fileGrpScore' => 'SCORE',
                'fileGrpThumbs' => 'THUMBS',
            ],
            'general' => [
                'caching' => '0',
                'enableInternalProxy' => '0',
                'forceAbsoluteUrl' => '0',
                'forceAbsoluteUrlHttps' => '0',
                'publishNewCollections' => '1',
                'requiredMetadataFields' => 'document_format,record_id',
                'unhideOnIndex' => '0',
                'useExternalApisForMetadata' => '0',
                'userAgent' => 'Kitodo.Presentation',
            ],
            'iiif' => [
                'indexAnnotations' => '0',
                'thumbnailHeight' => '150',
                'thumbnailWidth' => '150',
            ],
            'solr' => [
                'allowCoreDelete' => '1',
                'connect' => '0',
                'fields' => [
                    'autocomplete' => 'autocomplete',
                    'collection' => 'collection',
                    'date' => 'date',
                    'default' => 'default',
                    'fulltext' => 'fulltext',
                    'geom' => 'geom',
                    'id' => 'id',
                    'license' => 'license',
                    'location' => 'location',
                    'page' => 'page',
                    'partof' => 'partof',
                    'pid' => 'pid',
                    'purl' => 'purl',
                    'recordId' => 'record_id',
                    'restrictions' => 'restrictions',
                    'root' => 'root',
                    'sid' => 'sid',
                    'terms' => 'terms',
                    'thumbnail' => 'thumbnail',
                    'timestamp' => 'timestamp',
                    'title' => 'title',
                    'toplevel' => 'toplevel',
                    'type' => 'type',
                    'uid' => 'uid',
                    'urn' => 'urn',
                    'volume' => 'volume',
                ],
                'host' => 'ddev-kitodo-presentation.ddev.site',
                'https' => '0',
                'pass' => 'SolrRocks',
                'path' => '/',
                'port' => '8983',
                'timeout' => '10',
                'user' => 'solr',
            ],
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'lfeditor' => [
            'beMainModuleName' => 'user',
            'changeXlfDate' => '1',
            'defaultLanguage' => '',
            'editModeExtension' => '1',
            'extIgnore' => '/^(CVS|.svn|.git|csh_)/',
            'extWhitelist' => '',
            'pathAdditionalConfiguration' => 'typo3conf/AdditionalConfiguration.php',
            'searchRegex' => '/^([a-z0-9_]*locallang[a-z0-9_-]*\\.(php|xml)|[^\\.]*\\.xlf)$/i',
            'viewLanguages' => '',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'excludeAllEmptyParameters' => true,
            'requireCacheHashPresenceParameters' => [
                'tx_dlf[id]',
            ],
        ],
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'pageNotFoundOnCHashError' => false,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                        5 => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '3bb167a485145ace5255eef5e8d31345bbc932e0ad0732b10555814c1ff6168f2e10c4c26457f2777981d3951bb6acd8',
        'exceptionalErrors' => 12290,
        'features' => [
            'felogin.extbase' => true,
            'fluidBasedPageModule' => false,
            'form.legacyUploadMimeTypes' => true,
            'newTranslationServer' => true,
            'rearrangedRedirectMiddlewares' => false,
            'redirects.hitCount' => false,
            'security.backend.enforceReferrer' => true,
            'security.backend.htmlSanitizeRte' => false,
            'security.frontend.htmlSanitizeParseFuncDefault' => true,
            'security.frontend.keepSessionDataOnLogout' => false,
            'unifiedPageTranslationHandling' => true,
            'yamlImportsFollowDeclarationOrder' => false,
        ],
        'sitename' => 'New TYPO3 site',
    ],
];
