<?php
/* @var $this PropertyTenantsController */
/* @var $model PropertyTenants */

$this->breadcrumbs=array(
	'Property Tenants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PropertyTenants', 'url'=>array('index')),
	array('label'=>'Manage PropertyTenants', 'url'=>array('admin')),
);
?>

<h1>Create new tenant</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>