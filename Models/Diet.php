<?php

// REQUIRE Weight Trait
require_once __DIR__ . "/../Traits/Weight.php";

class Diet extends Product {

    use Weight;

    public $expiration_data;

    function __construct(string $type, string $imgString, string $title, string $price, string $desc, string $category, string $expiration_data)
    {
        parent::__construct($type, $imgString, $title, $price, $desc, $category);

        $this->expiration_data = $expiration_data;
    }

}