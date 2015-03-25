<?php
/* @var $this ClassifiedsController */
/* @var $model Classifieds */

$this->breadcrumbs=array(
	'Classifieds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Classifieds', 'url'=>array('index')),
	array('label'=>'Create Classifieds', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#classifieds-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Classifieds</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'classifieds-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'created_at',
		'ending_at',
		'email',
		'fullname',
		/*
		'tel',
		'code',
		'isactive',
		'mainbody_text',
		'category',
		'anonymous',
		'facebook_pubstatus',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
