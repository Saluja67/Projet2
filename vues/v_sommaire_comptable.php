    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>



   <div id="contenu">
<<<<<<< HEAD
    <table>
      <thead>
      <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Identifiant</td>
        <td>Mois</td>
        <td>choisir</td>

      </tr>
    </thead>
    <tbody>
    <?php
          
      		$employe = $pdo->getfichesfrais();
    ?>
    	</tbody>
		</table>
  	<form action="index.php?uc=ResumeFrais&action=GestionFrais" method="post">

    
		</form>
=======
    <?php
      		$employe = $pdo->getInfosvisiteur();
    ?>
      
>>>>>>> debcc7dc7db3f51924f9626235316412bfaf0a88
   </div>