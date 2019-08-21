<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'KEquipment Search';
use app\models\Categories;



//echo 'welcome to remote files'; exit;
/*$categories = Categories::find()->asArray()->all();
$data = array();
$counter = 0;
$maxrecords = Categories::find()->count();
//echo $maxrecords;

foreach($categories as $category){ 
	$data[$counter] = $category;
	//print_r($data); 
	$counter = $counter + 1;
}*/

//print_r($data); exit;
//phpversion();
//phpinfo(); exit;

?>
<div class="site-index">
	<center>
		<p><a href = "#">PRODUCT CATEGORIES</a></p>
	</center>
	
	<center>
		<p>
			<a href = "#">LATEST PRODUCTS</a>
			<hr>
		</p>
	</center>

		
		<div class="container latest-products">
		<center>
			<div class="row">
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br>LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
				<div class="col-md-3 latest-item">
					<img src="<?= Yii::$app->request->baseUrl.'/images/robot.jpg'; ?>"/>
					<br><br>
					<p>EQUIPMENT DESCRIPTION</p>
					<div class = "innerdiv">
						<p><a href = "#">INDUSTRY NAME AND <br> LOGO</a></p>
					</div>
				</div>
			</div>
		</center>
		</div>
