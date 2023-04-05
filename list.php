<?php include ("includes/header.php");?>
<table>
        <?php function prixHT($prixTTC){
            $prixHT = $prixTTC/1.2;
            $prixHT = number_format ($prixHT, 2);
            return $prixHT;
        }

        ?>
        <?php function Afficher($produits){
            ?>
            <tr>
            <td>
                
                <?php echo $produits['name'];?>
            </td>
            <td <?php if($produits['prix']<= 12) echo "class = 'green'"; else echo "class = 'blue'"; ?>>
            <?php echo $produits['prix'];?>€
            </td>
            <td>
                
                <?php echo prixHT($produits['prix']);?>€
            </td>
            <td>
                
                <?php echo $produits['description'];?>
            </td>
        </tr>
        <?php
    }
    ?>
        <?php
        foreach ($tableauProduits as $produits) {
            Afficher($produits);
        }
            ?>
            
    </table>
<?php include ("includes/footer.php");?>
