<div id="contenu">
    
      <h2>Liste des Employes </h2>
      
      <div class="corpsForm">
     <table >
  	   <caption>Liste des employés
       </caption>
             <tr>
                <th>Nom</th>  
                <th>Prenom</th>               
             </tr>
          
<?php    
	   foreach ($lesEmployes as $unEmploye) 
           {
			$prenom = $unEmploye['prenom'];
			$nom = $unEmploye['nom'];
?>		
            <tr> 
                <td><?php echo $nom ?></td>
                <td><?php echo $prenom ?></td>
            </tr>    
<?php		 
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  