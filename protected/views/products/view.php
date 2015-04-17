<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>
<h1>View Products #<?php echo $model->id; ?></h1>



<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'atlantis_id',
		'productype_id',
		'parent_id',
		'title',
		'title_en',
		'titleSEO',
		'subtitle',
		'subtitle_en',
		'description:html',
		'description_en',
		'active',
		'created',
		'updated',
	),
)); ?>
<?php
if ($model->productype_id==1 || $model->productype_id==2 || $model->productype_id==3):

    $criteria = new CDbCriteria();
    $criteria->condition = 'product_id='.$model->id;
    $publicationsDataProvider = new CActiveDataProvider('Publications',array('criteria'=>$criteria));
    $pricesDataProvider = new CActiveDataProvider('Prices',array('criteria'=>$criteria));
    
    if(!empty($publicationsDataProvider->itemCount))
    {
        $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'publications-grid',
                'summaryText'=>'<h1>Manage Publication #</h1>',
                'dataProvider'=>$publicationsDataProvider,
                'columns'=>array(
                        'id',
                        /*'product_id',
                        array(
                            'name'=>'publication_series_id',
                            'type'=>'raw', 'value'=>'PublicationSeries::model()->findByPk($data->publication_series_id)->description',
                                ),
                        'publication_series_id',*/
                        'serial',
                        'pages',
                        'vol',
                        'year',
                        'dimensions',
                        'image',
                        'abstract',
                        'content',
                        'topSellers',
                        'inprint',
                        'publicdate',
                        array(
                                'class'=>'CButtonColumn',
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("publications/view", array("id"=>$data->id))'
                                                ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("publications/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("publications/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    else 
    {
        echo CHtml::Button('Add Publication',array('submit'=>array('publications/create','product_id'=>$model->id)));
    }
   
    if(!empty($pricesDataProvider->itemCount))
    {
        $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'prices-grid',
                'summaryText'=>'<h1>Manage Prices #</h1>',
                'dataProvider'=>$pricesDataProvider,
                'columns'=>array(
                        'id',
                        /*array(
                            'name'=>'product_id',
                            'type'=>'raw', 'value'=>'Products::model()->findByPk($data->product_id)->title',
                                ),
                        'product_id',*/
                        'individuals',
                        'companies',
                        'initialind',
                        'initialcom',
                        'NoDiscountInd',
                        'NoDiscountCom',
                        /*'lawyers',
                        'practicingLawyers',
                        'laywerCompanies',
                        'NoDiscountLCom',
                        'newLawyers',
                        'NoDiscountNLaw',*/
                        'students',
                        /*'accountants',
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
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                        ),
                                                    'url'=>'Yii::app()->createUrl("prices/view", array("id"=>$data->id))'
                                                    ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("prices/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("prices/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    else 
    {
    echo CHtml::Button('Add Price',array('submit'=>array('prices/create','product_id'=>$model->id)));
    }
endif;

if ($model->productype_id==4 || $model->productype_id==5 || $model->productype_id==6):

    $criteria = new CDbCriteria();
    $criteria->condition = 'product_id='.$model->id;
    $seminarDataProvider = new CActiveDataProvider('Seminars',array('criteria'=>$criteria));
    $pricesDataProvider = new CActiveDataProvider('Prices',array('criteria'=>$criteria));
    
    if(!empty($seminarDataProvider->itemCount))
    {
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seminars-grid',
        'summaryText'=>'<h1>Manage Seminar #</h1>',
	'dataProvider'=>$seminarDataProvider,
	'columns'=>array(
		'id',
		'startdate',
		'duration',
		'publicdate',
		'demovideo',
		/*
		'distance_learning',
		'live',
		*/
		array(
			'class'=>'CButtonColumn',
                                    'template' => '{view}{update}{delete}',
                                    'buttons' => array(
                                        'view'=>array(
                                            'label'=> 'View',
                                            'options'=>array(
                                                'class'=>'view'
                                            ),
                                            'url'=>'Yii::app()->createUrl("seminars/view", array("id"=>$data->id))'
                                        ),
                                        'update'=>array(
                                            'label'=> 'Update',
                                            'options'=>array(
                                                'class'=>'view'
                                            ),
                                            'url'=>'Yii::app()->createUrl("seminars/update", array("id"=>$data->id))'
                                        ),
                                        'delete'=>array(
                                            'label'=> 'Delete',
                                            'options'=>array(
                                                'class'=>'delete'
                                            ),
                                            'url'=>'Yii::app()->createUrl("seminars/delete", array("id"=>$data->id))'
                                        ),
                                    ),
		),
	),
));
    }
    else 
    {
        echo CHtml::Button('Add Seminar',array('submit'=>array('seminars/create','product_id'=>$model->id)));
    }
    
    if(!empty($pricesDataProvider->itemCount))
    {
        $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'prices-grid',
                'summaryText'=>'<h1>Manage Prices #</h1>',
                'dataProvider'=>$pricesDataProvider,
                'columns'=>array(
                        'id',
                        /*array(
                            'name'=>'product_id',
                            'type'=>'raw', 'value'=>'Products::model()->findByPk($data->product_id)->title',
                                ),
                        'product_id',*/
                        'individuals',
                        'companies',
                        /*'initialind',
                        'initialcom',
                        'NoDiscountInd',
                        'NoDiscountCom',*/
                        'lawyers',
                        'practicingLawyers',
                        'laywerCompanies',
                        /*'NoDiscountLCom',*/
                        'newLawyers',
                        /*'NoDiscountNLaw',*/
                        'students',
                        'accountants',
                        'practicingAccountants',
                        /*'discountExpiration',
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
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                        ),
                                                    'url'=>'Yii::app()->createUrl("prices/view", array("id"=>$data->id))'
                                                    ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("prices/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("prices/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    else 
    {
    echo CHtml::Button('Add Price',array('submit'=>array('prices/create','product_id'=>$model->id)));
    }
    
endif;
?>