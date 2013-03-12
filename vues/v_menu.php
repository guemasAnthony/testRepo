 <!-- Division pour le menu -->
    <div id="menuGauche">
    
        <ul id="menuList">
            <li >
		 Bienvenue : <?php echo $_SESSION['nom']?>	
		</li>
           <li >
              Les projets 
           </li>
                <ul>
                    <a href="index.php?do=lesProjets&action=liste" title="Les projets">liste</a>
                </ul>
                <ul>
                   <a href="index.php?do=lesProjets&action=detail" title="Les projets">detail</a>
                </ul>
           <li >
              <a href="index.php?do=lesEmployes" title="Les employés">Les employés</a>
           </li>
             <li >
              <a href="index.php?do=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           
         </ul>
        
    </div>
    