<?php
/* @var $this BillsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bills',
);

$this->menu=array(
    array('label'=>'List Properties', 'url'=>array('/properties/index'), 'icon'=>'th-list'),
    array('label'=>'View Properties', 'url'=>array('/properties/view','id'=>$id), 'icon'=>'eye-open'),
	array('label'=>'Create Bills', 'url'=>array('create'), 'icon'=>'plus-sign'),
	array('label'=>'Manage Bills', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>View Properties #<?php echo $property->id;?></h1>

<?php echo $this->renderPartial('_propertyDetails', array('model'=>$property));?>
<div style="margin-bottom:30px"></div>
<h1>Bills</h1>
<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'bills-grid',
	'type'=>'bordered', 
	'dataProvider'=>$dataProvider->search(),
	'filter'=>$dataProvider,
	'columns'=>array(
		array(
			'name'=>'id',
			'value'=>'$data->id',
			'htmlOptions'=>array('width'=>'30px'),
		),
		array(
			'name'=>'bill_type_id', 
			'value'=>'(isset($data->billType->name))?$data->billType->name:null', 
			'filter'=>CHtml::listData(BillTypes::model()->findAll(), 'id', 'name')
		),
		'account_no',
		'collateral',
		array(
			'name'=>'is_active', 
			'type'=>'raw',
			'value'=>'($data->is_active)?"<span class=\"label label-success\">Active</span>":"<span class=\"label label-important\">Not Active</span>"',
			'htmlOptions'=>array('width'=>'100px'),
			'filter'=>array(1=>'Active', 0=>'Not Active'),
		),
		array(
			'class'=>'booster.widgets.TbButtonColumn',
			'htmlOptions'=>array('width'=>'80px'),
		),
	),
)); ?>