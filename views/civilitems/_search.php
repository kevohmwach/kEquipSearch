<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CivilitemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="civilitems-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kequip_prod_civilitem') ?>

    <?= $form->field($model, 'kequip_prod_civilitem') ?>

    <?= $form->field($model, 'kequip_prod_civilitemavatar') ?>

    <?= $form->field($model, 'kequip_prod_civilitemdetails') ?>

    <?= $form->field($model, 'kequip_prod_civilmanufacturer') ?>

    <?php // echo $form->field($model, 'kequip_prod_civildealername') ?>

    <?php // echo $form->field($model, 'kequip_prod_civildealerlogo') ?>

    <?php // echo $form->field($model, 'kequip_prod_civildealerphonecontact') ?>

    <?php // echo $form->field($model, 'kequip_prod_civildealeremailcontact') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
