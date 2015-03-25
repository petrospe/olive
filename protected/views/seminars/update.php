<?php
/* @var $this SeminarsController */
/* @var $model Seminars */

$this->breadcrumbs=array(
	'Seminars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seminars', 'url'=>array('index')),
	array('label'=>'Create Seminars', 'url'=>array('create')),
	array('label'=>'View Seminars', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Seminars', 'url'=>array('admin')),
);
?>

<h1>Update Seminars <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>