<?php
/*
    流点星博主Liues所创作
    流点星首发
    流点星：www.Liues.cn
*/
include 'include/includes.php';
header("Content-type: image/JPEG");
//背景图片名称（名称.格式，如"bg.png"）
$dst_path = 'img/bg.png'; 
/*基本图标位置*/
//天气图标位置
$weather_icon_x="65";
$weather_icon_y="50";
//ip图标位置
$ip_icon_x="150";
$ip_icon_y="220";
//时间图标位置
$time_icon_x="150";
$time_icon_y="180";
//位置图标位置
$local_icon_x="150";
$local_icon_y="200";
//系统图标位置
$system_icon_x="260";
$system_icon_y="200";
//浏览器图标位置
$bro_icon_x="260";
$bro_icon_y="220";
include 'include/icon.php';
/*基本项文字位置*/
//标语
$by_text="欢迎来到"; //文字标语
$by_size="12"; //文字大小
$by_angle="0"; //角度
$by_x="60";
$by_y="45";
$by_font="font/msyh.ttf"; //字体位置
$by_color=imagecolorallocate($dst_im, 0,51,78); //这里可以自定义自己需要的颜色，但需要转为RGB值，可将0,51,78修改为自己需要的颜色的RGB值
//自定义文字
$diy_size="20"; //文字大小
$diy_angle="0"; //角度
$diy_x="125";
$diy_y="45";
$diy_font="font/msyh.ttf"; //字体位置
$diy_color=imagecolorallocate($dst_im, 0,51,78); //这里可以自定义自己需要的颜色，但需要转为RGB值，可将0,51,78修改为自己需要的颜色的RGB值
//日期
$time_size="10"; //文字大小
$time_angle="0"; //角度
$time_x="167";
$time_y="194";
$time_font="font/msyh.ttf"; //字体位置
$time_color=imagecolorallocate($dst_im, 0,51,78); //这里可以自定义自己需要的颜色，但需要转为RGB值，可将0,51,78修改为自己需要的颜色的RGB值
//位置
$local_size="10"; //文字大小
$local_angle="0"; //角度
$local_x="165";
$local_y="212";
$local_font="font/msyh.ttf"; //字体位置
$local_color=imagecolorallocate($dst_im, 0,51,78); //这里可以自定义自己需要的颜色，但需要转为RGB值，可将0,51,78修改为自己需要的颜色的RGB值
//IP
$ip_size="10"; //文字大小
$ip_angle="0"; //角度
$ip_x="165";
$ip_y="232";
$ip_font="font/msyh.ttf"; //字体位置
$ip_color=imagecolorallocate($dst_im, 0,51,78); //这里可以自定义自己需要的颜色，但需要转为RGB值，可将0,51,78修改为自己需要的颜色的RGB值
//系统
$system_size="10"; //文字大小
$system_angle="0"; //角度
$system_x="278";
$system_y="212";
$system_font="font/msyh.ttf"; //字体位置
$system_color=imagecolorallocate($dst_im, 0,51,78); //这里可以自定义自己需要的颜色，但需要转为RGB值，可将0,51,78修改为自己需要的颜色的RGB值
//浏览器
$bro_size="10"; //文字大小
$bro_angle="0"; //角度
$bro_x="278";
$bro_y="232";
$bro_font="font/msyh.ttf"; //字体位置
$bro_color=imagecolorallocate($dst_im, 0,51,78); //这里可以自定义自己需要的颜色，但需要转为RGB值，可将0,51,78修改为自己需要的颜色的RGB值
include 'include/base_func.php';
/*
    自定义文字区
    可用天气函数：
    天气：$weather
    温度：$temp
    适度：$humidity
    风向：$winddirection
    风力级别：$windpower
    更新时间：$reporttime
    自定义文字添加格式：
    imagettftext($dst_im,, 大小, 倾斜角, X轴, Y轴, imagecolorallocate($dst_im, 0,51,78), '字体位置','内容');
*/
imagettftext($dst_im, 14, 0, 95, 140, imagecolorallocate($dst_im, 0,51,78), "font/msyh.ttf", $weather); //今天天气添加到图片
imagettftext($dst_im, 13, 0, 160, 90, imagecolorallocate($dst_im, 0,51,78), "font/msyh.ttf", '温度:'.$temp.'℃'); //当前温度添加到图片
imagettftext($dst_im, 13, 0, 237, 90, imagecolorallocate($dst_im, 0,51,78), "font/msyh.ttf", '湿度:'.$humidity.'%RH'); //当前湿度添加到图片
imagettftext($dst_im, 11, 0, 160, 115, imagecolorallocate($dst_im, 0,51,78), "font/msyh.ttf", '风向:'.$winddirection.'方'); //当前风向添加到图片
imagettftext($dst_im, 11, 0, 237, 115, imagecolorallocate($dst_im, 0,51,78), "font/msyh.ttf", '风力级别:'.$windpower.'级'); //风力级别添加到图片
imagettftext($dst_im, 11, 0, 160, 135, imagecolorallocate($dst_im, 0,51,78), "font/msyh.ttf", '更新时间:'.$reporttime); //更新时间添加到图片
//输出
imagegif($dst_im);
imagedestroy($dst_im);
?>