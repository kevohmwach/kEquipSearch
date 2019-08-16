<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Electricalitems */

$this->title = 'Create Electricalitems';
$this->params['breadcrumbs'][] = ['label' => 'Electricalitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="electricalitems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
