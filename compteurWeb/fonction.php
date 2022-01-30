<?php

function ajouter_vue(){
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'projet' . DIRECTORY_SEPARATOR . 'compteurWeb'. DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $compteur = 1;
    if (file_exists($fichier)) {
        // si le fichier existe on incrémente 
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
    file_put_contents($fichier,$compteur);
}

function nombre_vues (){
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'projet' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);

}