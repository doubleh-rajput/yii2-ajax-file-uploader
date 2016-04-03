<?php

namespace doublehrajput\yii2\ajaxfileuploader;

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\InputWidget;

/**
 * This is just an example.
 */
class AjaxFileUploaderWidget extends InputWidget
{
    /*******************************************************************************************************************
     * Url To which File to be Upload
     * @var array|string $url
     *******************************************************************************************************************/
    public $url = ['/site/upload'];

    /*******************************************************************************************************************
     * Run The Widget
     * @inheritdoc
     *******************************************************************************************************************/
    public function run()
    {
        $this->registerAssets();
        // Button to select & upload files

        echo '<span class="btn btn-success fileinput-button"><span>Select files...</span>';
        //The file input field used as target for the file upload widget

        echo Html::activeFileInput($this->model , $this->attribute , ['name' => 'files[]']);
        echo '</span>';

        //The global progress bar
        echo '<p>Upload progress</p>';
        echo '<div id="progress" class="progress progress-success progress-striped">
        <div class="bar"></div></div>';

        //The list of files uploaded
        echo '<p>Files uploaded:</p><ul id="files"></ul>';

    }

    /*******************************************************************************************************************
     * Register All Assets Required By Wigdets
     * This Function register at the time of init this Widgets
     *******************************************************************************************************************/
    public function registerAssets(){
        AjaxFileUploaderAssets::register($this->view);
        $this->_registerJs();
    }

    /**
     * Register Custom Js
     */
    private function _registerJs(){
        $this->view->registerJs("

        // When the server is ready...
        $(function () {
            'use strict';

            // Define the url to send the image data to
            var url = '". Url::to($this->url) ."';

            // Call the fileupload widget and set some parameters
            $('#". Html::getInputId($this->model , $this->attribute) ."').fileupload({
                url: url,
                dataType: 'json',
                done: function (e, data) {
                    // Add each uploaded file name to the #files list
                    $.each(data.result.files, function (index, file) {
                        $('<li/>').text(file.name).appendTo('#files');
                    });
                },
                progressall: function (e, data) {
                    // Update the progress bar while files are being uploaded
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .bar').css(
                            'width',
                            progress + '%'
                    );
                }
            });
        });


        ");
    }
}
