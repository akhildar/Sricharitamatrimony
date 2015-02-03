<?php
/* @var $this SriUsersPrimeDataController */
/* @var $model SriUsersPrimeData */
?>

<?php
$this->breadcrumbs=array(
	'Sri Users Prime Datas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SriUsersPrimeData', 'url'=>array('index')),
	array('label'=>'Create SriUsersPrimeData', 'url'=>array('create')),
	array('label'=>'Update SriUsersPrimeData', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SriUsersPrimeData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SriUsersPrimeData', 'url'=>array('admin')),
);
?>

<h1>View SriUsersPrimeData #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'first_name',
		'Last_name',
		'email',
		'password',
		'date_of_birth',
		'religion',
		'mother_tongue',
		'mobile_no',
		'gender',
	),
)); ?>