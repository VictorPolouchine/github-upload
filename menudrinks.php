<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');
    
    $Tre13e = new Tre13e();
    $Tre13e->readLang();
    $strLang = $Tre13e->getLang();
    
    $Header = new Header();
    $Header->write();
    
    if ($strLang == 'fr')
        $strSectTit =   'Thirsteen';
    else
        $strSectTit =   'Thirsteen';
    
    $Section = new Section($strLang, $strSectTit);
    $Section->write();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // COLD DRINKS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Boissons Froides';
        $strSubSectSubTit   =   'tous bio et fais maison';
    }
    else {
        $strSubSectTit      =   'Cold Drinks';
        $strSubSectSubTit   =   'all bio/organic and homemade';
    }
    $SubSection = new SubSection($strLang, 'ColdDrinks', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // ICED TEA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Thé Glacé';
            $strItemDesc    =   'noir, vert, infusion, ou rooibos';
        }
        else {
            $strItemTit     =   'Iced Tea';
            $strItemDesc    =   'sweet black, green honey, unsweetened infusion or rooibos';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // ARNOLD PALMER
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Arnold Palmer';
            $strItemDesc    =   'thé glacé & citronnade, moitié/moitié';
        }
        else {
            $strItemTit     =   'Arnold Palmer';
            $strItemDesc    =   'iced tea & lemonade, half & half';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // OLD FASHIONED LEMONADE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Citronnade à l\'ancienne';
            $strItemDesc    =   'fait maison, doux & citronné';
        }
        else {
            $strItemTit     =   'Old Fashioned Lemonade';
            $strItemDesc    =   'a house made classic. sweeet & lemony';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // CHILI GINGER LEMONADE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chili Ginger Lemonade';
            $strItemDesc    =   'avec piment frais épicé & gingembre';
        }
        else {
            $strItemTit     =   'Chili Ginger Lemonade';
            $strItemDesc    =   'with fresh spicy chili & juiced ginger';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // SEASONAL LEMONADE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Citronnade saisonnier';
            $strItemDesc    =   'demandez à votre serveur ! fruit de la passion ou fraise... tout est possible!';
        }
        else {
            $strItemTit     =   'Seasonal Lemonade';
            $strItemDesc    =   'ask your server! passion fruit or strawberry... anything is possible';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setQty('25 cl');
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // PEPPERY CARROT JUICE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Peppery Carrot Juice';
            $strItemDesc    =   'carrotte, orange, citron, gingembre, curcuma, pomme, & poivres mixés';
        }
        else {
            $strItemTit     =   'Peppery Carrot Juice';
            $strItemDesc    =   'carrot, orange, lemon, ginger, turmeric, apple, fresh cracked pepper';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setQty('25 cl');
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // JUST A SHOT
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Just a Shot';
            $strItemDesc    =   'beaucoup de curcuma & gingembre, carotte, citron, orange, & poivres mixés';
        }
        else {
            $strItemTit     =   'Just a Shot';
            $strItemDesc    =   'hot stuff!! concentrated in turmeric & ginger! carrot, orange, lemon, & fresh cracked pepper';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setQty('15 cl');
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // DETOX JUICE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Detox Juice <span class="spQty">25 cl</span>';
            $strItemDesc    =   'concombre, chou kale, citron, gigembre, kiwi, & pomme verte';
        }
        else {
            $strItemTit     =   'Detox Juice <span class="spQty">25 cl</span>';
            $strItemDesc    =   'Cucumber, kale, lemon, ginger, turmeric, kiwi, apple';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9,  'DetoxJuice');
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // EXOTIC JUICES
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Jus de fruits exotiques';
            $strItemDesc    =   'ananas, kiwi, orange et pomme';
        }
        else {
            $strItemTit     =   'Exotic Fruit Juice';
            $strItemDesc    =   'pineapple, kiwi, orange and apple';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setQty('25 cl');
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // BOOSTER JUICE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Booster Juice';
            $strItemDesc    =   'orange, citron, carrotte, & pomme';
        }
        else {
            $strItemTit     =   'Booster Juice';
            $strItemDesc    =   'orange, lemon, carrot, red apple';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setQty('25 cl');
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // KEFIZ
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Kefiz';
            $strItemDesc    =   'soda aux ferments de kéfir, naturellement pétillant, délicatement fruité, & peu calorique';
            $strItemAllerg  =   'sans lactose';
        }
        else {
            $strItemTit     =   'Kefiz';
            $strItemDesc    =   'probiotic, naturally sparkling, & delicately fruity';
            $strItemAllerg  =   'lactose free';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setLactose(true);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // DIRTY MATCHA FRAPPE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Dirty Matcha Frappé';
            $strItemDesc    =   'combinaison délicieusement rafraîchissante de matcha, espresso, sirop de vanille, & lait d’avoine';
            $strItemAllerg  =   'sans lactose';
        }
        else {
            $strItemTit     =   'Dirty Matcha Frappé';
            $strItemDesc    =   'delightfully refreshing combination of matcha, espresso, vanilla syrup & oat mylk';
            $strItemAllerg  =   'lactose free';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // JUICE OF THE WEEK
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Jus de la semaine <span class="spQty">25 cl</span>';
            $strItemDesc    =   'rhubarbe, ananas, kiwi, orange et pomme';
        }
        else {
            $strItemTit     =   'Juice of the week <span class="spQty">25 cl</span>';
            $strItemDesc    =   'rhubab, pineablle, kiwi, orange and apple';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // SEASONAL JUICE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Jus Saisonnier <span class="spQty">25 cl</span>';
            $strItemDesc    =   'demandez à votre serveur! la magie de la saison';
        }
        else {
            $strItemTit     =   'Seasonal Juice <span class="spQty">25 cl</span>';
            $strItemDesc    =   'ask your server! seasonal magic';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // CURCUMA SPRITZ
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Curcuma Spritz';
            $strItemDesc    =   'curcuma, & gingembre, avec citron & orange, garni de soda. frais, froid, pétillant et bon pour vous !';
        }
        else {
            $strItemTit     =   'Turmeric Spritz';
            $strItemDesc    =   'turmeric, ginger, lemon & orange juiced,topped with soda. fresh, cold, sparkling, & good for you!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();

    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // HOT DRINKS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Boissons Chaudes</br><span class="spItemSubTit">(qui sont fraîches pour l\'été)</span>';
        $strSubSectSubTit   =   'tous bio et fais maison';
        $arrSectMsmts       =   ['petit' => '20 cl',
            'grand' => '30 cl'];
    }
    else {
        $strSubSectTit      =   'Hot Drinks</br><span class="spItemSubTit">(that are cold in the summer)</span>';
        $strSubSectSubTit   =   'all bio/organic and homemade';
        $arrSectMsmts       =   ['small' => '20 cl',
            'large' => '30 cl'];
    }
    $SubSection = new SubSection($strLang, 'HotDrinks', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // GINGER GROGG
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Grogg au gingembre';
            $strItemDesc    =   'gingembre & citron marinés au miel pendant 6 mois, servie avec un jus chaud de citron & gingembre fraichement pressé, & une touche d’huile de coco';
        }
        else {
            $strItemTit     =   'Ginger Grogg';
            $strItemDesc    =   'lemon & ginger marinated in honey, served in fresh hot lemon & ginger juice, touch of coconut oil for antibacterial reasons...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // LIQUID SUNSHINE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Liquid Sunshine';
            $strItemDesc    =   'latte au curcuma & gingembre, avec lait d’amande & miel infusé aux épices, parsemé de poivre mixé';
        }
        else {
            $strItemTit     =   'Liquid Sunshine';
            $strItemDesc    =   'fresh turmeric & ginger juiced, with steamed almond mylk & spice infused honey, topped with fresh cracked pepper';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9.5);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // HOT COCOA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
    //            $strItemTit     =   'Chocolat chaud';
            $strItemTit     =   'Lait au chocolat';
            $strItemDesc    =   'doux-amer pour les grands enfants !';
            $strItemSupp    =   'sirop de vanille, pain d’épices ou pumpkin spice';
        }
        else {
    //            $strItemTit     =   'Hot Cocoa';
            $strItemTit     =   'Chocolate Milk';
            $strItemDesc    =   'bitter-sweet for big kids!';
            $strItemSupp    =   'vanilla, gingerbread or pumpkin spice';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->setSupp($strItemSupp, 0.5);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // SPICY COCOA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
    //            $strItemTit     =   'Spicy Cocoa';
            $strItemTit     =   'Lait au chocolat pimenté';
            $strItemDesc    =   'avec notre sirop de habanero';
        }
        else {
    //            $strItemTit     =   'Spicy Cocoa';
            $strItemTit     =   'Spicy Chocolate Milk';
            $strItemDesc    =   'with fresh habanero syrup. get your blood pumping!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9.5);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // MOCHACCINO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Mochaccino';
    //            $strItemDesc    =   'chocolat chaud avec une dose d’espresso';
            $strItemDesc    =   'lait au chocolat avec une dose d’espresso';
        }
        else {
            $strItemTit     =   'Mochaccino';
    //            $strItemDesc    =   'hot cocoa with a shot of espresso';
            $strItemDesc    =   'chocolate milk with a shot of espresso';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9.5);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // COFFEE
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Café, Café, Café';
        $arrSectSupps       =   ['sirop de vanille' => 0.50,
            'sirop de pain d\'épices' => 0.50,
            'lait d\'amande' => 1,
            'lait d\'avoine' => 1,
            'laid de coco' => 1];
    }
    else {
        $strSubSectTit      =   'Coffee, Coffee, Coffee';
        $arrSectSupps       =   ['vanilla syrup' => 0.50,
            'gingerbread syrup' => 0.50,
            'almond mylk' => 1,
            'oat mylk' => 1,
            'coconut mylk' => 1];
    }
    $SubSection = new SubSection($strLang, 'Coffee', $strSubSectTit);
    $SubSection->setSupps($arrSectSupps);
    $SubSection->write();
        
        ///////////////////////////////////////////////////////
        // DRIP COFFEE / GINGER DRIP
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Drip Coffee / Ginger Drip';
            $strItemDesc    =   'à volonté';
        }
        else {
            $strItemTit     =   'Drip Coffee / Ginger Drip';
            $strItemDesc    =   'not because you\'re a drip, +free refill';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // COLD BREW
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Cold Brew';
            $strItemDesc    =   'café infusé froid de 22 heures';
        }
        else {
            $strItemTit     =   'Cold Brew';
            $strItemDesc    =   'brewed in house for 22 hours';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // ESPRESSO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Espresso ou Serré';
            $strItemDesc    =   null;
        }
        else {
            $strItemTit     =   'Espresso or Serré';
            $strItemDesc    =   null;
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // DOUBLE SHOT / AMERICANO / NOISETTE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Double Shot / Americano / Noisette';
        }
        else {
            $strItemTit     =   'Double Shot / Americano / Noisette';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // FLAT WHITE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Flat White';
            $strItemDesc    =   'simple ou double';
        }
        else {
            $strItemTit     =   'Flat White';
            $strItemDesc    =   'single or double';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // LATTE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Latte';
            $strItemDesc    =   'simple ou double';
        }
        else {
            $strItemTit     =   'Latte';
            $strItemDesc    =   'single or double';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // CAPPUCINO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Cappucino';
            $strItemDesc    =   'simple/ double, nuage de lait chaud, & touche de cacoa';
        }
        else {
            $strItemTit     =   'Cappucino';
            $strItemDesc    =   'single or double, milk foam, cocoa powder';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // BABYCCINO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Babyccino';
            $strItemDesc    =   'un tout petit cappucino';
        }
        else {
            $strItemTit     =   'Babyccino';
            $strItemDesc    =   'teenie tiny cappucino';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // MOCHA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Mocha';
            $strItemDesc    =   'café, cacao, & lait chaud';
        }
        else {
            $strItemTit     =   'Mocha';
            $strItemDesc    =   'double espresso with fab chocolate & steamed milk';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // VIENNOISE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Viennoise';
            $strItemDesc    =   'double espresso allongée & recouverte de chantilly et du marc de café';
        }
        else {
            $strItemTit     =   'Viennoise';
            $strItemDesc    =   'whipped cream over a double long espresso topped with bitter coffee grounds';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // ICED LATTE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Iced Latte';
            $strItemDesc    =   'double espresso, lait froid, glaçons';
        }
        else {
            $strItemTit     =   'Iced Latte';
            $strItemDesc    =   'double shot, poured over ice';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // BEER ON TAP
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Bière en Pression';
        $strSubSectSubTit   =   '12 cl / 25 cl / 50 cl';
    }
    else {
        $strSubSectTit      =   'Beer On Tap';
        $strSubSectSubTit   =   '12 cl / 25 cl / 50 cl';
    }
    $SubSection = new SubSection($strLang, 'BeerTap', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Edetteblanche
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Edetteblanche';
            $strItemDesc    =   'Une bière blanche ornant une robe jaune pâle, lègerement trouble avec une epaisse mousse blanche. Arômes d\'orange et du citron';
        }
        else {
            $strItemTit     =   'Edetteblanche';
            $strItemDesc    =   'A white beer with pale yellow highlights, slightly cloudy with a thick white head. Orange and lemon notes';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(5, 8);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Elvis Juice
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Elvis Juice';
            $strItemSubTit  =   'inspiré par IPA (India Pale Ale)';
            $strItemDesc    =   'Gorgé des fruis, le nez ne peut pas laisser indifférent : pamplemousse, mangue et ananas se partage l\'affiche';
        }
        else {
            $strItemTit     =   'Elvis Juice';
            $strItemSubTit  =   'India Pale Ale (IPA) inspired';
            $strItemDesc    =   'Full of fruit and the aromas will touch you deeply: grapefruit, mango and pineapple all share the show ';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(5, 8);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Oeil de Biche
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   '&OElig;il de Biche';
            $strItemSubTit  =   'Panama Brewing Company (PBC - Paris 19ème)';
            $strItemDesc    =   'Une autre variation de l\'American Pale Ale : celle-ci joue sur des vives notes herbacées, végétales, voir résineuses. Une bière de soif';
        }
        else {
            $strItemTit     =   '&OElig;il de Biche';
            $strItemSubTit  =   'Panama Brewing Company (PBC - Paris 19ème)';
            $strItemDesc    =   'Another variation of The American Pale Ale: this one plays with herbal, even resiny, notes. A true beer for thirst';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(5, 8);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Barge du Canal
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Barge du Canal';
            $strItemSubTit  =   'Paname Brewing Company (PBC - Paris 19ème)<br>IPA américain (' . getIntlNum($strLang, '6.0', true) . ')';
            $strItemDesc    =   'Bien fraîche et déjà houblonnée. Le milieu de bouche nous révèle quelques notes de pamplemousse, de litchi avant de poursuivre sur une finale végétale, résineuse et même un peu réglissé. La longueur en bouche est incroyable, portée par son amertume puissante de 70 IBU';
        }
        else {
            $strItemTit     =   'Barge du Canal';
            $strItemSubTit  =   'Paname Brewing Company (PBC - Paris 19ème)<br>American IPA (' . getIntlNum($strLang, '6.0', true) . ')';
            $strItemDesc    =   'Fresh and already hoppy. Mid-mouth brings out grapefruit and lychee notes before it\'s herbal, hoppy and lightly licorice finish. The length in mouth is incredible, with a strong bitterness index (70 IBU)';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(5, 8);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Hazy Jane
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Hazy Jane';
            $strItemSubTit  =   'BrewDog<br>New England IPA (7,2 %)';
            $strItemDesc    =   'robe orangée et trouble. Nez aux puissants arômes de houblons avec des notes d’ananas, de mangue et de pêche. Bouche onctueuse et intense rappelant les fruits mûrs et une finale très peu amère';
        }
        else {
            $strItemTit     =   'Hazy Jane';
            $strItemSubTit  =   'BrewDog<br>New England IPA (7.2%)';
            $strItemDesc    =   'retuned in Scotland. Brewed with oats and wheat and left unfiltered for a hazy appearance and super smooth delivery. Dry-hopped for a full-tilt fruit hit with pineapple, mango and zesty lime. Low on bitterness, high on haze, heavy on hops';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(5, 8);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Grosse Bertha
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Grosse Bertha';
            $strItemSubTit  =   'Brussels Beer Project';
            $strItemDesc    =   'une Hefeweizen brassée avec du froment. D’une robe blonde trouble, sa mousse blanche offre des arômes de céréales et d’épices telles que la coriandre, et une touche de levure';
        }
        else {
            $strItemTit     =   'Grosse Bertha';
            $strItemSubTit  =   'Brussels Beer Project';
            $strItemDesc    =   'the result of the blend between the recipes of a triple and a hefeiwezen. German yeast gives aromas of banana and clove. Based on a mix of barley malt and wheat, it’s voluptuous at will. It will put you at ease with its roundness like no other';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(5, 8);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Seasonal Beer on Tap
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Pression de la saison';
            $strItemDesc    =   'demandez à votre serveur !';
        }
        else {
            $strItemTit     =   'Seasonal Beer on Tap';
            $strItemDesc    =   'ask your server!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(5, 8);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // CIDERS & BOTTLED BEER
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Cidre & Bières en bouteilles';
    }
    else {
        $strSubSectTit      =   'Ciders & Bottled Beer';
    }
    $SubSection = new SubSection($strLang, 'BeerBottles', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Fils de Pomme Cider
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Fils de Pomme Cidre';
            $strItemDesc    =   'brut cidre';
        }
        else {
            $strItemTit     =   'Fils de Pomme Cider';
            $strItemDesc    =   'brut cidre';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setQty('33 cl');
        $MenuItem->setOutOfStock();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Barge du Canal
        ///////////////////////////////////////////////////////
    
        if ($strLang == 'fr') {
            $strItemTit     =   'Barge du Canal';
            $strItemSubTit  =   'Paname Brewing Company (PBC - Paris 19ème)<br>IPA américain (' . getIntlNum($strLang, '6.0', true) . ')';
            $strItemDesc    =   'Bien fraîche et déjà boulonnée. Le milieu de bouche nous révèle quelques notes de pamplemousse, de litchi avant de poursuivre sur une finale végétale, résineuse et même un peu réglissé. La longueur en bouche est incroyable, portée par son amertume puissante de 70 IBU';
        }
        else {
            $strItemTit     =   'Barge du Canal';
            $strItemSubTit  =   'Paname Brewing Company (PBC - Paris 19ème)<br>American IPA (' . getIntlNum($strLang, '6.0', true) . ')';
            $strItemDesc    =   'Fresh and already hoppy. Mid-mouth brings out grapefruit and lychee notes before it\'s herbal, hoppy and lightly licorice finish. The length in mouth is incredible, with a strong bitterness index (70 IBU)';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Bête Noir
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bête Noir';
            $strItemSubTit  =   'Paname Brewing Company (PBC - Paris 19ème)<br>IPA noire américaine';
            $strItemDesc    =   'Notes de chocolat, de café, de fumé même. La bouche s\'ouvre sur les notes plus habituelles des IPA';
        }
        else {
            $strItemTit     =   'Bête Noir';
            $strItemSubTit  =   'Paname Brewing Company (PBC - Paris 19ème)<br>Black American IPA';
            $strItemDesc    =   'Notes of chocolate, coffee and even smokey. The flavours open to more habitual IPA notes';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Brewdog Vagabond
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Brewdog Vagabond';
            $strItemSubTit  =   'Nouvelle American Pale Ale (NPA)';
            $strItemDesc    =   'Brassée à base des houblons Centennial et Amarillo';
        }
        else {
            $strItemTit     =   'Brewdog Vagabond';
            $strItemSubTit  =   'New American Pale Ale (NPA)';
            $strItemDesc    =   'Brewed with Centennial and Amarillo hops';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setGluten();
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Brewdog Clockwork Tangerine
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Brewdog Clockwork Tangerine';
            $strItemSubTit  =   'Session IPA (' . getIntlNum($strLang, '4.5', true) . ')';
            $strItemDesc    =   'Juteuse aux arômes de mandarine, des fruits tropicaux avec une légère touche caramélisée !';
        }
        else {
            $strItemTit     =   'Brewdog Clockwork Tangerine';
            $strItemSubTit  =   'Session IPA (' . getIntlNum($strLang, '4.5', true) . ')';
            $strItemDesc    =   'Juicy mandarin and tropical fruit aromas with a light touch of caramel!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Raspberry Blitz
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Raspberry Blitz';
            $strItemSubTit  =   'Sans-Alcool (' . getIntlNum($strLang, '0.49', true) . ')';
            $strItemDesc    =   'Une sour sans-alcool comme on en voir rarement. Cette bière lègere, fruitée, juteuse et rafraîchissante est brassée avec une belle ration de framboise, pour accentuer l\'acidité de son style. L\'avoine utilisée dans le maltage permet un corps assez doux et soyeux en bouche. On pense à une tarte aux framboises meringuée, à une crème glacée au citron... C\'est aussi vivifiant que gourmand, une vraie réussite !';
        }
        else {
            $strItemTit     =   'Raspberry Blitz';
            $strItemSubTit  =   'Non-Alcoholic (' . getIntlNum($strLang, '0.49', true) . ')';
            $strItemDesc    =   'A non-alcoholic sour so rarely seen. Light, fruity, juicy and refreshing. Brewed with a good portion of raspberry to accentuate it\'s stylish acidity. The oat used in the malting allows for a soft and silky body. Reminds us of a raspberry meringue pie, lemon ice cream... As invigorating as it is voluputuous. A true success story!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Puppet Head
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Puppet Head';
            $strItemSubTit  =   'Bière blanche (' . getIntlNum($strLang, '4.5', true) . ')';
            $strItemDesc    =   'Une baie Berliner Weisse. Baies, goût très aigre avec un caractère de framboises et cassis, des notes de pain léger et d\'orange sanguine';
        }
        else {
            $strItemTit     =   'Puppet Head';
            $strItemSubTit  =   'White beer (' . getIntlNum($strLang, '4.5', true) . ')';
            $strItemDesc    =   'Berliner Weisse Beer. Berries, quite bitter flavours with raspberry and blackcurrant characteristics, light bready and blood orange notes';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Sky's The Limit
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sky\'s The Limit';
            $strItemSubTit  =   'Bière blanche';
            $strItemDesc    =   'Une baie Berliner Weisse brassée avec une forte dose de cassis, de gingembre et de cirton vert ! Rafraîchissant aigre et délicieux !';
        }
        else {
            $strItemTit     =   'Sky\'s The Limit';
            $strItemSubTit  =   'White beer';
            $strItemDesc    =   'Berliner Weisse Beer brewed with a strong dose of blackcurrants, ginger and lime! Refreshingly bitter and delicious!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Grammoballofon
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Grammoballofon';
            $strItemSubTit  =   'Bière blanche';
            $strItemDesc    =   'Une baie Berliner Weisse avec un goût fruitée et très aigre avec des notes de framboise, de mangue, de fruit de la passions et d\'orange sanguine';
        }
        else {
            $strItemTit     =   'Grammoballofon';
            $strItemSubTit  =   'White beer';
            $strItemDesc    =   'Berliner Weisse Beer with a very bitter and fruity taste with raspberry, mango, passion fruit and blood orange notes';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Guinness
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Guiness';
            $strItemSubTit  =   'Stout';
            $strItemDesc    =   'Elle a un nez douce, avec notes de malt pénétrantes, et sa bouche est soyeuse, crèmeuse et équillibrée. Soyeux, on pourrait dire, si on nous a demandé sur sa sensation en bouche';
        }
        else {
            $strItemTit     =   'Guiness';
            $strItemSubTit  =   'Stout';
            $strItemDesc    =   'It has a sweet nose, with hints of malt breaking through, and its palate is smooth, creamy, and balanced. Velvety, you might even say, if asked about the mouthfeel.';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Dupont Ambrée
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Dupont Ambrée';
        }
        else {
            $strItemTit     =   'Dupont Ambrée';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setPrices(8, 12);
        $MenuItem->setQty('25 cl / 50 cl / 75 cl');
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Dupont Miel
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Dupont Miel';
        }
        else {
            $strItemTit     =   'Dupont Miel';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setPrices(8, 12);
        $MenuItem->setQty('25 cl / 50 cl / 75 cl');
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        
        ///////////////////////////////////////////////////////
        // Bottle of the season
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bouteille / Cannette de la saison';
            $strItemDesc    =   'demandez à votre serveur !';
        }
        else {
            $strItemTit     =   'Bottle / Can of the Season';
            $strItemDesc    =   'ask your server!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setQty('33 cl');
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // CRAFT COCKTAILS & MIXERS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Craft Cocktails & Mixers';
    }
    else {
        $strSubSectTit      =   'Craft Cocktails & Mixers';
    }
    $SubSection = new SubSection($strLang, 'Cocktails', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Raspberry Gin Royale
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Raspberry Gin Royale';
            $strItemDesc    =   'compote des framboises crues & du gin Filtrés & par dessus du prosecco';
        }
        else {
            $strItemTit     =   'Raspberry Gin Royale';
            $strItemDesc    =   'house raw raspberry jam & gin strained & topped with prosecco';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Gin Ginger Fizz
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Gin Ginger Fizz';
            $strItemDesc    =   'du ginger-ale pétillant & citron vert avec notre gin infusé aux notes d’oranges, baies rouge, & gingembre';
        }
        else {
            $strItemTit     =   'Gin Ginger Fizz';
            $strItemDesc    =   'ginger ale married with wild berry, lime & ginger notes';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Tipsy Carrot
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Tipsy Carrot';
            $strItemDesc    =   'notre jus de carotte poivré avec du gin de poivre rose, oui, pour le corps et l\'âme';
        }
        else {
            $strItemTit     =   'Tipsy Carrot';
            $strItemDesc    =   'our peppery carrot juice with pink pepper gin, yes, for body & soul';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Gin Basil Smash
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Gin Basil Smashem';
            $strItemDesc    =   'basilic frais embrouillé de citron vert sucré, accompagné de fabuleux Hendrick\'s gin';
        }
        else {
            $strItemTit     =   'Gin Basil Smash';
            $strItemDesc    =   'fresh basil muddled with sweet lime, topped with Hendrick\'s fabulous gin';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Sailor Jerry's Orange Colada
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sailor Jerry\'s Orange Colada';
            $strItemDesc    =   'rhum infusé au miel maison, jus d’orange frais & liqueur de noix de coco';
        }
        else {
            $strItemTit     =   'Sailor Jerry\'s Orange Colada';
            $strItemDesc    =   'our house honey infused rum shaken with fresh orange juice & coconut liqueur';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Blame It On The Kiwi
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Blame It On The Kiwi';
            $strItemDesc    =   'jus exotique d\'ananas, kiwi, orange, pomme et rhum ! ajoutez quelques glaçons pour encore plus de fraîcheur';
        }
        else {
            $strItemTit     =   'Blame It On The Kiwi';
            $strItemDesc    =   'freshly made exotic juice of pineapple, kiwi, orange, apple and rum! Add a couple of ice cubes for freshness...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // De-oxic
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'De-toxic';
            $strItemDesc    =   'notre <a href="#DetoxJuice">jus detox</a> avec gin ... bon pour l\'âme ET le corps';
        }
        else {
            $strItemTit     =   'De-toxic';
            $strItemDesc    =   'our <a href="#DetoxJuice">detox juice</a> with gin ... good for the soul AND body';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Queens Jam Jazz
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Queens Jam Jazz';
            $strItemDesc    =   'confiture de framboise & myrtille crus maison, rhum avec jus de citron & jus d’orange frais';
        }
        else {
            $strItemTit     =   'Queens Jam Jazz';
            $strItemDesc    =   'our raw raspberry & blueberry jam & rum shaken with fresh orange & lemon juice';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Amber Chili Mule
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Amber Chili Mule';
            $strItemDesc    =   'bourbon embrouillé avec de l\'orange frais, citron vert & notre sirop d’habenero; bière au gingembre pétillante ; façon mule';
        }
        else {
            $strItemTit     =   'Amber Chili Mule';
            $strItemDesc    =   'bourbon muddled with fresh orange, lime, house habanero syrup, & ginger beer; mule style';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Tre13e Old Fashioned
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Tre13e Old Fashioned';
            $strItemDesc    =   'bourbon, notre propre sirop au pain d’épices, & surplombé de bière au gingembre épicée';
        }
        else {
            $strItemTit     =   'Tre13e Old Fashioned';
            $strItemDesc    =   'a classic but with house gingerbread syrup & spicy ginger beer';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Moscow Mule
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Moscow Mule';
            $strItemDesc    =   'gingembre fraîchement pressé, embrouillé de piment doux, garni avec de la bière pimento & vodka';
        }
        else {
            $strItemTit     =   'Moscow Mule';
            $strItemDesc    =   'freshly juiced ginger muddled with sweet chili, topped with spicy pimento beer & vodka';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Hot Pineapple Mule
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Hot Pineapple Mule';
            $strItemDesc    =   'jus d\'ananas fraîchement pressé et notre sirop d\'Habanero mélange avec du jus doux de citron vert, garni avec du vodka, glace pilée et de l\'eau gazifiée';
        }
        else {
            $strItemTit     =   'Hot Pineapple Mule';
            $strItemDesc    =   'freshly juiced pineapple and homemade Habanero syrup mixed with sweet lime juice, topped with vodka, crushed ice & soda water';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Rhubarb Mule
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Moscow Mule';
            $strItemDesc    =   'jus de rhubarbe fraîchement pressé et citron vert, garni avec du vodka, glace pilée et de l\'eau gazifiée';
        }
        else {
            $strItemTit     =   'Rhubarb Mule';
            $strItemDesc    =   'freshly juiced rhubarb and lime, topped with vodka, crushed ice & soda water';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Holiday in the Hive
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Holiday in the Hive';
            $strItemDesc    =   'notre vodka infusé au miel avec du jus d\'orange et du jus de citron pressés';
        }
        else {
            $strItemTit     =   'Holiday in the Hive';
            $strItemDesc    =   'our own honey infused vodka with fresh orange & lemon juice';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Lemonade for Grownups
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Citronnade pour les adultes';
            $strItemDesc    =   'citronnade fais maison avec du vin blanc au lieu de l\'eau, une touche du vodka et couvert du prosecco ; demandez la saveur de la saison';
        }
        else {
            $strItemTit     =   'Lemonade for grownups';
            $strItemDesc    =   'homemade lemonade made with white wine instead of water, a touch of vodka, & topped with bubbly prosecco; ask for the flavor of the season';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // HOT & BOOZY COCKTAILS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Hot & Boozy Cocktails</br><span class="spItemSubTit">(qui sont FRAICHES pour l\'été)</span>';
    }
    else {
        $strSubSectTit      =   'Hot & Boozy Cocktails</br><span class="spItemSubTit">(that are COLD in the summer)</span>';
    }
    $SubSection = new SubSection($strLang, 'HotBoozy', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Spiked Ginger Grogg
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Spiked Ginger Grogg';
            $strItemDesc    =   'bourbon infusé au miel avec gingembre & citron marinés au miel pendant 6 mois, servi avec un jus de citron chaud & gingembre fraichement pressé (échanger pour un rhum infusé de miel si vous préférez)';
        }
        else {
            $strItemTit     =   'Spiked Ginger Grogg';
            $strItemDesc    =   'honey bourbon with freshly juiced lemon- & ginger-infused honey & a touch of coconut oil (switch for homemade honey infused rum if you like)';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Spiked Liquid Sunshine
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Spiked Liquid Sunshine';
            $strItemDesc    =   'notre propre rhum infusé au miel dans une latte au curcuma & gingembre, avec lait d’amande & miel infusé aux épices, parsemé de poivre mixé';
        }
        else {
            $strItemTit     =   'Spiked Liquid Sunshine';
            $strItemDesc    =   'hot honey infused rum, turmeric latte; topped with cracked pepper';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Coco Matcha Magic
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coco Matcha Magic';
            $strItemDesc    =   'liqueur de noix de coco, notre matcha chai avec lait de coco, & miel infusé';
            $strItemAllerg  =   'végétalienne ? demandez du sucre';
        }
        else {
            $strItemTit     =   'Coco Matcha Magic';
            $strItemDesc    =   'coconut liqueur infused matcha chai latte topped with infused honey';
            $strItemAllerg  =   'vegan? ask for sugar';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setAllerg($strItemAllerg);
        $MenuItem->setVegan(true, true);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // French Kiss
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'French Kiss';
            $strItemDesc    =   'lait au chocolat, liqueur de menthe, avec chantilly';
        }
        else {
            $strItemTit     =   'French Kiss';
            $strItemDesc    =   'chocolate milk with peppermint liqueur & whipped cream. sky rockets in flight... afternoon delight!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Moka Magic
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Moka Magic';
            $strItemDesc    =   'double café, cacao, Baileys, liqueur d’amande, lait versé sur des glaçons';
        }
        else {
            $strItemTit     =   'Moka Magic';
            $strItemDesc    =   'lots of cafeine with a large dose of chocolate, almond & creamy whiskey liqueur topped with milk poured over ice';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Spiked Cocoa
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Spiked Cocoa';
            $strItemDesc    =   'lait au chocolat, boutbon au miel maison, & chantilly & sirop au choix: chili, pain d’épices, pumpkin spice, ou vanille';
        }
        else {
            $strItemTit     =   'Spiked Cocoa';
            $strItemDesc    =   'chocolate milk, house honey bourbon, & whipped cream. choice of syrup: chili, gingerbread, pumpkin spice, or vanilla';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Creamy Almond Viennoise
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Creamy Almond Viennoise';
            $strItemDesc    =   'double café, Baileys, liqueur d’amande, avec chantilly & une touche des grains de café moulus';
        }
        else {
            $strItemTit     =   'Creamy Almond Viennoise';
            $strItemDesc    =   'large dose of espresso, Baileys, almond liqueur, topped with whipped cream, & bitter coffee grounds';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Non Irish Coffee
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Non Irish Coffee';
            $strItemDesc    =   'comme vous l’aimez ! aussi déliceaux avec liqueur d’amande, Baileys, vodka, bourbon (classique ou miel infusé), double café & chantilly.';
        }
        else {
            $strItemTit     =   'Non Irish Coffee';
            $strItemDesc    =   'you choose! almond liqueur, Baileys, vodka, honey infused bourbon, with double long espresso, & whipped cream.';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // HIGHBALLS & LOWBALLS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Highballs & Lowballs';
    }
    else {
        $strSubSectTit      =   'Highballs & Lowballs';
    }
    $SubSection = new SubSection($strLang, 'Highballs', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Honey Infused Bourbon
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Honey Infused Bourbon';
            $strItemDesc    =   'fait maison, servie pur';
        }
        else {
            $strItemTit     =   'Honey Infused Bourbon';
            $strItemDesc    =   'made in house, served neat';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Teapot G & T
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Teapot G&nbsp;&&nbsp;T';
            $strItemDesc    =   'fait pour deux ! choisir n’importe quelle combinaison';
        }
        else {
            $strItemTit     =   'Teapot G&nbsp;&&nbsp;T';
            $strItemDesc    =   'made for 2! pick any combination!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 17);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Hendrick's Teapot G & T
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Hendrick\'s Teacup G&nbsp;&&nbsp;T';
            $strItemDesc    =   'aux arômes de rose & concombre ; tonique fevertree classique';
        }
        else {
            $strItemTit     =   'Hendrick\'s Teacup G&nbsp;&&nbsp;T';
            $strItemDesc    =   'rose & cucumber infused; classic indian tonic';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Generous Teacup G & T
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Generous Teacup G&nbsp;&&nbsp;T';
            $strItemDesc    =   'aux arômes de jasmin & de fleur de sureau ; tonique à l’orange amère & de sureau';
        }
        else {
            $strItemTit     =   'Generous Teacup G&nbsp;&&nbsp;T';
            $strItemDesc    =   'jasmine & elderflower infused; bitter orange & elderflower tonic';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Brockmans Teacup G & T
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Brockmans Teacup G&nbsp;&&nbsp;T';
            $strItemDesc    =   'aux arômes d’agrumes & de baies sauvages ; tonique pamplemousse & romarin';
        }
        else {
            $strItemTit     =   'Brockmans Teacup G&nbsp;&&nbsp;T';
            $strItemDesc    =   'citrus & wildberry infused; grapefruit & rosemary tonic';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Organic Highball G & T
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Organic Highball G&nbsp;&&nbsp;T';
            $strItemDesc    =   'aux arômes de coriandre & combava servi avec tonique Mediterranean';
        }
        else {
            $strItemTit     =   'Organic Highball G&nbsp;&&nbsp;T';
            $strItemDesc    =   'coriandre & combava infused ; served with Mediterranean tonic';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Chili Ginger Lemonade & Bourbon
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chili Ginger Lemonade & Bourbon';
            $strItemDesc    =   'un bonheur';
        }
        else {
            $strItemTit     =   'Chili Ginger Lemonade & Bourbon';
            $strItemDesc    =   'a house favorite';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Mimosa
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Mimosa';
            $strItemDesc    =   'jus d’orange frais avec du prosecco petillante';
        }
        else {
            $strItemTit     =   'Mimosa';
            $strItemDesc    =   'fresh orange juice with fizzy prosecco';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Vodka Sodas
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Vodka Sodas';
            $strItemDesc    =   'choix de :' .
                '<ul>' .
                '<li>classic soda water</li>' .
                '<li>rhubarb & cardomon soda</li>' .
                '<li>white peach & jasmine soda</li>' .
                '</ul>';
        }
        else {
            $strItemTit     =   'Vodka Sodas';
            $strItemDesc    =   'choose between:' .
                '<ul>' .
                '<li>classic soda water</li>' .
                '<li>rhubarb & cardomon soda</li>' .
                '<li>white peach & jasmine soda</li>' .
                '</ul>';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // ROSE WINE
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Vin Rosé';
        $arrSectMsmts       =   ['verre' => '14 cl',
            'verre & demi' => '21 cl',
            'bouteille' => '75 cl'];
    }
    else {
        $strSubSectTit      =   'Rosé Wine';
        $arrSectMsmts       =   ['glass' => '14 cl',
            'glass & a half' => '21 cl',
            'bottle' => '75 cl'];
    }
    $SubSection = new SubSection($strLang, 'RoseWine', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Sancerre
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sancerre';
            $strItemSubTit  =   'Eric Louis (' . getIntlNum($strLang, '12.5', true) . ')';
            $strItemDesc    =   'Sa robe saumonée est limpide et brilliante. Sa bouche est puissante et structurée, et laisse place à des arômes de groseilles et de pêches. En 2019, ils avons reçu la certification Haute Valeur Environmentale de niveau 3, soit le plus exigeant pour les exploitations agricoles. En 2020, le domaine entame une conversion en agriculture biologique';
        }
        else {
            $strItemTit     =   'Sancerre';
            $strItemSubTit  =   'Eric Louis (' . getIntlNum($strLang, '12.5', true) . ')';
            $strItemDesc    =   'Its salmon color is limpid and brilliant. Its mouth is powerful and structured and gives way to aromas of gooseberries and peaches. In 2019, they received the Level 3 High Environmental cerification, which is the highest level for agricultural farms. In 2020, the estate began a conversion to organic farming';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(7, 25);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Rosé Gourmande
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Rosé Gourmande de Maison Blanche';
            $strItemSubTit  =   'Famille Bouey Vignobles et Châteaux<br>Bordeaux Rosé 2016 (' . getIntlNum($strLang, '12.5', true) . ')';
            $strItemDesc    =   'Avec sa jolie couleur pâle aux reflets rose très clair ce vin élégant et charmeur révèle des notes de fleurs blanches mêlées à des arômes de bonbon anglais et de fruits rouges acidulés comme la groseille et la framboise. Sa bouche est gourmande, ronde, fruitée et se montre pleine de fraîcheur';
        }
        else {
            $strItemTit     =   'Rosé Gourmande de Maison Blanche';
            $strItemSubTit  =   'Famille Bouey Vignobles et Châteaux<br>Bordeaux Rosé 2016 (' . getIntlNum($strLang, '12.5', true) . ')';
            $strItemDesc    =   'With its pretty pale color and very light pink reflections, this elegant and charming wine reveals notes of white flowers mixed with aromas of English candy and tangy red fruits such as gooseberry and raspberry. Its mouth is greedy, round, fruity and full of freshness';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(8, 28);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Comme un Dimanche
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Comme un Dimanche';
            $strItemSubTit  =   'Château Vieux Moulin<br>Languedoc Corbières Rosé 2019 (' . getIntlNum($strLang, '13.5', true) . ')';
            $strItemDesc    =   'Un mariage de cépages a engendré ce Rosé qui est déjà un plaisir pour les yeux avec sa robe pâle et scintillante. Complexe et floral au nez, ce vin offre un palais tout en finesse, aux arômes de fleurs blanches et d’agrumes. Attaque ample et finale aérienne';
        }
        else {
            $strItemTit     =   'Comme un Dimanche';
            $strItemSubTit  =   'Château Vieux Moulin<br>Languedoc Corbières Rosé 2019 (' . getIntlNum($strLang, '13.5', true) . ')';
            $strItemDesc    =   'A marriage of grape varietals has produced this rosé which is already a pleasure for the eyes with its pale and sparkling color. Complex and floral on the nose, this wine offers a fine palate, with aromas of white flowers and citrus. Ample up front and with an airy finish';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(9.5, 31);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // Pas du Moine
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Le Pas du Moine';
            $strItemSubTit  =   'Château Gassier<br>Côtes de Provence Sainte-Victoire AOC (Bio) 2019 (' . getIntlNum($strLang, '13', true) . ')';
            $strItemDesc    =   'Un nez intense aux arômes floraux, exotiques comme le litchi, la mangue fraiche ainsi qu\'une pointe de pamplemousse rose, de petit fruits rouges (groseille, coulis de fraise fraiche sauvage) et quelques notes d’épices. En bouche ce vin montre beaucoup fraicheur, un bel équilibre, beaucoup de finesse de minéralité et une belle longueur. Grande rondeur et forte appétence sur ce millésime';
        }
        else {
            $strItemTit     =   'Le Pas du Moine';
            $strItemSubTit  =   'Château Gassier<br>Côtes de Provence Sainte-Victoire AOC (Bio) 2019 (' . getIntlNum($strLang, '13', true) . ')';
            $strItemDesc    =   'Intense nose with floral, exotic aromas such as lychee, fresh mango as well as a hint of pink grapefruit, red berries (gooseberry, wild strawbery coulis) and some spicy notes. In the mouth this wine shows a lot of freshness, well-balanced, a lot of finesse, minerality and a good length. Great round body and strong palatability in this vintage';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setBio();
        $MenuItem->setPrices(12, 45);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // BUBBLES
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Les Bulles';
        $arrSectMsmts       =   ['verre' => '14 cl',
            'bouteille' => '75 cl'];
    }
    else {
        $strSubSectTit      =   'Bubbles';
        $arrSectMsmts       =   ['glass' => '14 cl',
            'bottle' => '75 cl'];
    }
    $SubSection = new SubSection($strLang, 'Bubbles', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Laurent Perrier Brut
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Laurent Perrier Brut';
            $strItemSubTit  =   'La Cuvée';
            $strItemDesc    =   'le nom à noter est Laurent Perrier “La Cuvée” Un équilibre parfait entre fraîcheur et finesse avec des notes de pêche de vigne et de fruits blancs';
        }
        else {
            $strItemTit     =   'Laurent Perrier Brut';
            $strItemSubTit  =   'La Cuvée';
            $strItemDesc    =   'perfect balance between freshness and delicacy with white fruity flavors';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(70);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Laurent Perrier Rosé
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Laurent Perrier Rosé';
            $strItemDesc    =   'une sensation de plonger dans un panier de fruits rouges pour ce Champagne précurseur du rosé de macération';
            $strMsmt        =   'bouteille';
        }
        else {
            $strItemTit     =   'Laurent Perrier Rosé';
            $strItemDesc    =   'a wide range of red fruit, it’s the precursor of the macerated rosé in champagne';
            $strMsmt        =   'bottle';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 120);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPQty($strMsmt);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Cremant du Jura
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Cremant du Jura';
            $strItemDesc    =   'issu de la méthode traditionnelle, ce crémant a un nez de fleurs blanches et légèrement brioché';
        }
        else {
            $strItemTit     =   'Cremant du Jura';
            $strItemDesc    =   'from the traditional method, a nose of white flowers and white fruits';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(29);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // WHITE WINE
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Vin Blanc';
        $arrSectMsmts       =   ['verre' => '14 cl',
            'verre & demi' => '21 cl',
            'bouteille' => '75 cl'];
    }
    else {
        $strSubSectTit      =   'White Wine';
        $arrSectMsmts       =   ['glass' => '14 cl',
            'glass & a half' => '21 cl',
            'bottle' => '75 cl'];
    }
    $SubSection = new SubSection($strLang, 'WhiteWine', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Sancerre
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sancerre';
            $strItemSubTit  =   'Les Blanchaux';
            $strItemDesc    =   'tout en fraîcheur, parfum des fruits exotiques';
        }
        else {
            $strItemTit     =   'Burgundy';
            $strItemSubTit  =   'Les Blanchaux';
            $strItemDesc    =   'fresh with notes of exotic fruits';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 12);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(16, 60);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Chablis
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chablis';
            $strItemSubTit  =   'Domaine de la Genillotte';
            $strItemDesc    =   'sec & minéral';
        }
        else {
            $strItemTit     =   'Chablis';
            $strItemSubTit  =   'Domaine de la Genillotte';
            $strItemDesc    =   'dry & mineral';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(14, 48);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Loire
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Loire';
            $strItemSubTit  =   'Domaine Aumonier "Cuvée Henri Chenin"';
            $strItemDesc    =   'notes miellées & d’abricot sec';
        }
        else {
            $strItemTit     =   'Loire';
            $strItemSubTit  =   'Domaine Aumonier "Cuvée Henri Chenin"';
            $strItemDesc    =   'notes of honey & dried apricot';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setBio();
        $MenuItem->setPrices(9, 35);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Bordeaux Graves
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bordeaux Graves';
            $strItemSubTit  =   'Château Haut-Mayne';
            $strItemDesc    =   'frais avec des notes fleurs blanches & des fruits blancs';
        }
        else {
            $strItemTit     =   'Bordeaux Graves';
            $strItemSubTit  =   'Château Haut-Mayne';
            $strItemDesc    =   'fresh with notes of white flowers & fruits';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(9, 35);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Languedoc
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Languedoc';
            $strItemSubTit  =   'Mas de Tannes';
            $strItemDesc    =   'complexe & rond, notes beurées & des fruits blancs';
        }
        else {
            $strItemTit     =   'Languedoc';
            $strItemSubTit  =   'Mas de Tannes';
            $strItemDesc    =   'complex & round, buttery notes, & white fruit';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setBio();
        $MenuItem->setPrices(12, 45);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Savoie
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Savoie';
            $strItemSubTit  =   'Domaine du Colombier "L\'Apremont"';
            $strItemDesc    =   'sec & fruité avec une finale minérale';
        }
        else {
            $strItemTit     =   'Savoie';
            $strItemSubTit  =   'Domaine du Colombier "L\'Apremont"';
            $strItemDesc    =   'dry & fruity with a mineral finish';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(8, 32);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // RED WINE
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Vin Rouge';
        $arrSectMsmts       =   ['verre' => '14 cl',
            'verre & demi' => '21 cl',
            'bouteille' => '75 cl'];
    }
    else {
        $strSubSectTit      =   'Red Wine';
        $arrSectMsmts       =   ['glass' => '14 cl',
            'glass & a half' => '21 cl',
            'bottle' => '75 cl'];
    }
    $SubSection = new SubSection($strLang, 'RedWine', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // BOURGOGNE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bourgogne';
            $strItemSubTit  =   'Clos Saint-Germain';
            $strItemDesc    =   'Pinot Noir avec des notes des cerises';
        }
        else {
            $strItemTit     =   'Burgundy';
            $strItemSubTit  =   'Clos Saint-Germain';
            $strItemDesc    =   'Pinot Noir with cherry notes';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(11, 40);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // BORDEAUX GRAVES
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bordeaux Graves';
            $strItemSubTit  =   'Château Haut-Mayne';
            $strItemDesc    =   'ample, fruité, & tannique';
        }
        else {
            $strItemTit     =   'Bordeaux Graves';
            $strItemSubTit  =   'Château Haut-Mayne';
            $strItemDesc    =   'ample, fruity, & tannic';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(9, 35);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Rhône Crozes Hermitage
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Rhône Crozes Hermitage';
            $strItemSubTit  =   'Les Entrec&oelig;urs';
            $strItemDesc    =   'épicé, moka, fuit mûr';
        }
        else {
            $strItemTit     =   'Rhône Crozes Hermitage';
            $strItemSubTit  =   'Les Entrec&oelig;urs';
            $strItemDesc    =   'spicy, mocha, ripe fruit';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 10);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(13, 50);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Languedoc
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Languedoc';
            $strItemSubTit  =   'Marius';
            $strItemDesc    =   'envoûtant dévoilant fraîcheur, arômes des fruits rouges';
        }
        else {
            $strItemTit     =   'Languedoc';
            $strItemSubTit  =   'Marius';
            $strItemDesc    =   'captivating & revealing freshness with red fruit aromas';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 12);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setBio();
        $MenuItem->setPrices(16, 60);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Beaujolais
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Beaujolais';
            $strItemSubTit  =   'Fleurie';
            $strItemDesc    =   'tendre avec des tanins fins & une richesse aromatique';
        }
        else {
            $strItemTit     =   'Beaujolais';
            $strItemSubTit  =   'Fleurie';
            $strItemDesc    =   'tender with fine tannins & an aromatic richness';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setPrices(12, 45);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Rhône Gigondas
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Rhône Gigondas';
            $strItemSubTit  =   'Domaine Fontavin';
            $strItemDesc    =   'tannique, fruits noirs sauvages';
        }
        else {
            $strItemTit     =   'Rhône Gigondas';
            $strItemSubTit  =   'Domaine Fontavin';
            $strItemDesc    =   'tannic with wild black fruits';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setSubTit($strItemSubTit);
        $MenuItem->setBio();
        $MenuItem->setPrices(9, 35);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // SPIRITS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Spirits';
    }
    else {
        $strSubSectTit      =   'Spirits';
    }
    $SubSection = new SubSection($strLang, 'Spirits', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // How you like
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Nous infusons nos propres spirits...';
            $strItemDesc    =   'bourbon, rhum ou vodka servi comme vous l\'aimez...';
        }
        else {
            $strItemTit     =   'We infuse our own spirits...';
            $strItemDesc    =   'bourbon, rum or vodka served however you like...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Hendrick's GIn
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Hendrick\'s Gin';
            $strItemDesc    =   'classic, midsummer, orbium, ou lunar';
        }
        else {
            $strItemTit     =   'Hendrick\'s Gin';
            $strItemDesc    =   'classic, midsummer, orbium, or lunar';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Brockmans Gin
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Brockmans Gin';
        }
        else {
            $strItemTit     =   'Brockmans Gin';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Generous Gin
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Generous Gin';
        }
        else {
            $strItemTit     =   'Generous Gin';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Audemus Pink Pepper Gin
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Audemus Pink Pepper Gin';
        }
        else {
            $strItemTit     =   'Audemus Pink Pepper Gin';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Purity Vodka
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Purity Vodka';
        }
        else {
            $strItemTit     =   'Purity Vodka';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Bulleit
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bulleit';
            $strItemDesc    =   'bourbon ou rye';
        }
        else {
            $strItemTit     =   'Bulleit';
            $strItemDesc    =   'bourbon or rye';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Sailor Jerry's Rum
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sailor Jerry\'s Rum';
            $strItemDesc    =   'bourbon ou rye';
        }
        else {
            $strItemTit     =   'Sailor Jerry\'s Rum';
            $strItemDesc    =   'bourbon or rye';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Godet Calvados
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Godet Calvados';
            $strItemDesc    =   'ajouter dans nos cafés fabuleux...';
        }
        else {
            $strItemTit     =   'Godet Calvados';
            $strItemDesc    =   'add to any fab coffee...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Godet Cognac
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Godet Cognac';
            $strItemDesc    =   'pour les jours de pluie...';
        }
        else {
            $strItemTit     =   'Godet Cognac';
            $strItemDesc    =   'for those rainy days...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Disaronno Amaretto
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Disaronno Amaretto';
            $strItemDesc    =   'ajouter dans nos cafés fabuleux...';
        }
        else {
            $strItemTit     =   'Disaronno Amaretto';
            $strItemDesc    =   'add to any fab coffee...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Port
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Port';
        }
        else {
            $strItemTit     =   'Port';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Benedictine
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Benedictine';
        }
        else {
            $strItemTit     =   'Benedictine';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 4);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Limoncello
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Limoncello';
            $strItemDesc    =   'pour les glaces bien sur...';
        }
        else {
            $strItemTit     =   'Limoncello';
            $strItemDesc    =   'for ice cream of course...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Baileys
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Baileys';
            $strItemDesc    =   'un bon ajout dans les cafés...';
        }
        else {
            $strItemTit     =   'Baileys';
            $strItemDesc    =   'a good addition to coffee...';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // MIXERS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Mixers';
    }
    else {
        $strSubSectTit      =   'Mixers';
    }
    $SubSection = new SubSection($strLang, 'Mixers', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // London Essence
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'London Essence';
            $strItemDesc    =   '<ul>' .
                '<li>tonic pamplemousse / romarin</li>' .
                '<li>tonic fleur de sureau / orange amère</li>' .
                '<li>soda rhubarbe & cardamome</li>' .
                '<li>soda pêche blanche / jasmin</li>' .
                '<li>soda au gingembre</li>' .
                '</ul>';
        }
        else {
            $strItemTit     =   'London Essence';
            $strItemDesc    =   '<ul>' .
                '<li>grapefruit rosemary tonic</li>' .
                '<li>bitter orange elderflower tonic</li>' .
                '<li>rhubarb & cardamon soda</li>' .
                '<li>white & peach & jasmine soda</li>' .
                '<li>ginger ale</li>' .
                '</ul>';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Pimento Ginger Beer
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Pimento Ginger Beer';
        }
        else {
            $strItemTit     =   'Pimento Ginger Beer';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // BLACK TEAS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Thé Noir';
        $arrSectMsmts       =   ['thé' => '40 cl',
            'thé pour deux' => '80 cl'];
    }
    else {
        $strSubSectTit      =   'Black Teas';
        $arrSectMsmts       =   ['tea' => '40 cl',
            'tea for two' => '80 cl'];
        
    }
    $SubSection = new SubSection($strLang, 'BlackTeas', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // British Breakfast
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'British Breakfast';
            $strItemDesc    =   'corse, robust & riches. Fait pour être accompagné avec du lait & sucre';
        }
        else {
            $strItemTit     =   'British Breakfast';
            $strItemDesc    =   'perfectly blended to drink with milk and sugar';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Parisian Afternoon
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Parisian Afternoon';
            $strItemDesc    =   'Thé noir Darjeeling avec des notes agrumes';
        }
        else {
            $strItemTit     =   'Parisian Afternoon';
            $strItemDesc    =   'a Darjeeling with citrus notes';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Apple Elderberry
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Apple Elderberry';
            $strItemDesc    =   'Pomme & sureau';
        }
        else {
            $strItemTit     =   'Apple Elderberry';
            $strItemDesc    =   'a fabulously fruity mix';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Blackberry
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Blackberry';
            $strItemDesc    =   'baies forestières, canneberges & crème. Avec bleuets & canneberges entières séchées';
        }
        else {
            $strItemTit     =   'Blackberry';
            $strItemDesc    =   'forest berries, cranberries & cream with whole dried berries';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Black Chai
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Black Chai';
            $strItemDesc    =   'thé noir avec épices chai. Essayez un peu sucré avec du lait chaud & moussé';
            $strItemSupp    =   'l\'option parfaite : latte';
        }
        else {
            $strItemTit     =   'Black Chai';
            $strItemDesc    =   'black tea with chai spices';
            $strItemSupp    =   'the perfect option: latte';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->setSupp($strItemSupp, 2, 0);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Blackcurrant
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Blackcurrant';
            $strItemDesc    =   'aux fruits rouges & feuilles de cassis';
        }
        else {
            $strItemTit     =   'Blackcurrant';
            $strItemDesc    =   'decorated with dried black currants & blackberries';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Blueberry
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Blueberry';
            $strItemDesc    =   'avec myrtille & bleuet';
        }
        else {
            $strItemTit     =   'Blueberry';
            $strItemDesc    =   'with blueberry & cornflower. A house favorite';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // South of Stockholm
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'South of Stockholm';
            $strItemDesc    =   'un classique venu tout droit de Suède ! aux fruits & baies de Stockholm';
        }
        else {
            $strItemTit     =   'South of Stockholm';
            $strItemDesc    =   'södermalm\'s mixture, taste of papaya, vanilla & mango, Decorated with orange peel, vanilla stem, rose petals & marigold';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Raspberry Licorice
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Raspberry Licorice';
            $strItemDesc    =   'black magic avec racine de réglisse, framboise, fraise, noix de coco';
        }
        else {
            $strItemTit     =   'Raspberry Licorice';
            $strItemDesc    =   'black magic with licorice root, raspberry, strawberry, coconut';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Blue Mountain
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Blue Mountain';
            $strItemDesc    =   'thé noir infusé avec les fruits et les fleurs qui poussent dans le lieu le plus magique de Suède';
        }
        else {
            $strItemTit     =   'Blue Mountain';
            $strItemDesc    =   'black tea infused with the fruits and flowers that grow around Sweden’s most magical witchy place';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Black Mulled Wine
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Black Mulled Wine';
            $strItemDesc    =   'thé ceylon à la cannelle, zeste d\'orange amère, morceaux d\'amande, morceaux de gingembre, clou de girofle et cardamome';
        }
        else {
            $strItemTit     =   'Black Mulled Wine';
            $strItemDesc    =   'eylon tea with cinnamon, bitter orange peel, almond bits, ginger bits, cloves, & cardamom';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Saffron Christmas Bun
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Saffron Christmas Bun';
            $strItemDesc    =   'avec safran & raisins secs';
        }
        else {
            $strItemTit     =   'Saffron Christmas Bun';
            $strItemDesc    =   'with saffron and raisins';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Gingerbread
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Gingerbread';
            $strItemDesc    =   'thé noir de ceylon à la cannelle, des morceaux de gingembre, des clous de girofle, du poivre noir et de la cardamome';
        }
        else {
            $strItemTit     =   'Gingerbread';
            $strItemDesc    =   'black tea from ceylon with cinnamon, ginger bits, cloves, black pepper, & cardamom';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Cardamom Buns
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Cardamom Buns';
            $strItemDesc    =   'cardamome, cannelle et vanille, tout comme un petit pain vraiment délicieux';
        }
        else {
            $strItemTit     =   'Cardamom Buns';
            $strItemDesc    =   'cardamom, cinnamon & vanilla, just like a really yummy freshly baked bun';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Mamma's Miracle Blend
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Mamma\'s Miracle Blend';
            $strItemDesc    =   'fleur de carthame, tournesol, sureau & coing';
        }
        else {
            $strItemTit     =   'Mamma\'s Miracle Blend';
            $strItemDesc    =   'safflower flower, sunflower, elderberry & quince';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // GREEN & BLACK BLENDS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Mélange Vert & Noir';
        $arrSectMsmts       =   ['thé' => '40 cl',
            'thé pour deux' => '80 cl'];
    }
    else {
        $strSubSectTit      =   'Green & Black Blends';
        $arrSectMsmts       =   ['tea' => '40 cl',
            'tea for two' => '80 cl'];
    }
    $SubSection = new SubSection($strLang, 'GreenBlack', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
    ///////////////////////////////////////////////////////
    // Fairytale Nights
    ///////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strItemTit     =   'Fairytale Nights';
        $strItemDesc    =   'mélange exotique de thés verts et noirs, parfumé au fruit de la passion';
    }
    else {
        $strItemTit     =   'Fairytale Nights';
        $strItemDesc    =   'exotic blend of green & black teas, flavored with passion fruit';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 5);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(9);
    $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // GREEN TEAS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Thé Vert';
        $arrSectMsmts       =   ['thé' => '40 cl',
            'thé pour deux' => '80 cl'];
    }
    else {
        $strSubSectTit      =   'Green Teas';
        $arrSectMsmts       =   ['tea' => '40 cl',
            'tea for two' => '80 cl'];
    }
    $SubSection = new SubSection($strLang, 'GreenTeas', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Detox Green
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Detox Green';
            $strItemDesc    =   'chamomile, citronnelle & chardon-marie';
        }
        else {
            $strItemTit     =   'Detox Green';
            $strItemDesc    =   'chamomile, lemongrass, dandelion & milk thistle';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Peaches in the Sun
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Peaches in the Sun';
            $strItemDesc    =   'un thé vert léger & fruité';
        }
        else {
            $strItemTit     =   'Peaches in the Sun';
            $strItemDesc    =   'a light & fruity blend of ripe southern flavors';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Matcha Chai Latte
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Matcha Chai Latte';
            $strItemDesc    =   'épicé, servi avec notre miel infusé & du lait chaud';
        }
        else {
            $strItemTit     =   'Matcha Chai Latte';
            $strItemDesc    =   'for the soul & the palate, SPICY, with infused honey & steamed milk';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(10);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Sweet Matcha Chai Latte
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sweet Matcha Chai Latte';
            $strItemDesc    =   'une version plus doux & sucré que le classique';
        }
        else {
            $strItemTit     =   'Sweet Matcha Chai Latte';
            $strItemDesc    =   'softer version; with infused honey, & steamed milk (no sugar added)';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(10);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Relax
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Relax';
            $strItemDesc    =   'fruity & herbal. Organic Ayurveda mixture. Cinnamon, apple pieces, ginger, licorice root, orange peel, hibiscus flower, clove, blackberry leaf, chamomile flower, fennel, pepper & cardamom';
        }
        else {
            $strItemTit     =   'Relax';
            $strItemDesc    =   'fruité & herbacé. Mélange d\'Ayurveda biologique sans arôme ajouté. Cannelle, morceaux de pomme, gingembre, racine de réglisse, zeste d\'orange, fleur d\'hibiscus, clou de girofle, feuille de mûre, fleur de camomille, fenouil, poivre & cardamome';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Moroccan Mint & Roses
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Moroccan Mint & Roses';
            $strItemDesc    =   'doux et rafraîchissant avec des notes mentholées et des nuances subtiles de fumée';
        }
        else {
            $strItemTit     =   'Moroccan Mint & Roses';
            $strItemDesc    =   'sweet & refreshing with menthol notes & subtle smoky undertones';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Yunnan
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Yunnan';
            $strItemDesc    =   'thé vert classique du yunnan. simple et délicieux';
        }
        else {
            $strItemTit     =   'Yunnan';
            $strItemDesc    =   'classic yunnan green tea. simple & delicious';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // GREEN & WHITE BLENDS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Mélange Vert & Blanc';
        $arrSectMsmts       =   ['thé' => '40 cl',
            'thé pour deux' => '80 cl'];
    }
    else {
        $strSubSectTit      =   'Green & White Blends';
        $arrSectMsmts       =   ['tea' => '40 cl',
            'tea for two' => '80 cl'];
    }
    $SubSection = new SubSection($strLang, 'GreenWhite', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
    ///////////////////////////////////////////////////////
    // Jasmine Silver Rose
    ///////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strItemTit     =   'Jasmine Silver Rose';
        $strItemDesc    =   'pur thé blanc et vert chinois, boutons de rose et perles de jasmin';
    }
    else {
        $strItemTit     =   'Jasmine Silver Rose';
        $strItemDesc    =   'a beloved blend. Pure Chinese white & green tea, rosebuds & jasmine pearls. An experience of aromatherapy that sharpens the mind & arouses the senses';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 6);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(10);
    $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // WHITE TEA
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Thé Blanc';
        $arrSectMsmts       =   ['thé' => '40 cl',
            'thé pour deux' => '80 cl'];
    }
    else {
        $strSubSectTit      =   'White Tea';
        $arrSectMsmts       =   ['tea' => '40 cl',
            'tea for two' => '80 cl'];
    }
    $SubSection = new SubSection($strLang, 'WhiteTea', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // Remember that Summer?
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Remember that Summer?';
            $strItemDesc    =   'ananas, papaye, mangue & fleurs tropicales';
        }
        else {
            $strItemTit     =   'Remember that Summer?';
            $strItemDesc    =   'pineapple, papaya, mango & tropical flowers';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Herbal Remedy
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Herbal Remedy';
            $strItemDesc    =   'un guérisseur super nutritif anti-inflammatoire ; algues spiruline, camomille, grande molène, zeste d\'orange, super fruits noni & guanabana ; tous les minéraux, vitamines & antioxydants';
        }
        else {
            $strItemTit     =   'Herbal Remedy';
            $strItemDesc    =   'a super nutrient anti inflamatory healer; spirulina algae, chamomile, great mullein, orange peel, super fruit noni & guanabana; minerals, vitamins & antioxidants. Light, fruity, & floral';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // White Coconut Chai
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'White Coconut Chai';
            $strItemDesc    =   'doux mais épicé';
        }
        else {
            $strItemTit     =   'White Coconut Chai';
            $strItemDesc    =   'spicy & smooth';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // Elderflower Blueberry Blossom
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Elderflower Blueberry Blossom';
            $strItemDesc    =   'douceur de sureau & fleurs de myrtille';
        }
        else {
            $strItemTit     =   'Elderflower Blueberry Blossom';
            $strItemDesc    =   'so yummy';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // White Christmas
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'White Christmas';
            $strItemDesc    =   'thé blanc de Fujian à la cannelle, à la citronnelle, aux amandes, à l\'écorce d\'orange amère, aux feuilles de roses';
        }
        else {
            $strItemTit     =   'White Christmas';
            $strItemDesc    =   'white fujian tea with cinnamon, lemongrass, almond bits, bitter orange peel, & rose leafs';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setPrices(9);
        $MenuItem->setOutOfStock();
        $MenuItem->write();

    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // ROOIBOS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Rooibos';
        $arrSectMsmts       =   ['thé' => '40 cl',
            'thé pour deux' => '80 cl'];
    }
    else {
        $strSubSectTit      =   'Rooibos';
        $arrSectMsmts       =   ['tea' => '40 cl',
            'tea for two' => '80 cl'];
    }
    $SubSection = new SubSection($strLang, 'Rooibos', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
    ///////////////////////////////////////////////////////
    // Carrot Cake
    ///////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strItemTit     =   'Carrot Cake';
        $strItemDesc    =   'Comme le gâteau';
    }
    else {
        $strItemTit     =   'Carrot Cake';
        $strItemDesc    =   'a house specialty';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 5);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(9);
    $MenuItem->write();
    
    ///////////////////////////////////////////////////////
    // Lemon & Ginger
    ///////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strItemTit     =   'Lemon & Ginger';
        $strItemDesc    =   'citron & gingembre ; c\'est ce que c\'est...';
    }
    else {
        $strItemTit     =   'Lemon & Ginger';
        $strItemDesc    =   'that\'s what it is...';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 5);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(9);
    $MenuItem->write();
    
    ///////////////////////////////////////////////////////
    // Red Mulled Wine
    ///////////////////////////////////////////////////////
    if ($strLang == 'fr') {
        $strItemTit     =   'Red Mulled Wine';
        $strItemDesc    =   'thé rooibos à la cannelle, zeste d\'orange amère, morceaux d\'amande, morceaux de gingembre, clou de girofle et cardamome';
    }
    else {
        $strItemTit     =   'Red Mulled Wine';
        $strItemDesc    =   'rooibus tea with cinnamon, bitter orange peel, almond bits, ginger bits, cloves, cardamom';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 5);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(9);
    $MenuItem->setOutOfStock();
    $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // INFUSIONS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Infusions';
        $arrSectMsmts       =   ['thé' => '40 cl',
            'thé pour deux' => '80 cl'];
    }
    else {
        $strSubSectTit      =   'Infusions';
        $arrSectMsmts       =   ['tea' => '40 cl',
            'tea for two' => '80 cl'];
    }
    $SubSection = new SubSection($strLang, 'Infusions', $strSubSectTit);
    $SubSection->setMsmts($arrSectMsmts);
    $SubSection->write();
    
    ///////////////////////////////////////////////////////
    // Purple Rain
    ///////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strItemTit     =   'Purple Rain';
        $strItemDesc    =   'florales avec des baies, beauté pourpre';
    }
    else {
        $strItemTit     =   'Purple Rain';
        $strItemDesc    =   'floral & berries, purple beauty';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 5);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(9);
    $MenuItem->write();
    
    ///////////////////////////////////////////////////////
    // Blue Lagoon
    ///////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strItemTit     =   'Blue Lagoon';
        $strItemDesc    =   'agrumes, douceur subtile';
    }
    else {
        $strItemTit     =   'Blue Lagoon';
        $strItemDesc    =   'distiinct citrus flavours with a subtle sweetness';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 5);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(9);
    $MenuItem->write();
    
    ///////////////////////////////////////////////////////
    // Blueberry Rhubarb Pie
    ///////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strItemTit     =   'Blueberry Rhubarb Pie';
        $strItemDesc    =   'ah oui, exactement comme si vous la mangiez !';
    }
    else {
        $strItemTit     =   'Blueberry Rhubarb Pie';
        $strItemDesc    =   'oh yes, exactly as it sounds!';
    }
    $MenuItem = new MenuItem($strLang, $strItemTit, 5);
    $MenuItem->setDesc($strItemDesc);
    $MenuItem->setPrices(9);
    $MenuItem->write();
    
    $SubSection->end();
    
    $Section->end();
    
    $Footer = new Footer();
    $Footer->write();
    