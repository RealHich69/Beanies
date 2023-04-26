<?php
$pageTitle = 'Tous nos bonnets';
if (!empty($_POST['size'])){
    var_dump($_POST);

    $tableauProduits = array_filter($tableauProduits, function(Beanie $beanie){
        
        if(in_array($_POST['size'], $beanie->getSizes())) {
            return true;
        } else {
            return false;
        }
    });
    
}
if (!empty($_POST['material'])){
    var_dump($_POST);
    $tableauProduits = array_filter($tableauProduits, function(Beanie $beanie){
        if(in_array($_POST['material'], $beanie->getMaterials())){
            return true;
        } else {
            return false;
        }
        
    });
}


?>
<form action="" method="post">
    <select name="size" id="size">
        <option value="">Choissisez votre taille</option>
        <?php foreach (Beanie::SIZES as $size){
            echo '<option value="'.$size.'">'.$size.'</option>';
        }
        ?>
    </select>
    <button type="submit">Validez</button>
</form>
<table>
<form action="" method="post">
    <select name="material" id="material">
        <option value="">Choissisez votre matière de bonnet</option>
        <?php foreach (Beanie::MATERIALS as $material){
            echo '<option value="'.$material.'">'.$material.'</option>';
        }
        ?>
    </select>
    <button type="submit">Validez</button>
</form>
<table>
        
        
        <?php
        foreach ($tableauProduits as $id => $produits) {
            Afficher($produits, $id);
        }
            ?>
            
   


