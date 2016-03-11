# UdemyApiClient

This is a PHP Udemy api client to handle connection with Udemy 2.0 API, atm it only parses course details requests, it may grow in the future, or may not. Feel free to contribute.

#Install
Add to composer require

    "require": {
        "aescarcha/udemy-api-client": "dev-master"
    }
    
Run composer update

#Usage:
    $api = new Api('clientId', 'clientSecret');
    $course = $api->getUrl( 'http://www.udemy.com/api-2.0/courses/1');
