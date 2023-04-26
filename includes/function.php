<?php function Afficher($produits, $id)
{
    ?>
    <tr>
        <td>

            <?php echo $produits->getName(); ?>
        </td>
        <td <?php if ($produits->getPrice() <= 12)
            echo "class = 'green'";
        else
            echo "class = 'blue'"; ?>>
            <?php echo $produits->getPrice(); ?>€
        </td>
        <td>

            <?php echo prixHT($produits->getPrice()); ?>€
        </td>
        <td>

            <?php echo $produits->getDescription(); ?>
        </td>
        <td>
            <a href="?page=cart&id=<?php echo $id; ?>">Ajouter au panier</a>

        </td>
    </tr>
    <?php

}
function prixHT($prixTTC)
{
    $prixHT = $prixTTC / 1.2;
    $prixHT = number_format($prixHT, 2);
    return $prixHT;
}
?>