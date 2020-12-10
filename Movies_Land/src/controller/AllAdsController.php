<?php

class AllAdsController 
{
    private $title;
    private $model;
    private $adsList;

    public function __construct()

    {
          $this->title="Liste des films";
          $this->model=new Model();
    }

    function manage () {

        $this->adsList=$this->model->getAllAds();

        var_dump($this->adsList);

        include(__DIR__."./../view/ads.php");
    }
}