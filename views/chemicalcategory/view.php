<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalcategory */

$this->title = $model->id_kequip_prod_chemicalsub;
$this->params['breadcrumbs'][] = ['label' => 'Chemicalcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="chemicalcategory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kequip_prod_chemicalsub], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kequip_prod_chemicalsub], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kequip_prod_chemicalsub',
            'kequip_prod_chemicalsubcategory',
            'kequip_prod_chemicalsubavatar',
            'kequip_prod_chemicalsubdetails',
        ],
    ]) ?>

</div>
