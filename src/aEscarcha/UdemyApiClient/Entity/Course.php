<?php

namespace aEscarcha\UdemyApiClient\Entity;

class Course
{
    protected $id;
    protected $title;
    protected $url;
    protected $isPaid;
    protected $price;
    protected $image;
    protected $description;
    protected $avgRating;
    protected $numReviews;
    protected $primaryCategory;
    protected $primarySubcategory;

    public function __construct($argument1 = null)
    {
        if($argument1){
            $data = json_decode( $argument1 );
            foreach ($data as $key => $value) {
                $setter = 'set' . self::camelCase( $key );
                if( method_exists($this, $setter)  ){
                    $this->$setter( $value );
                }
            }

        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId( $argument1 )
    {
        $this->id = intval($argument1);
        return $this->id;
    }

    /**
     * Converts incoming snake case to camelCase
     * @param  string $string
     * @return string
     */
    protected static function camelCase( $string, $capitalizeFirstCharacter = true )
    {
        $str = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $string)));
        return $capitalizeFirstCharacter ? $str : strtolower($str[0]);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle( $argument1 )
    {
        $this->title = $argument1;
        return $this->title;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl( $argument1 )
    {
        $this->url = $argument1;
        return $this;
    }

    public function getIsPaid()
    {
        return $this->isPaid;
    }

    public function setIsPaid( $argument1 )
    {
        $this->isPaid = $argument1;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice( $argument1 )
    {
        $this->price = intval($argument1);
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage( $argument1 )
    {
        $this->image = $argument1;
        return $this;
    }

    public function setImage125H( $argument1 )
    {
        return $this->setImage( $argument1 );
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription( $argument1 )
    {
        $this->description = $argument1;
        return $this;
    }

    public function getAvgRating()
    {
        return $this->avgRating;
    }

    public function setAvgRating( $argument1 )
    {
        $this->avgRating = $argument1;
        return $this;
    }

    public function getNumReviews()
    {
        return $this->numReviews;
    }

    public function setNumReviews( $argument1 )
    {
        $this->numReviews = intval($argument1);
        return $this;
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale( $argument1 )
    {
        $this->locale = $argument1->locale;
        return $this;
    }

    public function getPrimaryCategory()
    {
        return  $this->primaryCategory;
    }

    public function setPrimaryCategory( $argument1 )
    {
        $this->primaryCategory = $argument1->title;
        return $this;
    }

    public function getPrimarySubcategory()
    {
        return  $this->primarySubcategory;
    }

    public function setPrimarySubcategory( $argument1 )
    {
        $this->primarySubcategory = $argument1->title;
        return $this;
    }

}
