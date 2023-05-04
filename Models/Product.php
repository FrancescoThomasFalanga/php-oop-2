<?php

class Product {

    public $type;
    public $imgString;
    public $title;
    public $price;
    public $desc;

    function __construct(string $type, string $imgString, string $title, string $price, string $desc) {
        $this->type = $type;
        $this->imgString = $imgString;
        $this->title = $title;
        $this->price = $price;
        $this->desc = $desc;
    }
}