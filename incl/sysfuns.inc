<?php

// Document path
$ABSPATH = $_SERVER['DOCUMENT_ROOT'];

// Autoload classes
include($ABSPATH . '/autoload.php');

// TAB constant = 4 spaces
define('PHP_TAB', '    ');

// NBSP constant
define('PHP_SP', '&nbsp;');

// EOP (End of Paragraph) constant
define('PHP_EOP' , PHP_EOL . PHP_EOL);

// Default time zone constant
define('DEF_TZONE', 'Europe/London');

// Default date format constant
define('DEF_FMTDT', 'EU');

// Global Site class
if (!isset($Site)) {
    $Site = new Site();
}

//////////////////////////////////////////////////////////////////////////////
//
// Global Session Settings
//
//////////////////////////////////////////////////////////////////////////////

// Cookie settings
// ini_set('session.cookie_domain', '');
// ini_set('session.cookie_path', '/persistent');
// ini_set('session.cookie_lifetime', '0');
    ini_set('session.cookie_httponly', '1');

// Set this to true when running HTTPS
    $bSecCookies = Site::$bSecure ? '1': '0';
    ini_set('session.cookie_secure', $bSecCookies);

//////////////////////////////////////////////////////////////////////////////
//
// SYSTEM COOKIES
//
//  userActive      User has active subscription (T/F)
//  userID          User ID
//  userfullname    User's Full Name
//  loggedin        User logged in (T/F)
//  remem           Remember user name and password
//  remUser         Remembered User Name
//  remPwd          Remembered UNENCRYPTED User Password
//  showpass        Show password on login form
//  subdays         Subscription expiration number of days
//                  POS: days until subscription expires
//                  NEG: days since subscription expired
//
//////////////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////////////////////////////////////
//
// formDBModifs
//
// Add element to array of DB modifications
//
//  &$arrDBModifs   Reference to array storing all modified fields
//  $TblName        Name of database table modified
//  $RowID          ID of row modified
//  $FldName        Name of field modified
//  $OldVal         Previous field value
//  $NewVal         New field value
//  $FldNotes       Free notes on field modified
//
//  Returns
//      $arrDBModifs array by reference
//
//////////////////////////////////////////////////////////////////////////////

function formDBModifs(&$arrDBModifs, $TblName, $RowID, $FldName, $OldVal, $NewVal, $FldNotes = null)
{

    $arrDBModifs = array (
        $TblName,
        $RowID,
        $FldName,
        $OldVal,
        $NewVal,
        $FldNotes);
}

//////////////////////////////////////////////////////////////////////////////
//
//  autoCopyright()
//
//  Return either start year - current year or just current year if no start
//  OR if start = current
//
//  $stYear Starting Year (default NULL)
//
////////////////////////////////////////////////////////////////////////////////

function autoCopyright($stYear = null)
{
    $currYear = date('Y');

    $copyYear = $currYear;
    if (!is_null($stYear)) {
        if ($stYear != $currYear) {
            $copyYear = $stYear . ' - ' . $currYear;
        }
    }

    return($copyYear);
}

//////////////////////////////////////////////////////////////////////////////
//
// clearAllCookies()
//
// DEBUG - Remove all system cookies
//
//
////////////////////////////////////////////////////////////////////////////////

function clearAllCookies()
{
    // Clear all system cookies
    remCookie('userActive');
    remCookie('userID');
    remCookie('userfullname');
    remCookie('loggedin');
    remCookie('remem');
    remCookie('remUser');
    remCookie('remPwd');
    remCookie('showpass');
    remCookie('subdays');
    
    remCookie('APEXYr');
    remCookie('H');
}

//////////////////////////////////////////////////////////////////////////////
//
// cookiesEnabled()
//
// Are cookies enabled?
//
//  RETURNS
//      TRUE    Cookies enabled
//      FALSE   Cookies disabled
//
////////////////////////////////////////////////////////////////////////////////

function cookiesEnabled()
{
    if (count($_COOKIE) > 0)
        return(true);
    else
        return(false);
}

//////////////////////////////////////////////////////////////////////////////
//
// fmtIPv4Add($InIPAdd)
//
// Zero-pad an IPv4 address to properly return XXX.XXX.XXX.XXX
//
//	RETURNS
//      Formatted string of IPv4 address as XXX.XXX.XXX.XXX
//
//////////////////////////////////////////////////////////////////////////////

function fmtIPv4Add($InIPAdd)
{
    // Get 4 IP numbers
    $arrIP = explode('.', $InIPAdd);

    if (is_numeric($arrIP[0])) {
        // Build address with padding
        $IPv4Add = sprintf('%03d.%03d.%03d.%03d', $arrIP[0], $arrIP[1], $arrIP[2], $arrIP[3]);
    }
    else {
        // Localhost or server name
        $IPv4Add = $InIPAdd;
    }

    return($IPv4Add);
}

//////////////////////////////////////////////////////////////////////////////
//
//  getCurrSyms()
//
//  Return currency symbols from currency value
//
//  $str            Currency value string
//  $bWithSpaces    Return symbols with spaces or not
//
//  Returns
//      Currency symbols as a string
//
//  Examples
//      getCurrSyms('$50,000')          :   '$'
//      getCurrSyms('50,000 €')         :   '€'
//      getCurrSyms('50,000 €', true)   :   ' €'
//      getCurrSyms('AU$ 50,000', true) :   'AU$ '
//
//////////////////////////////////////////////////////////////////////////////

function getCurrSyms($str, $bWithSpaces = false)
{

    if (!$bWithSpaces) {
        // Remove numbers, commas and dots
        return (preg_replace('/[,.0-9]/', '', $str));
    }
    else {
        // Remove numbers, commas, dots and spaces
        return (preg_replace('/[ ,.0-9]/', '', $str));
    }
}

//////////////////////////////////////////////////////////////////////////////
//
// getFolder()
//
//  Return folder, removing file name and extension, from full file path
//
//  $strFullFile    Full path of file and folder
//                  EXAMPLE: /dev/testing/example.php
//
//  $strSep         Folder separator
//                  DEFAULT: '/'
//
//  $bTrail         Return with trailing separator
//                  DEFAULT: true
//
//////////////////////////////////////////////////////////////////////////////

function getFolder($strFullFile, $strSep = '/', $bTrail = true)
{
    $strFolder = substr($strFullFile, 0, strrpos($strFullFile, $strSep));
    
    $strFolder .= ($bTrail ? $strSep : '');
    
    return($strFolder);
}

//////////////////////////////////////////////////////////////////////////////
//
// getIntlCurr()
//
// Return currency value (default 2 decimal places) with locale specific separators
//
//	RETURNS
//      numeric value
//
//////////////////////////////////////////////////////////////////////////////
    
    function getIntlCurr($strLang, $nNum, $nDec = 2)
{
    if ($strLang == 'fr') {
        $strThou    = '.';
        $strDec     = ',';
    }
    else {
        $strThou    =   ',';
        $strDec     =   '.';
    }
    
    return(number_format($nNum, $nDec, $strDec, $strThou));
}

//////////////////////////////////////////////////////////////////////////////
//
// getIntlNum()
//
// Return number with locale specific separators
//      $strLang    Language
//      $strNum     Number to be returned
//      $bPer       with (true) / without (false) percentage
//
//	RETURNS
//      string with separators modified
//
//////////////////////////////////////////////////////////////////////////////

function getIntlNum($strLang, $strNum, $bPer = false)
{
    if ($strLang == 'fr') {
        $strNum = str_replace('.', ',', $strNum);
    }
    
    if ($bPer)
        $strNum .= ($strLang == 'fr' ? ' %' : '%');
    
    return($strNum);
}

//////////////////////////////////////////////////////////////////////////////
//
//  hashPassword()
//
//  Return properly hashed password
//
//  $Pass   Password
//
//  Returns
//      Hashed password
//
//////////////////////////////////////////////////////////////////////////////

function hashPassword($Pass)
{
    // Hash password
    return(password_hash($Pass, PASSWORD_DEFAULT));
}

//////////////////////////////////////////////////////////////////////////////
//
// isBlank()
//
// Test if string is blank
//
//  $strBlank   string to be tested
//  $bSp        optional test for a single space
//
//////////////////////////////////////////////////////////////////////////////

function isBlank($strBlank, $bSp = false)
{
    $bBlank = false;

    if (strlen($strBlank) == 0) {
        $bBlank = true;
    }

    elseif ($bSp) {
        if ($strBlank == ' ') {
            $bBlank = true;
        }
    }

    return($bBlank);
}

//////////////////////////////////////////////////////////////////////////////
//
// isBlankOrNull()
//
// Test if string is blank or null
//
//  $strBlank   string to be tested
//  $bSp        optional test for a single space
//
//////////////////////////////////////////////////////////////////////////////

function isBlankOrNull($strBlank, $bSp = false)
{
    $bBlank = false;

    if (is_null($strBlank)) {
        $bBlank = true;
    }
    elseif (strlen($strBlank) == 0) {
        $bBlank = true;
    }

    elseif ($bSp) {
        if ($strBlank == ' ') {
            $bBlank = true;
        }
    }

    return($bBlank);
}

//////////////////////////////////////////////////////////////////////////////
//
// isCookie
//
// Test if cookie is set or not
//
//  $strCookie  cookie name to be tested
//
//////////////////////////////////////////////////////////////////////////////

function isCookie($strCookie)
{
    return(isset($_COOKIE[$strCookie]));
}

//////////////////////////////////////////////////////////////////////////////
//
// isCurrency()
//
// Test if first char of string is a currency symbol
//
//////////////////////////////////////////////////////////////////////////////

function isCurrency($strVal)
{
    switch($strVal[0]) {
        case '£':
            $bCurr = true;
            break;
        case '$':
            $bCurr = true;
            break;
        case '€':
            $bCurr = true;
            break;
        default:
            $bCurr = false;
    }

    return($bCurr);
}

//////////////////////////////////////////////////////////////////////////////
//
//  OddEven
//
//  Is value odd or even?
//
//  $val        Value to be checked
//
//  Returns
//      'O'     Odd
//      'E'     Even
//
//////////////////////////////////////////////////////////////////////////////

function OddEven($val)
{
    return($val %2 == 0 ? 'E' : 'O');
}

//////////////////////////////////////////////////////////////////////////////
//
//  random_str()
//
//  Generate a random string
//
//  $length     Length of string to create
//  $keyspace   String of all possible characters
//
//	RETURNS
//      Random string
//
//////////////////////////////////////////////////////////////////////////////

function random_str($length, $keyspace = null)
{
    if (is_null($keyspace))
        $keyspace = '0123456789abcdefghijklmnopqrstuvwxyz';

    $str = '';
    $max = strlen($keyspace) - 1;

    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return($str);
}

//////////////////////////////////////////////////////////////////////////////
//
//  readDate()
//
//  $DtDate     Date value
//
//  $strDtFmt
//      'US'    American 'm/d/Y' (DEFAULT)
//      'WD'    World 'd/m/Y'
//      'SQ'    SQL 'Y-m-d'
//
//  $yDigits    Number of digits for year (default: 4)
//
//  Returns date in preferred date format
//
//////////////////////////////////////////////////////////////////////////////

function readDate($DtDate, $yDigits = 4, $strDtFmt = 'US')
{
    switch ($strDtFmt) {
        case 'WD':
            $strFmt = 'd/m/Y';
            break;
        case 'SQ':
            $strFmt = 'Y-m-d';
            break;
        default:
            $strFmt = 'm/d/Y';
            break;
    }

    // lowercase Y = 2 digits for year
    if ($yDigits != 4)
        $strFmt = strtolower($strFmt);

    if (is_null($DtDate))
        return('');
    else
        return(date_format(date_create($DtDate), $strFmt));
}

//////////////////////////////////////////////////////////////////////////////
//
//  readDateTime()
//
//  $DtDT       DateTime value
//
//  $strDtFmt
//      'US'    American 'm/d/Y h:i A' (DEFAULT)
//      'WD'    World 'd/m/Y H:i'
//      'SQ'    SQL 'Y-m-d H;i'
//
//  Returns date and time in preferred date format
//
//////////////////////////////////////////////////////////////////////////////

function readDateTime($DtDT, $strDtFmt = 'US')
{
    switch ($strDtFmt) {
        case 'WD':
            $strFmt = 'd/m/Y H:i';
            break;
        case 'SQ':
            $strFmt = 'Y-m-d H:i';
            break;
        default:
            $strFmt = 'm/d/Y h:i A';
            break;
    }

    if (is_null($DtDT))
        return('');
    else
        return(date_format(date_create($DtDT), $strFmt));
}

//////////////////////////////////////////////////////////////////////////////
//
//  readFullDate()
//
//  $DtDate     Date value
//
//  $strDtFmt
//      'US'    American 'F jS, Y' (DEFAULT)
//      'WD'    World 'jS F, Y'
//
//  $bDay       Include day of the week or not
//
//  Returns full date in preferred date format
//
//////////////////////////////////////////////////////////////////////////////

function readFullDate($DtDate, $strDtFmt = 'US', $bDay = false)
{

    // Day of week
    if ($bDay)
        $strFmt = 'l, ';
    else
        $strFmt = '';

    switch ($strDtFmt) {
        case 'WD':
            $strFmt .= 'jS F, Y';
            break;
        default:
            $strFmt .= 'F jS, Y';
            break;
    }

    if (is_null($DtDate))
        return('');
    else
        return(date_format(date_create($DtDate), $strFmt));
}

//////////////////////////////////////////////////////////////////////////////
//
//  readFullDateTime()
//
//  $DtDT       DateTime value
//
//  $strDtFmt
//      'US'    American 'm/d/Y h:i A' (DEFAULT)
//      'WD'    World 'd/m/Y H:i'
//
//
//  $bDay       Include day of the week or not
//
//  Returns full date and time in preferred date format
//
//////////////////////////////////////////////////////////////////////////////

function readFullDateTime($DtDT, $strDtFmt = 'US', $bDay = false)
{
    // Day of week
    if ($bDay)
        $strFmt = 'l, ';
    else
        $strFmt = '';

    switch ($strDtFmt) {
        case 'WD':
            $strFmt .= 'jS F, Y H:i';
            break;
        default:
            $strFmt .= 'F jS, Y g:i a';
            break;
    }

    if (is_null($DtDT))
        return('');
    else
        return(date_format(date_create($DtDT), $strFmt));
}

//////////////////////////////////////////////////////////////////////////////
//
//  readTime()
//
//  $dtTime     DateTime value
//
//  $strDtFmt
//      'US'    American 'h:i A' (DEFAULT)
//      'WD'    World 'H:i'
//      'SQ'    SQL 'H:i'
//
//  Returns time in preferred date format
//
//////////////////////////////////////////////////////////////////////////////

function readTime($DtTime, $strDtFmt = 'US')
{
    switch ($strDtFmt) {
        case 'WD':
            $strFmt = 'H:i';
            break;
        case 'SQ':
            $strFmt = 'H:i';
            break;
        default:
            $strFmt = 'h:i A';
            break;
    }

    if (is_null($DtTime))
        return('');
    else
        return(date_format(date_create($DtTime), $strFmt));
}

//////////////////////////////////////////////////////////////////////////////
//
// redirect()
//
// Redirect to web address
//
//  strURL  Web address to redirect to
//          NULL = root
//////////////////////////////////////////////////////////////////////////////

function redirect($strURL = null)
{
    if ($strURL == null)
        $strURL = "/";

    header('HTTP/1.1 302 Redirect');
    header('Location: ' . $strURL);

}

//////////////////////////////////////////////////////////////////////////////
//
// remCookie()
//
// Fully remove a cookie
//
//  strCookie   Cookie to be removed
//
////////////////////////////////////////////////////////////////////////////////

function remCookie($strCookie)
{
    return(setcookie($strCookie, null, time() - 3600, '/'));
//    return(unset($_COOKIE[$strCookie]));
}

//////////////////////////////////////////////////////////////////////////////
//
// retIPv4Add($ZeroIPAdd)
//
// Get non-zero padded IPv4 address from zero-padded IPv4 address
//
//  $ZeroIPAdd = IPv4 address as XXX.XXX.XXX.XXX
//
//	RETURNS
//      Formatted string of IPv4 address
//
//////////////////////////////////////////////////////////////////////////////

function retIPv4Add($ZeroIPAdd)
{

    // Break up IPv4 zero-padded in to an array of 4 integers
    $arrIP = array( substr($ZeroIPAdd, 0, 3),
        substr($ZeroIPAdd, 4, 3),
        substr($ZeroIPAdd, 8, 3),
        substr($ZeroIPAdd, 12, 3));

    $addIP = '';
    foreach($arrIP as $val) {
        $val = intval($val, 10);
        $addIP .= $val . '.';
    }
    $addIP = substr($addIP, 0, strlen($addIP)-1);

    return($addIP);
}

//////////////////////////////////////////////////////////////////////////////
//
// rmvFileExt($strFileName)
//
// Remove the file name extension
//
//  strFileName Full file name with extension to be removed
//
//////////////////////////////////////////////////////////////////////////////

function rmvFileExt($strFileName)
{
    return substr($strFileName, 0, strrpos($strFileName, '.'));
}

//////////////////////////////////////////////////////////////////////////////
//
// roundDown($rnd, $Downto)
//
// Round Down to the nearest $Downto integer
//
//  $rnd    Number to be rounded
//  $Downto   Nearest integer to be rounded Down to
//
//////////////////////////////////////////////////////////////////////////////

function roundDown($rnd, $Downto)
{
    return floor($rnd / $Downto) * $Downto;
}

//////////////////////////////////////////////////////////////////////////////
//
// roundUp($rnd, $upto)
//
// Round up to the nearest $upto integer
//
//  $rnd    Number to be rounded
//  $upto   Nearest integer to be rounded up to
//
//////////////////////////////////////////////////////////////////////////////

function roundUp($rnd, $upto) 
{
    return ceil($rnd / $upto) * $upto;
}

//////////////////////////////////////////////////////////////////////////////
//
// showAllCookies()
//
// DEBUG - Show all cookies and their values
//
//
////////////////////////////////////////////////////////////////////////////////

function showAllCookies()
{
    // Show all system cookies
    showCookie('userActive');
    showCookie('userID');
    showCookie('userfullname');
    showCookie('loggedin');
    showCookie('remem');
    showCookie('remUser');
    showCookie('remPwd');
    showCookie('showpass');
    showCookie('subdays');
}

//////////////////////////////////////////////////////////////////////////////
//
// showBytesSize()
//
// Show bytes converted to pb, tb, gb, mb, kb, b
//
//  $bvytes     Full value in bytes
//  $decimals   Number of decimal places (w/ default)
//
//  THANKS TO rommel@rommelsantor.com
//
////////////////////////////////////////////////////////////////////////////////

function showBytesSize($bytes, $decimals = 2)
{
    $sz = 'bkmgtp';

    $factor = floor((strlen($bytes) - 1) / 3);
    return(sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . ' ' . @$sz[$factor] . 'b');
}

//////////////////////////////////////////////////////////////////////////////
//
// showCookie()
//
// DEBUG - Show individual cookie value
//
//  $strCookie  Cookie to be shown
//
////////////////////////////////////////////////////////////////////////////////

function showCookie($strCookie)
{
    echo($strCookie . ' : ');
    if (isCookie($strCookie))
        echo($_COOKIE[$strCookie]);
    else
        echo('NOT SET');
    echo('<br>' . PHP_EOL);
}

//////////////////////////////////////////////////////////////////////////////
//
// strContains()
//
//  String contains another string
//
//  $haystack   String to search
//  $needle     String to search for
//
//////////////////////////////////////////////////////////////////////////////

function strContains($haystack, $needle)
{
    if (strpos($haystack, $needle) !== false) 
        $bRes = true;
    else
        $bRes = false;
        
    return($bRes);    
}

//////////////////////////////////////////////////////////////////////////////
//
// strEndsWith()
//
//  Test is string end with text
//
//  $haystack   String to search
//  $needle     String to search for
//
//////////////////////////////////////////////////////////////////////////////

function strEndsWith($haystack, $needle)
{
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}

//////////////////////////////////////////////////////////////////////////////
//
// strRemoveLeft()
//
//  Remove $i number of characters from the left of $str
//
//  Returns string with characters removed
//
//  $str    String to remove characters from
//  $i      Number of characters to remove
//
//////////////////////////////////////////////////////////////////////////////

function strRemoveLeft($str, $i)
{

    $l = strlen($str);

    if ($i > $l)
        return(false);

    return(substr($str, $i, $l-$i));
}

//////////////////////////////////////////////////////////////////////////////
//
// strRemoveRight()
//
//  Remove $i number of characters from the right of $str
//
//  Returns string with characters removed
//
//  $str    String to remove characters from
//  $i      Number of characters to remove
//
//
//////////////////////////////////////////////////////////////////////////////

function strRemoveRight($str, $i)
{

    $l = strlen($str);

    if ($i > $l)
        return(false);

    return(substr($str, 0, $l-$i));
}

//////////////////////////////////////////////////////////////////////////////
//
// strRepHTML
//
//  Replaces characters with HTML character entities
//
//  Returns string with characters replaced
//
//  $str    String to replace characters in
//
//////////////////////////////////////////////////////////////////////////////
    
    function strRepHTML($str)
    {
        
        $str = str_replace('<', '&lt;', $str);
        $str = str_replace('>', '&gt;', $str);
        
        return($str);
    }

//////////////////////////////////////////////////////////////////////////////
//
// strStartsWith()
//
//  Test is string starts with text
//
//  $haystack   String to search
//  $needle     String to search for
//
//////////////////////////////////////////////////////////////////////////////

function strStartsWith($haystack, $needle)
{
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, - strlen($haystack)) !== FALSE;
}

//////////////////////////////////////////////////////////////////////////////
//
// tabs($rep)
//
//  Repeat PHP_TAB
//
//  $rep        Number of repetitions
//
//////////////////////////////////////////////////////////////////////////////

function tabs($rep)
{
    for ($i = 0; $i < $rep; $i++) {
        echo(PHP_TAB);
    }
}

//////////////////////////////////////////////////////////////////////////////
//
//  DEBUG
//
//  fullErrors()
//
//  Display verbose error information
//
////////////////////////////////////////////////////////////////////////////////

function fullErrors()
{
    ini_set('display_errors', 1);
    ini_set('html_errors', 0);
    error_reporting(-1);
}

