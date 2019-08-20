<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChemicalitemsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chemicalitems-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kequip_prod_chemicalitem') ?>

    <?= $form->field($model, 'kequip_prod_chemicalitem') ?>

    <?= $form->field($model, 'kequip_prod_chemicalitemavatar') ?>

    <?= $form->field($model, 'kequip_prod_chemicalitemdetails') ?>

    <?= $form->field($model, 'kequip_prod_chemicalmanufacturer') ?>

    <?php // echo $form->field($model, 'kequip_prod_chemicaldealername') ?>

    <?php // echo $form->field($model, 'kequip_prod_chemicaldealerlogo') ?>

    <?php // echo $form->field($model, 'kequip_prod_chemicaldealerphonecontact') ?>

    <?php // echo $form->field($model, 'kequip_prod_chemicaldealeremailcontact') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
