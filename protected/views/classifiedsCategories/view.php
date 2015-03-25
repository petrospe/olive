<?php
/* @var $this ClassifiedsCategoriesController */
/* @var $model ClassifiedsCategories */

$this->breadcrumbs=array(
	'Classifieds Categories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ClassifiedsCategories', 'url'=>array('index')),
	array('label'=>'Create ClassifiedsCategories', 'url'=>array('create')),
	array('label'=>'Update ClassifiedsCategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClassifiedsCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClassifiedsCategories', 'url'=>array('admin')),
);
?>

<h1>View ClassifiedsCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'vieworder',
		'isactive',
	),
)); ?>
