<?php

include("vues/v_sommaireC.php");

$action = $_REQUEST['action'];
//$idComptable = $_SESSION['idComptable'];
switch ($action) {
    case 'selectionnerMois': {
            $lesMois = $pdo->getLesMois();
            include("vues/v_moisSuivie.php");
            break;
        }
    case 'voirFrais': {
            $lesMois = $pdo->getLesMois();
            include("vues/v_moisSuivie.php");
            $leMois = $_REQUEST['lstMois'];
            $tab = explode('/', $leMois);
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($tab[1], $tab[0]);
            $lesFraisForfait = $pdo->getLesFraisForfait($tab[1], $tab[0]);
            $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($tab[1], $tab[0]);
            $numAnnee = substr($tab[0], 0, 4);
            $numMois = substr($tab[0], 4, 2);
            $libEtat = $lesInfosFicheFrais['libEtat'];
            $montantValide = $lesInfosFicheFrais['montantValide'];
            $nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
            $dateModif = $lesInfosFicheFrais['dateModif'];
            $dateModif = dateAnglaisVersFrancais($dateModif); 
            include("vues/v_etatvalidation.php");
            break;
        }
    case 'rembourser': {

            $idVisit = $_REQUEST['idVisit'];
            $moisVisit = $_REQUEST['moisVisit'];
            $pdo->majEtatFicheFrais($idVisit, $moisVisit, "RB");
            if (!empty($idVisit) && !empty($moisVisit)) {
                ajouterErreur("La fiche est bien passé en état remboursé");
                $type=1;
            } else {
                ajouterErreur("La fiche n'a pas été remboursé!");
            }
            include ("vues/v_erreurs.php");
            $lesMois = $pdo->getLesMois();
            include("vues/v_moisSuivie.php");
            break;
        }
}

