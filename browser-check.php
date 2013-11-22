<?php
// ========================
// = Output			 	  =
// ========================
class abc_output {

	/**
	* Check if we should display the popup
	**/
	function html() {
		$user_browser 	= $this->getBrowser();
/* 		print_r($user_browser); */
		if($user_browser['short_name']=='ie' && $user_browser['version']<=7)
			wp_die('<p>Please update your browser.</p>
					<p>请更新您的浏览器到较新的版本，点击下列列表中的浏览器，直接下载。</p>
					<ul>
						<li><a target="_blank" href="http://dldir1.qq.com/invc/tt/QQBrowser_Setup_17213.exe">QQ浏览器</a></li>
						<li><a target="_blank" href="http://down.360safe.com/se/360se6_6.3.1.106.exe">360安全浏览器</a></li>
						<li><a target="_blank" href="">或其它浏览器新版本</a></li>
					</ul>
					');
	}

	/**
	* Get the visitors browser, browser version and platform
	**/
	private function getBrowser()
	{
		$u_agent 	= $_SERVER['HTTP_USER_AGENT'];
		$bname 		= 'Unknown';
		$platform 	= 'Unknown';
		$version	= 'Unknown';
		$short_name = 'Unknown';
		$ub 		= 'Unknown';

		//First get the platform?
		if (preg_match('/android/i', $u_agent)) {
			$platform = 'android';
		} elseif (preg_match('/iphone/i', $u_agent)) {
			$platform = 'iOS';
		} elseif (preg_match('/ipad/i', $u_agent)) {
			$platform = 'iOS';
		} elseif (preg_match('/linux/i', $u_agent)) {
			$platform = 'linux';
		} elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
			$platform = 'mac';
		} elseif (preg_match('/windows|win32/i', $u_agent)) {
			$platform = 'windows';
		}

		// Next get the name of the useragent yes seperately and for good reason
		if (preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) {
			$bname 		= 'Internet Explorer';
			$short_name = "ie";
			$ub 		= "MSIE";
		} elseif (preg_match('/Firefox/i',$u_agent)) {
			$bname 		= 'Mozilla Firefox';
			$short_name = "ff";
			$ub 		= "Firefox";
		} elseif (preg_match('/Chrome/i',$u_agent)) {
			$bname 		= 'Google Chrome';
			$short_name = "chrome";
			$ub 		= "Chrome";
		} elseif (preg_match('/Safari/i',$u_agent)) {
			$bname 		= 'Apple Safari';
			$short_name = "safari";
			$ub 		= "Safari";
		} elseif (preg_match('/Opera/i',$u_agent)) {
			$bname 		= 'Opera';
			$short_name = "opera";
			$ub 		= "Opera";
		}

		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
		if (!preg_match_all($pattern, $u_agent, $matches)) {
			// we have no matching number just continue
		}

		// see how many we have
		$i = count($matches['browser']);
		if ($i != 1) {
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
			if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
				$version= $matches['version'][0];
			} else {
		     	$version= $matches['version'][1];
			}
		} else {
			$version= $matches['version'][0];
		}

		// check if we have a number
		// if ($version==null || $version=="") {$version = "unknown";}

		return array(
			'userAgent' 	=> $u_agent,
			'name'      	=> $bname,
			'short_name'	=> $short_name,
			'version'		=> floor($version),
			'platform'  	=> $platform,
			'pattern'    	=> $pattern
		);
	}

}

/**
* Output the popup
**/
function abc_output() {
	$output = new abc_output;
	echo $output->html();
}

abc_output();

?>