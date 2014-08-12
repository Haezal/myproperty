<?php
/* @var $this PropertyTenantsController */
/* @var $model PropertyTenants */

$this->breadcrumbs=array(
	'Property Tenants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tenants', 'url'=>array('index')),
	array('label'=>'Create Tenants', 'url'=>array('create')),
	array('label'=>'Update Tenants', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tenants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tenants', 'url'=>array('admin')),
);
?>

<h1>View PropertyTenants #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        array(
            'name'=>'property_id', 
            'value'=>(isset($model->property->address))?$model->property->address:null,
        ),
		'first_name',
		'last_name',
		'address',
		'address_more',
		'postcode',
		'city',
        array(
            'name'=>'state_id',
            'value'=>(isset($model->state)) ? $model->state->name:null,
        ),
		'phone_no',
		'more_phone_no',
        array(
            'name'=>'tenancy_status_id',
            'value'=>(isset($model->tenancyStatus)) ? $model->tenancyStatus->name:null,
        ),
		'move_in_date',
		'move_out_date',
		'deposit',
	),
)); ?>
