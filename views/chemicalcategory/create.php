<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalcategory */

$this->title = 'Create Chemicalcategory';
$this->params['breadcrumbs'][] = ['label' => 'Chemicalcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chemicalcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
