<?php

namespace io\clonalejandro;

use Exception;

/**
 * Created by alejandrorioscalera
 * 11/05/2018
 *
 * -- SOCIAL NETWORKS --
 *
 * GitHub: https://github.com/clonalejandro or @clonalejandro
 * Website: https://clonalejandro.me/
 * Twitter: https://twitter.com/clonalejandro11/ or @clonalejandro11
 * Keybase: https://keybase.io/clonalejandro/
 *
 * -- LICENSE --
 *
 * All rights reserved for clonalejandro ©clonastatus 2017 / 2018
 */

class StatusApi {


    /** SMALL CONSTRUCTORS **/

    private $domain, $port, $response;

    public function __construct($domain, $port = 80)
    {
        $this->domain = $domain;
        $this->port = $port;
        $this->sendRequest();
    }


    /** REST **/

    /**
     * This function returns a response
     * @return array || @return object
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * This function returns a response as json
     * @return array || @return object
     */
    public function getResponseAsJson()
    {
        return json_encode($this->response);
    }


    /**
     * This function returns if the request responds the site is online
     * @return boolean
     */
    public function isOnline()
    {
        return $this->parseBoolean(
            json_decode( $this->getResponse() )->online
        );
    }


    /** OTHERS **/

    /**
     * This function send the request
     */
    private function sendRequest()
    {
        if (function_exists('curl_exec')) {
            $request = curl_init();

            $this->configureRequest($request);
            $this->setResponse(
                curl_exec($request)
            );

            curl_close($request);
        }
        else {
            $url = "https://server.clonalejandro.me/api/status/?domain=" . $this->domain . "&port=$this->port";
            $res = file_get_contents($url);
            $this->setResponse($res);
        }
    }


    /**
     * This function configure the request
     * @param mixed $request
     */
    private function configureRequest($request)
    {
        $agent = 'Mozilla/5.0 (Windows NT 5.1; rv:2.0.1) Gecko/20100101 Firefox/4.0.1';
        $referer ='http://www.google.com/';
        $header[0] = "Accept-Language: en-us,en;q=0.5";

        curl_setopt($request, CURLOPT_URL,
            "https://server.clonalejandro.me/api/status?domain=" . $this->domain . "&port=" . $this->port
        );

        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request, CURLOPT_USERAGENT, $agent);
        curl_setopt($request, CURLOPT_REFERER, $referer);
        curl_setopt($request, CURLOPT_HTTPHEADER, $header);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_TIMEOUT, 10);
    }


    /**
     * This function set the response val
     * @param array $response || @param object $response
     */
    private function setResponse($response)
    {
        $this->response = $response;
    }


    /**
     * This function parse from string to boolean
     * @param mixed $value
     * @return boolean
     */
    private function parseBoolean($value)
    {
        return $value == "true" || $value == true;
    }


}
