<?php

class Produit {

    public function afficheProduit($db, $id_produit){
        $produit = $db->queryList('SELECT * FROM produit WHERE id= ?', [$produit]);
        return $produit;
    }


}