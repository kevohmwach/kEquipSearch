<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CivilcategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="civilcategory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kequip_prod_civilsub') ?>

    <?= $form->field($model, 'kequip_prod_civilsubcategory') ?>

    <?= $form->field($model, 'kequip_prod_civilsubavatar') ?>

    <?= $form->field($model, 'kequip_prod_civilsubdetails') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
