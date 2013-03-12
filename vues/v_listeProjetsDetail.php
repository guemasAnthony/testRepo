<div id="contenu">
      <h2>Liste des projets detaillés </h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptif des projets
       </caption>
             <tr>
                <th >code projet</th>  
                <th >libellé</th>  
                <th >employé</th>              
             </tr>
          
    <?php    
	   foreach ($lesProjets as $unProjet) {
			$codeProjet = $unProjet['codeprojet'];
			$nomProjet = $unProjet['nomprojet'];
                        $nom = $unProjet['nom'];
                        $prenom = $unProjet['prenom'];
		?>		
            <tr> 
                <td><?php echo $codeProjet; ?></td>
                <td><?php echo $nomProjet; ?></td>
                <td><?php echo $nom." ".$prenom; ?></td>
            </tr>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  