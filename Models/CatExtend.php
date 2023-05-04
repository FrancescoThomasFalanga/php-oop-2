<?php

class CatExtend extends Product {

    public $category = "cat";
    public $icon = "<i class='fa-solid fa-cat'></i>";

    function __construct(string $type, string $imgString, string $title, string $price, string $desc)
    {
        parent::__construct($type, $imgString, $title, $price, $desc);
    }

}