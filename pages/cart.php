<?php 

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


$panier = $_SESSION['cart'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (!isset($panier[$id])) {
        $panier[$id] = 0;
    }
// si mode == min alors --
// sinon ++
if (isset($_GET['mode']) && $_GET['mode'] == 'min'){

    $panier[$id] --;
    if($panier[$id]<0) {

        unset($panier[$id]);
    }
        
    
}

else {
    
    $panier[$id] ++;
}
header("Location:?page=cart");
   
}
?>  
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prix Unitaire (TTC)</th>
            <th>Quantité</th>
            <th>Prix</th>
        </tr>
       </thead>

<?php
$_SESSION['cart'] = $panier;
$total = 0.0;

foreach ($panier as $id => $quantite) {
    $produit= $tableauProduits[$id];
    $prix = $produit['prix']* $quantite;
    $total += $prix;
    ?>
    <tr>
        <td><?= $id ?></td>
        <td><?= $produit['name'] ?></td>
        <td>
        <?= $produit['prix'] ?>€<td>
        <a href="?page=cart&id=<?= $id;?>">+</a>
            <?= $quantite ?>
        <a href="?page=cart&id=<?= $id;?>&mode=min">-</a></td>
        <td><?= number_format($prix, 2 ,',',''); ?>€</td>
    </tr>
    <?php
}
?>
<tr>
        <td colspan="4" align="right">Total : </td>
        <td><?= number_format($total, 2 ,',',''); ?>€</td>
    </tr>
</table>