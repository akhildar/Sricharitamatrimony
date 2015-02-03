<?php
/* @var $this SriUsersPrimeDataController */
/* @var $model SriUsersPrimeData */
?>

<?php
$this->breadcrumbs=array(
	'Sri Users Prime Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SriUsersPrimeData', 'url'=>array('index')),
	array('label'=>'Manage SriUsersPrimeData', 'url'=>array('admin')),
);
?>

<h1>Create SriUsersPrimeData</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>