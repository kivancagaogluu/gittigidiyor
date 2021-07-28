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
use SimpleXMLElement;

class AccountService extends Gittigidiyor
{

    public function __construct($config)
    {
        parent::__construct($config);
    }

    public function getBalances($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time];
        $defaults['balanceRequest'] = [
            'startDate' => '01/01/2020 10:30:00',
            'endDate' => '01/05/2020 10:30:00',
            'pageNumber' => 1,
            'pageSize' => 1,
            'balanceTransferStatus' => 'COMPLETED'
        ];
        $xml = New SimpleXmlElement('<balanceRequest/>');
        $xml->addChild('startDate', '01/01/2020 10:30:00');
        $xml->addChild('endDate', '01/05/2020 10:30:00');
        $xml->addChild('pageNumber', '2');
        $xml->addChild('pageSize', '2');
        $xml->addChild('balanceTransferStatus', 'COMPLETED');
        $data = $xml->asXML();
        $defaults['balanceRequest'] = $data;
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl';
        $service = 'getBalances';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getDebtCollection($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time];
        $defaults['queryDebtCollectionRequest'] = [
            'balanceCode' => 'SELLER-BC-f3a42b0b-e8c9-4798-b1be-37559439b029',
            'pageNumber' => 1,
            'pageSize' => 1,
        ];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl';
        $service = 'getDebtCollection';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getSrsProcessSaleItem($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time];
        $defaults['srsProcessSaleItemRequest'] = [
            'balanceCode' => 'SELLER-BC-f3a42b0b-e8c9-4798-b1be-37559439b029',
            'pageNumber' => 1,
            'pageSize' => 1,
        ];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl';
        $service = 'getSrsProcessSaleItem';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

    public function getSrsProcessDetailsSaleItem($params = [])
    {
        $defaults = ['apiKey' => $this->apiKey, 'sign' => $this->sign, 'time' => $this->time];
        $defaults['srsProcessDetailsRequest'] = [
            'memberId' => '9717156',
            'pageNumber' => 1,
            'pageSize' => 1,
            'saleCodes' => [
                'SCSRS2800020',
                'SCSRS2800021',
            ]
        ];
        $parameters = array_merge($defaults, $params);
        $parameters['lang'] = $this->lang;
        $requestUrl = 'https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl';
        $service = 'getSrsProcessSaleItem';
        $response = $this->request($requestUrl, $service, $parameters);
        return $response;
    }

}