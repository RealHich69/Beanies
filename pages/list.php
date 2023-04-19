<?php 
$pageTitle = 'Tous nos bonnets';
?>
<table>
        
        
        <?php
        foreach ($tableauProduits as $id => $produits) {
            Afficher($produits, $id);
        }
            ?>
            
   


