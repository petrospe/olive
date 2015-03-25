<?php
/* @var $this ClassifiedsCategoriesController */
/* @var $model ClassifiedsCategories */

$this->breadcrumbs=array(
	'Classifieds Categories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClassifiedsCategories', 'url'=>array('index')),
	array('label'=>'Create ClassifiedsCategories', 'url'=>array('create')),
	array('label'=>'View ClassifiedsCategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClassifiedsCategories', 'url'=>array('admin')),
);
?>

<h1>Update ClassifiedsCategories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>