<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalcategory */

$this->title = 'Update Chemicalcategory: ' . $model->id_kequip_prod_chemicalsub;
$this->params['breadcrumbs'][] = ['label' => 'Chemicalcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kequip_prod_chemicalsub, 'url' => ['view', 'id' => $model->id_kequip_prod_chemicalsub]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chemicalcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
