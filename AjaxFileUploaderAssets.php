<?php
/**
 * User: doubleh-rajput
 * Date: 4/3/2016
 * Time: 11:50 AM
 */

namespace extensions\yii2ajaxfileuploader;

use yii\web\AssetBundle;

/***********************************************************************************************************************
 * AjaxFileUploaderAssets Class
 * Asset Bundle class for Ajax File Uploaders
***********************************************************************************************************************/
class AjaxFileUploaderAssets extends AssetBundle
{
    /**
     * All Js File For Asset Bundle
     * @var array
     */
    public $js = [
        'js/jquery.ui.widget.js',
        'js/query.iframe-transport.js',
        'js/jquery.fileupload.js',
    ];

    /**
     * All Depends Asset Bundle
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset'
    ];

    /**
     * init the asset bundle component
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__.'/assets' ;
    }

}