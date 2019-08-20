<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalitems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chemicalitems-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'kequip_prod_chemicalitem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_chemicalitemavatar')->fileInput() ?>

    <?= $form->field($model, 'kequip_prod_chemicalitemdetails')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_chemicalmanufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_chemicaldealername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_chemicaldealerlogo')->fileInput() ?>

    <?= $form->field($model, 'kequip_prod_chemicaldealerphonecontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_chemicaldealeremailcontact')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
