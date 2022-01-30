<?php

function ajouter_vue(){
    $fichier = dirname(__DIR__)  . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    echo dirname(__DIR__) ;
    $compteur = 1;
    if (file_exists($fichier)) { //vérification que le fichier existe
        // si le fichier existe on incrémente 
        $compteur = (int)file_get_contents($fichier); //récupération du contenu du fichier cast int
        $compteur++;
    }
    file_put_contents($fichier,$compteur); // lecture du fichier compteur et écriture ! écrase les anciennes données
}

function nombre_vues (){
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    
    return file_get_contents($fichier); //creation du fichier compteur 

}