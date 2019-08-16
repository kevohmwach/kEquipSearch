<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Electricalcategory */

$this->title = 'Update Electricalcategory: ' . $model->id_kequip_prod_electricalsub;
$this->params['breadcrumbs'][] = ['label' => 'Electricalcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kequip_prod_electricalsub, 'url' => ['view', 'id' => $model->id_kequip_prod_electricalsub]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="electricalcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
