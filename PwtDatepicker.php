<?php

/**
 * @link https://github.com/hadi-aj/yii2-pwtdatepicker
 * @package yii2-widgets
 * @subpackage yii2-pwt-datepicker
 * @version 1
 * @license http://www.wtfpl.net/
 */

namespace hadiaj\pwtdatepicker;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * PwtDatepicker
 *
 * @author Hadi AlizadehJalali <hadi.alizadeh.jalali@gmail.com>
 */
class PwtDatepicker extends InputWidget {

    public $pluginOptions;

    public function init() {
        parent::init();
        if ($this->options['class'] == NULL) {
            $this->options['class'] = 'form-control text-left ltr';
        }
        if (!$this->pluginOptions['format']) {
            $this->pluginOptions['format'] = 'YYYY/MM/DD';
        }
        if ($this->pluginOptions['initialValue'] === NULL) {
            $this->pluginOptions['initialValue'] = (boolean) $this->model->{$this->attribute};
        }
    }

    public function run() {
        echo $this->renderInput();

        PwtDatepickerAsset::register($this->getView());

        $this->renderJsCode();
    }

    /**
     * Render input.
     */
    function renderInput() {
        if ($this->hasModel()) {
            return Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            return Html::textInput($this->name, $this->value, $this->options);
        }
    }

    function renderJsCode() {
        $id = $this->options['id'];
        $options = Json::encode($this->pluginOptions);
        $js = "$('#{$id}').persianDatepicker({$options});";
        $this->getView()->registerJs($js);
    }

}
