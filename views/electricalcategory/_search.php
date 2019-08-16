<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ElectricalcategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="electricalcategory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kequip_prod_electricalsub') ?>

    <?= $form->field($model, 'kequip_prod_subcategory') ?>

    <?= $form->field($model, 'kequip_prod_avatar') ?>

    <?= $form->field($model, 'kequip_prod_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
