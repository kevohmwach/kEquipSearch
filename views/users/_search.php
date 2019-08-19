<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kequip_users') ?>

    <?= $form->field($model, 'kequip_users_firstname') ?>

    <?= $form->field($model, 'kequip_users_lastname') ?>

    <?= $form->field($model, 'kequip_users_email') ?>

    <?= $form->field($model, 'kequip_users_password') ?>

    <?php // echo $form->field($model, 'kequip_users_usertype') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
