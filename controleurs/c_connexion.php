<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$employe = $pdo->getInfosEmploye($login,$mdp);
		if(!is_array( $employe)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			if($employe['emploi'] == 'v'){
				$visiteur = $employe;
				$id = $visiteur['id'];
				$nom =  $visiteur['nom'];
				$prenom = $visiteur['prenom'];
				connecter($id,$nom,$prenom);
				include("vues/v_sommaire.php");
			}
			if($employe['emploi'] == 'c'){
				$comptable = $employe;
				$id = $comptable['id'];
				$nom =  $comptable['nom'];
				$prenom = $comptable['prenom'];
				connecter($id,$nom,$prenom);
				include("vues/v_sommaire_comptable.php");
			}
		}
		break;
	}	
		case 'deconnexion':{
			session_destroy();
			include("vues/v_connexion.php");
			break;
		}

	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>