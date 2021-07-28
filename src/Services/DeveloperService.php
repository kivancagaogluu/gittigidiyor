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

class DeveloperService extends Gittigidiyor
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function registerDeveloper($params = [])
    {
        $defaults = [];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/DeveloperService?wsdl';
        $service = 'registerDeveloper';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function isDeveloper($params = [])
    {
        $defaults = [];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/DeveloperService?wsdl';
        $service = 'isDeveloper';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

}