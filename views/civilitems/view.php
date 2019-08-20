<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Civilitems */

$this->title = $model->id_kequip_prod_civilitem;
$this->params['breadcrumbs'][] = ['label' => 'Civilitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="civilitems-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kequip_prod_civilitem], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kequip_prod_civilitem], [
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
            'id_kequip_prod_civilitem',
            'kequip_prod_civilitem',
            'kequip_prod_civilitemavatar',
            'kequip_prod_civilitemdetails',
            'kequip_prod_civilmanufacturer',
            'kequip_prod_civildealername',
            'kequip_prod_civildealerlogo',
            'kequip_prod_civildealerphonecontact',
            'kequip_prod_civildealeremailcontact:email',
        ],
    ]) ?>

</div>
