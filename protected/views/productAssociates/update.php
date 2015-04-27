<?php
/* @var $this ProductAssociatesController */
/* @var $model ProductAssociates */

$this->breadcrumbs=array(
	'Product Associates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductAssociates', 'url'=>array('index')),
	array('label'=>'Create ProductAssociates', 'url'=>array('create')),
	array('label'=>'View ProductAssociates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductAssociates', 'url'=>array('admin')),
);
?>

<h1>Update ProductAssociates <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>