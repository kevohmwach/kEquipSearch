<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChemicalcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chemicalcategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chemicalcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Chemicalcategory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kequip_prod_chemicalsub',
            'kequip_prod_chemicalsubcategory',
            'kequip_prod_chemicalsubavatar',
            'kequip_prod_chemicalsubdetails',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
