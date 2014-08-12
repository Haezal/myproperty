<?php
/* @var $this PropertyTenantsController */
/* @var $model PropertyTenants */

$this->breadcrumbs=array(
	'Property Tenants'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PropertyTenants', 'url'=>array('index')),
	array('label'=>'Create PropertyTenants', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#property-tenants-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Property Tenants</h1>

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
	'id'=>'property-tenants-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'property_id',
		'first_name',
		'last_name',
		'address',
		'address_more',
		/*
		'postcode',
		'city',
		'state_id',
		'phone_no',
		'more_phone_no',
		'tenancy_status_id',
		'move_in_date',
		'move_out_date',
		'deposit',
		'is_active',
		'created_by',
		'created',
		'modified_by',
		'modified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
