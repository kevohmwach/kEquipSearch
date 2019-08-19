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
    <?php /*
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    */?>
	
		<nav class="navbar navbar-default no-padding">
		<div class="container-fluid no-padding">
			<?php 
                if(empty($_get['type'])){
            ?>
                <div class="row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="<?= Yii::$app->request->baseUrl.'/images/screenshot.png'; ?>" width="30" height="20">
                    </a>
                </div>
                <div>
                    <ul class="nav navbar-nav nav-links">
                        <li class="active" ><a href="#">Home</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="<?php echo Url::toRoute('site/login'); ?>">Account</a></li>
                    </ul>
                </div>
            </div>

            <?php
                }
            ?>
            
			<div class=" row topheader">
				<div class="col-md-2"></div>
				<div class="col-md-8 search-div">
					<form method="post">
						<h2><b>KEquipsearch<br/> & Chemicals.</b></h2>
						<span style="color:yellow"><center><h4>Most Trusted Products In Kenya Market.</h4></center></span>
						<input class = "searchtextfield"  type="textfield" placeholder="Search over 1000's of Products" required/>
						<input type = "submit" name = "search" value = "SEARCH"/></br></br></br>	
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
