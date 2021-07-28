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

class CityService extends Gittigidiyor
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function getCities($params = [])
    {
        $defaults = ['startOffSet' => 0, 'rowCount' => 100];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl';
        $service = 'getCities';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getModifiedCities($params = [])
    {
        $defaults = ['changeTime' => '01/01/2008+00:00:00', 'startOffSet' => 0, 'rowCount' => 5];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl';
        $service = 'getModifiedCities';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getCity($params = [])
    {
        $defaults = ['code' => 35];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl';
        $service = 'getCity';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getCitiesByCodes($params = [])
    {
        $parameters = ['codes' => []];
        foreach ($params as $code){
            $parameters['codes'][] = $code;
        }
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl';
        $service = 'getCitiesByCodes';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

}