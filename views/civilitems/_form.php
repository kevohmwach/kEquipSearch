<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Civilitems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="civilitems-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'kequip_prod_civilitem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_civilitemavatar')->fileInput() ?>

    <?= $form->field($model, 'kequip_prod_civilitemdetails')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_civilmanufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_civildealername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_civildealerlogo')->fileInput() ?>

    <?= $form->field($model, 'kequip_prod_civildealerphonecontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_prod_civildealeremailcontact')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
