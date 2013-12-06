<?php

if(belowIE(8))
	browser_alert();


function browser_alert() {
	wp_die('<p>Please update your browser.</p>
			<p>请更新您的浏览器到较新的版本，点击下列列表中的浏览器，进入对应下载页面。</p>
			<ul>
				<li><a target="_blank" href="http://browser.qq.com/index_m.html">QQ浏览器（这个网页可酷，一般浏览器体会不了其奥妙哟）</a></li>
				<li><a target="_blank" href="http://se.360.cn/">360安全浏览器</a></li>
				<li>或者其它浏览器，看您的喜好。</li>
			</ul>
			<p>如果你仍然执着于IE，那么请下载一个IE 9版本（不支持xp系统）吧。IE8以下正在渐渐被淘汰。</p>
			<ul>
				<li><a target="_blank" href="http://soft.hao123.com/soft/appid/890.html">IE9(windows7 32位)</a></li>
				<li><a target="_blank" href="http://soft.hao123.com/soft/appid/895.html">IE9(windows7 64位)</a></li>
				<li><a target="_blank" href="http://www.baidu.com/s?ie=UTF-8&wd=ie10">IE10</a></li>
		    </ul>
			<p>为得到最佳体验效果，360浏览器下请以<span style="color:red">极速模式</span>访问，搜狗浏览器下以<span style="color:red">高速模式</span>访问。在地址栏右侧有模式切换的按钮，点击即可切换浏览模式。</p>
			<p>我们采用较新的技术，希望尊敬的用户您也能够自觉跟上时代的步伐哦！</p>
			');
}

// ----------------------------------------
// ! browser check
// ----------------------------------------
function belowIE($version){
	$cur_browser = new Browser();
	$browser_name = $cur_browser->getBrowser();
	$browser_version = $cur_browser->getVersion();

	if($browser_name=='Internet Explorer' && $browser_version<$version)
		return true;
	if($browser_name=='Mozilla' && $browser_version<6)
		return true;
}

// ----------------------------------------
// ! isMobile
// ----------------------------------------
function isMobile() {
	$cur_browser = new Browser();
	$isMobile = $cur_browser->isMobile();
	return $isMobile;
}


class Browser {
    private $_agent = '';
    private $_browser_name = '';
    private $_version = '';
    private $_platform = '';
    private $_os = '';
    private $_is_aol = false;
    private $_is_mobile = false;
    private $_is_robot = false;
    private $_aol_version = '';

    const BROWSER_UNKNOWN = 'unknown';
    const VERSION_UNKNOWN = 'unknown';

    const BROWSER_OPERA = 'Opera';
    const BROWSER_OPERA_MINI = 'Opera Mini';
    const BROWSER_WEBTV = 'WebTV';
    const BROWSER_IE = 'Internet Explorer';
    const BROWSER_POCKET_IE = 'Pocket Internet Explorer';
    const BROWSER_KONQUEROR = 'Konqueror';
    const BROWSER_ICAB = 'iCab';
    const BROWSER_OMNIWEB = 'OmniWeb';
    const BROWSER_FIREBIRD = 'Firebird';
    const BROWSER_FIREFOX = 'Firefox';
    const BROWSER_ICEWEASEL = 'Iceweasel';
    const BROWSER_SHIRETOKO = 'Shiretoko';
    const BROWSER_MOZILLA = 'Mozilla';
    const BROWSER_AMAYA = 'Amaya';
    const BROWSER_LYNX = 'Lynx';
    const BROWSER_SAFARI = 'Safari';
    const BROWSER_IPHONE = 'iPhone';
    const BROWSER_IPOD = 'iPod';
    const BROWSER_IPAD = 'iPad';
    const BROWSER_CHROME = 'Chrome';
    const BROWSER_ANDROID = 'Android';
    const BROWSER_GOOGLEBOT = 'GoogleBot';
    const BROWSER_SLURP = 'Yahoo! Slurp';
    const BROWSER_W3CVALIDATOR = 'W3C Validator';
    const BROWSER_BLACKBERRY = 'BlackBerry';
    const BROWSER_ICECAT = 'IceCat';
    const BROWSER_NOKIA_S60 = 'Nokia S60 OSS Browser';
    const BROWSER_NOKIA = 'Nokia Browser';
    const BROWSER_MSN = 'MSN Browser';
    const BROWSER_MSNBOT = 'MSN Bot';

    const BROWSER_NETSCAPE_NAVIGATOR = 'Netscape Navigator';
    const BROWSER_GALEON = 'Galeon';
    const BROWSER_NETPOSITIVE = 'NetPositive';
    const BROWSER_PHOENIX = 'Phoenix';

    const PLATFORM_UNKNOWN = 'unknown';
    const PLATFORM_WINDOWS = 'Windows';
    const PLATFORM_WINDOWS_CE = 'Windows CE';
    const PLATFORM_APPLE = 'Apple';
    const PLATFORM_LINUX = 'Linux';
    const PLATFORM_OS2 = 'OS/2';
    const PLATFORM_BEOS = 'BeOS';
    const PLATFORM_IPHONE = 'iPhone';
    const PLATFORM_IPOD = 'iPod';
    const PLATFORM_IPAD = 'iPad';
    const PLATFORM_BLACKBERRY = 'BlackBerry';
    const PLATFORM_NOKIA = 'Nokia';
    const PLATFORM_FREEBSD = 'FreeBSD';
    const PLATFORM_OPENBSD = 'OpenBSD';
    const PLATFORM_NETBSD = 'NetBSD';
    const PLATFORM_SUNOS = 'SunOS';
    const PLATFORM_OPENSOLARIS = 'OpenSolaris';
    const PLATFORM_ANDROID = 'Android';

    const OPERATING_SYSTEM_UNKNOWN = 'unknown';

    public function Browser($useragent="") {
        $this->reset();
        if( $useragent != "" ) {
            $this->setUserAgent($useragent);
        }
        else {
            $this->determine();
        }
    }

    /**
    * Reset all properties
    */
    public function reset() {
        $this->_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";
        $this->_browser_name = self::BROWSER_UNKNOWN;
        $this->_version = self::VERSION_UNKNOWN;
        $this->_platform = self::PLATFORM_UNKNOWN;
        $this->_os = self::OPERATING_SYSTEM_UNKNOWN;
        $this->_is_aol = false;
        $this->_is_mobile = false;
        $this->_is_robot = false;
        $this->_aol_version = self::VERSION_UNKNOWN;
    }

    /**
    * Check to see if the specific browser is valid
    * @param string $browserName
    * @return boolean
    */
    function isBrowser($browserName) { return( 0 == strcasecmp($this->_browser_name, trim($browserName))); }

    /**
    * The name of the browser.  All return types are from the class contants
    * @return string Name of the browser
    */
    public function getBrowser() { return $this->_browser_name; }
    /**
    * Set the name of the browser
    * @param $browser The name of the Browser
    */
    public function setBrowser($browser) { return $this->_browser_name = $browser; }
    /**
    * The name of the platform.  All return types are from the class contants
    * @return string Name of the browser
    */
    public function getPlatform() { return $this->_platform; }
    /**
    * Set the name of the platform
    * @param $platform The name of the Platform
    */
    public function setPlatform($platform) { return $this->_platform = $platform; }
    /**
    * The version of the browser.
    * @return string Version of the browser (will only contain alpha-numeric characters and a period)
    */
    public function getVersion() { return $this->_version; }
    /**
    * Set the version of the browser
    * @param $version The version of the Browser
    */
    public function setVersion($version) { $this->_version = preg_replace('/[^0-9,.,a-z,A-Z-]/','',$version); }
    /**
    * The version of AOL.
    * @return string Version of AOL (will only contain alpha-numeric characters and a period)
    */
    public function getAolVersion() { return $this->_aol_version; }
    /**
    * Set the version of AOL
    * @param $version The version of AOL
    */
    public function setAolVersion($version) { $this->_aol_version = preg_replace('/[^0-9,.,a-z,A-Z]/','',$version); }
    /**
    * Is the browser from AOL?
    * @return boolean
    */
    public function isAol() { return $this->_is_aol; }
    /**
    * Is the browser from a mobile device?
    * @return boolean
    */
    public function isMobile() { return $this->_is_mobile; }
    /**
    * Is the browser from a robot (ex Slurp,GoogleBot)?
    * @return boolean
    */
    public function isRobot() { return $this->_is_robot; }
    /**
    * Set the browser to be from AOL
    * @param $isAol
    */
    public function setAol($isAol) { $this->_is_aol = $isAol; }
    /**
     * Set the Browser to be mobile
     * @param boolean
     */
    protected function setMobile($value=true) { $this->_is_mobile = $value; }
    /**
     * Set the Browser to be a robot
     * @param boolean
     */
    protected function setRobot($value=true) { $this->_is_robot = $value; }
    /**
    * Get the user agent value in use to determine the browser
    * @return string The user agent from the HTTP header
    */
    public function getUserAgent() { return $this->_agent; }
    /**
    * Set the user agent value (the construction will use the HTTP header value - this will overwrite it)
    * @param $agent_string The value for the User Agent
    */
    public function setUserAgent($agent_string) {
        $this->reset();
        $this->_agent = $agent_string;
        $this->determine();
    }
    /**
     * Used to determine if the browser is actually "chromeframe"
     * @return boolean
     */
    public function isChromeFrame() {
        return( strpos($this->_agent,"chromeframe") !== false );
    }
    /**
    * Returns a formatted string with a summary of the details of the browser.
    * @return string formatted string with a summary of the browser
    */
    public function __toString() {
        return "<strong>Browser Name:</strong>{$this->getBrowser()}<br/>\n" .
               "<strong>Browser Version:</strong>{$this->getVersion()}<br/>\n" .
               "<strong>Browser User Agent String:</strong>{$this->getUserAgent()}<br/>\n" .
               "<strong>Platform:</strong>{$this->getPlatform()}<br/>";
    }
    /**
     * Protected routine to calculate and determine what the browser is in use (including platform)
     */
    protected function determine() {
        $this->checkPlatform();
        $this->checkBrowsers();
        $this->checkForAol();
    }
    /**
     * Protected routine to determine the browser type
     * @return boolean
     */
     protected function checkBrowsers() {
        return (
            $this->checkBrowserWebTv() ||
            $this->checkBrowserInternetExplorer() ||
            $this->checkBrowserOpera() ||
            $this->checkBrowserGaleon() ||
            $this->checkBrowserNetscapeNavigator9Plus() ||
            $this->checkBrowserFirefox() ||
            $this->checkBrowserChrome() ||
            $this->checkBrowserOmniWeb() ||

            // common mobile
            $this->checkBrowserAndroid() ||
            $this->checkBrowseriPad() ||
            $this->checkBrowseriPod() ||
            $this->checkBrowseriPhone() ||
            $this->checkBrowserBlackBerry() ||
            $this->checkBrowserNokia() ||

            // common bots
            $this->checkBrowserGoogleBot() ||
            $this->checkBrowserMSNBot() ||
            $this->checkBrowserSlurp() ||

            // WebKit base check (post mobile and others)
            $this->checkBrowserSafari() ||

            // everyone else
            $this->checkBrowserNetPositive() ||
            $this->checkBrowserFirebird() ||
            $this->checkBrowserKonqueror() ||
            $this->checkBrowserIcab() ||
            $this->checkBrowserPhoenix() ||
            $this->checkBrowserAmaya() ||
            $this->checkBrowserLynx() ||
            $this->checkBrowserShiretoko() ||
            $this->checkBrowserIceCat() ||
            $this->checkBrowserW3CValidator() ||
            $this->checkBrowserMozilla() /* Mozilla is such an open standard that you must check it last */
        );
    }

    protected function checkBrowserBlackBerry() {
        if( stripos($this->_agent,'blackberry') !== false ) {
            $aresult = explode("/",stristr($this->_agent,"BlackBerry"));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->_browser_name = self::BROWSER_BLACKBERRY;
            $this->setMobile(true);
            return true;
        }
        return false;
    }

    protected function checkForAol() {
        $this->setAol(false);
        $this->setAolVersion(self::VERSION_UNKNOWN);

        if( stripos($this->_agent,'aol') !== false ) {
            $aversion = explode(' ',stristr($this->_agent, 'AOL'));
            $this->setAol(true);
            $this->setAolVersion(preg_replace('/[^0-9\.a-z]/i', '', $aversion[1]));
            return true;
        }
        return false;
    }


    protected function checkBrowserGoogleBot() {
        if( stripos($this->_agent,'googlebot') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'googlebot'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion(str_replace(';','',$aversion[0]));
            $this->_browser_name = self::BROWSER_GOOGLEBOT;
            $this->setRobot(true);
            return true;
        }
        return false;
    }

    protected function checkBrowserMSNBot() {
        if( stripos($this->_agent,"msnbot") !== false ) {
            $aresult = explode("/",stristr($this->_agent,"msnbot"));
            $aversion = explode(" ",$aresult[1]);
            $this->setVersion(str_replace(";","",$aversion[0]));
            $this->_browser_name = self::BROWSER_MSNBOT;
            $this->setRobot(true);
            return true;
        }
        return false;
    }

    protected function checkBrowserW3CValidator() {
        if( stripos($this->_agent,'W3C-checklink') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'W3C-checklink'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->_browser_name = self::BROWSER_W3CVALIDATOR;
            return true;
        }
        else if( stripos($this->_agent,'W3C_Validator') !== false ) {
            // Some of the Validator versions do not delineate w/ a slash - add it back in
            $ua = str_replace("W3C_Validator ", "W3C_Validator/", $this->_agent);
            $aresult = explode('/',stristr($ua,'W3C_Validator'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->_browser_name = self::BROWSER_W3CVALIDATOR;
            return true;
        }
        return false;
    }

    protected function checkBrowserSlurp() {
        if( stripos($this->_agent,'slurp') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Slurp'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->_browser_name = self::BROWSER_SLURP;
            $this->setRobot(true);
            $this->setMobile(false);
            return true;
        }
        return false;
    }

    protected function checkBrowserInternetExplorer() {

        // Test for v1 - v1.5 IE
        if( stripos($this->_agent,'microsoft internet explorer') !== false ) {
            $this->setBrowser(self::BROWSER_IE);
            $this->setVersion('1.0');
            $aresult = stristr($this->_agent, '/');
            if( preg_match('/308|425|426|474|0b1/i', $aresult) ) {
                $this->setVersion('1.5');
            }
            return true;
        }
        // Test for versions > 1.5
        else if( stripos($this->_agent,'msie') !== false && stripos($this->_agent,'opera') === false ) {
            // See if the browser is the odd MSN Explorer
            if( stripos($this->_agent,'msnb') !== false ) {
                $aresult = explode(' ',stristr(str_replace(';','; ',$this->_agent),'MSN'));
                $this->setBrowser( self::BROWSER_MSN );
                $this->setVersion(str_replace(array('(',')',';'),'',$aresult[1]));
                return true;
            }
            $aresult = explode(' ',stristr(str_replace(';','; ',$this->_agent),'msie'));
            $this->setBrowser( self::BROWSER_IE );
            $this->setVersion(str_replace(array('(',')',';'),'',$aresult[1]));
            return true;
        }
        // Test for Pocket IE
        else if( stripos($this->_agent,'mspie') !== false || stripos($this->_agent,'pocket') !== false ) {
            $aresult = explode(' ',stristr($this->_agent,'mspie'));
            $this->setPlatform( self::PLATFORM_WINDOWS_CE );
            $this->setBrowser( self::BROWSER_POCKET_IE );
            $this->setMobile(true);

            if( stripos($this->_agent,'mspie') !== false ) {
                $this->setVersion($aresult[1]);
            }
            else {
                $aversion = explode('/',$this->_agent);
                $this->setVersion($aversion[1]);
            }
            return true;
        }
        return false;
    }

    protected function checkBrowserOpera() {
        if( stripos($this->_agent,'opera mini') !== false ) {
            $resultant = stristr($this->_agent, 'opera mini');
            if( preg_match('/\//',$resultant) ) {
                $aresult = explode('/',$resultant);
                $aversion = explode(' ',$aresult[1]);
                $this->setVersion($aversion[0]);
            }
            else {
                $aversion = explode(' ',stristr($resultant,'opera mini'));
                $this->setVersion($aversion[1]);
            }
            $this->_browser_name = self::BROWSER_OPERA_MINI;
            $this->setMobile(true);
            return true;
        }
        else if( stripos($this->_agent,'opera') !== false ) {
            $resultant = stristr($this->_agent, 'opera');
            if( preg_match('/Version\/(10.*)$/',$resultant,$matches) ) {
                $this->setVersion($matches[1]);
            }
            else if( preg_match('/\//',$resultant) ) {
                $aresult = explode('/',str_replace("("," ",$resultant));
                $aversion = explode(' ',$aresult[1]);
                $this->setVersion($aversion[0]);
            }
            else {
                $aversion = explode(' ',stristr($resultant,'opera'));
                $this->setVersion(isset($aversion[1])?$aversion[1]:"");
            }
            $this->_browser_name = self::BROWSER_OPERA;
            return true;
        }
        return false;
    }


    protected function checkBrowserChrome() {
        if( stripos($this->_agent,'Chrome') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Chrome'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->setBrowser(self::BROWSER_CHROME);
            return true;
        }
        return false;
    }

    protected function checkBrowserWebTv() {
        if( stripos($this->_agent,'webtv') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'webtv'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->setBrowser(self::BROWSER_WEBTV);
            return true;
        }
        return false;
    }

    protected function checkBrowserNetPositive() {
        if( stripos($this->_agent,'NetPositive') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'NetPositive'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion(str_replace(array('(',')',';'),'',$aversion[0]));
            $this->setBrowser(self::BROWSER_NETPOSITIVE);
            return true;
        }
        return false;
    }

    protected function checkBrowserGaleon() {
        if( stripos($this->_agent,'galeon') !== false ) {
            $aresult = explode(' ',stristr($this->_agent,'galeon'));
            $aversion = explode('/',$aresult[0]);
            $this->setVersion($aversion[1]);
            $this->setBrowser(self::BROWSER_GALEON);
            return true;
        }
        return false;
    }

    protected function checkBrowserKonqueror() {
        if( stripos($this->_agent,'Konqueror') !== false ) {
            $aresult = explode(' ',stristr($this->_agent,'Konqueror'));
            $aversion = explode('/',$aresult[0]);
            $this->setVersion($aversion[1]);
            $this->setBrowser(self::BROWSER_KONQUEROR);
            return true;
        }
        return false;
    }

    protected function checkBrowserIcab() {
        if( stripos($this->_agent,'icab') !== false ) {
            $aversion = explode(' ',stristr(str_replace('/',' ',$this->_agent),'icab'));
            $this->setVersion($aversion[1]);
            $this->setBrowser(self::BROWSER_ICAB);
            return true;
        }
        return false;
    }

    protected function checkBrowserOmniWeb() {
        if( stripos($this->_agent,'omniweb') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'omniweb'));
            $aversion = explode(' ',isset($aresult[1])?$aresult[1]:"");
            $this->setVersion($aversion[0]);
            $this->setBrowser(self::BROWSER_OMNIWEB);
            return true;
        }
        return false;
    }

    protected function checkBrowserPhoenix() {
        if( stripos($this->_agent,'Phoenix') !== false ) {
            $aversion = explode('/',stristr($this->_agent,'Phoenix'));
            $this->setVersion($aversion[1]);
            $this->setBrowser(self::BROWSER_PHOENIX);
            return true;
        }
        return false;
    }

    protected function checkBrowserFirebird() {
        if( stripos($this->_agent,'Firebird') !== false ) {
            $aversion = explode('/',stristr($this->_agent,'Firebird'));
            $this->setVersion($aversion[1]);
            $this->setBrowser(self::BROWSER_FIREBIRD);
            return true;
        }
        return false;
    }

    protected function checkBrowserNetscapeNavigator9Plus() {
        if( stripos($this->_agent,'Firefox') !== false && preg_match('/Navigator\/([^ ]*)/i',$this->_agent,$matches) ) {
            $this->setVersion($matches[1]);
            $this->setBrowser(self::BROWSER_NETSCAPE_NAVIGATOR);
            return true;
        }
        else if( stripos($this->_agent,'Firefox') === false && preg_match('/Netscape6?\/([^ ]*)/i',$this->_agent,$matches) ) {
            $this->setVersion($matches[1]);
            $this->setBrowser(self::BROWSER_NETSCAPE_NAVIGATOR);
            return true;
        }
        return false;
    }

    protected function checkBrowserShiretoko() {
        if( stripos($this->_agent,'Mozilla') !== false && preg_match('/Shiretoko\/([^ ]*)/i',$this->_agent,$matches) ) {
            $this->setVersion($matches[1]);
            $this->setBrowser(self::BROWSER_SHIRETOKO);
            return true;
        }
        return false;
    }

    protected function checkBrowserIceCat() {
        if( stripos($this->_agent,'Mozilla') !== false && preg_match('/IceCat\/([^ ]*)/i',$this->_agent,$matches) ) {
            $this->setVersion($matches[1]);
            $this->setBrowser(self::BROWSER_ICECAT);
            return true;
        }
        return false;
    }

    protected function checkBrowserNokia() {
        if( preg_match("/Nokia([^\/]+)\/([^ SP]+)/i",$this->_agent,$matches) ) {
            $this->setVersion($matches[2]);
            if( stripos($this->_agent,'Series60') !== false || strpos($this->_agent,'S60') !== false ) {
                $this->setBrowser(self::BROWSER_NOKIA_S60);
            }
            else {
                $this->setBrowser( self::BROWSER_NOKIA );
            }
            $this->setMobile(true);
            return true;
        }
        return false;
    }

    protected function checkBrowserFirefox() {
        if( stripos($this->_agent,'safari') === false ) {
            if( preg_match("/Firefox[\/ \(]([^ ;\)]+)/i",$this->_agent,$matches) ) {
                $this->setVersion($matches[1]);
                $this->setBrowser(self::BROWSER_FIREFOX);
                return true;
            }
            else if( preg_match("/Firefox$/i",$this->_agent,$matches) ) {
                $this->setVersion("");
                $this->setBrowser(self::BROWSER_FIREFOX);
                return true;
            }
        }
        return false;
    }

    protected function checkBrowserIceweasel() {
        if( stripos($this->_agent,'Iceweasel') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Iceweasel'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->setBrowser(self::BROWSER_ICEWEASEL);
            return true;
        }
        return false;
    }

    protected function checkBrowserMozilla() {
        if( stripos($this->_agent,'mozilla') !== false  && preg_match('/rv:[0-9].[0-9][a-b]?/i',$this->_agent) && stripos($this->_agent,'netscape') === false) {
            $aversion = explode(' ',stristr($this->_agent,'rv:'));
            preg_match('/rv:[0-9].[0-9][a-b]?/i',$this->_agent,$aversion);
            $this->setVersion(str_replace('rv:','',$aversion[0]));
            $this->setBrowser(self::BROWSER_MOZILLA);
            return true;
        }
        else if( stripos($this->_agent,'mozilla') !== false && preg_match('/rv:[0-9]\.[0-9]/i',$this->_agent) && stripos($this->_agent,'netscape') === false ) {
            $aversion = explode('',stristr($this->_agent,'rv:'));
            $this->setVersion(str_replace('rv:','',$aversion[0]));
            $this->setBrowser(self::BROWSER_MOZILLA);
            return true;
        }
        else if( stripos($this->_agent,'mozilla') !== false  && preg_match('/mozilla\/([^ ]*)/i',$this->_agent,$matches) && stripos($this->_agent,'netscape') === false ) {
            $this->setVersion($matches[1]);
            $this->setBrowser(self::BROWSER_MOZILLA);
            return true;
        }
        return false;
    }

    protected function checkBrowserLynx() {
        if( stripos($this->_agent,'lynx') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Lynx'));
            $aversion = explode(' ',(isset($aresult[1])?$aresult[1]:""));
            $this->setVersion($aversion[0]);
            $this->setBrowser(self::BROWSER_LYNX);
            return true;
        }
        return false;
    }

    protected function checkBrowserAmaya() {
        if( stripos($this->_agent,'amaya') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Amaya'));
            $aversion = explode(' ',$aresult[1]);
            $this->setVersion($aversion[0]);
            $this->setBrowser(self::BROWSER_AMAYA);
            return true;
        }
        return false;
    }

    protected function checkBrowserSafari() {
        if( stripos($this->_agent,'Safari') !== false && stripos($this->_agent,'iPhone') === false && stripos($this->_agent,'iPod') === false ) {
            $aresult = explode('/',stristr($this->_agent,'Version'));
            if( isset($aresult[1]) ) {
                $aversion = explode(' ',$aresult[1]);
                $this->setVersion($aversion[0]);
            }
            else {
                $this->setVersion(self::VERSION_UNKNOWN);
            }
            $this->setBrowser(self::BROWSER_SAFARI);
            return true;
        }
        return false;
    }

    protected function checkBrowseriPhone() {
        if( stripos($this->_agent,'iPhone') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Version'));
            if( isset($aresult[1]) ) {
                $aversion = explode(' ',$aresult[1]);
                $this->setVersion($aversion[0]);
            }
            else {
                $this->setVersion(self::VERSION_UNKNOWN);
            }
            $this->setMobile(true);
            $this->setBrowser(self::BROWSER_IPHONE);
            return true;
        }
        return false;
    }

    protected function checkBrowseriPad() {
        if( stripos($this->_agent,'iPad') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Version'));
            if( isset($aresult[1]) ) {
                $aversion = explode(' ',$aresult[1]);
                $this->setVersion($aversion[0]);
            }
            else {
                $this->setVersion(self::VERSION_UNKNOWN);
            }
            $this->setMobile(true);
            $this->setBrowser(self::BROWSER_IPAD);
            return true;
        }
        return false;
    }

    protected function checkBrowseriPod() {
        if( stripos($this->_agent,'iPod') !== false ) {
            $aresult = explode('/',stristr($this->_agent,'Version'));
            if( isset($aresult[1]) ) {
                $aversion = explode(' ',$aresult[1]);
                $this->setVersion($aversion[0]);
            }
            else {
                $this->setVersion(self::VERSION_UNKNOWN);
            }
            $this->setMobile(true);
            $this->setBrowser(self::BROWSER_IPOD);
            return true;
        }
        return false;
    }

    protected function checkBrowserAndroid() {
        if( stripos($this->_agent,'Android') !== false ) {
            $aresult = explode(' ',stristr($this->_agent,'Android'));
            if( isset($aresult[1]) ) {
                $aversion = explode(' ',$aresult[1]);
                $this->setVersion($aversion[0]);
            }
            else {
                $this->setVersion(self::VERSION_UNKNOWN);
            }
            $this->setMobile(true);
            $this->setBrowser(self::BROWSER_ANDROID);
            return true;
        }
        return false;
    }

    /**
     * Determine the user's platform
     */
    protected function checkPlatform() {
        if( stripos($this->_agent, 'windows') !== false ) {
            $this->_platform = self::PLATFORM_WINDOWS;
        }
        else if( stripos($this->_agent, 'iPad') !== false ) {
            $this->_platform = self::PLATFORM_IPAD;
        }
        else if( stripos($this->_agent, 'iPod') !== false ) {
            $this->_platform = self::PLATFORM_IPOD;
        }
        else if( stripos($this->_agent, 'iPhone') !== false ) {
            $this->_platform = self::PLATFORM_IPHONE;
        }
        elseif( stripos($this->_agent, 'mac') !== false ) {
            $this->_platform = self::PLATFORM_APPLE;
        }
        elseif( stripos($this->_agent, 'android') !== false ) {
            $this->_platform = self::PLATFORM_ANDROID;
        }
        elseif( stripos($this->_agent, 'linux') !== false ) {
            $this->_platform = self::PLATFORM_LINUX;
        }
        else if( stripos($this->_agent, 'Nokia') !== false ) {
            $this->_platform = self::PLATFORM_NOKIA;
        }
        else if( stripos($this->_agent, 'BlackBerry') !== false ) {
            $this->_platform = self::PLATFORM_BLACKBERRY;
        }
        elseif( stripos($this->_agent,'FreeBSD') !== false ) {
            $this->_platform = self::PLATFORM_FREEBSD;
        }
        elseif( stripos($this->_agent,'OpenBSD') !== false ) {
            $this->_platform = self::PLATFORM_OPENBSD;
        }
        elseif( stripos($this->_agent,'NetBSD') !== false ) {
            $this->_platform = self::PLATFORM_NETBSD;
        }
        elseif( stripos($this->_agent, 'OpenSolaris') !== false ) {
            $this->_platform = self::PLATFORM_OPENSOLARIS;
        }
        elseif( stripos($this->_agent, 'SunOS') !== false ) {
            $this->_platform = self::PLATFORM_SUNOS;
        }
        elseif( stripos($this->_agent, 'OS\/2') !== false ) {
            $this->_platform = self::PLATFORM_OS2;
        }
        elseif( stripos($this->_agent, 'BeOS') !== false ) {
            $this->_platform = self::PLATFORM_BEOS;
        }
        elseif( stripos($this->_agent, 'win') !== false ) {
            $this->_platform = self::PLATFORM_WINDOWS;
        }

    }
}
?>