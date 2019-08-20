<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalitems */

$this->title = 'Update Chemicalitems: ' . $model->id_kequip_prod_chemicalitem;
$this->params['breadcrumbs'][] = ['label' => 'Chemicalitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kequip_prod_chemicalitem, 'url' => ['view', 'id' => $model->id_kequip_prod_chemicalitem]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chemicalitems-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
