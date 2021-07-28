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

class CategoryService extends Gittigidiyor
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function getCategories($params = [])
    {
        $defaults = ['startOffset' => 0, 'rowCount' => 100, 'withSpecs' => 0];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getCategories';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getModifiedCategories($params = [])
    {
        $defaults = ['changeTime' => '01/01/2008+00:00:00', 'startOffSet' => 0, 'rowCount' => 1];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getModifiedCategories';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getCategory($params = [])
    {
        $defaults = ['categoryCode' => 'a', 'withSpecs' => 1, 'withDeepest' => 1, 'withCatalog' => 1];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getCategory';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getCategorySpecs($params = [])
    {
        $defaults = ['categoryCode' => 'aa'];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getCategorySpecs';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getDeepestCategories($params = [])
    {
        $defaults = ['startOffSet' => 0, 'rowCount' => 100, 'withSpecs' => 0];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getDeepestCategories';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getCategoryVariantSpecs($params = [])
    {
        $defaults = ['categoryCode' => 'ebec'];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getCategoryVariantSpecs';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getRequiredCategorySpecs($params = [])
    {
        $defaults = ['categoryCode' => 'ngv'];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryV2Service?wsdl';
        $service = 'getRequiredCategorySpecs';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getSubCategories($params = [])
    {
        $defaults = ['categoryCode' => 'ngv', 'withSpecs' => true, 'withDeepest' => true, 'withCatalog' => true];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getSubCategories';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getCategoriesHavingVariantSpecs()
    {
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl';
        $service = 'getCategoriesHavingVariantSpecs';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

}