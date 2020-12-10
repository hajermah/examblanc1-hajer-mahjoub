<?php


class BddAcces
{

    public function __construct()
    
    {

       $host="localhost";
       $dbName="Movies_Land";

       try {

        $this->handle=new PDO("mysql:host=$host;dbname=$dbName;charset=utf8",
        array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION)
       );

    }  
    catch( PDOException $e){
        die( 'Echec de la connexion:' . $e->getMessage());
    }

    }

}