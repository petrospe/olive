<?php
/* @var $this SiteLanguagesController */
/* @var $model SiteLanguages */

$this->breadcrumbs=array(
	'Site Languages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SiteLanguages', 'url'=>array('index')),
	array('label'=>'Manage SiteLanguages', 'url'=>array('admin')),
);
?>

<h1>Create SiteLanguages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>