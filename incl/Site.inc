<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

//////////////////////////////////////////////////////////////////////////////
//
// Site Class
//
//  getLang()
//  getPath()
//  getSiteRoot()
//  getSiteSubTit()
//  getVerNum()
//  isDev()
//  isLive()
//  isLocal()
//  isProd()
//  isSecure()
//  setLang()
//  setServerName()
//  setSiteSubTit()
//
//////////////////////////////////////////////////////////////////////////////

class Site
{
    public const    VER_NUM         =   '0.1.7';
    public const    CSS_DIR         =   '/css/';
    public const    FILE_BASE       =   'tre13e';
    public const    IMGS_DIR        =   '/imgs/';
    public const    JS_DIR          =   '/js/';

    // Live site published for SE indexing
    public const    B_PUBLISHED     =   false;
    
    public const    DEFLANG         =   'en';

    // SE Indexing revisit site every X days
    public const    REVISIT         =   14;
    public const    SITE_COPY       =   'Derek Erb Solutions';
    public const    SITE_COPYSITE   =   'https://derekerb.solutions';
    public const    SITE_SERVER     =   'tre13e.com';
    public const    SITE_TITLE      =   'TRE13E';
    public const    SITE_WEBNAME    =   '<span class="spMainTit">tre<span class="spMainTit1">1</span><span class="spMainTit3">3</span>e</span>';

    public static   $bDev           =   false;
    public static   $bLive          =   false;
    public static   $bLocal         =   false;
    public static   $bProd          =   false;
    public static   $bSecure        =   false;
    
    public static   $arrSSLDomains  =   null;

    public static   $strHttp        =   null;
    public static   $strLang        =   null;
    public static   $strPath        =   null;
    public static   $strServerName  =   null;
    public static   $strSiteRoot    =   null;
    public static   $strSiteSubTit  =   null;

    
    function __construct()
    {
        // Set Absolute Path
        self::$strPath = $_SERVER['DOCUMENT_ROOT'];
        
        // Get protocol (http or https)
//        self::$strHttp = (self::isSecure() ? 'https' : 'http');
        
        // Site root
//        self::$strSiteRoot = self::$strHttp . '://' . $_SERVER['HTTP_HOST'];
        self::$strSiteRoot = 'http://' . $_SERVER['HTTP_HOST'];
        
        // Set SSL domain names
//        self::$arrSSLDomains = array('tre13e.restaurant', 'tre13e.paris');
        self::$arrSSLDomains = array('tre13e.restaurant');
        
        // Set Server Name
        $this->setServerName();
        
        // Set site defaults based on server name
        $this->setLang(SITE::DEFLANG);
        switch (self::$strServerName) {
            // Local sites
            case 'localhost':
            case 'tre13e-dev':
                self::$bDev = true;
                self::$bLocal = true;
                break;
        
            // Prod sites
            case 'tre13e-live':
                self::$bProd = true;
                break;
        
            // Live sites
            case 'tre13e.fr':
                $this->setLang('FR');
            case 'tre13e.com':
            case 'tre13e.paris':
                self::$bLive = true;
                break;
        }
    }
    
    public static function getLang()
    {
        return(self::$strLang);
    }
    
    public static function getPath()
    {
        return(self::$strPath);
    }
    
    public static function getSiteRoot()
    {
        return(self::$strSiteRoot);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // getSiteSubTit()
    //
    //  Get Site subtitle
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function getSiteSubTit()
    {
        return(self::$strSiteSubTit);
    }
    
    public static function getVerNum()
    {
        return(self::VER_NUM);
    }
    
    public static function isDev()
    {
        return(self::$bDev);
    }
    
    public static function isLive()
    {
        return(self::$bLive);
    }
    
    public static function isLocal()
    {
        return(self::$bLocal);
    }
    
    public static function isProd()
    {
        return(self::$bProd);
    }

    //////////////////////////////////////////////////////////////////////////////
    //
    // isSecure()
    //
    // Test if running over https or not
    //
    //	RETURNS
    //      True    if running https
    //      False   if NOT running https
    //
    //////////////////////////////////////////////////////////////////////////////
        
    public static function isSecure() {
        $bIsSecure = false;
        
        if (isset($_SERVER['HTTPS'])) {
            if (!empty($_SERVER['HTTPS'] && $_SERVER['HTTPS'] !== 'off')) {
                $bIsSecure = true;
            }
        }
        self::$bSecure = $bIsSecure;
        return($bIsSecure);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // setLang()
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setLang($strLang)
    {
        self::$strLang = strtolower($strLang);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // setServerName()
    //
    //	RETURNS
    //      Server name, all lowercase, stripped of www.
    //
    //////////////////////////////////////////////////////////////////////////////
            
    function setServerName()
    {
        $strServer = strtolower($_SERVER['SERVER_NAME']);
        $strServer = (strStartsWith($strServer, 'www.') ? strRemoveLeft($strServer, 4) : $strServer);
        
        self::$strServerName = $strServer;
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // setSiteSubTit()
    //
    //  Set Site subtitle based on language
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setSiteSubTit()
    {
        if (self::$strLang == 'fr') {
            self::$strSiteSubTit = '13 à la douzaine';
        }
        else {
            self::$strSiteSubTit = '13: A Baker\'s Dozen';
        }
    }
    
}

//////////////////////////////////////////////////////////////////////////////
//
// Footer Class
//
//  write()
//
//////////////////////////////////////////////////////////////////////////////
    
class Footer
{
    protected   $strSite    =   null;
    protected   $strCopy    =   null;
    
    function __construct()
    {
        if (Site::$strLang === 'fr') {
            $this->strSite  =   'Site web';
            $this->strCopy  = 'Tous droits réservés';
        }
        else {
            $this->strSite  =   'Web site';
            $this->strCopy  = 'All Rights Reserved';
        }
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // write()
    //
    // Output site page footer
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function write($bMain = true)
    {
        if (Site::$strLang === 'fr') {
            $strMotto = 'Ici chez Treize, tout est fait maison. Les viandes, les fromages, et la plupart des fruits et légumes sont issus de l’agriculture raisonnée, bio, voire mieux. Ce n’est pas politique - seulement ce qui nous semble juste. Nous pensons que la nourriture doit être préparés par des hommes et des femmes, pas par des machines ; que les animaux méritent de vivre décemment, et les agriculteurs méritent de gagner correctement leur vie. Nous espérons que c’est ce que vous croyez, vous aussi.';
        }
        else {
            $strMotto = 'Everything we serve is made in house. All meats, cheeses and most vegetables are free range & organic, or better. It\'s not political; it\'s just the right thing to do. We believe food should be made by people (not machines);  animals deserve decent lives, and farmers deserve to make a fair living. We hope you think so, too.';
        }
    
        if ($bMain) {
            echo(PHP_EOL);
            echo('</main>' . PHP_EOL);
        }
    
        echo(PHP_EOL);
        
        echo(tabs(1) . '<!-- *** TRE13E MOTTO *** -->' . PHP_EOL);
        echo(tabs(1) . '<aside class="asMotto" id="asMotto">' . PHP_EOL);
            echo(tabs(2) . '<p>' . $strMotto . '</p>' . PHP_EOL);
        echo(tabs(1) . '</aside>' . PHP_EOL . PHP_EOL);
    
        echo(tabs(1) . '<!-- *** FOOTER *** -->' . PHP_EOL);
        echo(tabs(1) . '<footer>' . PHP_EOL);
          echo(tabs(2) . $this->strSite . ' ' . autoCopyright(2020) . ' &copy; <a rel="external noopener" href="' . Site::SITE_COPYSITE . '" target="_blank" title="' . Site::SITE_COPY . '">' . Site::SITE_COPY . '</a>. ' . $this->strCopy . '.<br/>' . PHP_EOL);
            echo(tabs(2) . '<a class="vernum" href="/verhist.php" tabindex="-1">Version ' . getIntlNum(Site::$strLang, Site::VER_NUM) . '</a><br/>' . PHP_EOL);
        echo(tabs(1) . '</footer>' . PHP_EOL . PHP_EOL);
    
        echo('</body>' . PHP_EOL . PHP_EOL);
        echo('</html>' . PHP_EOL);
    }
}

//////////////////////////////////////////////////////////////////////////////
//
// Header Class
//
//  getPgTitle()
//  setAbstract()
//  setCSSFiles()
//  setDescription()
//  setJScriptFiles()
//  setKeywords()    
//  setPgTitle()
//  write()
//  writeHead()
//  writeHeader()
//  writeNav()
//
//////////////////////////////////////////////////////////////////////////////

class Header
{
    protected   $arrCSSFiles        =   null;
    protected   $arrJScriptFiles    =   null;
    protected   $strFileName        =   null;
    protected   $strPgTitle         =   null;
    
    // Site Header Info
    protected   $strDescription     =   null;
    protected   $strAbstract        =   null;
    protected   $strKeywords        =   null;
    
    protected   $strAuthors         =   null;
    protected   $strCopyright       =   null;
    protected   $strDesigner        =   null;
    protected   $strGenerator       =   null;
    protected   $strMade            =   null;
    protected   $strOwner           =   null;
    
    function __construct()
    {
        if (Site::$strLang === 'fr') {
            $this->strDescription = 'Tre13e';
            $this->strAbstract = 'Tre13e';
            $this->strKeywords = 'tre13e, restaurant, bar';
        }
        else {
            $this->strDescription = 'Tre13e';
            $this->strAbstract = 'Tre13e';
            $this->strKeywords = 'tre13e, restaurant, bar';
        }
    
        $this->strAuthors           =   'Derek Erb Solutions';
        $this->strCopyright         =   'Derek Erb Solutions';
        $this->strDesigner          =   'Derek Erb';
        $this->strGenerator         =   'Hand-coded by Derek Erb';
        $this->strOwner             =   'webmaster@' . Site::$strServerName;
        $this->strMade              =   'webmaster@' . Site::$strServerName;

        
        // Get base file name without path or extension
        $this->strFileName = rmvFileExt(basename($_SERVER['PHP_SELF']));
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // forceSecure()
    //
    // Test for, and redirect to, secure version of site if SSL domains
    //
    //////////////////////////////////////////////////////////////////////////////

    function forceSecure()
    {
        if (!Site::isSecure() && Site::isLive()) {
            foreach (Site::$arrSSLDomains as $SSLDomain) {
                if (Site::$strServerName == $SSLDomain) {
                    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                    break;
                }
            }
        }
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // getPgTitle()
    //
    // Prepare title for output
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function getPgTitle()
    {
        $strTitle = Site::SITE_TITLE;
        if (!is_null($this->strPgTitle))
            $strTitle .= ' - ' . $this->strPgTitle;
        
        return($strTitle);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // setAbstract()
    //
    // Set the text for the SEO Abstract
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setAbstract($strAbs)
    {
        $this->strAbstract = $strAbs;
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  setCSSFiles()
    //
    //  $CSSFiles   Either a comma-delimited list of CSS file names or
    //              a pre-declared array of CSS file names
    //
    //  Add additional CSS files to the header
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setCSSFiles($CSSFiles)
    {
        if (is_array($CSSFiles))
            $this->arrCSSFiles = $CSSFiles;
        else
            $this->arrCSSFiles = explode(',', $CSSFiles);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  setDescription()
    //
    //  Set the text for the SEO Description
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setDescription($strDesc)
    {
        $this->strDescription = $strDesc;
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  setJScriptFiles()
    //
    //  $arrJScriptFiles    Either a comma-delimited list of JavaScript file names
    //                      or a pre-declared array of JavaScript file names
    //
    //  Add additional JavaScript files to the header
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setJScriptFiles($JScriptFiles)
    {
        if (is_array($JScriptFiles))
            $this->arrJScriptFiles = $JScriptFiles;
        else
            $this->arrJScriptFiles = explode(',', $JScriptFiles);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  setKeywords()
    //
    //  $strKeys    One string with comma-separated terms
    //  Set the text for the SEO keywords
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setKeywords($strKeys)
    {
        $this->strKeywords = $strKeys;
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  setPgTitle()
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setPgTitle($strPgTitle)
    {
        $this->strPgTitle = $strPgTitle;
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  write()
    //
    //  Output site page header
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function write($bHead = true, $bNav = true, $bMain = true)
    {
        $this->forceSecure();
    
        $this->writeHead();
        if ($bHead)
            $this->writeHeader();

        if ($bNav)
            $this->writeNav();

        if ($bMain) {
            echo('<main>' . PHP_EOL);
        }
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  writeHead()
    //
    //  Output header headings
    //
    //////////////////////////////////////////////////////////////////////////////
    
    protected function writeHead()
    {
        echo('<!DOCTYPE HTML>' . PHP_EOL);
        echo('<html lang="' . Site::$strLang . '">' . PHP_EOL);
        echo('<head>' . PHP_EOL . PHP_EOL);
    
        //////////////////////////////////////////////////////////////////////////////
        //  Google Analytics
        //////////////////////////////////////////////////////////////////////////////
    
        if (Site::isLive()) {
            echo(tabs(1) . '<!-- Global site tag (gtag.js) - Google Analytics -->' . PHP_EOL);
            echo(tabs(1) . '<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169262762-2"></script>' . PHP_EOL);
            echo(tabs(1) . '<script>' . PHP_EOL);
            echo(tabs(2) . 'window.dataLayer = window.dataLayer || [];' . PHP_EOL);
            echo(tabs(2) . 'function gtag(){dataLayer.push(arguments);}' . PHP_EOL);
            echo(tabs(2) . 'gtag(\'js\', new Date());' . PHP_EOL);
            echo(tabs(2) . 'gtag(\'config\', \'UA-169262762-2\');' . PHP_EOL);
            echo(tabs(1) . '</script>' . PHP_EOL . PHP_EOL);
        }
        
        echo(tabs(1) . '<meta charset="UTF-8">' . PHP_EOL);
        echo(tabs(1) . '<meta name="Viewport" content="width=device-width, initial-scale=1.0" />' . PHP_EOL . PHP_EOL);
    
        if (Site::isLive()) {
            echo(tabs(1) . '<meta name="description" content="' . $this->strDescription . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="abstract" content="' . $this->strAbstract . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="keywords" content="' . $this->strKeywords . '" />' . PHP_EOL);
            echo(PHP_EOL);
    
            echo(tabs(1) . '<link rel="author" href="' . Site::$strHttp . '://www.' . Site::$strServerName . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="authors" content="' . $this->strAuthors . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="copyright" content="Copyright © ' . $this->strCopyright . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="designer" content="' . $this->strDesigner . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="generator" content="' . $this->strGenerator . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="owner" content="' . $this->strOwner . '" />' . PHP_EOL);
            echo(tabs(1) . '<link rev="made" href="mailto:' . $this->strMade . '" />' . PHP_EOL);
            echo(PHP_EOL);
            echo(tabs(1) . '<meta name="rating" content="Safe For Kids" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="resource-type" content="document" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="distribution" content="global" />' . PHP_EOL);
            echo(tabs(1) . '<meta name="revisit-after" content="' . Site::REVISIT . ' days" />' . PHP_EOL);
            echo(tabs(1) . '<meta http-equiv="Expires" content="0" />' . PHP_EOL);
            if (Site::B_PUBLISHED)
                echo(tabs(1) . '<meta name="robots" content="all, index, follow" />' . PHP_EOL);
            else
                echo(tabs(1) . '<meta name="robots" content="noindex" />' . PHP_EOL);
            echo(PHP_EOL);
    
            echo(tabs(1) . '<meta property=”og:title” content=”' . $this->strPgTitle . '” />' . PHP_EOL);
            echo(tabs(1) . '<meta property=”og:type” content=”website” />' . PHP_EOL);
            echo(tabs(1) . '<meta property=”og:url” content=”' . Site::$strSiteRoot . $_SERVER['REQUEST_URI'] . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta property="og:site_name" content="' . Site::SITE_TITLE . '" />' . PHP_EOL);
            echo(tabs(1) . '<meta property=”og:image” content=”' . Site::$strSiteRoot . '/favicon-96x96.png” />' . PHP_EOL);

            if (Site::isSecure()) {
                echo(tabs(1) . '<meta property=”og:image:secure_url” content=”' . Site::$strSiteRoot . '/favicon-96x96.png” />' . PHP_EOL);
            }
    
            echo(tabs(1) . '<meta property=”og:image:type” content=”image/png” />' . PHP_EOL);
            echo(tabs(1) . '<meta property=”og:image:width” content=”98” />' . PHP_EOL);
            echo(tabs(1) . '<meta property=”og:image:height” content=”98” />' . PHP_EOL);
            echo(tabs(1) . '<meta property=”og:image:alt” content="Derek Erb” />' . PHP_EOL);
            echo(PHP_EOL);
        }
        else {
            echo(tabs(1) . '<meta name="robots" content="noindex" />' . PHP_EOL);
        }
    
        // Site icon
        if (file_exists(Site::$strPath . "/favicon.ico")) {
            echo(PHP_EOL);
            echo(tabs(1) . '<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />' . PHP_EOL);
            echo(tabs(1) . '<link rel = "icon" type = "image/png" sizes = "96x96" href = "/favicon-96x96.png" />' . PHP_EOL);
            echo(tabs(1) . '<link rel = "icon" type = "image/png" sizes = "16x16" href = "/favicon-16x16.png" />' . PHP_EOL);
            echo(tabs(1) . '<link rel="apple-touch-icon" href="/apple-touch-icon.png">' . PHP_EOL);
            echo(tabs(1) . '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . PHP_EOL . PHP_EOL);
        }
    
        echo(tabs(1) . '<meta name="HandheldFriendly" content="true" />' . PHP_EOL);
        echo(tabs(1) . '<meta name="MobileOptimized" content="320" />' . PHP_EOL);
        echo(PHP_EOL);
    
        // Global Javascript file
        $strJS = Site::JS_DIR . Site::FILE_BASE . '.js';
        if (file_exists($strJS)) {
            echo(tabs(1) . '<script defer src="' . Site::JS_DIR . Site::FILE_BASE . '.js"></script>' . PHP_EOL);
        }
    
        // If external Javascript file exists with same file name include it
        $strJS = Site::$strPath . Site::JS_DIR . $this->strFileName . '.js';
        if (file_exists($strJS)) {
            echo(tabs(1) . '<script defer src="' . Site::JS_DIR . $this->strFileName . '.js"></script>' . PHP_EOL);
        }
    
        // Additional external Javascript files
        if (!is_null($this->arrJScriptFiles)) {
            foreach($jArray as $strJScriptFile) {
                $strJS = Site::JS_DIR . $strJScriptFile;
                if (file_exists(Site::$strPath . $strJS))
                    echo(tabs(1) . '<script src="' . $strJS . '"></script>'. PHP_EOL);
            }
        }
    
        // Global stylesheet
        echo(PHP_EOL);
        echo(tabs(1) . '<link rel="stylesheet" href="' . Site::CSS_DIR . 'normalize.css" />' . PHP_EOL);
        echo(tabs(1) . '<link rel="stylesheet" href="' . Site::CSS_DIR . Site::FILE_BASE . '.css?v=' . Site::VER_NUM . '" />' . PHP_EOL);
    
        // If stylesheet exists with same file name include it
        $strCSSFile = Site::$strPath . Site::CSS_DIR . $this->strFileName . '.css';
        if (file_exists($strCSSFile)) {
            echo(tabs(1) . '<link rel="stylesheet" href="' . Site::CSS_DIR . $this->strFileName . '.css?v=' . Site::VER_NUM . '" />' . PHP_EOL);
        }
    
        // Additional external stylesheets
        if (!is_null($this->arrCSSFiles)) {
            foreach($this->arrCSSFiles as $css_scriptfile) {
                $strCSSFile = Site::CSS_DIR . $css_scriptfile;
                if (file_exists(Site::$strPath . $strCSSFile))
                    echo(tabs(1) . '<link rel="stylesheet" href="' . $strCSSFile . '?v=' . Site::VER_NUM . '" />'. PHP_EOL);
            }
        }
    
        // Page title
        echo(tabs(1) . '<title>' . $this->getPgTitle() . '</title>' . PHP_EOL);
    
        if (Site::isLive()) {
            // *** GOOGLE ANALYTICS ***
            echo(PHP_EOL);
            echo(tabs(1) . "<!-- Start of Google Analytics Code -->" . PHP_EOL);
            echo(tabs(1) . "<script>" . PHP_EOL);
                echo(tabs(2) . "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){" . PHP_EOL);
                echo(tabs(2) . "(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o)," . PHP_EOL);
                echo(tabs(2) . "m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)" . PHP_EOL);
                echo(tabs(2) . "})(window,document,'script','//www.google-analytics.com/analytics.js','ga');" . PHP_EOL . PHP_EOL);
    
                echo(tabs(2) . "ga('create', 'UA-2971630-18', 'auto');" . PHP_EOL);
                echo(tabs(2) . "ga('send', 'pageview');" . PHP_EOL);
            echo(tabs(1) . "</script>" . PHP_EOL);
            echo(tabs(1) . "<!-- End of Google Analytics Code -->" . PHP_EOL . PHP_EOL);
        }

        echo("</head>" . PHP_EOL . PHP_EOL);
    
        echo("<body>" . PHP_EOL . PHP_EOL);
        
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  writeHeader()
    //
    //  Output header
    //
    //////////////////////////////////////////////////////////////////////////////
    
    protected function writeHeader()
    {
        echo(tabs(1) . '<!-- *** HEADER *** -->' . PHP_EOL);
        echo(tabs(1) . '<header>' . PHP_EOL);
            echo(tabs(2) . '<h1><a href="/" class="aHome">' . SITE::SITE_WEBNAME . '</a></h1>' . PHP_EOL);
            echo(tabs(2) . '<h2>' . Site::$strSiteSubTit . '</h2>' . PHP_EOL);
        echo(tabs(1) . '</header>' . PHP_EOL . PHP_EOL);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    //  writeNav()
    //
    //  Output header navigation
    //
    //////////////////////////////////////////////////////////////////////////////
    
    public function writeNav()
    {
        if (Site::$strLang == 'fr') {
            $strFood        =   'A Manger';
            $strDrinks      =   'Thirsteen';
            $strDesserts    =   'Desserts';
            $strAfter4      =   'Après 16h';
            $strTakeaway    =   'A Emporter';
            $strKids        =   'Enfants';
//            $strAbout       =   'A propos de';
        }
        else {
            $strFood        =   'Food';
            $strDrinks      =   'Thirsteen';
            $strDesserts    =   'Desserts';
            $strAfter4      =   'After 4';
            $strTakeaway    =   'Takeaway';
            $strKids        =   'Kids';
//            $strAbout       =   'About';
        }
        // *** NAVigation ***
        echo(tabs(1) . '<!-- *** NAV *** -->' . PHP_EOL);
        echo(tabs(1) . '<nav class="navMain" id="navMain">' . PHP_EOL);
        
            echo(tabs(2) . '<div class="navItem" id="menuFood"><a href="/menufood.php?L='. Site::getLang() . '"><button>' . $strFood . '</button></a></div>' . PHP_EOL);
            echo(tabs(2) . '<div class="navItem" id="menuDrinks"><a href="/menudrinks.php?L='. Site::getLang() . '"><button>' . $strDrinks . '</button></a></div>' . PHP_EOL);
            echo(tabs(2) . '<div class="navItem" id="menuDesserts"><a href="/menudesserts.php?L='. Site::getLang() . '"><button>' . $strDesserts . '</button></a></div>' . PHP_EOL);
            echo(tabs(2) . '<div class="navItem" id="menuAfter4"><a href="/menuafter4.php?L='. Site::getLang() . '"><button>' . $strAfter4 . '</button></a></div>' . PHP_EOL);
            echo(tabs(2) . '<div class="navItem" id="menuTakeaway"><a href="/menutakeaway.php?L='. Site::getLang() . '"><button>' . $strTakeaway . '</button></a></div>' . PHP_EOL);
            echo(tabs(2) . '<div class="navItem" id="menuKids"><a href="/menukids.php?L='. Site::getLang() . '"><button>' . $strKids . '</button></a></div>' . PHP_EOL);
//            echo(tabs(2) . '<div class="navItem" id="menuAbout"><a href="/menuabout.php?L='. Site::getLang() . '"><button>' . $strAbout . '</button></a></div>' . PHP_EOL);
    
        echo(tabs(1) . '</nav>' . PHP_EOL . PHP_EOL);
    }
}
