<?php
/* @var $this SiteLanguagesController */
/* @var $model SiteLanguages */

$this->breadcrumbs=array(
	'Site Languages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteLanguages', 'url'=>array('index')),
	array('label'=>'Create SiteLanguages', 'url'=>array('create')),
	array('label'=>'View SiteLanguages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteLanguages', 'url'=>array('admin')),
);
?>

<h1>Update SiteLanguages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>