<?php
/* @var $this ClassifiedsController */
/* @var $model Classifieds */

$this->breadcrumbs=array(
	'Classifieds'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Classifieds', 'url'=>array('index')),
	array('label'=>'Create Classifieds', 'url'=>array('create')),
	array('label'=>'Update Classifieds', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Classifieds', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classifieds', 'url'=>array('admin')),
);
?>

<h1>View Classifieds #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'created_at',
		'ending_at',
		'email',
		'fullname',
		'tel',
		'code',
		'isactive',
		'mainbody_text',
		'category',
		'anonymous',
		'facebook_pubstatus',
	),
)); ?>
