<?php

namespace app\controllers;
use app\models\LivraisonDAO;
use flight\Engine;
use Flight;

class UpdateController {

    public function UploadState(){
        $req = Flight::request();

        $state_int = $req->etat;
        $livraison_id = $req->id;
        $livraison_dao = new LivraisonDAO(Flight::db());
        $livraison_dao->updateState($livraison_id, $state_int);
    }
}
?>