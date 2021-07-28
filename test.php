<?php
/**
 * Author: Kıvanç Ağaoğlu
 * Web: https://kivancagaoglu.com
 * Mail: info@kivancagaoglu.com
 * Skype: kivancagaoglu
 * Github: https://github.com/kivancagaogluu/
 *
 */

use bluntk\Gittigidiyor;

require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'apiKey' => 'xx',
    'secretKey' => 'xx',
    'nick' => 'xx',
    'password' => 'xx',
    'auth_user' => 'xx',
    'auth_pass' => 'xx',
    'lang' => 'tr',
];

$gittigidiyor = new Gittigidiyor($config);

$params = [];
$params['forceToSpecEntry'] = false;
$params['nextDateOption'] = null;
$params['nextDateOption'] = null;
$params['product'] = [
    'categoryCode' => 'e1a',
    'storeCategoryId' => '',
    'title' => 'test',
    'subtitle' => 'asdasd',
    'specs' => [
        'spec' => [
            [
                'name' => 'Kullanıcı Tipi',
                'value' => 'Erkek',
                'type' => 'Combo',
                'required' => true
            ],
            [
                'name' => 'Durum',
                'value' => 'Yeni',
                'type' => 'Combo',
                'required' => true
            ],
            [
                'name' => 'Marka',
                'value' => 'Bulamadım',
                'type' => 'Combo',
                'required' => true
            ],
        ]
    ],
    'photos' => [
        'photo' => [
            [
                'photoId' => 0,
                'url' => 'http://images.gittigidiyor.com/2941/KODAK-Z915-10MP-10X-ZOOM-HD-SIFIR-URUN__29416457_0.jpg',
                'base64' => ''
            ],
            [
                'photoId' => 1,
                'url' => 'http://images.gittigidiyor.com/2941/KODAK-Z915-10MP-10X-ZOOM-HD-SIFIR-URUN__29416457_0.jpg',
                'base64' => ''
            ],
            [
                'photoId' => 2,
                'url' => 'http://images.gittigidiyor.com/2941/KODAK-Z915-10MP-10X-ZOOM-HD-SIFIR-URUN__29416457_0.jpg',
                'base64' => ''
            ],
        ]
    ],
    'pageTemplate' => 4,
    'description' => 'asdlşkaslşdjaslkşdjklaqhjekwlqndhaklsnd',
    'startDate' => '',
    'catalogId' => '',
    'catalogDetail' => '',
    'catalogFilter' => '',
    'format' => 'S',
    'startPrice' => '',
    'buyNowPrice' => 240.99,
    'listingDays' => 360,
    'productCount' => 10,
    'cargoDetail' => [
        'city' => 34,
        'shippingPayment' => 'B',
        'shippingWhere' => 'country',
        'cargoCompanyDetails' => [
            'cargoCompanyDetail' => [
                'name' => 'aras',
                'cityPrice' => 3.00,
                'countryPrice' => 5.00,
            ]
        ],
        'shippingTime' => [
            'days' => 'today',
            'beforeTime' => '10:30'
        ],
    ],
    'affiliateOption' => false,
    'boldOption' => false,
    'catalogOption' => false,
    'vitrineOption' => false,
    'globalTradeItemNo' => null,
    'manufacturerPartNo' => '',
    'variantGroups' => [
        'variantGroup' => [
            [
                'variants' => [
                    'variant' => [
                        [
                            'variantSpecs' => [
                                'variantSpec' => [
                                    [
                                        'nameId' => 30075,
                                        'valueId' => 2412309,
                                    ],
                                    [
                                        'nameId' => 30076,
                                        'valueId' => 2404859,
                                    ],
                                ]
                            ],
                            'quantity' => '2',
                            'stockCode' => '',
                        ],
                        [
                            'variantSpecs' => [
                                'variantSpec' => [
                                    [
                                        'nameId' => 30075,
                                        'valueId' => 2412309,
                                    ],
                                    [
                                        'nameId' => 30076,
                                        'valueId' => 2404858,
                                    ],
                                ]
                            ],
                            'quantity' => '2',
                            'stockCode' => '',
                        ],
                    ]
                ],
                'photos' => [
                    'photo' => [
                        [
                            'photoId' => 0,
                            'url' => 'https://images.gittigidiyor.com/i/32/tn30/320131_tn30_R_70550_0.jpg'
                        ]
                    ]
                ],

            ]

        ]
    ]
];

$productService = $gittigidiyor->product();

$result = $productService->insertAndActivateProduct($params);

print_r($result);