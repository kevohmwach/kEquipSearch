<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Electricalcategory */

$this->title = 'Create Electricalcategory';
$this->params['breadcrumbs'][] = ['label' => 'Electricalcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electricalcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
