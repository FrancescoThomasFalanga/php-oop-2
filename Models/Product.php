<?php

class Product {

    public $type;
    public $imgString;
    public $title;
    public $price;
    public $desc;
    public $category;
    public $expiration_data;
    public $size;

    function __construct(string $type, string $imgString, string $title, string $price, string $desc, string $category) {
        $this->type = $type;
        $this->imgString = $imgString;
        $this->title = $title;
        $this->price = $price;
        $this->desc = $desc;
        $this->category = $category;
    }

    public function getIcon() {
        if ($this->category == "dog") {
            return "<i class='fa-solid fa-cat'></i>";
        } else if ($this->category == "cat") {
            return "<i class='fa-solid fa-cat'></i>";
        }
    }
}