<?php
/* @var $this PropertyTenantsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Property Tenants',
);

$this->menu=array(
	array('label'=>'Create PropertyTenants', 'url'=>array('create')),
	array('label'=>'Manage PropertyTenants', 'url'=>array('admin')),
);
?>

<h1>Property Tenants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
