<?php

trait Weight {

    public $weight;

    public function getWeight($weight) {

        if ($weight >= 1 && $weight <= 1000) {

            return $this->weight = $weight;

        } else {

            throw new Exception("Error Ciccio.Exe!");

            // per simulare l'errore ho messo delle proprietà $weight con dei float così non rispettando l'if sopra
            // stampa l'errore;

        }

    }

}