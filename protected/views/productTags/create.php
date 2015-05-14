<?php
/* @var $this ProductTagsController */
/* @var $model ProductTags */

$this->breadcrumbs=array(
	'Product Tags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductTags', 'url'=>array('index')),
	array('label'=>'Manage ProductTags', 'url'=>array('admin')),
);
?>

<h1>Create ProductTags</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>