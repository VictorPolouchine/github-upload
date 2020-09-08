<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

    $Tre13e = new Tre13e();
    $Tre13e->readLang();
    $strLang = $Tre13e->getLang();

    $Header = new Header();
    $Header->write();
    
    if ($strLang == 'fr')
        $strSectTit =   'A Emporter';
    else
        $strSectTit =   'Takeaway';
    
    $Section = new Section($strLang, $strSectTit);
    $Section->write();
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // TAKEAWAY
    //
    //////////////////////////////////////////////////////////////////////////////
    
    if ($strLang == 'fr') {
        $strSubSectTit = 'Toutes nos salades, tartes, et "assiettes" sont disponibles à emporter.</br></br>' . PHP_EOL .
            'Nous vous conseillons de consommer votre commande dans la demi-heure pour qu\'il soit délicieux.</br></br>' . PHP_EOL .
            'Malheureusement nous ne pouvons pas vous offrir nos plats de petit déjeuner ou de brunch à emporter.</br></br>' . PHP_EOL .
            'Pour toutes vos demandes pour nos services traiteur, envoyez nous un email à</br>' . PHP_EOL .
            '<a href="mailto:admin@treizeaujardin.com" alt="admin@treizeaujardin.com"><button class="btnLinkEmail" class="aBtnLink">admin@treizeaujardin.com</button></a>';
    }
    else {
        $strSubSectTit = 'All of our pies, plates, and salads are available to takeaway.</br></br>' . PHP_EOL .
            'We recommend you eat the dish within the half hour to Insure yummyness.</br></br>' . PHP_EOL .
            'We unfortunately cannot do take-away-breakfast or brunch plates.</br></br>' . PHP_EOL .
            'For catering requests please email us at</br>' . PHP_EOL .
            '<a href="mailto:admin@treizeaujardin.com" alt="admin@treizeaujardin.com" class="aBtnLink"><button class="btnLinkEmail">admin@treizeaujardin.com</button></a>';
    }
    $SubSection = new SubSection($strLang, 'Takeaway', $strSubSectTit);
    $SubSection->write();

    $SubSection->end();

    $Section->end();
    
    $Footer = new Footer();
    $Footer->write();
