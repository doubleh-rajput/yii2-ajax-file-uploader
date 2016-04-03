<?php
/**
 * User: doubleh-rajputs
 * Date: 4/3/2016
 * Time: 12:21 PM
 */
namespace extensions\yii2ajaxfileuploader;

use yii\base\Action;
use Yii;

require('UploadHandler.php');

/***********************************************************************************************************************
 * Class AjaxFileUploaderAction
 * Action by which file will upload to server.
 * @property string $upload_dir
***********************************************************************************************************************/
class AjaxFileUploaderAction extends Action{

    /**
     * upload dir name where file is to be saved...
     * it will also create a thumbnail
     * @var string $upload_dir
     */
    public $upload_dir;

    /*******************************************************************************************************************
     * Run Action
     * @inheritdoc
    *******************************************************************************************************************/
    public function run(){
        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new \UploadHandler();
    }
}
