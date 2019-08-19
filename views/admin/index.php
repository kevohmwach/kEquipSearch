<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Admin Pannel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">
    <h1><?= Html::encode($this->title) ?></h1>
        <ul>
            <li><a href="<?= Url::toRoute('categories/index').'?type=1';?>">Product Categories</a></li>
        </ul>

        <ul>
            <li><a href="<?= Url::toRoute('electricalcategory/index').'?type=1';?>">Electrical SubCategories</a></li>
            <li><a href="<?= Url::toRoute('electricalitems/index').'?type=1';?>">Electrical Items</a></li>
        </ul>

        <ul>
            <li><a href="#">Chemical SubCategories</a></li>
            <li><a href="#">Chemical Items</a></li>
        </ul>

        <ul>
            <li><a href="#">Civil SubCategories</a></li>
            <li><a href="#">Civil Items</a></li>
        </ul>
</div>

<p><a href="<?= Url::toRoute('users/index').'?type=1';?>">USERS>></a></p>
