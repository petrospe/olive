<?php
/* @var $this ClassifiedsCategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Classifieds Categories',
);

$this->menu=array(
	array('label'=>'Create ClassifiedsCategories', 'url'=>array('create')),
	array('label'=>'Manage ClassifiedsCategories', 'url'=>array('admin')),
);
?>

<h1>Classifieds Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
