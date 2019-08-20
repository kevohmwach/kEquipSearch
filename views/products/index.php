<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Electricalcategory;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
//if(){}

$products = Electricalcategory::find()->asArray()->all();
$data = array();
$counter = 0;
$maxrecords = Electricalcategory::find()->count();
//echo $maxrecords;
//$type = $_GET('id'); 
//echo $type; exit;
//Yii:$app->request->queryParams['type'];
//if(!empty($_GET('type'))){

//}

foreach($products as $product){ 
	$data[$counter] = $product;
	//print_r($data); 
	$counter = $counter + 1;

}

?>
<?php
if($maxrecords>3){
?>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="<?php echo Url::toRoute('items/index').'?type=1'; ?>">
					<img src ="../uploads/<?=$data[0]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
					<h4><?=$data[0]['kequip_prod_subcategory'];?></h4>
					<b><?=$data[0]['kequip_prod_description'];?></b>
				</a>
			</div>
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[1]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[1]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[1]['kequip_prod_description'];?></b>
							
			</div>
				<div class="col-md-3">
				<img src ="../uploads/<?=$data[2]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[2]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[2]['kequip_prod_description'];?></b>
			</div>
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[3]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[3]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[3]['kequip_prod_description'];?></b>
			</div>
		</div>
	</div>
<br><br>

<?php }?>

<?php if($maxrecords>7){
?>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[4]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[4]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[4]['kequip_prod_description'];?></b>
			</div>
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[5]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[5]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[5]['kequip_prod_description'];?></b>
							
			</div>
				<div class="col-md-3">
				<img src ="../uploads/<?=$data[6]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[6]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[6]['kequip_prod_description'];?></b>
			</div>
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[7]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[7]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[7]['kequip_prod_description'];?></b>
			</div>
		</div>
	</div>
<br><br>

<?php }?>

<?php if($maxrecords>11){
?>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[8]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[8]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[8]['kequip_prod_description'];?></b>
			</div>
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[9]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[9]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[9]['kequip_prod_description'];?></b>
							
			</div>
				<div class="col-md-3">
				<img src ="../uploads/<?=$data[10]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[10]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[10]['kequip_prod_description'];?></b>
			</div>
			<div class="col-md-3">
				<img src ="../uploads/<?=$data[11]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
				<h4><?=$data[11]['kequip_prod_subcategory'];?></h4>
				<b><?=$data[11]['kequip_prod_description'];?></b>
			</div>
		</div>
	</div>
<br><br>

<?php }?>


<div class="container">
	<div class="row">
		<div class="col-md-3">
			<img src ="../uploads/<?=$data[0]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
			<h4><?=$data[0]['kequip_prod_subcategory'];?></h4>
			<b><?=$data[0]['kequip_prod_description'];?></b>
		</div>
		<div class="col-md-3">
			<img src ="../uploads/<?=$data[1]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
			<h4><?=$data[1]['kequip_prod_subcategory'];?></h4>
			<b><?=$data[1]['kequip_prod_description'];?></b>
						
		</div>
			<div class="col-md-3">
			<img src ="../uploads/<?=$data[0]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
			<h4><?=$data[0]['kequip_prod_subcategory'];?></h4>
			<b><?=$data[0]['kequip_prod_description'];?></b>
		</div>
		<div class="col-md-3">
			<img src ="../uploads/<?=$data[1]['kequip_prod_avatar'];?>" width="100px" height ="50px"><br>
			<h4><?=$data[1]['kequip_prod_subcategory'];?></h4>
			<b><?=$data[1]['kequip_prod_description'];?></b>
		</div>
	</div>
</div>


