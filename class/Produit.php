<?php

class Produit {

    public function afficheProduit($db, $id_produit){
        $produit = $db->queryList('SELECT * FROM produit FULL JOIN image_produit ON A.key = B.key', [$produit]);
        return $produit;
    }


}