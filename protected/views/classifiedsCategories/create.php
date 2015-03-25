<?php
/* @var $this ClassifiedsCategoriesController */
/* @var $model ClassifiedsCategories */

$this->breadcrumbs=array(
	'Classifieds Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClassifiedsCategories', 'url'=>array('index')),
	array('label'=>'Manage ClassifiedsCategories', 'url'=>array('admin')),
);
?>

<h1>Create ClassifiedsCategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>