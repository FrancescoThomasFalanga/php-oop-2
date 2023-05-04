<?php

class Accessory extends Product {

    public $size;

    function __construct(string $type, string $imgString, string $title, string $price, string $desc, string $category, string $size)
    {
        parent::__construct($type, $imgString, $title, $price, $desc, $category);

        $this->size = $size;
    }

}