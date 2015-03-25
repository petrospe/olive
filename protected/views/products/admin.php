<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#products-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

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

<?php
$criteria = new CDbCriteria();
$criteria->condition = "parent_id > 0";

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'atlantis_id',
                 array(
                    'name'=>'productype_id',
                    'type'=>'raw', 'value'=>'Productypes::model()->findByPk($data->productype_id)->description',
                    'filter'=>CHtml::listData(Productypes::model()->findAll(), 'id', 'description'),
                        ),
		/*'productypes.description',*/
		/*'parent_id',*/
		'title',
		'title_en',
		/*
		'titleSEO',
		'subtitle',
		'subtitle_en',
		'description',
		'description_en',
		'active',
		'created',
		'updated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
