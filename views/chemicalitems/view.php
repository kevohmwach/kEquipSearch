<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalitems */

$this->title = $model->id_kequip_prod_chemicalitem;
$this->params['breadcrumbs'][] = ['label' => 'Chemicalitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="chemicalitems-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kequip_prod_chemicalitem], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kequip_prod_chemicalitem], [
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
            'id_kequip_prod_chemicalitem',
            'kequip_prod_chemicalitem',
            'kequip_prod_chemicalitemavatar',
            'kequip_prod_chemicalitemdetails',
            'kequip_prod_chemicalmanufacturer',
            'kequip_prod_chemicaldealername',
            'kequip_prod_chemicaldealerlogo',
            'kequip_prod_chemicaldealerphonecontact',
            'kequip_prod_chemicaldealeremailcontact:email',
        ],
    ]) ?>

</div>
