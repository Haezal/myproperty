<?php
/* @var $this PropertiesController */
/* @var $model Properties */

$this->breadcrumbs=array(
	'Properties'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Properties', 'url'=>array('index')),
	array('label'=>'Create Properties', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#properties-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Properties</h1>

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
	'id'=>'properties-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
        array(
            'name'=>'property_type_id',
            'value'=>'(isset($data->propertyType)) ? $data->propertyType->name:"-"',
        ),
        array(
            'name'=>'property_status_id',
            'value'=>'(isset($data->propertyStatus))?$data->propertyStatus->name:"-"',
        ),
		'address',
		'address_more',
		'postcode',
		'city',
		array(
            'name'=>'state_id',
            'value'=>'(isset($data->state))?$data->state->name:"-"',
        ),
        /*
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
