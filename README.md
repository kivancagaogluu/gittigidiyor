# gittigidiyor
Gittigidiyor PHP Api

Install via Composer

``composer require bluntk/gittigidiyor``

## Category Service

### Single category with specs

``$category = $gittigidiyor->category()->getCategory(['categoryCode' => 'a', 'withSpecs' => 1]); ``

#### Get categories start from 0 to 50

``$categories = $gittigidiyor->category()->getCategories(['startOffset' => 0, 'rowCount' => 50]);``


