<?php

namespace aEscarcha\UdemyApiClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use aEscarcha\UdemyApiClient\Entity\Course;

class Api
{
    protected $clientId;
    protected $clientSecret;

    /**
     * HTTP client to do the requests
     * @var \GuzzleHttp\ClientInterface
     */
    protected $client;

    public function __construct($argument1, $argument2, \GuzzleHttp\ClientInterface $client = null)
    {
        $this->setClientId( $argument1 );
        $this->setClientSecret( $argument2 );
        $client = $client ? $client : new Client;
        $this->setClient( $client );
    }

    /**
     * Get given url and process response to return hydrated entities
     * This method is meant to be done internal in the future, and called from helper methods 
     * like getCourse, getCourses
     * @param  string $url UdemyUrl
     * @return object|false  Object or collection or objects on sucess, false on error
     */
    public function getUrl($url)
    {
        try {
            $result = $this->getClient()->get('/api-2.0/courses/674764');
        } catch (RequestException $e) {
            return false;
        }
        $data = json_decode($result->getBody());
        if($data){
            return $this->processResponse( $data );
        }

        return false;
    }

    /**
     * Process the sucessful response from udemy, and return entity
     * or collection of entities
     * @param  Object $data Json decoded object
     * @return Object|Array
     */
    protected function processResponse( $data )
    {
        $result = [];
        if(isset($data->results)){
            //more than one, recursive call
            foreach ($data->results as $key => $value) {
                $result[] = $this->processResponse( $value );
            }
        } else {
            $class = "\aEscarcha\UdemyApiClient\Entity\\" . ucfirst($data->_class);
            return new $class( $data );
        }
        return $result;
    }

    public function setClientId( $argument1 )
    {
        $this->clientId = $argument1;
        return $this;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientSecret( $argument1 )
    {
        $this->clientSecret = $argument1;
        return $this;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient( \GuzzleHttp\ClientInterface $client )
    {
        $client->setDefaultOption('auth', base64_encode($this->getClientId() . ':' . $this->getClientSecret()));
        $this->client = $client;
        return $this;
    }

}
