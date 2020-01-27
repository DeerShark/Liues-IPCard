<?php 
date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
session_start();
function get_bro(){  
     $ua = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串  
     if(preg_match('#(Camino|Chimera)[ /]([a-zA-Z0-9.]+)#i',$ua,$matches)){
	    $browser = 'Camino('.$matches[2].')';}
	elseif(preg_match('#SE 2([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='搜狗('.$matches[1].')';}
	elseif(preg_match('#360([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='360('.$matches[1].')';}
	elseif(preg_match('#QQ/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='QQ('.$matches[1].')内置';}
	elseif (preg_match('#Maxthon( |\/)([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Maxthon('.$matches[2].')';}
	elseif (preg_match('#Chrome/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Chrome('.$matches[1].')';}
	elseif (preg_match('#Safari/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Safari('.$matches[1].')';}
	elseif(preg_match('#opera mini#i', $ua)) {
		$browser='Opera Mini('.$matches[1].')';}
	elseif(preg_match('#Opera.([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Opera('.$matches[1].')';}
	elseif(preg_match('#(j2me|midp)#i', $ua)) {
		$browser="J2ME/MIDP Browser";}
	elseif(preg_match('/GreenBrowser/i', $ua)){
		$browser='GreenBrowser';}
	elseif (preg_match('#TencentTraveler ([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='腾讯TT('.$matches[1].')';}
	elseif(preg_match('#UCWEB([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='UCWEB('.$matches[1];}
	elseif(preg_match('#MSIE ([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Internet Explorer('.$matches[1].')';}
	elseif(preg_match('#avantbrowser.com#i',$ua)){
		$browser='Avant Browser';}
	elseif(preg_match('#PHP#', $ua, $matches)){
		$browser='PHP';}
	elseif(preg_match('#danger hiptop#i',$ua,$matches)){
		$browser='Danger HipTop';}
	elseif(preg_match('#Shiira[/]([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Shiira('.$matches[1].')';}
	elseif(preg_match('#Dillo[ /]([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Dillo('.$matches[1].')';}
	elseif(preg_match('#Epiphany/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Epiphany('.$matches[1].')';}
	elseif(preg_match('#UP.Browser/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Openwave UP.Browser ('.$matches[1].')';}
	elseif(preg_match('#DoCoMo/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='DoCoMo('.$matches[1].')';}
	elseif(preg_match('#(Firefox|Phoenix|Firebird|BonEcho|GranParadiso|Minefield|Iceweasel)/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Firefox('.$matches[2].')';}
	elseif(preg_match('#(SeaMonkey)/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Mozilla SeaMonkey('.$matches[2].')';}
	elseif(preg_match('#Kazehakase/([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$browser='Kazehakase('.$matches[1].')';}
	else{$browser='未知';
	    
	}
     return $browser;
}
$bro = get_bro();

//操作系统
function get_os(){  
    $ua = $_SERVER['HTTP_USER_AGENT'];  
    $os = false;  
    if(preg_match('/Windows 95/i',$ua) || preg_match('/Win95/',$ua)){
	    $os="Windows 95";}
	elseif(preg_match('/Windows NT 5.0/i',$ua) || preg_match('/Windows 2000/i', $ua)){
		$os="Windows 2000";}
	elseif(preg_match('/Win 9x 4.90/i',$ua) || preg_match('/Windows ME/i', $ua)){
		$os="Windows ME";}
	elseif(preg_match('/Windows.98/i',$ua) || preg_match('/Win98/i', $ua)){
		$os = "Windows 98";}
	elseif(preg_match('/Windows NT 6.0/i',$ua)){
		$os="Windows Vista";}
	elseif(preg_match('/Windows NT 6.1/i',$ua)){
		$os="Windows 7";}
	elseif(preg_match('/Windows NT 5.1/i',$ua)){
		$os = "Windows XP";}
	elseif(preg_match('/Windows NT 5.2/i',$ua) && preg_match('/Win64/i',$ua)){
		$os="Windows XP 64 bit";}
	elseif(preg_match('/Windows NT 5.2/i',$ua)){
		$os="Windows Server 2003";}
	elseif(preg_match('/Mac_PowerPC/i',$ua)){
		$os="Mac OS";}
	elseif(preg_match('/Windows Phone/i',$ua)){
		$os="Windows Phone7";}
	elseif (preg_match('/Windows NT 6.2/i', $ua)){
		$os="Windows 8";}
	elseif (preg_match('/Windows NT 10.0/i', $ua)){
		$os="Windows 10";}
	elseif(preg_match('/Windows NT 4.0/i',$ua) || preg_match('/WinNT4.0/i',$ua)){
		$os="Windows NT 4.0";}
	elseif(preg_match('/Windows NT/i',$ua) || preg_match('/WinNT/i',$ua)){
		$os="Windows NT";}
	elseif(preg_match('/Windows CE/i',$ua)){
		$os="Windows CE";}
	elseif(preg_match('/ipad/i',$ua)){
		if(preg_match("/(?<=CPU OS )[\d\_]{1,}/", $ua, $version)){
			$ver=str_replace('_', '.', $version[0]);
			$os="IOS(".$ver.")";
		}else{
			$os="IOS";
		}
	}
	elseif(preg_match('/Touch/i',$ua)){
		$os="Touchw";}
	elseif(preg_match('/Symbian/i',$ua) || preg_match('/SymbOS/i',$ua)){
		$os="Symbian OS";}
	elseif (preg_match('/iPhone/i', $ua)) {
		if(preg_match("/(?<=CPU iPhone OS )[\d\_]{1,}/", $ua, $version)){
			$ver=str_replace('_', '.', $version[0]);
			$os="IOS(".$ver.")";
		}else{
			$os="IOS";
		}
	}
	elseif(preg_match('/PalmOS/i',$ua)){
		$os="Palm OS";}
	elseif(preg_match('/QtEmbedded/i',$ua)){
		$os="Qtopia";}
	elseif(preg_match('/Ubuntu/i',$ua)){
		$os="Ubuntu Linux";}
	elseif(preg_match('/Gentoo/i',$ua)){
		$os="Gentoo Linux";}
	elseif(preg_match('/Fedora/i',$ua)){
		$os="Fedora Linux";}
	elseif(preg_match('/FreeBSD/i',$ua)){
		$os="FreeBSD";}
	elseif(preg_match('/NetBSD/i',$ua)){
		$os="NetBSD";}
	elseif(preg_match('/OpenBSD/i',$ua)){
		$os="OpenBSD";}
	elseif(preg_match('/SunOS/i',$ua)){
		$os="SunOS";}
    elseif(preg_match('/linux/i',$ua)){  
      $os = 'Linux';  
      		if(preg_match('/Android.([0-9. _]+)/i',$ua,$matches)){
			$os = 'Android('.$matches[1].')';
		} elseif ( preg_match( '#Ubuntu#i', $ua ) ) {
			$os = 'Ubuntu';
		} elseif ( preg_match( '#Debian#i', $ua ) ) {
			$os = 'Debian';
		} elseif ( preg_match( '#Fedora#i', $ua ) ) {
			$os = 'Fedora';
		}
    } 
	elseif(preg_match('/Mac OS X/i',$ua)){
		$os="Mac OS X";}
	elseif(preg_match('/Macintosh/i',$ua)){
		$os="Mac OS";}
	elseif(preg_match('/Unix/i',$ua)){
		$os="Unix";}
	elseif(preg_match('#Nokia([a-zA-Z0-9.]+)#i',$ua,$matches)){
		$os="Nokia".$matches[1];}
	elseif(preg_match('/Mac OS X/i',$ua)){
		$os="Mac OS X";}
	else{
		$os='未知';
}
    return $os;
}
$os=get_os();
?>