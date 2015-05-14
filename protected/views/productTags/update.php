<?php
/* @var $this ProductTagsController */
/* @var $model ProductTags */

$this->breadcrumbs=array(
	'Product Tags'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductTags', 'url'=>array('index')),
	array('label'=>'Create ProductTags', 'url'=>array('create')),
	array('label'=>'View ProductTags', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductTags', 'url'=>array('admin')),
);
?>

<h1>Update ProductTags <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>