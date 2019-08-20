<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChemicalitemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chemicalitems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chemicalitems-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Chemicalitems', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kequip_prod_chemicalitem',
            'kequip_prod_chemicalitem',
            'kequip_prod_chemicalitemavatar',
            'kequip_prod_chemicalitemdetails',
            'kequip_prod_chemicalmanufacturer',
            //'kequip_prod_chemicaldealername',
            //'kequip_prod_chemicaldealerlogo',
            //'kequip_prod_chemicaldealerphonecontact',
            //'kequip_prod_chemicaldealeremailcontact:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
