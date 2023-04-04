<?php include ("variable.php");
include ("function.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>
<body>
    <?php
    $tableauProduits = [
        ['name' => "Bonnet en laine", 
            'prix' => 10,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.'
        ],
        ['name' => "Bonnet en laine bio",
            'prix' => 14,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.'
        ],
        ['name' => "Bonnet en laine et en cachemire",
            'prix' => 20,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.'
        ],
        ['name' => "Bonnet arc-en-ciel",
            'prix' => 12,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.'
        ],
    ];
    ?>
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
</body>
</html>