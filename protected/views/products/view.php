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
		'subtitle:html',
		'subtitle_en:html',
		'description:html',
		'description_en:html',
		'active',
		'created',
		'updated',
	),
)); ?>
<?php
    $criteria = new CDbCriteria();
    $criteria->condition = 'product_id='.$model->id;
    $pricesDataProvider = new CActiveDataProvider('Prices',array('criteria'=>$criteria));
    $productSitesDataProvider = new CActiveDataProvider('ProductSites',array('criteria'=>$criteria));
    $productAssociatesDataProvider = new CActiveDataProvider('ProductAssociates',array('criteria'=>$criteria));
    $filesDataProvider = new CActiveDataProvider('Files',array('criteria'=>$criteria));
    
if ($model->productype_id==1 || $model->productype_id==2 || $model->productype_id==3):

    $publicationsDataProvider = new CActiveDataProvider('Publications',array('criteria'=>$criteria));
    $productCategoriesDataProvider = new CActiveDataProvider('ProductCategories',array('criteria'=>$criteria));
    $productTagsDataProvider = new CActiveDataProvider('ProductTags',array('criteria'=>$criteria));

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
    
    if(!empty($productCategoriesDataProvider->ItemCount))
    {
            $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'product-categories-grid',
                'summaryText'=>'<h1>Manage Categories #</h1>',
                'dataProvider'=>$productCategoriesDataProvider,
                'columns'=>array(
                        /*array(
                                    'name'=>'category_id',
                                    'type'=>'raw', 'value'=>'Categories::model()->findByPk($data->category_id)->title',
                                        ),*/
                        array(
                                    'name'=>'category_id',
                                    'type'=>'raw', 'value'=>'Categories::model()->findByPk($data->category_id)->title',
                                        ),
                        array(
                                'class'=>'CButtonColumn',
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                        ),
                                                    'url'=>'Yii::app()->createUrl("productCategories/view", array("id"=>$data->id))'
                                                    ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productCategories/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productCategories/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    {
    echo CHtml::Button('Add Category',array('submit'=>array('productCategories/create','product_id'=>$model->id)));
    }
    
    if(!empty($productTagsDataProvider->ItemCount))
    {
            $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'product-tags-grid',
                'summaryText'=>'<h1>Manage Tags #</h1>',
                'dataProvider'=>$productTagsDataProvider,
                'columns'=>array(
                        array(
                                    'name'=>'tag_id',
                                    'type'=>'raw', 'value'=>'Tags::model()->findByPk($data->tag_id)->description',
                                        ),
                        array(
                                'class'=>'CButtonColumn',
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                        ),
                                                    'url'=>'Yii::app()->createUrl("productTags/view", array("id"=>$data->id))'
                                                    ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productTags/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productTags/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    {
    echo CHtml::Button('Add Tag',array('submit'=>array('productTags/create','product_id'=>$model->id)));
    }
    
    endif;
    
    if ($model->productype_id==4 || $model->productype_id==5 || $model->productype_id==6):

        $seminarDataProvider = new CActiveDataProvider('Seminars',array('criteria'=>$criteria));

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
    endif;

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

    if(!empty($filesDataProvider->itemCount))
    {
        $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'files-grid',
                'summaryText'=>'<h1>Manage Files #</h1>',
                'dataProvider'=>$filesDataProvider,
                'columns'=>array(
 		'id',
		'filename',
		'filename_sys',
		'file_type',
		'file_size',
		'file_path',
                'filescategories.description',
		'create_date',
		'modification_date',
                        array(
                                'class'=>'CButtonColumn',
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                        ),
                                                    'url'=>'Yii::app()->createUrl("files/view", array("id"=>$data->id))'
                                                    ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("files/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("files/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    {
    echo CHtml::Button('Add File',array('submit'=>array('files/create','product_id'=>$model->id)));
    }
    
    if(!empty($productSitesDataProvider->itemCount))
    {
            $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'product-sites-grid',
                'summaryText'=>'<h1>Manage Sites #</h1>',
                'dataProvider'=>$productSitesDataProvider,
                'columns'=>array(
                        array(
                                    'name'=>'site_id',
                                    'type'=>'raw', 'value'=>'Sites::model()->findByPk($data->site_id)->description',
                                        ),
                        /*'site_id',*/
                        array(
                                'class'=>'CButtonColumn',
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                        ),
                                                    'url'=>'Yii::app()->createUrl("productSites/view", array("id"=>$data->id))'
                                                    ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productSites/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productSites/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    if($productSitesDataProvider->itemCount < 2)
    {
    echo CHtml::Button('Add Site',array('submit'=>array('productSites/create','product_id'=>$model->id)));
    }

    if(!empty($productAssociatesDataProvider->itemCount))
    {
            $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'product-associates-grid',
                'summaryText'=>'<h1>Manage Associates #</h1>',
                'dataProvider'=>$productAssociatesDataProvider,
                'columns'=>array(
                        array(
                                    'name'=>'first_name',
                                    'type'=>'raw', 'value'=>'Associates::model()->findByPk($data->associate_id)->first_name',
                                        ),
                        array(
                                    'name'=>'last_name',
                                    'type'=>'raw', 'value'=>'Associates::model()->findByPk($data->associate_id)->last_name',
                                        ),
                        array(
                                    'name'=>'attribute_id',
                                    'type'=>'raw', 'value'=>'Attributes::model()->findByPk($data->attribute_id)->description',
                                        ),
                        'ordering',
                        /*'site_id',*/
                        array(
                                'class'=>'CButtonColumn',
                                'template' => '{view}{update}{delete}',
                                'buttons' => array(
                                            'view'=>array(
                                                    'label'=> 'View',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                        ),
                                                    'url'=>'Yii::app()->createUrl("productAssociates/view", array("id"=>$data->id))'
                                                    ),
                                            'update'=>array(
                                                    'label'=> 'Update',
                                                    'options'=>array(
                                                        'class'=>'view'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productAssociates/update", array("id"=>$data->id))'
                                                ),
                                            'delete'=>array(
                                                    'label'=> 'Delete',
                                                    'options'=>array(
                                                        'class'=>'delete'
                                                    ),
                                                    'url'=>'Yii::app()->createUrl("productAssociates/delete", array("id"=>$data->id))'
                                                ),
                                            ),
                        ),
                ),
        ));
    }
    {
    echo CHtml::Button('Add Associate',array('submit'=>array('productAssociates/create','product_id'=>$model->id)));
    }

?>