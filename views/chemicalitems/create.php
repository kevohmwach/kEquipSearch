<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chemicalitems */

$this->title = 'Create Chemicalitems';
$this->params['breadcrumbs'][] = ['label' => 'Chemicalitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chemicalitems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
