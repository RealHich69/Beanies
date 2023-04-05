<?php include ("includes/header.php");?>
<table>
        
        
        <?php
        foreach ($tableauProduits as $produits) {
            Afficher($produits);
        }
            ?>
            
    </table>
<?php include ("includes/footer.php");?>
