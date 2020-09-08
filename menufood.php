<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

    $Tre13e = new Tre13e();
    $Tre13e->readLang();
    $strLang = $Tre13e->getLang();

    $Header = new Header();
    $Header->write();
    
    if ($strLang == 'fr')
        $strSectTit =   'A Manger';
    else
        $strSectTit =   'Food';
    
    $Section = new Section($strLang, $strSectTit);
    $Section->write();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // SOUP
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'La Soupe';
        $strSubSectSubTit   =   'toujours végétalienne';
    }
    else {
        $strSubSectTit      =   'The Soup';
        $strSubSectSubTit   =   'always vegan';
    }
    $SubSection = new SubSection($strLang, 'Soup', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // BOWL
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bol';
            $strItemDesc    =   'servie avec un biscuit & choix de chou frisé <span class="spImp">ou</span> salade verte';
        }
        else {
            $strItemTit     =   'Bowl';
            $strItemDesc    =   'served with a biscuit & choice of kale <span class="spImp">or</span> green salad';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 14);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setVegan();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CUP
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Tasse';
            $strItemDesc    =   'servie avec un biscuit <span class="spImp">ou</span> salade verte';
        }
        else {
            $strItemTit     =   'Cup';
            $strItemDesc    =   'served with a biscuit <span class="spImp">or</span> green salad';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setVegan();
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // SALADS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Salades';
        $strSubSectSubTit   =   'servie avec salade verte';
        $arrSectSupps       =   ['buttermilk biscuit' => 2,
                                'chicken' => 4,
                                'poached egg' => 2,];
    }
    else {
        $strSubSectTit      =   'Salads';
        $strSubSectSubTit   =   'served with house salad';
        $arrSectSupps       =   ['buttermilk biscuit' => 2,
                                'chicken' => 4,
                                'poached egg' => 2,];
    }
    $SubSection = new SubSection($strLang, 'Salads', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->setSupps($arrSectSupps);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // GRILLED APPLE, BACON & AGED CHEDDAR SALAD
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Grilled Apple, Bacon, & Aged Cheddar Salad';
            $strItemDesc    =   'pommes grillées, miettes de poitrine fumé, coupeaux de cheddar, noix de pécan grillés';
        }
        else {
            $strItemTit     =   'Grilled Apple, Bacon, & Aged Cheddar Salad';
            $strItemDesc    =   'all that - with roasted pecans';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setGluten();
        $MenuItem->setNuts();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CHOPPED KALE SALAD
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chopped Kale Salad';
            $strItemDesc    =   'mangez ça tous les jours. Chou frisé, chou, graines de citrouille, une touche de cheddar, vinaigrette sesame. Délicieux pour le corps et la palette';
        }
        else {
            $strItemTit     =   'Chopped Kale Salad';
            $strItemDesc    =   'eat this daily. kale, cauliflower, pumpkin seeds, really just a touch of cheddar, sesame vinaigrette. Delish for the body & palette';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setGluten();
        $MenuItem->setSesame();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // QUINOA SALAD
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Quinoa Salad';
    //            $strItemDesc    =   'tricolor quinoa, coriandre, noix de cajou, menthe. vinaigrette citron & gingembre fraîche';
            $strItemDesc    =   'quinoa tricoleur, concombre, tomate, capsicum, salade, herbes, baies & graines';
    //            $strItemAllerg  =   'sans gluten, végétalienne, contient <span class="spAllergImp">noix</span>';
            $strItemAllerg  =   'sans gluten, végétalienne';
        }
        else {
            $strItemTit     =   'Quinoa Salad';
    //            $strItemDesc    =   'tricolor quinoa, coriander, cashews, mint & greens. fresh lemon ginger vinaigrette';
            $strItemDesc    =   'tricolor quinoa, cucumber, tomato, capsicum, salad, herbs, berries and seeds';
    //            $strItemAllerg  =   'gluten free, vegan, contains <span class="spAllergImp">nuts</span>';
            $strItemAllerg  =   'gluten free, vegan';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setAllerg($strItemAllerg);
        $MenuItem->setGluten();
        $MenuItem->setVegan();
        $MenuItem->setNuts();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // DETOX SALAD
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Detox Salad';
            $strItemDesc    =   'super légumes brocoli, kale, betterave & carotte finement coupée, pepins de courge grillée, baies de goji, coriandre, menthe fraîche & jus de citron';
        }
        else {
            $strItemTit     =   'Detox Salad';
            $strItemDesc    =   'superfinely chopped supercharged veggies-broccoli, kale, raw beet and carrot, plus dried goji berries and roasted pumpkin seeds ( also superfoods) tossed with coriander and mint in lemon vinaigrette';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // QUICHES & BAKES
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
//        $strSubSectTit      =   'Quiches & Gratins';
        $strSubSectTit      =   'Tartes';
        $strSubSectSubTit   =   'servie avec salade verte & dressing on the side';
    }
    else {
//        $strSubSectTit      =   'Quiches & Bakes';
        $strSubSectTit      =   'Pies';
        $strSubSectSubTit   =   'served with house salad & dressing on the side';
    }
    $SubSection = new SubSection($strLang, 'Pies', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // TOMATO PIE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Tomato Pie';
            $strItemDesc    =   'un classique du Sud US - tomates anciennes cuites avec herbs fraîches, fromages & beaucoup d’amour';
        }
        else {
            $strItemTit     =   'Tomato Pie';
            $strItemDesc    =   'a southern classic. Fancy organic heirloom tomatoes, herbs, & pimento cheese baked in house made pie crust.   So, yes.we call it a pie, but its really a tart, because its topless. Because all tarts are topless. Vive la France';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // BACON & VEGGIE QUICHE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bacon & Veggie Quiche';
            $strItemDesc    =   'des couches de légumes et de fromage avec les meilleurs œufs que nous pouvons trouver dans sa croute de cheddar et courgette';
        }
        else {
            $strItemTit     =   'Bacon & Veggie Quiche';
            $strItemDesc    =   'layers of veggies & cheese, with the best eggs we can find baked in a cheddar zucchini crust';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setGluten();
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // VEGGIE QUICHE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Quiche aux Légumes';
            $strItemDesc    =   'des couches de légumes et de fromage avec les meilleurs œufs que nous pouvons trouver dans sa croute de cheddar et courgette';
        }
        else {
            $strItemTit     =   'Veggie Quiche';
            $strItemDesc    =   'layers of veggies & cheese, with the best eggs we can find baked in a cheddar zucchini crust';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setGluten();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // ARTICHOKE HEART TART
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Tarte aux Artichauts';
            $strItemDesc    =   'coeurs des artichaux, fromages crémeux, herbes, & epinards cuit dans notre croute maison';
            $strItemSupp    =   'bacon ou poulet';
        }
        else {
            $strItemTit     =   'Artichoke Heart Tart';
            $strItemDesc    =   'artichoke hearts, creamy cheeses, herbs, & spinach. Baked in our fabulous pie crust';
            $strItemSupp    =   'bacon or chicken';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSupp($strItemSupp, 2, 0);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // CHICKEN MUSHROOM BISCUIT BAKE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
//            $strItemTit     =   'Chicken & Mushroom Biscuit Bake';
            $strItemTit     =   '<span class="strike">Tarte au Poulet & Champignons</span>';
            $strItemDesc    =   'VIVE LES VACANCES ! comme un vrai Parisien il sera de retour à la rentrée<br>portabello mushroom, organic chicken legs & breasts simmered in  a creamy white wine rosemary gravy; baked in the best flakiest pie crust ever';
        }
        else {
//            $strItemTit     =   'Chicken & Mushroom Biscuit Bake';
            $strItemTit     =   '<span class="strike">Chicken & Mushroom Biscuit Pie</span>';
            $strItemDesc    =   'PIE VACATION! promise this guy will be back in September!<br>portabello mushroom, organic chicken legs & breasts simmered in  a creamy white wine rosemary gravy; baked in the best flakiest pie crust ever';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // SOUTHERN PLATES
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Southern Plates';
    }
    else {
        $strSubSectTit      =   'Southern Plates';
    }
    $SubSection = new SubSection($strLang, 'SouthernPlates', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // PECAN CRUSTED CHICKEN PLATE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Assiette Poulet Pané aux noix de pecans';
            $strItemDesc    =   'servie avec petit pain maison, salade de pommes de terre, salade verte, sauce miel moutarde';
        }
        else {
            $strItemTit     =   'Pecan Crusted Chicken Plate';
            $strItemDesc    =   'served with buttermilk biscuit, potato salad, & honey mustard dipping sauce';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setNuts();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // BBQ Pulled Pork Plate
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Assiette BBQ';
            $strItemDesc    =   'porc fumé efilloché mijoté dans notre sauce BBQ maison, servie avec petit pain maison, salade verte, & salade de pommes de terre';
        }
        else {
            $strItemTit     =   'BBQ Pulled Pork Plate';
            $strItemDesc    =   'pulled pork shoulder cooked in house bbq sauce, served with buttermilk biscuit, potato salad, & green salad';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // SOUTHERN LUNCH PLATE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Southern Lunch Plate';
            $strItemDesc    =   'pourquoi choisir ? poulet pané avec noix de pecan & porc fumé effiloché mijoté dans notre sauce BBQ maison, avec petit pain maison, salade de pommes de terre, salade verte, sauce miel moutarde';
            $strItemAllerg  =   'contient des <span class="spAllergImp">noix</span>';
        }
        else {
            $strItemTit     =   'Southern Lunch Plate';
            $strItemDesc    =   'can\'t choose? have both! BBQ pork & pecan crusted chicken, honey mustard dipping sauce, potato salad, green salad, & buttermilk biscuit';
            $srtItemAllerg  =   'contains <span class="spAllergImp">nuts</span>';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setNuts();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // ROASTED PORK PLATE
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Roasted Pork Plate';
            $strItemDesc    =   'pork tenderloin medallions with apple sage gravy, roasted potatoes, & sweet potato fries';
        }
        else {
            $strItemTit     =   'Roasted Pork Plate';
            $strItemDesc    =   'pork tenderloin medallions with apple sage gravy, roasted potatoes, & sweet potato fries';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setNuts();
        $MenuItem->setOutOfStock();
        $MenuItem->write();

    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // BRUNCH
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Brunch, toute la journée, tous les jours';
        $strSubSectSubTit   =   'le brunch n\'a ni d\'heure ni de jour, le brunch est un état d\'esprit';
    }
    else {
        $strSubSectTit      =   'Brunch, All Day,<br>Every Day';
        $strSubSectSubTit   =   'because brunch is not a time, it\'s a lifestyle';
    }
    $SubSection = new SubSection($strLang, 'Brunch', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // THE BREAKFAST PLATE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'The Breakfast Plate';
            $strItemDesc    =   'deux œufs au plat, saucisse fumée, rosti de patate douce, tomate confite, & petit pain maison, de quoi d\'autre avez-vous vraiment besoin ?';
        }
        else {
            $strItemTit     =   'The Breakfast Plate';
            $strItemDesc    =   'fried eggs, smoked free-range sausage, sweet potato hash browns, tomato jam, & buttermilk biscuit';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 15);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // TREIZE BENDICT
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Treize Benedict';
            $strItemDesc    =   'œufs pochés, sauce hollandaise, petit pain maison, tomates, & champignons rotis';
        }
        else {
            $strItemTit     =   'Treize Benedict';
            $strItemDesc    =   'poached eggs, hollandaise, buttermilk biscuit, roasted tomatoes, & mushrooms';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // PRINCESS BRIDE OMELETTE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'The Princess Bride Omelette';
            $strItemDesc    =   'Omelette au four aux herbes, avec (ou sans) bacon, champignons portobello, fromage, tomates&hellip; servie avec un biscuit et salade verte ou pomme de terre rôties';
            $strItemDesc2   =   'ATTENTION : Cela prendra plus de temps que des autres plats et retardera d\'au moins 10 minutes l\'arrivée des plats pour tout votre table.<br>' .
                '[Entre nous ça le vaux. après tout c\'est le brunch, vous n\'êtes pas pressé).';
        }
        else {
            $strItemTit     =   'The Princess Bride Omelette';
            $strItemDesc    =   'Inconceivable! 3 egg omelette with herbs, baked with (or without) bacon, mushrooms, tomatoes, cheese&hellip; served with a buttermilk biscuit house green salad or roasted potatoes';
            $strItemDesc2   =   'BE WARNED: this will take longer than other dishes so will slow your table\'s order down by 10 minutes. (totally worth it. it\'s brunch, you\'re not in a hurry, are you?)';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 16);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setDesc2($strItemDesc2);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // FRENCH TOAST & CHICKEN
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'French Toast & Chicken';
            $strItemDesc    =   'pain maison façon pain perdu, poulet pané aux noix de pecans, pêches grillées & miel infusé';
        }
        else {
            $strItemTit     =   'French Toast & Chicken';
            $strItemDesc    =   'french toast style buttermilk biscuits, pecan crusted chicken, grilled peaches, infused honey';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setNuts();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // 2 BY 2 BY 3
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   '2 by 2 by 3';
            $strItemDesc    =   '2 pancakes, 2 œufs au plat, trois tranches de bacon';
        }
        else {
            $strItemTit     =   '2 by 2 by 3';
            $strItemDesc    =   '2 pancakes, 2 fried eggs, 3 strips of yummy bacon';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 15);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // HOUSE GRANOLA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'House Granola';
            $strItemDesc    =   'yaourt grec, compote de la saison';
            $strItemAllerg  =   'rendre végétalienne avec du lait d\'amande';
        }
        else {
            $strItemTit     =   'House Granola';
            $strItemDesc    =   'greek yogurt & seasonal compote';
            $strItemAllerg  =   'make it vegan with almond mylk';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setAllerg($strItemAllerg);
        $MenuItem->setVegan(true, true);
        $MenuItem->setNuts();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // PANCAKES & SEASONAL COMPOTE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Pancakes & Seasonal Compote';
            $strItemDesc    =   'servie avec miel infusé, baies de gogi, & graines de courge';
        }
        else {
            $strItemTit     =   'Pancakes & Seasonal Compote';
            $strItemDesc    =   'with house-infused honey, goji berries, & pumpkin seeds';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 15);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // SIDES
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Sides';
    }
    else {
        $strSubSectTit      =   'Sides';
    }
    $SubSection = new SubSection($strLang, 'Sides', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // POACHED EGG
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Œuf Poché';
            $strItemDesc    =   'because in french one egg is an œuf';
        }
        else {
            $strItemTit     =   'Poached Egg';
            $strItemDesc    =   null;
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // TOMATO JAM
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Tomate Confite';
        }
        else {
            $strItemTit     =   'Tomato Jam';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // SWEET POTATO HASH BROWNS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Rosti de Patate Douce';
            $strItemDesc    =   null;
        }
        else {
            $strItemTit     =   'Sweet Potato Hash Browns';
            $strItemDesc    =   null;
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // PIMENTO CHEESE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Pimento Cheese';
            $strItemDesc    =   'creamy cheddar spread not at all spicy, really really not';
        }
        else {
            $strItemTit     =   'Pimento Cheese';
            $strItemDesc    =   'creamy cheddar spread not at all spicy, really really not';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // PECAN CRUSTED CHICKEN
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Pecan Crusted Chicken';
        }
        else {
            $strItemTit     =   'Pecan Crusted Chicken';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // GRILLED CHICKEN BREAST
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Grilled Chicken Breast';
        }
        else {
            $strItemTit     =   'Grilled Chicken Breast';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // BACON
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bacon';
        }
        else {
            $strItemTit     =   'Bacon';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // SAUSAGE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Saucisse Fumé';
        }
        else {
            $strItemTit     =   'Smoked Sausage';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // PANCAKE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Plain Pancake';
            $strItemDesc    =   'because plain is just fine too';
        }
        else {
            $strItemTit     =   'Plain Pancake';
            $strItemDesc    =   'because plain is just fine too';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
    $SubSection->end();
    
    $Section->end();
    
    $Footer = new Footer();
    $Footer->write();
