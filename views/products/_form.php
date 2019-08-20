<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use app\models\Electricalcategory;
use app\models\Civilcategory;
use app\models\Chemicalcategory;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\Models\ElectricalCategory */
/* @var $form yii\widgets\ActiveForm */
?>
<?php 

$type = $_GET['type'];
if(!empty($type)){
	if($type==1){
		$products = Electricalcategory::find()->asArray()->all();
		//$title = 'Electrical Categories';
		$this->title = 'Electrical Categories';
		$this->params['breadcrumbs'][] = ['label' => 'Electrical Categories'];
		$maxrecords = Electricalcategory::find()->count();
	}
	if($type==3){
		$products = Chemicalcategory::find()->asArray()->all();
		$this->title = 'Chemical Categories';
		//$title = 'Chemical Categories';
		$this->params['breadcrumbs'][] = ['label' => 'Chemical Categories'];
		$maxrecords = Chemicalcategory::find()->count();
	}
	if($type==2){
		$products = Civilcategory::find()->asArray()->all();
		$this->title = 'Civil Categories';
		//$title = 'Civil Categories';
		$this->params['breadcrumbs'][] = ['label' => 'Civil Categories'];
		$maxrecords = Civilcategory::find()->count();
	}
}

?>

<?php
//$this->params['breadcrumbs'][] = $this->title;

$data = array();
$counter = 0;

//echo $maxrecords;

if(!empty($products)){
		foreach($products as $product){ 
		$data[$counter] = $product;
		//print_r($data); 
		$counter = $counter + 1;
	}
}

?>
<?php
if(!empty($products) && $maxrecords>3){
	//echo '<h3>'.$title.'</h3>';
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

<?php if(!empty($products) && $maxrecords>7){
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

<?php if(!empty($products) && $maxrecords>11){
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
