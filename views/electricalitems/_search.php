<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ElectricalitemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="electricalitems-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kequip_prod_electricalitem') ?>

    <?= $form->field($model, 'kequip_prod_item') ?>

    <?= $form->field($model, 'kequip_prod_itemavatar') ?>

    <?= $form->field($model, 'kequip_prod_itemdetails') ?>

    <?= $form->field($model, 'kequip_prod_manufacturer') ?>

    <?php // echo $form->field($model, 'kequip_prod_dealername') ?>

    <?php // echo $form->field($model, 'kequip_prod_dealerlogo') ?>

    <?php // echo $form->field($model, 'kequip_prod_dealerphonecontact') ?>

    <?php // echo $form->field($model, 'kequip_prod_dealeremailcontact') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
