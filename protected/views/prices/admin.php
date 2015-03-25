<?php
/* @var $this PricesController */
/* @var $model Prices */

$this->breadcrumbs=array(
	'Prices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Prices', 'url'=>array('index')),
	array('label'=>'Create Prices', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prices-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Prices</h1>

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
	'id'=>'prices-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
                array(
                    'name'=>'product_id',
                    'type'=>'raw', 'value'=>'Products::model()->findByPk($data->product_id)->title',
                        ),
		/*'product_id',*/
		'individuals',
		'companies',
		'initialind',
		'initialcom',
		/*
		'NoDiscountInd',
		'NoDiscountCom',
		'lawyers',
		'practicingLawyers',
		'laywerCompanies',
		'NoDiscountLCom',
		'newLawyers',
		'NoDiscountNLaw',
		'students',
		'accountants',
		'practicingAccountants',
		'discountExpiration',
		'discountTitle',
		'discountTitle_en',
		'discountCode',
		'discountCode_en',
		'discountPercentage',
		'ShowFrontPage',
		'discountLabel',
		'discountLabel_en',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
