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
<<<<<<< HEAD
			</li> 
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>     
    </div>

   <div id="contenu">
   <table>
		<thead>
      <tr>
        <td>Visiteur</td>
        <td>Frais Forfait</td>
        <td>Quantite</td>
        <td>Mois</td>
      </tr>
  	</thead>
	<tbody>

   <?php
     $employe = $pdo->getInfosFrais();
   ?>
   		</tbody>
		</table>
  </br>
  </br>
    <table>
		<thead>
      <tr>
        <td>Libelle</td>
        <td>Prix</td>
      </tr>
  	</thead>
	<tbody>
   <?php
     $employe = $pdo->prixTotal();
   ?>

   		</tbody>
		</table>
  </br>
  </br>

  <script type="text/javascript">
   function Valider(formulaire) {
      if (formulaire) {alert("formulaire validé.\nPour valider un formulaire : formulaire.submit()")};
         // Pour valider le formulaire en javascript :
         // formulaire.submit()
      }
   }
</script>

<form name="form1" action="">
   <input type="button" name="bouton" value="Valider" onclick="Valider(this.form)">
</form>

<script type="text/javascript">
   function Refuser(formulaire1) {
      if (formulaire1) {alert("formulaire validé.\nPour valider un formulaire : formulaire.submit()")};
         // Pour valider le formulaire en javascript :
         // formulaire.submit()
      }
   }
</script>
<form name="form4" action="">
   <input type="button" name="bouton" value="Refuser" onclick="ValiderMail(this.form)">
</form>
</div>
=======
			</li>
 	   <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>



   <div id="contenu">
   <?php
         $employe = $pdo->getInfosFrais();
   ?>

         <input type="button" value="accepter">
         <input type="button" value="refuser">
   </div>
>>>>>>> debcc7dc7db3f51924f9626235316412bfaf0a88
