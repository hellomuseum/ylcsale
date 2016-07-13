<?php
/**
 * 验证码
 *
 * @copyright  Copyright (c) 2007-2011 ShopNC Inc. (http://www.shopnc.net)
 * @license    http://www.shopnc.net
 * @link       http://www.shopnc.net
 * @since      File available since Release v1.1
 */
Ob_clean();
/* 忽略产生的错误 */
error_reporting(0);

/* 开启 SESSION,产生一个SESSIONID */
session_start();

/* 验证码置空 */
$_SESSION['seccode'] = "";

/* 验证码图像宽度 */
$width = 70;
/* 验证码图像高度 */
$height = 21;
$noisenum = 30;
/* 创建一个尺寸为 70×21的空白图像  */
$image = imageCreate(70, 30);
/* 背景颜色随机产生 */
$back = imagecolorallocate($image, mt_rand(150,255), mt_rand(150,255), mt_rand(150,255));

/* 画一矩形并以 $back 填充 其左上角坐标为 0，0，右下角坐标为 $width，$height */
imageFilledRectangle($image, 0, 0, $width, $height, $back);
/* 验证码随机数范围 */
$textall=range('A','Z');

/* 产生 4 位 随机元素*/
for ($i=0;$i<4;$i++) {
	$code .= $textall[array_rand($textall)];
}

/* 画干扰点 */
for ($i=0; $i<$noisenum; $i++){
	$randColor = imageColorAllocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
	imageSetPixel($image, rand(0, $width), rand(0, $height), $randColor);
}

/* 设置这体颜色 */
for ($i = 0; $i < strlen($code); $i++){
	imageString($image,5,$i*$width/4+mt_rand(1,5),$height/4,$code[$i],imageColorAllocate($image,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150)));
}
/* 随机码存入SESSION中 */
$_SESSION['yanzhengma'] = $code;

/* 输出图像格式 */
@header("Content-type: image/png");

/* 以 PNG 格式将图像输出到浏览器 */
imagePng($image);

/* 最后销毁图像，释放与 image 关联的内存 */
imagedestroy($image);
?>
