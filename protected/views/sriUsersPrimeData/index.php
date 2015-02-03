<?php
/* @var $this SriUsersPrimeDataController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Sri Users Prime Datas',
);

$this->menu=array(
	array('label'=>'Create SriUsersPrimeData','url'=>array('create')),
	array('label'=>'Manage SriUsersPrimeData','url'=>array('admin')),
);
?>

<h1>Sri Users Prime Datas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>