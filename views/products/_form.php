<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\Models\ElectricalCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="electrical-category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kequip_prod_subcategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
