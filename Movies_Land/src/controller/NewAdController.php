<?php

class NewAdController 
{

    private $title;
    private $model;

    public function __construct()

    {
          $this->title="ajouter un film";
        
    }
    
    function manage () {

        if(isset($_POST['title']) and $_POST['title'] !='')
        if(isset($_POST['date']) and $_POST['date'] !='')
        if(isset($_POST['url']) and $_POST['url'] !=''){
            $this->model= new Model ();
            $this->model->addNewAd($_POST['title'], $_POST['url'], $_POST['date']);

        }

        include(__DIR__."./../view/newAd.php");

    }
}