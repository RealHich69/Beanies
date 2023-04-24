<?php 
$pageTitle = 'Tous nos bonnets';
?>
<table>
        
        
        <?php
        foreach ($tableauProduits as $id => $produits) {
            Afficher($produits, $id);
        }
            ?>
            
   <!-- Formulaire pour les filtres -->
<form method="post" action="list.php">
    <label for="size">Taille :</label>
    <select name="size" id="size">
        <option value="">Toutes les tailles</option>
        <?php foreach (Beanie::AVAILABLE_SIZES as $sizeOption) { ?>
            <option value="<?php echo $sizeOption; ?>" <?php if ($size == $sizeOption) echo 'selected'; ?>><?php echo $sizeOption; ?></option>
        <?php } ?>
    </select>
    <br>
    <label for="material">Matière :</label>
    <select name="material" id="material">
        <option value="">Toutes les matières</option>
        <?php foreach (Beanie::AVAILABLE_MATERIALS as $materialOption) { ?>
            <option value="<?php echo $materialOption; ?>" <?php if ($material == $materialOption) echo 'selected'; ?>><?php echo $materialOption; ?></option>
        <?php } ?>
    </select>
    <br>
    <label for="minPrice">Prix minimum :</label>
    <input type="number" name="minPrice" id="minPrice" value="<?php echo $minPrice; ?>" min="<?php echo Beanie::MIN_PRICE; ?>" max="<?php echo Beanie::MAX_PRICE; ?>">
    <br>
    <label for="maxPrice">Prix maximum :</label>
    <input type="number" name="maxPrice" id="maxPrice" value="<?php echo $maxPrice; ?>" min="<?php echo Beanie::MIN_PRICE; ?>" max="<?php echo Beanie::MAX_PRICE; ?>">
    <br>
    <input type="submit" value="Filtrer">
</form>

<!-- Affichage de la liste des produits filtrés -->
<!-- Implémentez ici la logique pour récupérer les valeurs des filtres depuis le formulaire, appeler la méthode de filtrage de la classe Beanie et afficher les produits filtrés -->



