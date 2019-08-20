<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Civilcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="civilcategory-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'kequip_prod_civilsubcategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_civilsubavatar')->fileInput() ?>

    <?= $form->field($model, 'kequip_prod_civilsubdetails')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
