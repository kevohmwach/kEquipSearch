<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\ElectricalCategory */

$this->title = 'Update Electrical Category: ' . $model->id_kequip_prod_electricalsub;
$this->params['breadcrumbs'][] = ['label' => 'Electrical Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kequip_prod_electricalsub, 'url' => ['view', 'id' => $model->id_kequip_prod_electricalsub]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="electrical-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
