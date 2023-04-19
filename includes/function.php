<?php function Afficher($produits, $id)
{
    ?>
    <tr>
        <td>

            <?php echo $produits['name']; ?>
        </td>
        <td <?php if ($produits['prix'] <= 12)
            echo "class = 'green'";
        else
            echo "class = 'blue'"; ?>>
            <?php echo $produits['prix']; ?>€
        </td>
        <td>

            <?php echo prixHT($produits['prix']); ?>€
        </td>
        <td>

            <?php echo $produits['description']; ?>
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