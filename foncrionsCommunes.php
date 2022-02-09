<?php
// validation number
function estNombre($nombre):bool
{
    return is_numeric($nombre) || $nombre==0;
}

// cette tableau d'erreur sera recupéré à l'aide des sessions
function champ_nombre_valide($nbre,string $key,array &$tableau_erreur){
    if(empty($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estNombre($nbre)){
            $arrError[$key]="Veullez saisir un nombre";
        }
    }
   }
