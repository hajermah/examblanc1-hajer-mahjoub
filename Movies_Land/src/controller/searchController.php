<?php

class AdController 
{
    private $title;

    public function __construct()

    {
          $this->title="Rechercher un film";
    }

    function manage () {

        include(__DIR__."./../view/ad.php");
    }
}