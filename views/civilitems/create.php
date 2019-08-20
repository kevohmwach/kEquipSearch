<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Civilitems */

$this->title = 'Create Civilitems';
$this->params['breadcrumbs'][] = ['label' => 'Civilitems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="civilitems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
