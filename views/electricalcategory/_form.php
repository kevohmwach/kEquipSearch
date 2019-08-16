<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Electricalcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="electricalcategory-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'kequip_prod_subcategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_avatar')->fileInput() ?>

    <?= $form->field($model, 'kequip_prod_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
