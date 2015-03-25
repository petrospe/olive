<?php
/* @var $this AssociatesController */
/* @var $model Associates */

$this->breadcrumbs=array(
	'Associates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Associates', 'url'=>array('index')),
	array('label'=>'Create Associates', 'url'=>array('create')),
	array('label'=>'View Associates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Associates', 'url'=>array('admin')),
);
?>

<h1>Update Associates <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>