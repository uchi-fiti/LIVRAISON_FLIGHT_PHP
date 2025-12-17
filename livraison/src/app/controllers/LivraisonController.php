<?php 
namespace app\controllers;
use app\models\LivraisonDAO;
use flight\Engine;
use Flight;
class LivraisonController {
    protected Engine $app;
    public function __construct($app) {
        $this->app = $app;
    }
    
    public function loadHome(){ 
        //This function is called upon going in the root of the webiste, which
        //sends it to the list of 'Livraisons' after a call to product DAO
        
        $livraisondao = new LivraisonDao(Flight::db());
        $livraisons = $livraisondao->getAllLivraison();
        Flight::render('welcome', ['liste_livraison' => $livraisons]);
    }

    public function findLivraisonById($id){
        $livraisondao = new LivraisonDao(Flight::db());
        $livraison = $livraisondao->getLivraisonById($id);
        return $livraison;
    }

    public function getStateChoices(){
        $livraisondao = new LivraisonDao(Flight::db());
        $livraison = $livraisondao->etatHTMLSelect();
        return $livraison;
    }
}
?>