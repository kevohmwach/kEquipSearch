<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kequip_users_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_users_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_users_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_users_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kequip_users_usertype')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
