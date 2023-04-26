<?php
    // $bonnet1 =new Beanie();
    // $bonnet1->setName("Bonnet en laine");
    // $bonnet1->setPrice(10);
    // $bonnet1->setSizes([
    //     Beanie::SIZE_S,
    //     Beanie::SIZE_M,
    // ]);
    $exTableauProduits = [
        ['name' => "Bonnet en laine",  // id 0
            'prix' => 10,
            'pathImg' => 'img/Beanies4.jpg',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.',
            'sizes' => [Beanie::SIZE_L, Beanie::SIZE_S],
            'material' => [Beanie::MATERIAL_CACHEMIRE, Beanie::MATERIAL_LAINE],
        ],
        ['name' => "Bonnet en laine bio", //id 1
            'prix' => 14,
            'pathImg' => 'img/Beanies2.jpg',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.',
            'sizes' => [Beanie::SIZE_XL, Beanie::SIZE_M],
            'material' => [Beanie::MATERIAL_SOIE, Beanie::MATERIAL_LAINE],
        ],
        ['name' => "Bonnet en laine et en cachemire", // id 2
            'prix' => 20,
            'pathImg' => 'img/Beanies3.jpg',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.',
            'sizes' => [Beanie::SIZE_L, Beanie::SIZE_S, Beanie::SIZE_M],
            'material' => [Beanie::MATERIAL_SOIE, Beanie::MATERIAL_CACHEMIRE],
        ],
        ['name' => "Bonnet arc-en-ciel", //id 3
            'prix' => 12,
            'pathImg' => 'img/Beanies4.jpg',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur repudiandae, amet similique aliquid reiciendis fugiat soluta deserunt dolorum quam dolores inventore. Doloremque ab rem ipsa ad delectus dignissimos impedit eaque.',
            'sizes' => [Beanie::SIZE_L, Beanie::SIZE_S, Beanie::SIZE_M],
            'material' => [Beanie::MATERIAL_COTON, Beanie::MATERIAL_CACHEMIRE],
        ],
    ];
    $tableauProduits = [];
    foreach($exTableauProduits as $bonnet) {
        $b = new Beanie();
        $b
            ->setName($bonnet['name'])
            ->setPrice($bonnet['prix'])
            ->setDescription($bonnet['description'])
            ->setImage($bonnet['pathImg'])
            ->setSizes($bonnet['sizes'])
            ->setMaterials($bonnet['material'])
        ;
        $tableauProduits[] = $b;
    }

    ?>
    


