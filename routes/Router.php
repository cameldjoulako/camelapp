<?php

namespace Router;

class Router {

    public $url;

    public function __construct($url) {
        $this->url = $url;
    }


    /**
     * Méthode permettant de renvoyer l'URL prérempli a la construction
     */
    public function show() {
        echo $this->url;
    }

}