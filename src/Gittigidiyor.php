<?php
/**
 * Author: Kıvanç Ağaoğlu
 * Web: https://kivancagaoglu.com
 * Mail: info@kivancagaoglu.com
 * Skype: kivancagaoglu
 * Github: https://github.com/kivancagaogluu/
 *
 */

namespace bluntk;

use SoapClient;

class Gittigidiyor
{

    protected $apiKey;
    protected $secretKey;
    protected $nick;
    protected $password;
    protected $lang;
    protected $sign;
    protected $time;
    protected $auth_user;
    protected $auth_pass;
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->apiKey = $config['apiKey'];
        $this->secretKey = $config['secretKey'];
        $this->nick = $config['nick'];
        $this->password = $config['password'];
        $this->auth_user = $config['auth_user'];
        $this->auth_pass = $config['auth_pass'];
        $this->lang = $config['lang'];

        list($usec, $sec) = explode(" ", microtime());
        $this->time = round(((float)$usec + (float)$sec) * 100) . '0';

        $this->sign = md5($this->apiKey . $this->secretKey . $this->time);

    }

    public function category()
    {
        return new Services\CategoryService($this->config);
    }

    public function city()
    {
        return new Services\CityService($this->config);
    }

    public function catalog()
    {
        return new Services\CatalogService($this->config);
    }

    public function developer()
    {
        return new Services\DeveloperService($this->config);
    }

    public function account()
    {
        return new Services\AccountService($this->config);
    }

    public function product()
    {
        return new Services\ProductService($this->config);
    }

    protected function request($requestUrl, $service, $params)
    {
        $soapClient = new SoapClient($requestUrl,
            [
                'login' => $this->auth_user,
                'password' => $this->auth_pass,
                'authentication' => SOAP_AUTHENTICATION_BASIC
            ]
        );
        $result = $soapClient->__soapCall($service, $params);
        return $result;
    }

}

