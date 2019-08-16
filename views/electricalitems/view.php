<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Electricalitems */

$this->title = $model->id_kequip_prod_electricalitem;
$this->params['breadcrumbs'][] = ['label' => 'Electricalitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="electricalitems-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kequip_prod_electricalitem], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kequip_prod_electricalitem], [
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
            'id_kequip_prod_electricalitem',
            'kequip_prod_item',
            'kequip_prod_itemavatar',
            'kequip_prod_itemdetails',
            'kequip_prod_manufacturer',
            'kequip_prod_dealername',
            'kequip_prod_dealerlogo',
            'kequip_prod_dealerphonecontact',
            'kequip_prod_dealeremailcontact:email',
        ],
    ]) ?>

</div>
