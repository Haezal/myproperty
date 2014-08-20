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
        array(
            'name'=>'is_active',
            'value'=>($model->is_active==1)?"Active":"Not Active"
        ),
	),
)); ?>
