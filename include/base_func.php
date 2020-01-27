<?php
imagettftext($dst_im, $time_size, $time_angle, $time_x, $time_y, $time_color, $time_font, date('Y年n月j日')." 星期".$weekarray[date("w")]);
imagettftext($dst_im, $local_size, $local_angle, $local_x, $local_y, $local_color, $local_font, $province.'-'.$city );
imagettftext($dst_im, $by_size, $by_angle, $by_x, $by_y, $by_color, $by_font,$by_text); //标语添加到图片
imagettftext($dst_im, $diy_size, $diy_angle, $diy_x, $diy_y, $diy_color, $diy_font,base64_decode($_GET["diy"])); //自定义文字添加到图片
imagettftext($dst_im, $ip_size, $ip_angle, $ip_x, $ip_y, $ip_color, $ip_font,$ip); //IP添加到图片
imagettftext($dst_im, $system_size, $system_angle, $system_x, $system_y, $system_color, $system_font,$os); //系统添加到图片
imagettftext($dst_im, $bro_size, $bro_angle, $bro_x, $bro_y, $bro_color, $bro_font,$bro); //浏览器添加到图片