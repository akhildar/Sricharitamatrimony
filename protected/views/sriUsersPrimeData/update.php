<?php
/* @var $this SriUsersPrimeDataController */
/* @var $model SriUsersPrimeData */
?>

<?php
$this->breadcrumbs=array(
	'Sri Users Prime Datas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SriUsersPrimeData', 'url'=>array('index')),
	array('label'=>'Create SriUsersPrimeData', 'url'=>array('create')),
	array('label'=>'View SriUsersPrimeData', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SriUsersPrimeData', 'url'=>array('admin')),
);
?>

    <h1>Update SriUsersPrimeData <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>