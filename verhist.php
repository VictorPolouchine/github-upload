<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // Version History Page
    //
    //////////////////////////////////////////////////////////////////////////////
    
    $Header = new Header();
    $Header->setPgTitle('Version History');
    $Header->write();
    
    echo(tabs(1) . '<h1>Version History</h1>' . PHP_EOL);

        echo(tabs(2) . '<table>' . PHP_EOL);
            echo(tabs(3) . '<thead>' . PHP_EOL);
                echo(tabs(4) . '<tr><th>Version<br>Number</th><th>Date</th><th>Version Info</th></tr>' . PHP_EOL);
            echo(tabs(3) . '</thead>' . PHP_EOL);
            echo(tabs(3) . '<tbody>' . PHP_EOL);
    
        VerHist(
            '0.1.7',
            '18/07/2020',
            'Added percentages to international number functions');
        
        VerHist(
            '0.1.6',
            '11/07/2020',
            'Added Takeaway menu details');
        
        VerHist(
            '0.1.5b',
            '28/06/2020',
            'Out of stock items no longer appear at all<br>' .
                    'Fixed strikethrough for mobile devices');
        
        VerHist(
            '0.1.5a',
            '27/06/2020',
            'Strikethrough mobile bug fix');
        
        VerHist(
            '0.1.5',
            '27/06/2020',
            'Added stock management to menu items<br>' .
                    'Added second description possibility');
        
        VerHist(
            '0.1.4',
            '20/06/2020',
            'Added ID possibility to menu item to allow for link to item');
        
        VerHist(
                '0.1.3',
                '14/06/2020',
                'New object-oriented version<br>' .
                    'Item quantities same colour as title<br>' .
                    'Added Google Analytics<br>' .
                    'Menu content changes (including Thirsteen)');
            
            VerHist(
                '0.1.2',
                '11/06/2020',
                'French version of footer motto<br>' .
                    'New French version of desserts');
            
            VerHist(
                '0.1.1',
                '06/06/2020',
                'Modified Quinoa salad');
            
            VerHist(
                '0.1',
                '06/06/2020',
                'After 4 page<br>' .
                    'Release Version');
            
            VerHist(
                '0.0008&beta;',
                '05/06/2020',
                'Home page with logo<br>' .
                        'About Page<br>' .
                        'New body font<br>' .
                        'Coming soon Takeaway page<br>' .
                        'Ice Creams');
            
            VerHist(
                '0.0007&beta;',
                '04/06/2020',
                'Teas filled-in<br>' .
                        'Drinks corrections');
            
            VerHist(
                '0.0006&beta;',
                '03/06/2020',
                'Added item subtitle<br>' .
                'Drinks filled-in');
            
            VerHist(
                '0.0005&beta;',
                '02/06/2020',
                'Added ID to subsections for browsing<br>' .
                        'Changed menu item font to same font as titles<br>' .
                        'Added menu item wide prices option with no wrap<br>' .
                        'Added menu item measurements array<br>' .
                        'Added menu item BIO option');
                
            VerHist(
                '0.0004&beta;',
                '31/05/2020',
                'New front page layout.<br>' .
                        'Added Desserts / Removed About from menu buttons' .
                        'All Food page contents.<br>' .
                        'All Kids page contents.<br>' .
                        'All Desserts page contents.');
            
            VerHist(
                '0.0003&beta;',
                '31/05/2020',
                'Page layout');
            
            VerHist(
                    '0.0002&beta;',
                    '30/05/2020',
                    'Menu structure, pages and sections');
                
            VerHist(
                    '0.0001&beta;',
                    '29/05/2020',
                    'Bare site structure');

            echo(tabs(3). '</tbody>' . PHP_EOL);
        echo(tabs(2) . '</table>' . PHP_EOL);

    echo(tabs(1) . '</div>' . PHP_EOL . PHP_EOL);

    $Footer = new Footer();
    $Footer->write();

function VerHist($strNum, $strDt, $strHist)
{
    echo(tabs(4) . '<tr>' . PHP_EOL);
        echo(tabs(5) . '<td class="vernum">' . $strNum . '</td>' . PHP_EOL);
        echo(tabs(5) . '<td class="dt">' . $strDt . '</td>' . PHP_EOL);
        echo(tabs(5) . '<td>' . $strHist . '</td>' . PHP_EOL);
    echo(tabs(4) . '</tr>' . PHP_EOL);
}
