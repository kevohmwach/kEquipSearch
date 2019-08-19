<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Electricalitems;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Electrical items';
$this->params['breadcrumbs'][] = $this->title;

$items = Electricalitems::find()->asArray()->all();
$maxrecords = Electricalitems::find()->count();
//$counter =1;

?>

<table class="table table-striped">
	
	<?php
		if(!empty($items)){
			?>
			<thead class="thead-dark">
				<tr>
					<th>No.</th>
					<th scope="col">Item</th>
					<th scope="col">Item Details.</th>
					<th scope="col">Dealer</th>
				</tr>
			</thead>
			<tbody>
			
			<?php 
				$counter = 1;
				foreach($items as $item){ 
					?>
						<tr>
							<th scope="row"><?= $counter;?></td>
							<td>
								<img src ="../uploads/<?=$item['kequip_prod_itemavatar'];?>" width="100px" height ="50px"><br>
								<?=
								 	'<b><br><span style="color:red">'.$item['kequip_prod_item'].'</span></b><br>';
								 	echo 'Manufacturer:'.'<b>'.$item['kequip_prod_manufacturer'].'</b><br>';
								 ?>
							</td>
							<td><?= $item['kequip_prod_itemdetails']; ?></td>
							<td>
								<img src ="../uploads/<?=$item['kequip_prod_dealerlogo'];?>" width="50px" height ="30px"><br>
								<?=
								 	'Dealer'.':<b>'.$item['kequip_prod_dealername'].'</b><br>';
								 	echo 'Telephone:'.'<b>'.$item['kequip_prod_dealerphonecontact'].'</b><br>';
								 	echo 'Email:'.'<b>'.$item['kequip_prod_dealeremailcontact'].'</b><br>';
								 ?>
							</td>
						</tr>
					<?php $counter = $counter + 1;
				}
			?>
			</tbody>
	<?php 
		}else {
			echo 'No records Availlable';
		}	
	?>
</table>
