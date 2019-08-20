<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chemicalcategory-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'kequip_prod_chemicalsubcategory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_chemicalsubavatar')->fileInput() ?>

    <?= $form->field($model, 'kequip_prod_chemicalsubdetails')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
