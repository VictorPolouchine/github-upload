<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

    $Tre13e = new Tre13e();
    $Tre13e->readLang();
    $strLang = $Tre13e->getLang();

    $Header = new Header();
    $Header->write();
    
    if ($strLang == 'fr')
        $strSectTit =   'Après 16h';
    else
        $strSectTit =   'After 4';
    
    $Section = new Section($strLang, $strSectTit);
    $Section->write();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // TAPAS MEATY
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Tapas';
        $strSubSectSubTit   =   'avec viande';
    }
    else {
        $strSubSectTit      =   'Tapas';
        $strSubSectSubTit   =   'meaty things';
    }
    $SubSection = new SubSection($strLang, 'TapasMeat', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // KALE PESTO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Pesto de Chou Kale a/ Jambon Prosciutto';
            $strItemDesc    =   'servi avec des toasts croustillants';
        }
        else {
            $strItemTit     =   'Kale Pesto w/ Prosciutto Ham';
            $strItemDesc    =   'served with biscuit toasts';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // BAKED CHICKEN WINGS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Ailes de Poulet au Four';
            $strItemDesc    =   'no ! on est pas dans un bar des sports ! mais oui ! on fait des ailes de poulet assez incroyables ! servi avec un dip allegé au bleu';
        }
        else {
            $strItemTit     =   'Baked Chicken Wings';
            $strItemDesc    =   'no! this isn\'t a sports bar, but yes! we make some pretty fantastic chicken wings! served with skinny blue cheese dip';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // GRILLED CHICKEN SKEWERS
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Brochettes de Poulet Grilllées';
            $strItemDesc    =   'marinées abondamment dans du paprika fumé et autres épices, grillées sur piques et servies avec une sauce à la coriandre citronée';
        }
        else {
            $strItemTit     =   'Grilled Chicken Skewers';
            $strItemDesc    =   'marinated exclusively in smoked paprika and other spices, grilled on sticks and served with a lemony coriander dipping sauce';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();

    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // TAPAS MIXED
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Tapas';
        $strSubSectSubTit   =   'mixte';
    }
    else {
        $strSubSectTit      =   'Tapas';
        $strSubSectSubTit   =   'mixed';
    }
    $SubSection = new SubSection($strLang, 'TapasMixed', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // MIXED PLATTER
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Planche Mixte';
            $strItemDesc    =   '2 ailes de poulet, 2 ailes de chou-fleur, 3 beignets de piment au fromage, 1 brochette de poulet';
        }
        else {
            $strItemTit     =   'Mixed Platter';
            $strItemDesc    =   '2 chicken wings, 2 cauliflower wings, 3 poppers, 1 chicken skewer';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // TAPAS VEGGIE
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Tapas';
        $strSubSectSubTit   =   'sans viande';
    }
    else {
        $strSubSectTit      =   'Tapas';
        $strSubSectSubTit   =   'non meaty things';
    }
    $SubSection = new SubSection($strLang, 'TapasVeg', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // ARTICHOKE DIP
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Duo Fromage Artichaut';
            $strItemDesc    =   'sauce fromagère fabuleuse aux artichauts servi avec des toasts croustillants';
        }
        else {
            $strItemTit     =   'Artichoke Dip';
            $strItemDesc    =   'fabulously cheesy & artichokey served warm with biscuit toasts';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CAULIFLOWER "CHICKEN WINGS"
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chou-fleur façon "ailes de poulet"';
            $strItemDesc    =   'vous aimez les wings mais manger de la viande n\'est pas votre style ? ces ailes sont faites pour vous';
        }
        else {
            $strItemTit     =   'Cauliflower "chicken wings"';
            $strItemDesc    =   'love wings but eating meat isn\'t your style? these wings are made just for you';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // BAKED JALPENO POPPERS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Jalapeño Poppers au Four';
            $strItemDesc    =   'piments épicés, coupés en deux et cuits au four avec une garniture de fromage fondant';
        }
        else {
            $strItemTit     =   'Baked Jalapeño Poppers';
            $strItemDesc    =   'spicy peppers, halved and baked with melty cheesy filling';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // THE WALKER : BISCUIT SANDWICH TOMATO & MAYO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'The Walker :<br>Un Sandwich Biscuit';
            $strItemSubTit  =   'Tomate & Mayo';
        }
        else {
            $strItemTit     =   'The Walker:<br>A Biscuit Sandwich';
            $strItemSubTit  =   'Tomato & Mayo';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // THE WALKER : BISCUIT SANDWICH CHEDDAR & EGG
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'The Walker :<br>Un Sandwich Biscuit';
            $strItemSubTit  =   'Cheddar & &oelig;uf';
        }
        else {
            $strItemTit     =   'The Walker:<br>A Biscuit Sandwich';
            $strItemSubTit  =   'Cheddar & Egg';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // GET SAUCY
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Envoyez la Sauce !';
        $strSubSectSubTit   =   'sauces supplémentaires';
    }
    else {
        $strSubSectTit      =   'Get Saucy';
        $strSubSectSubTit   =   'side sauces';
    }
    $SubSection = new SubSection($strLang, 'TapasSauces', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Honey Mustard
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Moutarde au Miel';
        }
        else {
            $strItemTit     =   'Honey Mustard';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // SKINNY BLUE CHEESE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sauce Légère au Bleu';
        }
        else {
            $strItemTit     =   'Skinny Blue Cheese';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // BBQ
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'BBQ';
        }
        else {
            $strItemTit     =   'BBQ';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // LEMON CORIANDER
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coriandre Citroné';
        }
        else {
            $strItemTit     =   'Lemon Coriander';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1);
        $MenuItem->write();
    
    $SubSection->end();

    $Section->end();
    
    $Footer = new Footer();
    $Footer->write();
