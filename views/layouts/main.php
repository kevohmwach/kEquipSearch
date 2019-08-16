<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
	<nav class="navbar navbar-default no-padding">
		<div class="container-fluid no-padding">
			<div class=" row topheader">
				<div class="col-md-2"></div>
				<div class="col-md-8 mainsearch-div">
					<form method="post">
						<h3><b>KEquipsearch & Chemicals.</b></h3>
						<input class = "main_searchtextfield"  type="textfield" placeholder="Search over 1000's of Products" required/>
						<input type = "submit" name = "search" value = "SEARCH"/></br>	
						<br>
					</form>
				</div>
			</div>
		</div>
	</nav>
    <br>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
	
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; KEquipsearch <?= date('Y') ?></p>

        <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
