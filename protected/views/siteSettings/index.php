<?php
/* @var $this SiteSettingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Settings',
);

$this->menu=array(
	array('label'=>'Create SiteSettings', 'url'=>array('create')),
	array('label'=>'Manage SiteSettings', 'url'=>array('admin')),
);
?>

<h1>Site Settings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
