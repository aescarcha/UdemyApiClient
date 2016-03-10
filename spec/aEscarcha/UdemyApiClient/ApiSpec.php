<?php

namespace spec\aEscarcha\UdemyApiClient;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use GuzzleHttp\Message\Response;
use GuzzleHttp\Stream\Stream;

class ApiSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('1234', '5678');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('aEscarcha\UdemyApiClient\Api');
        $this->getClientId()->shouldBe( '1234' );
        $this->getClientSecret()->shouldBe( '5678' );
    }

    function it_gets_url( \GuzzleHttp\Client $client )
    {
        $response = new Response(200, [], Stream::factory($this->getCourseResponse));
        $client->get('/api-2.0/courses/674764')->willReturn($response);
        $client->setDefaultOption("auth", "MTIzNDo1Njc4")->shouldBeCalled();
        $this->beConstructedWith('1234', '5678', $client);
        $result = $this->getUrl( '/api-2.0/courses/674764' )->shouldReturnAnInstanceOf( 'aEscarcha\UdemyApiClient\Entity\Course' );
    }

    protected $getCourseResponse = '{
  "_class": "course",
  "id": 674764,
  "title": "Curso completo do desenvolvedor web HTML5, CSS3 e JavaScript",
  "url": "/curso-html5-css3-javascript/",
  "is_paid": true,
  "price": "224 €",
  "visible_instructors": [
    {
      "_class": "user",
      "id": 16820398,
      "title": "Glaucio Daniel Souza Santos",
      "name": "Glaucio Daniel Souza",
      "display_name": "Glaucio Daniel Souza Santos",
      "job_title": "Sr. Developer Advocate at HTML5DEV",
      "image_50x50": "https://udemy-images.udemy.com/user/50x50/16820398_f119_3.jpg",
      "image_100x100": "https://udemy-images.udemy.com/user/100x100/16820398_f119_3.jpg",
      "url": "/user/glaucio-daniel-souza-santos/"
    },
    {
      "_class": "user",
      "id": 17073306,
      "title": "João Rangel",
      "name": "João",
      "display_name": "João Rangel",
      "job_title": "João Rangel",
      "image_50x50": "https://udemy-images.udemy.com/user/50x50/17073306_d1d7_2.jpg",
      "image_100x100": "https://udemy-images.udemy.com/user/100x100/17073306_d1d7_2.jpg",
      "url": "/user/joao-rangel/"
    },
    {
      "_class": "user",
      "id": 19160076,
      "title": "Djalma Sindeaux",
      "name": "Djalma",
      "display_name": "Djalma Sindeaux",
      "job_title": "Sr. Director at Hcode",
      "image_50x50": "https://udemy-images.udemy.com/user/50x50/19160076_3a68_3.jpg",
      "image_100x100": "https://udemy-images.udemy.com/user/100x100/19160076_3a68_3.jpg",
      "url": "/user/djalma-sindeaux/"
    }
  ],
  "image_125_H": "https://udemy-images.udemy.com/course/125_H/674764_f980_6.jpg",
  "image_240x135": "https://udemy-images.udemy.com/course/240x135/674764_f980_6.jpg",
  "image_480x270": "https://udemy-images.udemy.com/course/480x270/674764_f980_6.jpg",
  "published_title": "curso-html5-css3-javascript"
}';
}
