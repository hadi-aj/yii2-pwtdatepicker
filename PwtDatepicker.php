<?php

namespace hadiaj\pwtdatepicker;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class PwtDatepicker extends InputWidget {

    public $clientOptions;

    public function init() {
        parent::init();
        if (!$this->options['class']) {
            $this->options['class'] = 'form-control text-left ltr';
        }
        if (!$this->clientOptions['format']) {
            $this->clientOptions['format'] = 'YYYY/MM/DD';
        }
        if ($this->clientOptions['initialValue'] === NULL ) {
            $this->clientOptions['initialValue'] = (boolean) $this->model->{$this->attribute};
        }
    }

    public function run() {
        echo $this->renderInput();

        PwtDatePickerAsset::register($this->getView());

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
        $options = Json::encode($this->clientOptions);
        $js = "$('#{$id}').persianDatepicker({$options});";
        $this->getView()->registerJs($js);
    }

}