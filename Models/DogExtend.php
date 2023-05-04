<?php

class DogExtend extends Product {

    public $category = "dog";
    public $icon= "<i class='fa-solid fa-dog'></i>";

    function __construct(string $type, string $imgString, string $title, string $price, string $desc)
    {
        parent::__construct($type, $imgString, $title, $price, $desc);
    }

}