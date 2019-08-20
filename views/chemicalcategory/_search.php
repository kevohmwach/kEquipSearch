<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChemicalcategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chemicalcategory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kequip_prod_chemicalsub') ?>

    <?= $form->field($model, 'kequip_prod_chemicalsubcategory') ?>

    <?= $form->field($model, 'kequip_prod_chemicalsubavatar') ?>

    <?= $form->field($model, 'kequip_prod_chemicalsubdetails') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
