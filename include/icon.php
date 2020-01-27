<?php
//传递背景图片
$dst_im = imagecreatefromstring(file_get_contents($dst_path));
list($dst_w, $dst_h, $dst_type) = getimagesize($dst_path);
//IP等图标
$ip_path = 'icon/ico/IP.png';
$ip_im = imagecreatefromstring(file_get_contents($ip_path));
list($ip_w, $ip_h) = getimagesize($ip_path);
$time_path = 'icon/ico/time.png';
$time_im = imagecreatefromstring(file_get_contents($time_path));
list($time_w, $time_h) = getimagesize($time_path);
$local_path = 'icon/ico/local.png';
$local_im = imagecreatefromstring(file_get_contents($local_path));
list($local_w, $local_h) = getimagesize($local_path);
$system_path = 'icon/ico/system.png';
$system_im = imagecreatefromstring(file_get_contents($system_path));
list($system_w, $system_h) = getimagesize($system_path);
$bro_path = 'icon/ico/bro.png';
$bro_im = imagecreatefromstring(file_get_contents($bro_path));
list($bro_w, $bro_h) = getimagesize($bro_path);
//天气图标
$sunny_path = 'icon/weather/sunny.png';
$sunny_im = imagecreatefromstring(file_get_contents($sunny_path));
list($sunny_w, $sunny_h) = getimagesize($sunny_path);
$rain_path = 'icon/weather/rain.png';
$rain_im = imagecreatefromstring(file_get_contents($rain_path));
list($rain_w, $rain_h) = getimagesize($rain_path);
$snow_path = 'icon/weather/snow.png';
$snow_im = imagecreatefromstring(file_get_contents($snow_path));
list($snow_w, $snow_h) = getimagesize($snow_path);
$sha_path = 'icon/weather/sha.png';
$sha_im = imagecreatefromstring(file_get_contents($sha_path));
list($sha_w, $sha_h) = getimagesize($sha_path);
$wu_path = 'icon/weather/wu.png';
$wu_im = imagecreatefromstring(file_get_contents($wu_path));
list($wu_w, $wu_h) = getimagesize($wu_path);
$yin_path = 'icon/weather/yin.png';
$yin_im = imagecreatefromstring(file_get_contents($yin_path));
list($yin_w, $yin_h) = getimagesize($yin_path);
$dyun_path = 'icon/weather/dyun.png';
$dyun_im = imagecreatefromstring(file_get_contents($dyun_path));
list($dyun_w, $dyun_h) = getimagesize($dyun_path);
$unknow_path = 'icon/weather/unknow.png';
$unknow_im = imagecreatefromstring(file_get_contents($unknow_path));
list($unknow_w, $dyun_h) = getimagesize($unknow_path);
//各图标位置
imagecopy($dst_im, $ip_im, $ip_icon_x, $ip_icon_y, 0, 0,$ip_w, $ip_h);
imagecopy($dst_im, $time_im, $time_icon_x, $time_icon_y, 0, 0,$time_w, $time_h);
imagecopy($dst_im, $local_im, $local_icon_x, $local_icon_y, 0, 0,$local_w, $local_h);
imagecopy($dst_im, $system_im, $system_icon_x, $system_icon_y, 0, 0,$system_w, $system_h);
imagecopy($dst_im, $bro_im, $bro_icon_x, $bro_icon_y, 0, 0,$bro_w, $bro_h);
if(strpos($weather,'晴') !== false){
    imagecopy($dst_im, $sunny_im, $weather_icon_x, $weather_icon_y, 0, 0,$sunny_w, $sunny_h);
}elseif(strpos($weather,'云') !== false){
    imagecopy($dst_im, $dyun_im, $weather_icon_x, $weather_icon_y, 0, 0,$dyun_w, $dyun_h);
}elseif(strpos($weather,'阴') !== false){
    imagecopy($dst_im, $yin_im, $weather_icon_x, $weather_icon_y, 0, 0,$yin_w, $yin_h);
}elseif(strpos($weather,'雾') !== false){
    imagecopy($dst_im, $wu_im, $weather_icon_x, $weather_icon_y, 0, 0,$wu_w, $wu_h);
}elseif(strpos($weather,'雨') !== false){
    imagecopy($dst_im, $rain_im, $weather_icon_x, $weather_icon_y, 0, 0,$rain_w, $rain_h);
}elseif(strpos($weather,'雪') !== false){
    imagecopy($dst_im, $snow_im, $weather_icon_x, $weather_icon_y, 0, 0,$snow_w, $snow_h);
}elseif(strpos($weather,'风') !== false){
    imagecopy($dst_im, $sha_im, $weather_icon_x, $weather_icon_y, 0, 0,$sha_w, $sha_h);
}else{
    imagecopy($dst_im, $unkonw_im, $weather_icon_x, $weather_icon_y, 0, 0,$unkonw_w, $unkonw_h);
}
?>