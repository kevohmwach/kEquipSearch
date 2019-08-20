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
                <br>
                <ul>
                    <li><a href="<?= Url::toRoute('electricalcategory/index').'?type=1';?>">Electrical SubCategories</a></li>
                    <ul>
                        <li><a href="<?= Url::toRoute('electricalitems/index').'?type=1';?>">Electrical Items</a></li>   
                    </ul>
                </ul>
                <br>
                <ul>
                    <li><a href="<?= Url::toRoute('chemicalcategory/index').'?type=1';?>">Chemical SubCategories</a></li>
                    <ul>
                        <li><a href="<?= Url::toRoute('chemicalitems/index').'?type=1';?>">Chemical Items</a></li>
                    </ul>
                </ul>
                <br>
                <ul>
                    <li><a href="<?= Url::toRoute('civilcategory/index').'?type=1';?>">Civil SubCategories</a></li>
                    <ul>
                        <li><a href="<?= Url::toRoute('civilitems/index').'?type=1';?>">Civil Items</a></li>
                    </ul>
                </ul>
                <br>
        </ul>

        

        

        
</div>

<p><a href="<?= Url::toRoute('users/index').'?type=1';?>">USERS>></a></p>
