<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\Models\ElectricalCategory */

$this->title = $model->id_kequip_prod_electricalsub;
$this->params['breadcrumbs'][] = ['label' => 'Electrical Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="electrical-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kequip_prod_electricalsub], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kequip_prod_electricalsub], [
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
            'id_kequip_prod_electricalsub',
            'kequip_prod_subcategory',
            'kequip_prod_avatar',
            'kequip_prod_description',
        ],
    ]) ?>

</div>
