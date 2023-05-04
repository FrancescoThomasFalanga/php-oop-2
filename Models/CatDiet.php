<?php

class CatDiet extends Product {

    public $category = "cat";
    public $icon = "<i class='fa-solid fa-cat'></i>";
    public $expiration_data;

    function __construct(string $type, string $imgString, string $title, string $price, string $desc, string $expiration_data)
    {
        parent::__construct($type, $imgString, $title, $price, $desc);

        $this->expiration_data = $expiration_data;
    }

}