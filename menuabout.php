<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

    $Tre13e = new Tre13e();
    $Tre13e->readLang();
    $strLang = $Tre13e->getLang();

    $Header = new Header();
    $Header->write();
    
    if ($strLang == 'fr')
        $strSectTit =   'bienvenue y\'all !';
    else
        $strSectTit =   'bienvenue y\'all!';
    
    $Section = new Section($strLang, $strSectTit);
    $Section->write();
    
    echo('<div class="about" id="about">' . PHP_EOL);
        
        echo('<p>' . PHP_EOL);
            echo('Nestled a little ways away from the big fancy tourist spots outside the gates of the Luxembourg gardens, & just around the bend from the back of Napoleon’s favorite theatre, the Odeon, Treize au Jardin is a little oasis of warmth & happiness. Where time slows down, and turning off your phone is encouraged; a gathering place for Parisians, expats, tourists, and anyone in between.' . PHP_EOL);
        echo('</p>' . PHP_EOL);
        
        echo('<p>' . PHP_EOL);
            echo('Thirteen, a Baker\'s Dozen opened its original location in December of 2013 on a dare and a prayer at the back of a courtyard on the rue des Saints Pères. We hoped to bring a bit of down home goodness and old fashioned joy to the chic Saint Germain des Près area of the left bank of Paris.  It kinda worked.' . PHP_EOL);
        echo('</p>' . PHP_EOL);
        
        echo('<p>' . PHP_EOL);
            echo('Sooo. We moved. To a bigger better fancier space with a (non-smoking) terrace, and view of the Luxembourg gardens. Hence the new name; Treize au Jardin. A boozy Tea-room with a range of fully homemade, organic, drinks and food, and service all day long. A home away from home, for everyone.' . PHP_EOL);
        echo('</p>' . PHP_EOL);
        
        echo('<h1>what we do</h1>' . PHP_EOL);
        
        echo('<p>' . PHP_EOL);
            echo('Here everything is homemade and Bio. Our menu changes with the seasons, and with the ingredients our very awesome suppliers can get for us.  We do our best to make choices available for our friends who are vegans (though how y\'all give up butter is beyond us) and vegetarians, and will do our best to respect your allergies.' . PHP_EOL);
        echo('</p>' . PHP_EOL);
        
        echo('<p>' . PHP_EOL);
            echo('We are pretty picky about the meats and animal based ingredients we use- happy cows make better milk which makes better butter.  Happy non stressed animals that don\'t live in cages and eat hormones taste better, and they don\'t mess with our karma as much, which is kind of important.' . PHP_EOL);
        echo('</p>' . PHP_EOL);
        
    echo('</div>' . PHP_EOL);
    
    $Section->end();
    
    $Footer = new Footer();
    $Footer->write();
