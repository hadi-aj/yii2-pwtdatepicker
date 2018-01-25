<?php

/**
 * @link https://github.com/hadi-aj/yii2-pwtdatepicker
 * @package yii2-widgets
 * @subpackage yii2-pwt-datepicker
 * @version 1
 * @license http://www.wtfpl.net/
 */

namespace hadiaj\pwtdatepicker;

use yii\web\AssetBundle;

/**
 * PwtDatepickerAsset
 *
 * @author Hadi AlizadehJalali <hadi.alizadeh.jalali@gmail.com>
 */
class PwtDatepickerAsset extends AssetBundle {

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
