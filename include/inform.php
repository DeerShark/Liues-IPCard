<?php include 'config.php';?>
<?php
if(empty($referopen)){
    die("配置错误！");
}elseif($referopen==0){
    if (empty($_SERVER['HTTP_REFERER'])) {
        die("请勿直接访问！");
    }
}elseif($referopen==1){
    
}else{
    die("未知错误！");
}
$ip = $_SERVER["REMOTE_ADDR"];
$weekarray=array("日","一","二","三","四","五","六"); //先定义一个数组
$get = base64_decode(str_replace(" ","+",$_GET["s"])); //自定义文字

//获取IP及城市代码
$url="http://restapi.amap.com/v3/ip?key=".$key."&ip=".$ip; 
$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';  
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_HEADER, 0);  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);  
curl_setopt($curl, CURLOPT_ENCODING, '');  
curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);  
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);  
$data = curl_exec($curl);
$data = json_decode($data, true);
$province = $data['province']; //省
$city = $data['city']; //市
$adcode = $data['adcode']; //城市代码

//获取天气信息
$tqurl="http://restapi.amap.com/v3/weather/weatherInfo?key=".$key."&city=".$adcode;
$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';  
$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $tqurl); 
curl_setopt($curl, CURLOPT_HEADER, 0);  
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);  
curl_setopt($curl, CURLOPT_ENCODING, '');  
curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);  
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);  
$weatherinfo = curl_exec($curl);
$weatherinfo = json_decode($weatherinfo, true);
$weather = $weatherinfo['lives']['0']['weather']; //天气
$temp = $weatherinfo['lives']['0']['temperature']; //温度
$humidity = $weatherinfo['lives']['0']['humidity']; //湿度
$winddirection = $weatherinfo['lives']['0']['winddirection']; //风向
$windpower = $weatherinfo['lives']['0']['windpower']; //风力级别
$reporttime = $weatherinfo['lives']['0']['reporttime']; //更新时间
