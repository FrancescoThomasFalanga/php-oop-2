<?php

class Product {

    public $type;
    public $imgString;
    public $title;
    public $price;
    public $desc;
    public $category;


    // l'estensione INTELLIPHENSE li mostra come errori nell'Index.PHP, quindi in via di sviluppo per evitare che me li mostrasse come errori
    // ho tolto il commento (ho letto in più forum questo fatto dell'errore e a molti hanno consigliato persino di disattivare gli errori che mostra)
    // in quanto L'estensione è indietro rispetto agli aggiornamenti di PHP...

    // public $expiration_data;
    // public $size;
    // public $weight;

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
            return "<i class='fa-solid fa-dog'></i>";
        } else if ($this->category == "cat") {
            return "<i class='fa-solid fa-cat'></i>";
        }
    }
}