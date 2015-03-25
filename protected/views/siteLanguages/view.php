<?php
/* @var $this SiteLanguagesController */
/* @var $model SiteLanguages */

$this->breadcrumbs=array(
	'Site Languages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteLanguages', 'url'=>array('index')),
	array('label'=>'Create SiteLanguages', 'url'=>array('create')),
	array('label'=>'Update SiteLanguages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteLanguages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteLanguages', 'url'=>array('admin')),
);
?>

<h1>View SiteLanguages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'language',
		'URL',
	),
)); ?>
