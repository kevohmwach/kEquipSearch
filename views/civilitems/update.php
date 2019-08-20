<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Civilitems */

$this->title = 'Update Civilitems: ' . $model->id_kequip_prod_civilitem;
$this->params['breadcrumbs'][] = ['label' => 'Civilitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kequip_prod_civilitem, 'url' => ['view', 'id' => $model->id_kequip_prod_civilitem]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="civilitems-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
