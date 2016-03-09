<?php

namespace spec\aEscarcha\UdemyApiClient\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CourseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('aEscarcha\UdemyApiClient\Entity\Course');
    }

    function it_is_created_from_json()
    {
        $this->beConstructedWith($this->detailJson);
        $this->getId()->shouldBe('674764');
        $this->getTitle()->shouldBe('Curso completo do desenvolvedor web HTML5, CSS3 e JavaScript');
        $this->getUrl()->shouldBe('/curso-html5-css3-javascript/');
        $this->getIsPaid()->shouldBe(true);
        $this->getPrice()->shouldBe(224);
        $this->getImage()->shouldBe('https://udemy-images.udemy.com/course/125_H/674764_f980_6.jpg');
        $this->getDescription()->shouldContain('Aprenda em um curso completo HTML5, CSS3 e JavaScript com os');
    }

    protected $detailJson = '{
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
  "published_title": "curso-html5-css3-javascript",
  "description": "<ul><li>Aprenda em um curso completo HTML5, CSS3 e JavaScript com os comandos mais importantes.</li><li>Crie um site completo e responsivo que se adapta no Tablet e Smartphone e em telas maiores.</li><li>Trabalhe com imagens, áudio, vídeo e descubra boas práticas.</li><li>Aprenda a criar um carrinho de compras completo com cálculo de frete para uma loja virtual, utilizando PHP e MySQL.</li><li>Um curso com mais de 75 aulas gravadas em alta definição e estúdio profissional.</li><li>Suas dúvidas respondidas no mesmo dia.</li><li>São mais de 12 horas de aula e exercícios.</li><li>Um site completo que será desenvolvido do zero.</li><li>Após este curso você estará apto a criar sites modernos e responsivos.</li><li>Dois especialistas no assunto, explicam de maneira divertida, didática todos os comandos e dicas para você alavancar a sua carreira profissional.</li></ul>",
  "headline": "Aprenda a criar um site do zero, do básico ao avançado, aprenda HTML5 e CSS3 a fundo com muito JavaScript.",
  "num_subscribers": 507,
  "promotion_price": null,
  "discount_price": {
    "amount": "17",
    "currency": "EUR",
    "price_string": "17 €",
    "currency_symbol": "€"
  },
  "avg_rating": 4.58203,
  "num_reviews": 128,
  "favorite_time": null,
  "archive_time": null,
  "earnings": "$0",
  "completion_ratio": 0,
  "is_wishlisted": false,
  "num_quizzes": 1,
  "num_lectures": 79,
  "num_published_lectures": 79,
  "num_published_quizzes": 1,
  "num_curriculum_items": 80,
  "is_private": false,
  "num_simple_quizzes": 0,
  "original_price_text": "$199.00",
  "quality_status": "approved",
  "status_label": "published",
  "can_edit": false,
  "features": {
    "discussions_create": true,
    "discussions_view": true,
    "enroll": true,
    "reviews_create": true,
    "reviews_view": true,
    "announcements_comments_view": true,
    "educational_announcements_create": true,
    "promotional_announcements_create": true,
    "promotions_create": true,
    "promotions_view": true,
    "students_view": true
  },
  "gift_url": "https://www.udemy.com/gift/curso-html5-css3-javascript/",
  "num_invitation_requests": 0,
  "notification_settings": {},
  "is_banned": false,
  "is_published": true,
  "image_48x27": "https://udemy-images.udemy.com/course/48x27/674764_f980_6.jpg",
  "image_50x50": "https://udemy-images.udemy.com/course/50x50/674764_f980_6.jpg",
  "image_75x75": "https://udemy-images.udemy.com/course/75x75/674764_f980_6.jpg",
  "image_96x54": "https://udemy-images.udemy.com/course/96x54/674764_f980_6.jpg",
  "image_100x100": "https://udemy-images.udemy.com/course/100x100/674764_f980_6.jpg",
  "image_200_H": "https://udemy-images.udemy.com/course/200_H/674764_f980_6.jpg",
  "image_304x171": "https://udemy-images.udemy.com/course/304x171/674764_f980_6.jpg",
  "image_750x422": "https://udemy-images.udemy.com/course/750x422/674764_f980_6.jpg",
  "has_certificate": true,
  "primary_category": {
    "_class": "course_category",
    "id": 288,
    "title": "Development"
  },
  "primary_subcategory": {
    "_class": "course_subcategory",
    "id": 8,
    "title": "Web Development"
  },
  "is_in_content_subscription": false,
  "locale": {
    "_class": "locale",
    "locale": "pt_BR",
    "title": "Português (Brasil)",
    "english_title": "Portuguese (Brazil)"
  },
  "has_closed_caption": false,
  "created": "2015-11-19T18:12:26Z",
  "instructional_level": "Todos los niveles",
  "estimated_content_length": 779,
  "content_info": "13 horas",
  "requirements_data": {
    "items": [
      "Você já deve estar familiarizado com a Internet."
    ]
  },
  "what_you_will_learn_data": {
    "items": [
      "Crie sites incríveis com HTML5 e CSS3 em um curso completo com dois especialistas no assunto. Em mais de 75 aulas você aprenderá do básico ao avançado como criar um site que funcione bem nos smartphone, tablet e em Desktop.",
      "São mais de 15 horas de gravação em um Estúdio profissional, com qualidade de áudio perfeita, didática impressionante com ilustrações, animações e vídeos de apoio.",
      "Aprenda a criar um site responsivo temático, e um carrinho de compras completo de uma loja virtual com cálculo de frete utilizando web services, Angular.js e um pouco de PHP com Slim Framework, MySQL com Stored Procedures. Vamos do básico ao avançado em um projeto real passo a passo."
    ]
  },
  "who_should_attend_data": {
    "items": [
      "Este curso de HTML5 e CSS3 destina-se a iniciantes no desenvolvimento web, que talvez nunca tenham desenvolvido um site, mas querem se tornar um profissional da área de Desenvolvimento Web.",
      "Recomendado também para estudantes de Tecnologia da Informação, ou que desejam tornar-se programadores para Web."
    ]
  },
  "is_available_on_google_app": true,
  "organization_id": null,
  "google_in_app_purchase_price_text": "$15.00",
  "promo_asset": {
    "_class": "asset",
    "id": 5178866,
    "asset_type": "Video",
    "title": "Video Promocional Completo02.mp4",
    "title_cleaned": "video-promocional-completo02mp4",
    "description": "",
    "length": 90,
    "status": 1,
    "data": {
      "ticket_id": "2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859",
      "duration": 90,
      "outputs": {
        "360": {
          "label": "360",
          "fragment_duration_in_ms": null,
          "width": 640,
          "state": "finished",
          "url": "http://knowband-asset-bucket.s3.amazonaws.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD.mp4",
          "video_codec": "h264",
          "type": "standard",
          "md5_checksum": null,
          "format": "mpeg4",
          "frame_rate": 24,
          "total_bitrate_in_kbps": 1071,
          "audio_sample_rate": 48000,
          "id": 741767014,
          "rfc_6381_audio_codec": "mp4a.40.2",
          "audio_codec": "aac",
          "channels": "2",
          "height": 360,
          "video_bitrate_in_kbps": 975,
          "audio_bitrate_in_kbps": 96,
          "rfc_6381_video_codec": "avc1.42001e",
          "file_size_in_bytes": 12089589,
          "duration_in_ms": 90153
        },
        "480": {
          "label": "480",
          "fragment_duration_in_ms": null,
          "width": 854,
          "state": "finished",
          "url": "http://knowband-asset-bucket.s3.amazonaws.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD_480.mp4",
          "video_codec": "h264",
          "type": "standard",
          "md5_checksum": null,
          "format": "mpeg4",
          "frame_rate": 24,
          "total_bitrate_in_kbps": 1650,
          "audio_sample_rate": 48000,
          "id": 741767015,
          "rfc_6381_audio_codec": "mp4a.40.2",
          "audio_codec": "aac",
          "channels": "2",
          "height": 480,
          "video_bitrate_in_kbps": 1554,
          "audio_bitrate_in_kbps": 96,
          "rfc_6381_video_codec": "avc1.42001e",
          "file_size_in_bytes": 18620596,
          "duration_in_ms": 90153
        },
        "720": {
          "label": "720",
          "fragment_duration_in_ms": null,
          "width": 1280,
          "state": "finished",
          "url": "http://knowband-asset-bucket.s3.amazonaws.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD_720p.mp4",
          "video_codec": "h264",
          "type": "standard",
          "md5_checksum": null,
          "format": "mpeg4",
          "frame_rate": 24,
          "total_bitrate_in_kbps": 2864,
          "audio_sample_rate": 48000,
          "id": 741767016,
          "rfc_6381_audio_codec": "mp4a.40.2",
          "audio_codec": "aac",
          "channels": "2",
          "height": 720,
          "video_bitrate_in_kbps": 2768,
          "audio_bitrate_in_kbps": 96,
          "rfc_6381_video_codec": "avc1.42001f",
          "file_size_in_bytes": 32297471,
          "duration_in_ms": 90153
        },
        "1080": {
          "label": "1080",
          "fragment_duration_in_ms": null,
          "width": 1920,
          "state": "finished",
          "url": "http://knowband-asset-bucket.s3.amazonaws.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD_1080.mp4",
          "duration_in_ms": 90153,
          "type": "standard",
          "md5_checksum": null,
          "format": "mpeg4",
          "frame_rate": 24,
          "total_bitrate_in_kbps": 5641,
          "audio_sample_rate": 48000,
          "id": 741767017,
          "rfc_6381_audio_codec": "mp4a.40.2",
          "audio_codec": "aac",
          "channels": "2",
          "height": 1080,
          "video_bitrate_in_kbps": 5545,
          "audio_bitrate_in_kbps": 96,
          "rfc_6381_video_codec": "avc1.420028",
          "file_size_in_bytes": 63582233,
          "video_codec": "h264"
        }
      },
      "isHD": true,
      "ticketId": "2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859",
      "storage_bucket": "knowband-asset-bucket",
      "dimensions": {
        "height": 1080,
        "width": 1920
      },
      "domain": "www.udemy.com",
      "fileSize": 12089589,
      "zencoder_job_id": 231407008,
      "name": "1488dcae-f216-43e3-a85c-6c538266a82a.mp4",
      "thumbnails_data": {
        "num_of_thumnails": 46,
        "interval": 2
      },
      "upload_bucket": "udemy-web-upload-bucket"
    },
    "download_urls": {
      "Video": [
        {
          "type": "video/mp4",
          "label": "360",
          "file": "https://udemy-assets-on-demand.udemy.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD.mp4?nva=20160309220139&filename=Video-Promocional-Completo02.mp4&download=True&token=06b450091ed7ed38a1862"
        },
        {
          "type": "video/mp4",
          "label": "480",
          "file": "https://udemy-assets-on-demand.udemy.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD_480.mp4?nva=20160309220139&filename=Video-Promocional-Completo02.mp4&download=True&token=07268e66bcd2d4865a40a"
        },
        {
          "type": "video/mp4",
          "label": "720",
          "file": "https://udemy-assets-on-demand.udemy.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD_720p.mp4?nva=20160309220139&filename=Video-Promocional-Completo02.mp4&download=True&token=0b365a1c401c677c64624"
        },
        {
          "type": "video/mp4",
          "label": "1080",
          "file": "https://udemy-assets-on-demand.udemy.com/2016-02-01_18-53-54-34de7c6af18883e085dbe8e57357b859/WebHD_1080.mp4?nva=20160309220139&filename=Video-Promocional-Completo02.mp4&download=True&token=0d109b9d8a2eb2c95f154"
        }
      ]
    }
  },
  "is_user_subscribed": false,
  "apple_in_app_product_id": "com.udemy.courses.674764.price.14.99.204",
  "is_available_on_ios": true,
  "google_in_app_product_id": "android.course.674764.204",
  "faq": [
    {
      "answer": "Puedes ver y revisar los materiales de la clase sin restricción de tiempo, igual que un canal a pedido.",
      "question": "¿Por cuánto tiempo tengo acceso a los materiales del curso?"
    },
    {
      "answer": "Definitely! If you have an internet connection, courses on Udemy are available on any device at any time. If you don\'t have an internet connection, some instructors also let their students download course lectures. That\'s up to the instructor though, so make sure you get on their good side!",
      "question": "¿Puedo llevar mis cursos conmigo a donde sea?"
    }
  ],
  "apple_in_app_purchase_price_text": "$14.99",
  "type_label": "curso",
  "price_detail": {
    "amount": "224",
    "currency": "EUR",
    "price_string": "224 €",
    "currency_symbol": "€"
  },
  "google_in_app_price_detail": {
    "amount": "15.00",
    "currency": "USD",
    "price_string": "$15",
    "currency_symbol": "$"
  },
  "apple_in_app_price_detail": {
    "amount": "14.99",
    "currency": "USD",
    "price_string": "$15",
    "currency_symbol": "$"
  },
  "client_settings": {
    "checkpoints_enabled": false,
    "beta_opt_in": false,
    "coding_exercises_enabled": false
  },
  "num_negative_feedbacks_last_month": 15,
  "welcome_message": null,
  "quality_review_process": {
    "_class": "quality_review_process",
    "id": 48384,
    "status": "approved",
    "score": "15.00",
    "admin_rating": 7
  },
  "is_organization_only": false,
  "buyable_object_type": "course",
  "published_time": "2016-02-02T18:03:02Z",
  "is_marketing_boost_agreed": true,
  "is_taking_disabled": false,
  "content_length_video": 46506,
  "checkout_url": "/payment/checkout/?boId=674764&boType=course&couponCode=occdescuento2016",
  "prerequisites": [
    "Você já deve estar familiarizado com a Internet."
  ],
  "objectives": [
    "¡Más de 79 clases y 13 horas de contenido!",
    "Crie sites incríveis com HTML5 e CSS3 em um curso completo com dois especialistas no assunto. Em mais de 75 aulas você aprenderá do básico ao avançado como criar um site que funcione bem nos smartphone, tablet e em Desktop.",
    "São mais de 15 horas de gravação em um Estúdio profissional, com qualidade de áudio perfeita, didática impressionante com ilustrações, animações e vídeos de apoio.",
    "Aprenda a criar um site responsivo temático, e um carrinho de compras completo de uma loja virtual com cálculo de frete utilizando web services, Angular.js e um pouco de PHP com Slim Framework, MySQL com Stored Procedures. Vamos do básico ao avançado em um projeto real passo a passo."
  ],
  "target_audiences": [
    "Este curso de HTML5 e CSS3 destina-se a iniciantes no desenvolvimento web, que talvez nunca tenham desenvolvido um site, mas querem se tornar um profissional da área de Desenvolvimento Web.",
    "Recomendado também para estudantes de Tecnologia da Informação, ou que desejam tornar-se programadores para Web."
  ]
}';
}
