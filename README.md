# gittigidiyor
Gittigidiyor PHP Api

# Hakkında
Bu paket gittigidiyor api servislerinin kullanımı için kişisel ihtiyaçlar doğrultusunda yazılmıştır. Eksik kısımları eklemekten çekinmeyin.

## Install via Composer

``composer require bluntk/gittigidiyor``

## Starting

```php

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

```

## Category Service

### Single category with specs

```php

$category = $gittigidiyor->category()->getCategory(['categoryCode' => 'a', 'withSpecs' => 1]); 

```

#### Get categories start from 0 to 50

```php 

$categories = $gittigidiyor->category()->getCategories(['startOffset' => 0, 'rowCount' => 50]);

```

## Product Service

### Yeni Ürün Ekleme

```php
$params = [];

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


```

#### Idye göre ürün çağırma

```php 

$product = $gittigidiyor->product()->getProduct(['productId' => 'Ürünün gittidiyordaki idsi']);

```

#### Ürün Fiyatı Güncelleme

```php 

$gittigidiyor->product()->updatePrice(['productId' => 'Ürünün gittigidiyordaki idsi', 'buyNowPrice' => 'Hemen al fiyatı', 'newPrice' => 'Liste Fiyatı']);

```

#### Ürün Varyant Stok Güncelleme 

```php 

$result = $gittigidiyor->product()->updateVariantStockAndActivateProduct([
                                'productId' => 'Ürünün idsi',
                                'itemId' => null,
                                'variantId' => 'Varyantın idsi',
                                'stock' => 'Stok miktarı',
                            ]);
                            
```

