<?php

namespace hadiaj\pwtdatepicker;

use yii\web\AssetBundle;

class PwtDatePickerAsset extends AssetBundle {

    public $sourcePath = '@bower';
    public $js = [
        'persian-datepicker/assets/persian-date.min.js',
        'persian-datepicker/dist/js/persian-datepicker.min.js',
    ];
    public $css = [
        'persian-datepicker/dist/css/persian-datepicker.min.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
