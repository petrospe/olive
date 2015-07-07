<?php
/* @var $this PublicationsController */
/* @var $model Publications */

$this->breadcrumbs=array(
	'Publications'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Publications', 'url'=>array('index')),
	array('label'=>'Create Publications', 'url'=>array('create')),
	array('label'=>'Update Publications', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Publications', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Publications', 'url'=>array('admin')),
);
?>

<h1>View Publications #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'publication_series_id',
		'serial',
		'pages',
		'vol',
		'year',
		'dimensions',
                'file_image.filename_sys',
		'file_abstract.filename_sys',
		'file_content.filename_sys',
		'topSellers',
		'inprint',
		'publicdate',
	),
)); ?>

<?php echo CHtml::Button('Back to Product',array('submit'=>array('products/view','id'=>$model->product_id))); ?>
