<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ElectricalitemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Electrical items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electricalitems-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Electricalitems', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kequip_prod_electricalitem',
            'kequip_prod_item',
            'kequip_prod_itemavatar',
            'kequip_prod_itemdetails',
            'kequip_prod_manufacturer',
            //'kequip_prod_dealername',
            //'kequip_prod_dealerlogo',
            //'kequip_prod_dealerphonecontact',
            //'kequip_prod_dealeremailcontact:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
