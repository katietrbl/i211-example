<?php
/**
 *Author: Katie Stinson
 *Date: 3/21/23
 *File: toy.class.php
 *Description: create toy class
 */

class Toy{
    //attributes
    private $id, $name, $description, $price;

    //constructor
    public function __construct($id, $name, $desc, $price){
        $this->id= $id;
        $this->name = $name;
        $this->description = $desc;
        $this->price = $price;
    }

    //getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function getPrice()
    {
        return $this->price;
    }


}