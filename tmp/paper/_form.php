<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\eiee\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'],
        'fieldConfig' => [
				'template' => "<div class='row'>\n" .
						"<div class='col-sm-2'>" .
							"{label}\n" .
                        "</div>\n" .
                        "<div class='col-sm-10'>" .
							"{input}\n" .
                        "</div>\n" .
                    "</div>\n" .  
                        "<h3>" .
                            "{error}\n" .
                        "</h3>\n",  
					]
    ]); ?>

    <?= $form->field($model, 'filename')->label(false)->fileInput(); ?>

    <?= $form->field($model, 'value_profile')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
