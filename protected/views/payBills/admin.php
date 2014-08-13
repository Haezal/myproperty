<?php
/* @var $this PayBillsController */
/* @var $model PayBills */

$this->breadcrumbs=array(
    'Properties'=>array('/properties'),
    'Manage Bills'=>array('bills'),
	'Bill Payment',
);

$this->menu=array(
	array('label'=>'Bill Lists', 'url'=>array('/bills')),
    array('label'=>'Bill Details', 'url'=>array('bills/view', 'id'=>Yii::app()->session['bill_id'])),
	array('label'=>'Payment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pay-bills-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pay Bills</h1>

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
	'id'=>'pay-bills-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'year',
        array(
            'name'=>'month_id',
            'value'=>'(isset($data->month))?$data->month->name:null',
            'filter'=>CHtml::listData(Months::model()->findAll(), 'id', 'name'),
        ),
		'bill_date',
		'amount_due',
        array(
            'name'=>'is_pay',
            'value'=>'($data->is_pay==1) ? "Paid":"Unpaid"',
            'filter'=>array(1=>'Paid', 0=>'Unpaid'),
        ),
        array(
            'name'=>'pay_list_id',
            'value'=>'(isset($data->payList))?$data->payList->name:null',
            'filter'=>CHtml::listData(PayLists::model()->findAll(), 'id','name'),
        ),
		'payment_date',
		/*
        'from_date',
		'end_date',
		'is_active',
		'created',
		'modified',
		'created_by',
		'modified_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
