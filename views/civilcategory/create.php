<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Civilcategory */

$this->title = 'Create Civilcategory';
$this->params['breadcrumbs'][] = ['label' => 'Civilcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="civilcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
