<?php include ("includes/header.php");?>
<h1>Liste de Bonnets</h1>
<table>
        
        
        <?php
        foreach ($tableauProduits as $produits) {
            Afficher($produits);
        }
            ?>
            
    </table>
<?php include ("includes/footer.php");?>
