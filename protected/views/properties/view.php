<?php
Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/slider.js'
);
Yii::app()->clientScript->registerScriptFile(
    Yii::app()->baseUrl.'/js/jquery.flexslider-min.js'
);
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/js/flexslider.css');

$baseUrl = Yii::app()->request->baseUrl;
?>
<?php
/* @var $this PropertiesController */
/* @var $model Properties */

$this->breadcrumbs=array(
	'Properties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Properties', 'url'=>array('index')),
	array('label'=>'Create Properties', 'url'=>array('create')),
	array('label'=>'Update Properties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Properties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Properties', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
    array('label'=>'Manage Tenant', 'url'=>array('/propertyTenants/index', 'id'=>$model->id), 'visible'=>($model->property_status_id==1)),
    array('label'=>'Manage Bill','url'=>array('/bills/index','id'=>$model->id)),
);
?>

<h1>View Properties #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        array(
            'name'=>'property_type_id',
            'value'=>(isset($model->propertyType))?$model->propertyType->name:null,
        ),
        array(
            'name'=>'property_status_id',
            'value'=>(isset($model->propertyStatus))?$model->propertyStatus->name:null,
        ),
		'address',
		'address_more',
		'postcode',
		'city',
		'state_id',
        array(
            'name'=>'is_active',
            'value'=>($model->is_active==1)?"Active":"Not Active"
        ),
	),
)); ?>
<div class="col-md-8">
	<?php if(isset($images)){?>
	<h1>Galeri gambar</h1>
	<div id="slider" class="flexslider">
	  <ul class="slides">   
		<?php foreach ($images as $img) : ?>
		 <li>
			<?php echo $img['content']; ?>
		 </li>
		<?php endforeach; ?>
	  </ul>
	</div>

	<div id="carousel" class="flexslider">
	  <ul class="slides">   
		<?php foreach ($images as $img) : ?>
		 <li>
			<?php echo $img['thumb']; ?>
		 </li>
		<?php endforeach; ?>
	  </ul>
	</div>
	<?php } ?>
</div>