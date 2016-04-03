<?php
/**
 * Created by PhpStorm.
 * User: Girish
 * Date: 4/3/2016
 * Time: 11:50 AM
 */

namespace doublehrajput\yii2\ajaxfileuploader;


use yii\web\AssetBundle;

class AjaxFileUploaderAssets extends AssetBundle
{
    public $js = [
        'js/jquery.ui.widget.js',
        'js/query.iframe-transport.js',
        'js/jquery.fileupload.js',
    ];

    public $css = ['css/styles.css'];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__.'/assets' ;
    }

}