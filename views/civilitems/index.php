<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CivilitemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Civilitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="civilitems-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Civilitems', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kequip_prod_civilitem',
            'kequip_prod_civilitem',
            'kequip_prod_civilitemavatar',
            'kequip_prod_civilitemdetails',
            'kequip_prod_civilmanufacturer',
            //'kequip_prod_civildealername',
            //'kequip_prod_civildealerlogo',
            //'kequip_prod_civildealerphonecontact',
            //'kequip_prod_civildealeremailcontact:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
