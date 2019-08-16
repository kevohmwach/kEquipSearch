<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Electricalitems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="electricalitems-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kequip_prod_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_itemavatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_itemdetails')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_dealername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_dealerlogo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_dealerphonecontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_dealeremailcontact')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
