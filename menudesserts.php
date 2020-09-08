<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

    $Tre13e = new Tre13e();
    $Tre13e->readLang();
    $strLang = $Tre13e->getLang();

    $Header = new Header();
    $Header->write();
    
    if ($strLang == 'fr') {
        $strSectTit      =   'Desserts';
        $strSectSubTit   =   'Nous faisons toujours notre mieux pour assurer tous ses desserts tous le temps mais, avec la nature artisinale de notre production et l\'espace dans notre cuisine nous vous conseillons vivement de vérifier la disponibilité avant de décider ce que vous voulez ! Vous pouvez certainement commander votre dessert en même temps que votre repas et nous le réserverons pour vous.';
    }
    else {
        $strSectTit      =   'Desserts';
        $strSectSubTit   =   'Please keep in mind that we do our very best to make sure we have all of these all the time but due to the artisanal nature of production and kitchen space we highly advise you confirm availability before getting your heart set on what you’re having! You can absolutely order your dessert at the same time as your meal and we will set it aside for you.';
    }
    $Section = new Section($strLang, $strSectTit);
    $Section->setSubTit($strSectSubTit);
    $Section->write();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // LAYER CAKES
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Layer Cakes';
        $strSubSectSubTit   =   '1 pièce';
    }
    else {
        $strSubSectTit      =   'Layer Cakes';
        $strSubSectSubTit   =   '1 piece';
    }
    $SubSection = new SubSection($strLang, 'LayerCakes', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // CARROT CAKE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Carrot Cake';
            $strItemDesc    =   'ce truc est célèbre, juste assez épicé, juste assez sucré, avec juste ce qu\'il faut de buttercream cream cheese';
        }
        else {
            $strItemTit     =   'Carrot Cake';
            $strItemDesc    =   'this stuff is famous, just spicy enough, just sweet enough, with just the right amount of cream cheese buttercream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CHOCOLATE OREO CAKE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chocolate Oreo Cake';
            $strItemDesc    =   'le gâteau au chocolat le plus riche, le plus décadent, glacé avec de la butterceam cream cheese et des morceaux d\'oreo';
        }
        else {
            $strItemTit     =   'Chocolate Oreo Cake';
            $strItemDesc    =   'the deepest darkest chocolate cake iced with cream cheese buttercream and bits of oreo';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // LEMON LEMON CREME CAKE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Lemon Lemon Crème Cake';
            $strItemDesc    =   'le gâteau au citron préféré de boucle d’or- pas trop sucré, ni trop acidulé, juste comme il le faut ! Fabuleux gâteau éponge au citron, glacé à la crème au beurre de citron garni de lemon curd';
        }
        else {
            $strItemTit     =   'Lemon Lemon Creme Cake';
            $strItemDesc    =   'the goldilocks lemon cake- not too sweet, not too tart.. Just right. Fabulous lemon sponge cake iced with creamy lemon buttercream and topped with lemon curd';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // PEACHY KEEN CAKE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Peachy Keen Cake';
            $strItemDesc    =   'gâteau pèche avec crème au beurre à la vanille, des pêches fraîches et la sauce à la pêche fait maison';
        }
        else {
            $strItemTit     =   'Peachy Keen Cake';
            $strItemDesc    =   'peach layer cake with vanilla buttercream, fresh peaches, and house-made peach sauce';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 8);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // BARS AND COOKIES
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Bars and Cookies';
    }
    else {
        $strSubSectTit      =   'Bars and Cookies';
    }
    $SubSection = new SubSection($strLang, 'BarsCookies', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // BROWNIES
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Brownies';
            $strItemDesc    =   'ce brownie est si délicieux qu’il a fait pleurer beaucoup de gens (des larmes de joie). Sans gluten mais on vous promet assure qu’il n’a pas un goût \'healthy\'. PAS DU TOUT.';
        }
        else {
            $strItemTit     =   'Brownies';
            $strItemDesc    =   'this brownie is so good it has actually made people cry (in the good way). It is gluten free but we promise it doesn\'t taste healthy. At ALL.';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setGluten();
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // CASHEW CARAMEL BLONDIES
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Cashew Caramal Blondies';
            $strItemDesc    =   'tout ce que vous vouliez d’un cookie en bar, moins le chocolat. Moelleux et plein de caramel, mais ne colle pas à vos dents et seulement un peu gluant.';
        }
        else {
            $strItemTit     =   'Cashew Caramal Blondies';
            $strItemDesc    =   'everything you want from a bar cookie, minus the chocolate. Chewy and caramelly but not stick in your teeth sticky and only a little gooey';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 6);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // PECAN CHOCOLATE CHIP COOKIES
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Pecan Chocolate Chip Cookies';
            $strItemAllerg  =   'contient des <span class="spAllergImp">noix</span>';
        }
        else {
            $strItemTit     =   'Pecan Chocolate Chip Cookies';
            $strItemAllerg  =   'contains <span class="spAllergImp">nuts</span>';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->setNuts();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // OATMEAL CRANBERRY WHITE CHOCOLATE CHIP COOKIES
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Oatmeal Cranberry White Chocolate Chip Cookies';
        }
        else {
            $strItemTit     =   'Oatmeal Cranberry White Chocolate Chip Cookies';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->write();
    
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // CHEESECAKE AND VARIATIONS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Cheesecake and Variations';
        $strSubSectSubTit   =   '1 pièce';
    }
    else {
        $strSubSectTit      =   'Cheesecake and Variations';
        $strSubSectSubTit   =   '1 piece';
    }
    $SubSection = new SubSection($strLang, 'Cheesecake', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // CLASSIC CHEESECAKE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Classic Cheesecake';
            $strItemDesc    =   'cheesecake classique, souvent appelé New York Cheesecake, ce qui ne nous gêne pas. Riche, crémeux et sucré, mais pas trop ! Notre cheesecake a été testé, retesté et mis à jour, modifié et remodifié au moins 19 fois. Cuit dans notre croûte de biscuits Graham aux noix';
        }
        else {
            $strItemTit     =   'Classic Cheesecake';
            $strItemDesc    =   'often called New York cheesecake, which we don\'t mind. Rich, creamy and only a little sweet. Ours was  tested, retested, and updated, tweaked and retweaked at least 19 times. Baked in our nutty graham cracker crust';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // OREO CHEESECAKE
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Oreo Cheesecake';
            $strItemDesc    =   'le même délicieux cheesecake mais avec une croûte d’oreo';
        }
        else {
            $strItemTit     =   'Oreo Cheesecake';
            $strItemDesc    =   'same delicious cheesecake, but with an oreo crust';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // DULCE DE LECHE PECAN CHEESECAKE
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Dulce de Leche Pecan Cheesecake';
            $strItemDesc    =   'garni de dulche de leche et des noix de pécans grillés';
        }
        else {
            $strItemTit     =   'Dulce de Leche Pecan Cheesecake';
            $strItemDesc    =   'topped with dulche de leche and toasted pecans';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setNuts();
        $MenuItem->setOutOfStock();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CARAMEL PECAN CHEESECAKE
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Caramel Pecan Cheesecake';
            $strItemDesc    =   'garni de caramel au beurre salé et de noix de pécans grillées';
        }
        else {
            $strItemTit     =   'Caramel Pecan Cheesecake';
            $strItemDesc    =   'topped with salted butter caramel and toasted pecans';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setNuts();
        $MenuItem->setOutOfStock();
        $MenuItem->write();

    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // ICE CREAM & SORBET
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Ice Cream & Sorbet';
        $strSubSectSubTit   =   '1 boule / 2 boules / 3 boules';
    }
    else {
        $strSubSectTit      =   'Ice Cream & Sorbet';
        $strSubSectSubTit   =   '1 scoop / 2 scoops / 3 scoops';
    }
    $SubSection = new SubSection($strLang, 'IceCream', $strSubSectTit);
    $SubSection->setSubTit($strSubSectSubTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // CHOCOLATE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chocolat';
            $strItemSubTit  =   '(prestige)';
        }
        else {
            $strItemTit     =   'Chocolate';
            $strItemSubTit  =   '(prestige)';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // VANILLA PECAN CARAMEL
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Vanille Pécan Caramel';
        }
        else {
            $strItemTit     =   'Vanilla Pecan Caramel';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COFFEE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Café';
        }
        else {
            $strItemTit     =   'Coffee';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->setBio();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CHOCOLATE SORBET
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sorbet Chocolat';
        }
        else {
            $strItemTit     =   'Chocolate Sorbet';$strItemSubTit  =   null;
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // LEMON SORBET
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sorbet Citron';
        }
        else {
            $strItemTit     =   'Lemon Sorbet';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // RASPBERRY SORBET
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sorbet Framboise';
        }
        else {
            $strItemTit     =   'Raspberry Sorbet';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // STRACCIATELLA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Stracciatella';
        }
        else {
            $strItemTit     =   'Stracciatella';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // HONEY & PINE NUTS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Miel & Pignons de pin';
        }
        else {
            $strItemTit     =   'Honey & Pine Nuts';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COCONUT
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Noix de coco';
        }
        else {
            $strItemTit     =   'Coconut';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // GREEN TEA MATCHA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Matcha thé vert';
        }
        else {
            $strItemTit     =   'Green Tea Matcha';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // ROSE PETAL
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Petales des roses';
        }
        else {
            $strItemTit     =   'Rose Petal';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // FLAVOR OF THE WEEK
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Goût de la Semaine';
            $strItemDesc    =   'demandez à votre serveur !';
        }
        else {
            $strItemTit     =   'Flavor of the Week';
            $strItemDesc    =   'ask your server!';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 3);
        $MenuItem->setPrices(4.5, 5.5);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // TOPPINGS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Garnitures';
    }
    else {
        $strSubSectTit      =   'Toppings';
    }
    $SubSection = new SubSection($strLang, 'IceCream', $strSubSectTit);
    $SubSection->write();

    
    $strItemDesc = null;
    
        ///////////////////////////////////////////////////////
        // BROWNIE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Morceaux des Brownies ou des Blondies';
        }
        else {
            $strItemTit     =   'Brownie or Blondie Bits';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CARAMELIZED PECANS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Noix de pécan caramelisés';
        }
        else {
            $strItemTit     =   'Caramelized Pecans';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // WHIPPED CREAM
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Crème Chantilly';
        }
        else {
            $strItemTit     =   'Whipped Cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CARAMEL SAUCE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sauce au caramel';
        }
        else {
            $strItemTit     =   'Caramel Sauce';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CHOCOLATE SAUCE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sauce au Chocolat';
        }
        else {
            $strItemTit     =   'Chocolate Sauce';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // PRALINE SAUCE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sauce au Praline';
        }
        else {
            $strItemTit     =   'PralineSauce';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 1.5);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // ALCOHOL OF CHOICE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Alcool au choix';
        }
        else {
            $strItemTit     =   'Alcohol of choice';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 2);
        $MenuItem->setQty('1 cl');
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // LES CLASSICS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Les Classiques';
    }
    else {
        $strSubSectTit      =   'Les Classics';
    }
    $SubSection = new SubSection($strLang, 'IC_Classics', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // CHOCOLAT LIEGEOIS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Chocolat Liégeois';
            $strItemDesc    =   '3 boules de glace au chocolat, sauce chocolat & Chantilly';
        }
        else {
            $strItemTit     =   'Chocolat Liégeois';
            $strItemDesc    =   '3 scoops chocolate, chocolate sauce & whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // CAFE LIEGEOIS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Café Liégeois';
            $strItemDesc    =   '3 boules de glace au café, sauce chocolat & Chantilly';
        }
        else {
            $strItemTit     =   'Café Liégeois';
            $strItemDesc    =   '3 scoops coffee, chocolate sauce & whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // DAME BLANCHE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Dame Blanche';
            $strItemDesc    =   '3 boules de glace à la vanille, sauce chocolat & Chantilly';
        }
        else {
            $strItemTit     =   'Dame Blanche';
            $strItemDesc    =   '3 scoops vanilla, chocolate sauce & whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();

        
        ///////////////////////////////////////////////////////
        // BROWNIE FUDGE SUNDAE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Brownie Fudge Sundae';
            $strItemDesc    =   'glace au chocolat + glace à la vanille + glace au noix de pécan et caramel, morceaux des brownies, sauce caramel, Chantilly & noix de pécans caramelisés';
        }
        else {
            $strItemTit     =   'Brownie Fudge Sundae';
            $strItemDesc    =   'chocolate + vanilla + vanilla pecan caramel ice cream, brownie bits, caramel sauce, whipped cream & caramelized pecans';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // AFFOGATO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Affogato';
            $strItemDesc    =   'espresso CHAUD sur une boule de glace à la vanille & Chantilly';
        }
        else {
            $strItemTit     =   'Affogato';
            $strItemDesc    =   'HOT espresso poured over a scoop of vanilla ice cream & Chantilly';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 7);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
    $SubSection->end();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // THE SPECIAL
    //
    //////////////////////////////////////////////////////////////////////////////
/*
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Le Spécial';
    }
    else {
        $strSubSectTit      =   'The Special';
    }
    $SubSection = new SubSection($strLang, 'IC_Special', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // PEACH COBBLER SUNDAE
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Peach Cobbler Sundae';
            $strItemDesc    =   'Tarte aux pêches cuite au four garni de la glace vanille, crème Chantilly & caramel';
        }
        else {
            $strItemTit     =   'Peach Cobbler Sundae';
            $strItemDesc    =   'Skillet baked peach cobbler topped with vanilla ice cream, whipped cream & caramel';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 9);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();

    $SubSection->end();
*/
    //////////////////////////////////////////////////////////////////////////////
    //
    // LES BOOZYS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Les Alcoolos';
    }
    else {
        $strSubSectTit      =   'Les Boozys';
    }
    $SubSection = new SubSection($strLang, 'IC_Boozys', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // BEE'S KNEES BOURBON BLONDIE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Bee\'s Knees Bourbon Blondie';
            $strItemDesc    =   '2 boules glace vanille garnis de bourbon & crème de chantilly innfusé de bourbon au miel avec des morceaux des blondies';
        }
        else {
            $strItemTit     =   'Bee\'s Knees Bourbon Blondie';
            $strItemDesc    =   '2 scoops vanilla ice cream topped with bourbon & honey bourbon infused whipped cream and blondie bits';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // SAILOR JERRY'S CHOCOLATE BLONDIE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Sailor Jerry\'s Chocolate Blondie';
            $strItemDesc    =   '2 boules sorbet au chocolat noir avec du rhum infusé de miel et des morceaux des blondies et des brownies';
        }
        else {
            $strItemTit     =   'Sailor Jerry\'s Chocolate Blondie';
            $strItemDesc    =   '2 scoops dark chocolate sorbet with honey infused rum, blondie and brownie bits';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 13);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
        
        ///////////////////////////////////////////////////////
        // COUPE LIMONCELLO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Tre13e Limoncello';
            $strItemDesc    =   '2 boules sorbet citron garnis de 3 cl limoncello, 2 cl gin Hendricks et servi dans un verre à Champagne';
        }
        else {
            $strItemTit     =   'Coupe Tre13e Limoncello';
            $strItemDesc    =   '2 scoops lemon sorbet topped with 3 cl limoncello, 2 cl Hendricks gin and served in a fancy Champagne glass';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COUPE COLONEL
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Tre13e Colonel';
            $strItemDesc    =   '2 cl limoncello et 2 cl limoncelle versés sur 2 boules sorbet citron et servi dans un verre à Champagne';
        }
        else {
            $strItemTit     =   'Coupe Tre13e Colonel';
            $strItemDesc    =   '2 cl limoncello and 2 cl vodka poured over 2 scoops of lemon sorbet served in a fancy Champagne glass';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COUPE CHAMPAGNE
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Champagne';
            $strItemDesc    =   '2 boules sorbet citron ou framboise garnis de Champagne';
        }
        else {
            $strItemTit     =   'Coupe Champagne';
            $strItemDesc    =   '2 scoops lemon or raspberry sorbet topped with Champagne';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COUPE BROCKMANS
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Brockmans';
            $strItemDesc    =   '2 boules de sorbet framboise garnis du Gin Brockmans avec ses goûts des agrumes et fruits de bois et du Chantilly';
        }
        else {
            $strItemTit     =   'Coupe Brockmans';
            $strItemDesc    =   'Brockmans gin with citrus & wild berry flavors served over 2 scoops raspberry sorbet, with whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COUPE HENDRICK'S
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Hendrick\'s';
            $strItemDesc    =   '2 boules de sorbet pétales de rose garni avec du gin Hendrick\'s infusé de concombre & roses et du Chantilly';
        }
        else {
            $strItemTit     =   'Coupe Hendrick\'s';
            $strItemDesc    =   '2 scoops rose petal ice cream topped with cucumber & rose infused Hendrick’s gin, with whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COUPE AMARENA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Amarena';
            $strItemDesc    =   '3 boules de glace à la vanille, 4 cl liqueur d\'amande, cerises amarena & Chantilly';
        }
        else {
            $strItemTit     =   'Coupe Amarena';
            $strItemDesc    =   '3 scoops of vanilla, 4 cl almond liqueur, amarena cherries & whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // TIPSY AFFOGATO
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Tipsy Affogato';
            $strItemDesc    =   'espresso CHAUT sur une boule de glace à la vanille garni de 4 cl liqueur (Baileys ou Amaretto) et Chantilly';
        }
        else {
            $strItemTit     =   'Tipsy Affogato';
            $strItemDesc    =   'HOT espresso poured over a scoop of vanilla ice cream, topped with 4 cl liqueur (Baileys or Amaretto) & Chantilly';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COUPE COGNAC CARAMEL
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Cognac Caramel';
            $strItemDesc    =   'Glace à la vanille, au miel & pignons de pin, aux noix de pécan et caramel, garni de 4 cl Cognac, Chantilly et des noix de pécan caramelisés';
        }
        else {
            $strItemTit     =   'Coupe Cognac Caramel';
            $strItemDesc    =   'vanilla, honey & pine nuts, & vanilla pecan caramel ice cream, with 4 cl Cognac, whipped cream, & caramelized pecans';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // COUPE COCO MATCHA
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Coupe Coco Matcha';
            $strItemDesc    =   '2 boules de glace au thé vert matcha garni de 4 cl liqueur noix de coco & Chantilly';
        }
        else {
            $strItemTit     =   'Coupe Coco Matcha';
            $strItemDesc    =   '2 scoops of green tea matcha ice cream, 4 cl coconut liqueur, & whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->write();
    
        ///////////////////////////////////////////////////////
        // SOUTHERNER'S PEACHY SUNDAE
        ///////////////////////////////////////////////////////
        if ($strLang == 'fr') {
            $strItemTit     =   'Southerner\'s Peachy Sundae';
            $strItemDesc    =   'Bulleit bourbon infusé de miel sur de la glace à la vanille & miel & pignons de pin, des tranches de pèche fraîche, morceaux des blondies & Chantilly';
        }
        else {
            $strItemTit     =   'Southerner\'s Peachy Sundae';
            $strItemDesc    =   'honey infused Bulleit bourbon poured over vanilla & honey & pine nut ice cream, fresh peach slices, blondie bits, & whipped cream';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setOutOfStock();
        $MenuItem->write();
        
    $SubSection->end();
    
    $Section->end();
    
    $Footer = new Footer();
    $Footer->write();
