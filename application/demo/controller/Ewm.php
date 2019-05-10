<?php
namespace app\demo\controller;

use DavidNineRoc\Qrcode\Factory;
use DavidNineRoc\Qrcode\QrCodePlus;

class Ewm
{
    public function index()
    {
        /****************************************
		 * 通过工厂方法，获取到你想创建二维码的样式
		 * 现在仅有：color, image
		 ****************************************/
		$color = Factory::color(['#087', '#431', '#a2d', '#a2d',]);
		// $image = Factory::image(imagecreatefrompng('DavidNineRoc.png'));

		var_dump($color);
		die;


		/****************************************
		 * 实例化对象，并在 output 方法传入
		 * $color 或者 $image
		 ****************************************/
		(new QrCodePlus)
		    ->setText('DavidNineRoc')
		    ->setMargin(50)
		    ->setOutput(function($handle){
		        header('Content-Type: image/jpeg');
		        imagejpeg($handle);
		    })
		    ->output($color);
    }
}
