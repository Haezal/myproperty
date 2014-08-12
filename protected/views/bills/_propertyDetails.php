<?php $this->widget('zii.widgets.CDetailView', array(
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
