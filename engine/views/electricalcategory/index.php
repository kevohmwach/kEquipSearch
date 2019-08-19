<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ElectricalcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Electrical categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electricalcategory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Electricalcategory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kequip_prod_electricalsub',
            'kequip_prod_subcategory',
            'kequip_prod_avatar',
            'kequip_prod_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
