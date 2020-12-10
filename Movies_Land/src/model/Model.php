<?php


class Model
{

    public function addNewAd($title, $url, $date){

        try{

            $request=$this->handle->prepare('insert_into ads (ads_title, ads_date, ads_url)
                                            values(?, ?, ?)'
        );

            $request->execute(array(
                $title,
                $url,
                $date,
                1,
                1

            ));
    
        } catch(PDOException $e) {
            var_dump('Erreur lors de la requete SQL:' . $e->getMessage());
            }
    }

    public function getAllAds() {

        try {

            $request = $this->handle->prepare('SELECT * FROM ads');
            $request->execute();

            $data=$request->fetchAll();

            return $data;

        } catch (PDOException $e) {
            var_dump('Erreur lors de la requete SQL: ' . $e->getMessage());
        }
    }
        
}
