<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'KEquipment Search';
use app\models\categories;



$categories = Categories::find()->asArray()->all();
$data = array();
$counter = 0;
$maxrecords = Categories::find()->count();
//echo $maxrecords;

foreach($categories as $category){ 
	$data[$counter] = $category;
	//print_r($data); 
	$counter = $counter + 1;
}

//print_r($data); exit;

?>
<div class="site-index">
	<center>
		<p><a href = "#">PRODUCT CATEGORIES</a></p>
	</center>
	<div class="container product-categories">
		<center>
			<?php 
				if($maxrecords>=3){ 
			?>
					<div class = "row">
						<div class="col-md-4" style="padding-bottom:  5%">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[0]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="<?php echo Url::toRoute('products/index').'?type=1'; ?>"><?=$data[0]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
						<div class="col-md-4">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[1]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[1]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
						<div class="col-md-4">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[2]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[2]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
					</div>

			<?php 
				} 
			?>


			<?php 
				if($maxrecords>=6){ 
			?>
					<div class = "row">
						<div class="col-md-4" style="padding-bottom:  5%">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[3]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[3]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
						<div class="col-md-4">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[4]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[4]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
						<div class="col-md-4">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[5]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[5]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
					</div>

			<?php 
				} 
			?>



				<?php 
				if($maxrecords>=9){ 
			?>
					<div class = "row">
						<div class="col-md-4" style="padding-bottom:  5%">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[6]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[6]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
						<div class="col-md-4">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[7]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[7]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
						<div class="col-md-4">
							<img src="<?= Yii::$app->request->baseUrl.'/uploads/'.$data[8]['kequip_prod_categoryavatar'];?>" width="150px" height="100px"/>
							<p id="chemical"><a href="#"><?=$data[8]['kequip_prod_category'].' '.'Equipment';?></a></p>
						</div>
						
					</div>

			<?php 
				} 
			?>
		</center>	
	</div>
	<br>
	<br>
	<br>
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
