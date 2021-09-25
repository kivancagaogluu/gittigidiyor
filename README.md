# gittigidiyor
Gittigidiyor PHP Api

Install via Composer

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

