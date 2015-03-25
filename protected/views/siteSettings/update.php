<?php
/* @var $this SiteSettingsController */
/* @var $model SiteSettings */

$this->breadcrumbs=array(
	'Site Settings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteSettings', 'url'=>array('index')),
	array('label'=>'Create SiteSettings', 'url'=>array('create')),
	array('label'=>'View SiteSettings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteSettings', 'url'=>array('admin')),
);
?>

<h1>Update SiteSettings <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>