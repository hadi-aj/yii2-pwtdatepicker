Persian Date Picker for Yii2
======================
This Date picker widget work with Iranian calendar, based on [Persian Date Picker](https://github.com/babakhani/pwt.datepicker)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require hadi-aj/yii2-pwt-datepicker "*"
```

or add

```
"hadi-aj/yii2-pwt-datepicker": "*"
```

to the require section of your `composer.json` file.


Usage
------------

```php
use hadiaj\pwtdatepicker\PwtDatepicker;

// Normal select with ActiveForm & model
echo $form->field($model, 'date')->widget(PwtDatepicker::classname(), [
    'pluginOptions' => [
        'initialValue' => TRUE,
        ...
    ],
]);

// PwtDatepicker without model
echo PwtDatepicker::widget([
    'pluginOptions' => [
        'initialValue' => TRUE,
        ...
    ],
]);
```
Please, check the [Persian Date Picker documentation](https://github.com/babakhani/pwt.datepicker#options-table) for further information about its configuration options.

License
------------
Freely distributable under the terms of the [WTFPL](http://www.wtfpl.net/) license. 