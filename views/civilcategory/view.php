<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Civilcategory */

$this->title = $model->id_kequip_prod_civilsub;
$this->params['breadcrumbs'][] = ['label' => 'Civilcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="civilcategory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kequip_prod_civilsub], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kequip_prod_civilsub], [
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
            'id_kequip_prod_civilsub',
            'kequip_prod_civilsubcategory',
            'kequip_prod_civilsubavatar',
            'kequip_prod_civilsubdetails',
        ],
    ]) ?>

</div>
