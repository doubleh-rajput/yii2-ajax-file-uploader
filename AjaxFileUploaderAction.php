<?php
/**
 * Created by PhpStorm.
 * User: Girish
 * Date: 4/3/2016
 * Time: 12:21 PM
 */
namespace extensions\yii2ajaxfileuploader;

use yii\base\Action;
use Yii;

require('UploadHandler.php');

class AjaxFileUploaderAction extends Action{

    public function run(){
        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new \UploadHandler();
    }
}
