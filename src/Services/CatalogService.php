<?php
/**
 * Author: Kıvanç Ağaoğlu
 * Web: https://kivancagaoglu.com
 * Mail: info@kivancagaoglu.com
 * Skype: kivancagaoglu
 * Github: https://github.com/kivancagaogluu/
 *
 */

namespace bluntk\Services;

use bluntk\Gittigidiyor;

class CatalogService extends Gittigidiyor
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function searchCatalog($params = [])
    {
        $defaults = ['page' => 1, 'rowCount' => 50, 'criteria' => []];
        $parameters = array_merge($defaults, $params);
        foreach ($params['criteria'] as $key => $value) {
            $parameters['criteria'][$key] = $value;
        }
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CatalogV2Service?wsdl';
        $service = 'searchCatalog';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

}