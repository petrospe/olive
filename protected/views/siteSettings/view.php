<?php
/* @var $this SiteSettingsController */
/* @var $model SiteSettings */

$this->breadcrumbs=array(
	'Site Settings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteSettings', 'url'=>array('index')),
	array('label'=>'Create SiteSettings', 'url'=>array('create')),
	array('label'=>'Update SiteSettings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteSettings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteSettings', 'url'=>array('admin')),
);
?>

<h1>View SiteSettings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'site_id',
		'about_us',
		'about_us_en',
		'about_us_URL',
		'footer',
		'footer_en',
	),
)); ?>
