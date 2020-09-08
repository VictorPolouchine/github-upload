<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

    $Tre13e = new Tre13e();
    $Tre13e->readLang();
    $strLang = $Tre13e->getLang();

    $Header = new Header();
    $Header->write();
    
    if ($strLang == 'fr')
        $strSectTit =   'Enfants';
    else
        $strSectTit =   'Kids';
    
    $Section = new Section($strLang, $strSectTit);
    $Section->write();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // KIDS
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit      =   'Les Enfants';
    }
    else {
        $strSubSectTit      =   'Kids Menu';
    }
    $SubSection = new SubSection($strLang, 'Kids', $strSubSectTit);
    $SubSection->write();
    
        ///////////////////////////////////////////////////////
        // KIDS MENU
        ///////////////////////////////////////////////////////
        
        if ($strLang == 'fr') {
            $strItemTit     =   'Les Enfants';
            $strItemDesc    =   'petit jus de pomme <span class="spImp">ou</span> limonade<br>' .
                                '+<br>' .
                                'pancake <span class="spImp">ou</span> biscuit <span class="spImp">ou</span> pommes de terre rotis<br>' .
                                '+<br>' .
                                '1 pièce de poulet aux noix de pécans<br>' .
                                '+<br>' .
                                '1 boule de glace <span class="spImp">ou</span> un cookie';
        }
        else {
            $strItemTit     =   'Kids Menu';
            $strItemDesc    =   'small apple juice <span class="spImp">or</span> lemonade<br>' .
                                '+<br>' .
                                'pancake <span class="spIm">or</span> biscuit <span class="spImp">or</span> roasted potatoes<br>' .
                                '+<br>' .
                                '1 piece of pecan crusted chicken<br>' .
                                '+<br>' .
                                '1 scoop of ice cream <span class="spImp">or</span> a cookie';
        }
        $MenuItem = new MenuItem($strLang, $strItemTit, 11);
        $MenuItem->setDesc($strItemDesc);
        $MenuItem->setNuts();
        $MenuItem->write();
        
    $SubSection->end();
    
    $Section->end();
    
    $Footer = new Footer();
    $Footer->write();
