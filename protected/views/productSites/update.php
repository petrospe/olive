<?php
/* @var $this ProductSitesController */
/* @var $model ProductSites */

$this->breadcrumbs=array(
	'Product Sites'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductSites', 'url'=>array('index')),
	array('label'=>'Create ProductSites', 'url'=>array('create')),
	array('label'=>'View ProductSites', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductSites', 'url'=>array('admin')),
);
?>

<h1>Update ProductSites <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>