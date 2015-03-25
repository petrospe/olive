<?php
/* @var $this SiteLanguagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Site Languages',
);

$this->menu=array(
	array('label'=>'Create SiteLanguages', 'url'=>array('create')),
	array('label'=>'Manage SiteLanguages', 'url'=>array('admin')),
);
?>

<h1>Site Languages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
