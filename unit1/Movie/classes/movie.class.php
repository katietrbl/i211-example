<?php
/**
 *Author: Katie Stinson
 *Date: 1/24/23
 *File: movie.class.php
 *Description:
 */

class Movie{
    private $id, $title, $rating, $release_date, $director, $image, $description;

//the Movie class constructor, which initializes all Movie attributes except movie id.
    public function __construct($title, $rating, $release_date, $director, $image, $description) {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }


    //set method for movie id
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }






    //get methods to return movie details

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->release_date;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }


}