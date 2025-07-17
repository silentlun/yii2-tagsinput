<?php
/**
 * @author: silentlun
 * @date  2021年3月24日下午4:30:29
 * @copyright  Copyright fesadmin
 */
namespace silentlun\tagsinput;

use Yii;
use yii\web\AssetBundle;

class DatePickerAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    
    public $css = [
        'css/bootstrap-tagsinput.css',
    ];
    
    public $js = [
        'js/bootstrap-tagsinput.min.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}