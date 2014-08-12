<?php
/* @var $this BillsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bills',
);

$this->menu=array(
    array('label'=>'View Properties', 'url'=>array('/properties/view','id'=>$id)),
	array('label'=>'Create Bills', 'url'=>array('create')),
	array('label'=>'Manage Bills', 'url'=>array('admin')),
);
?>

<h1>Property Details</h1>
<?php echo $this->renderPartial('_propertyDetails', array('model'=>$property));?>
<div style="margin-bottom:30px"></div>
<h1>Bills</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
