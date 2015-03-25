<?php
/* @var $this SiteSettingsController */
/* @var $model SiteSettings */

$this->breadcrumbs=array(
	'Site Settings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteSettings', 'url'=>array('index')),
	array('label'=>'Manage SiteSettings', 'url'=>array('admin')),
);
?>

<h1>Create SiteSettings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>