<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

    $Tre13e = new Tre13e();
    $Tre13e->readLang();

    $Header = new Header();
    $Header->write();
    
    $Footer = new Footer();
    $Footer->write();
