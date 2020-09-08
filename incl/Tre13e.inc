<?php
    
    include_once($_SERVER['DOCUMENT_ROOT'] . '/incl/sysfuns.inc');

//////////////////////////////////////////////////////////////////////////////
//
// Tre13e Class
//
//  readLang()
//  setTre13eLang()
//
//////////////////////////////////////////////////////////////////////////////

class Tre13e extends Site
{
    //////////////////////////////////////////////////////////////////////////////
    //
    // readLang()
    //
    // Get language choice from URL L variable
    //
    //	RETURNS
    //      Language choice
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function readLang()
    {
        $strLang = (isset($_GET['L']) ? $_GET['L'] : SITE::DEFLANG);
        $this->setTre13eLang($strLang);
    }
    
    //////////////////////////////////////////////////////////////////////////////
    //
    // setTre13eLang()
    //
    // Set language on all site items
    //
    //////////////////////////////////////////////////////////////////////////////
    
    function setTre13eLang($strLang)
    {
        self::setLang($strLang);
        $this->setSiteSubTit();
    }
}

//////////////////////////////////////////////////////////////////////////////
//
// MenuItem Class
//
//  setAllerg();
//  setBio();
//  setDesc();
//  setGluten();
//  setLactose();
//  setNuts();
//  setPrices();
//  setPQty();
//  setQty();
//  setSubTit();
//  setSesame();
//  setSupp();
//  setVegan();
//  write();
//
//////////////////////////////////////////////////////////////////////////////

    class MenuItem
{
    protected   $nP1        =   null;
    protected   $nP2        =   null;
    protected   $nP3        =   null;
    protected   $nPSupp     =   null;
    protected   $nPDec      =   2;
    
    protected   $strAllerg  =   null;
    protected   $strDesc    =   null;
    protected   $strDesc2   =   null;
    protected   $strID      =   null;
    protected   $strPQty    =   null;   // Price quantity
    protected   $strQty     =   null;
    protected   $strSubTit  =   null;
    protected   $strSupp    =   null;
    protected   $strTit     =   null;
    
    protected   $bBio       =   false;
    protected   $bGluten    =   false;
    protected   $bInStock   =   true;
    protected   $bLactose   =   false;
    protected   $bNuts      =   false;
    protected   $bSesame    =   false;
    protected   $bSupp      =   true;
    protected   $bVegan     =   false;
    protected   $bVeganOpt  =   false;
    
    function __construct($strLang = Site::DEFLANG, $strTit = null, $nP1 = null, $strItemID = null)
    {
        $this->strLang      =   $strLang;
        $this->strTit       =   $strTit;
        $this->nP1          =   $nP1;
        $this->strID        =   $strItemID;
    }
    
    function setAllerg($strAllerg)
    {
        $this->strAllerg = $strAllerg;
    }
    
    function setBio($bBio = true)
    {
        $this->bBio = $bBio;
    }
    
    function setDesc($strDesc)
    {
        $this->strDesc = $strDesc;
    }
    
    function setDesc2($strDesc2)
    {
        $this->strDesc2 = $strDesc2;
    }
    
    function setGluten($bGluten = true)
    {
        $this->bGluten = $bGluten;
    }
    
    function setInStock($bInStock = true)
    {
        $this->bInStock = $bInStock;
    }
    
    function setLactose($bLactose = true)
    {
        $this->bLactose = $bLactose;
    }
    
    function setNuts($bNuts = true)
    {
        $this->bNuts = $bNuts;
    }
    
    function setOutOfStock($bInStock = false)
    {
        $this->bInStock = $bInStock;
    }
    
    function setPrices($nP2, $nP3 = null)
    {
        $this->nP2 = $nP2;
        $this->nP3 = $nP3;
    }
    
    function setPQty($strPQty)
    {
        $this->strPQty = $strPQty;
    }
    
    function setQty($strQty)
    {
        $this->strQty = $strQty;
    }
    function setSubTit($strSubTit)
    {
        $this->strSubTit = $strSubTit;
    }
    
    function setSesame($bSesame = true )
    {
        $this->bSesame = $bSesame;
    }
    
    function setSupp($strSupp, $nPSupp = null, $nPDec = 2, $bSupp = true)
    {
        $this->strSupp = $strSupp;
        $this->nPSupp = $nPSupp;
        $this->nPDec = $nPDec;
        $this->bSupp = $bSupp;
    }
    
    function setVegan($bVegan = true, $bVeganOpt = false)
    {
        $this->bVegan = $bVegan;
        $this->bVeganOpt = $bVeganOpt;
    }
    
    function write()
    {
        if (!$this->bInStock)
            return;
        
        $strAllerg  =   '';
        $strBio     =   ($this->bBio ? ' <span class="spBio">BIO</span>' : '');
        $strVegan   =   ($this->bVegan ? ' vegan' : '');
        $strQty     =   (is_null($this->strQty) ? '' : ' <span class="spQty">' . $this->strQty . '</span>');
        $strAdd     =   ($this->bSupp ? ($this->strLang == 'fr' ? 'ajouter ' : 'add ') : '');
        $strID      =   (is_null($this->strID) ? '' : ' id="' . $this->strID . '" ');
        $strInStock =   ($this->bInStock ? '' : ' oos');
        
        $strNoDesc  =   (is_null($this->strDesc) && is_null($this->strSubTit) ? ' nodesc' : '');

        echo(tabs(3) . '<div class="menuitem' . $strVegan . $strNoDesc . $strInStock . '"' . $strID . '>' . PHP_EOL);
            //////////////////////////////////////////////////////////////////
            //  Title
            //////////////////////////////////////////////////////////////////
            echo(tabs(4). '<div class="itemTit">' . PHP_EOL);
                echo(tabs(5) . $this->strTit . $strBio . $strQty . PHP_EOL);
            echo(tabs(4) . '</div>' . PHP_EOL);
    
            //////////////////////////////////////////////////////////////////
            //  Price
            //////////////////////////////////////////////////////////////////
            echo(tabs(4) . '<div class="itemPrice">' . PHP_EOL);
                echo(tabs(5));
                if (!is_null($this->strPQty))
                    echo($this->strPQty . ' ');
                echo(getIntlNum($this->strLang, $this->nP1));
                if (!is_null($this->nP2))
                    echo(' / ' . getIntlNum($this->strLang , $this->nP2));
                if (!is_null($this->nP3))
                    echo(' / ' . getIntlNum($this->strLang , $this->nP3));
                echo(PHP_EOL);
            echo(tabs(4) . '</div>' . PHP_EOL);
    
            //////////////////////////////////////////////////////////////////
            //  Subtitle
            //////////////////////////////////////////////////////////////////
            if (!is_null($this->strSubTit)) {
                echo(tabs(4) . '<div class="itemSubTit">' . PHP_EOL);
                    echo(tabs(5) . $this->strSubTit . PHP_EOL);
                echo(tabs(4) . '</div>' . PHP_EOL);
            }
    
            //////////////////////////////////////////////////////////////////
            //  Description
            //////////////////////////////////////////////////////////////////
            if (!is_null($this->strDesc)) {
                echo(tabs(4) . '<div class="itemDesc">' . PHP_EOL);
                    echo(tabs(5) . $this->strDesc. PHP_EOL);
                echo(tabs(4) . '</div>' . PHP_EOL);
            }
            if (!is_null($this->strDesc2)) {
                echo(tabs(4) . '<div class="itemDesc2">' . PHP_EOL);
                    echo(tabs(5) . $this->strDesc2. PHP_EOL);
                echo(tabs(4) . '</div>' . PHP_EOL);
            }
    
            //////////////////////////////////////////////////////////////////
            //  Allergies
            //////////////////////////////////////////////////////////////////
            if ($this->bGluten || $this->bLactose || $this->bNuts || $this->bSesame || $this->bVegan || (!is_null($this->strAllerg))) {
                echo(tabs(4) . '<div class="itemAllerg">' . PHP_EOL);
                if ($this->bGluten)
                    $strAllerg .= ($this->strLang == 'fr' ? 'sans gluten' : 'gluten free') . ', ';
                if ($this->bVegan && !$this->bVeganOpt)
                    $strAllerg .= ($this->strLang == 'fr' ? 'végétalienne' : 'vegan') . ', ';
                if ($this->bLactose)
                    $strAllerg .= ($this->strLang == 'fr' ? 'sans lactose' : 'lactose free') . ', ';
                if ($this->bNuts)
                    $strAllerg .= ($this->strLang == 'fr' ? 'contient des <span class="spAllergImp">noix</span>' : 'contains <span class="spAllergImp">nuts</span>') . ', ';
                if ($this->bSesame)
                    $strAllerg .= ($this->strLang == 'fr' ? 'contient du <span class="spAllergImp">sesame</span>' : 'contains <span class="spAllergImp">sesame</span>') . ', ';
                $strAllerg = strRemoveRight($strAllerg, 2);
                
                if (!is_null($this->strAllerg))
                    $strAllerg = $this->strAllerg;
                
                echo(tabs(5) . '(' . $strAllerg . ')' . PHP_EOL);
                echo(tabs(4) . '</div>' . PHP_EOL);
            }
            
            if (!is_null($this->strSupp)) {
                echo(tabs(4) . '<div class="itemSupp">' . PHP_EOL);
                echo(tabs(5) . '(' . $strAdd . $this->strSupp);
                if (!is_null($this->nPSupp))
                    echo(tabs(5) . ' +' . getIntlCurr($this->strLang, $this->nPSupp, $this->nPDec));
                echo(')' . PHP_EOL);
                echo(tabs(4) . '</div>' . PHP_EOL);
            }
        echo(tabs(3) . '</div>' . PHP_EOL . PHP_EOL);
    }
}

//////////////////////////////////////////////////////////////////////////////
//
// Section Class
//
//  end();
//  setSubTit();
//  write();
//
//////////////////////////////////////////////////////////////////////////////

class Section
{
    protected $strLang          =   null;
    protected $strSectionTit    =   null;
    protected $strSectionSubTit =   null;
    
    function __construct($strLang = Site::DEFLANG, $strSectionTit)
    {
        $this->strLang = $strLang;
        $this->strSectionTit = $strSectionTit;
    }
    
    function end()
    {
        echo(tabs(1) . '</section>' . PHP_EOL);
    }
    
    function setSubTit($strSubTit)
    {
        $this->strSectionSubTit = $strSubTit;
    }
    
    function write()
    {
        echo(tabs(1) . '<section class="menusect">' . PHP_EOL);
        echo(tabs(2) . '<div class="menusecttit">' . PHP_EOL);
        echo(tabs(3) . '<h1>' . $this->strSectionTit . '</h1>' . PHP_EOL);
        if (!is_null($this->strSectionSubTit)) {
            echo(tabs(3) . '<h2>' . $this->strSectionSubTit . '</h2>' . PHP_EOL);
        }
        echo(tabs(2) . '</div>' . PHP_EOL);
    }
    
}

//////////////////////////////////////////////////////////////////////////////
//
// SubSection Class
//
//  end();
//  setMsmts();
//  setSupps();
//  setSubTit;
//  write();
//
//////////////////////////////////////////////////////////////////////////////

class SubSection
{
    protected   $strLang            =   null;
    protected   $strSubSectID       =   null;
    protected   $strSubSectTit      =   null;
    protected   $strSubSectSubTit   =   null;
    protected   $arrSupps           =   null;
    protected   $arrMsmts           =   null;
    
    function __construct($strLang = Site::DEFLANG, $strSubSectID, $strSubSectTit)
    {
        $this->strLang = $strLang;
        $this->strSubSectID = $strSubSectID;
        $this->strSubSectTit = $strSubSectTit;
    }
    
    function end()
    {
        // menuitems
        echo(tabs(3) . '</div>' . PHP_EOL);
        
        // menusubsect
        echo(tabs(2) . '</div>' . PHP_EOL . PHP_EOL);
    }
    
    function setMsmts($arrMsmts)
    {
        $this->arrMsmts = $arrMsmts;
    }
    
    function setSupps($arrSupps)
    {
        $this->arrSupps = $arrSupps;
    }
    
    function setSubTit($strSubTit)
    {
        $this->strSubSectSubTit = $strSubTit;
    }
    
    function write()
    {
        echo(tabs(2) . '<div class="menusubsect" id="id' . $this->strSubSectID . '">' . PHP_EOL);
        echo(tabs(3) . '<div class="menusubsecttit">' . PHP_EOL);
        echo(tabs(4) . '<h1>' . $this->strSubSectTit . '</h1>' . PHP_EOL);
        if (!is_null($this->strSubSectSubTit)) {
            echo(tabs(4) . '<h2>' . $this->strSubSectSubTit . '</h2>' . PHP_EOL);
        }
        
        if (!is_null($this->arrSupps)) {
            echo(tabs(4) . '<div class="menusubsectsupps">' . PHP_EOL);
            foreach ($this->arrSupps as $k => $v) {
                echo(tabs(5) . '<div class="subSuppTit">(add ' . $k . '</div>' . PHP_EOL);
                echo(tabs(5) . '<div class="subSuppPrice">+' . getIntlNum($this->strLang, $v) . ')</div>' . PHP_EOL);
            }
            echo(tabs(4) . '</div>' . PHP_EOL);
        }
        if (!is_null($this->arrMsmts)) {
            echo(tabs(4) . '<div class="menusubsectmsmts">' . PHP_EOL);
            foreach ($this->arrMsmts as $k => $v) {
                echo(tabs(5) . '<div class="subMsmtTit">' . $k . '</div>' . PHP_EOL);
                echo(tabs(5) . '<div class="subMsmtPrice">' . getIntlNum($this->strLang, $v) . '</div>' . PHP_EOL);
            }
            echo(tabs(4) . '</div>' . PHP_EOL);
        }
        echo(tabs(3) . '</div>' . PHP_EOL . PHP_EOL);
        
        echo(tabs(3) . '<div class="menuitems">' . PHP_EOL);
    }
}

