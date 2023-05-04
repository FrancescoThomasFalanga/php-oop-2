<?php

class DogExtend extends Product {

    public $icon= "<i class='fa-solid fa-dog'></i>";

    function __construct(string $type, string $imgString, string $title, string $price, string $categoryIcon, string $desc)
    {
        parent::__construct($type, $imgString, $title, $price, $categoryIcon, $desc);
    }

}