<?php include_once("includes/header.php");
for ($i = 0; $i < 3; $i++) {
  ?>
  <div class="card" style="width: 18rem;">
    <img src=<?php echo $tableauProduits[$i]->getImage() ?> class="card-img-top" alt=<?php echo $tableauProduits[$i]->getName() ?>>
    <div class="card-body">
      <h5 class="card-title">
        <?php echo $tableauProduits[$i]->getName() ?>
      </h5>
      <p class="card-text">
        <?php echo $tableauProduits[$i]->getDescription() ?>
      </p>
      <a href="?page=list" class="btn btn-primary">Voir tous les produits</a>
    </div>
  </div>
  <?php
}
?>
<?php include("includes/footer.php"); ?>