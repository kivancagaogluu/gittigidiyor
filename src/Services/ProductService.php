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
use SoapVar;

class ProductService extends Gittigidiyor
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function insertAndActivateProduct($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time, 'itemId' => null];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl';
        $service = 'insertAndActivateProduct';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function insertProductWithNewCargoDetail($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time, 'itemId' => null];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
//        $parameters['product'] = $this->createProductXml($parameters['product']);
        $parameters['product'] = new SoapVar($parameters['product'], XSD_ANYXML);
        print_r($parameters);
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl';
        $service = 'insertProductWithNewCargoDetail';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getProducts($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time, 'startOffSet' => 0, 'rowCount' => 10, 'status' => 'A', 'withData' => true];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl';
        $service = 'getProducts';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getProduct($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl';
        $service = 'getProduct';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

}