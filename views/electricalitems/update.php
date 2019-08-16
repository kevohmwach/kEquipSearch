<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Electricalitems */

$this->title = 'Update Electricalitems: ' . $model->id_kequip_prod_electricalitem;
$this->params['breadcrumbs'][] = ['label' => 'Electricalitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kequip_prod_electricalitem, 'url' => ['view', 'id' => $model->id_kequip_prod_electricalitem]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="electricalitems-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
