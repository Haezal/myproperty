<?php
/* @var $this PropertyTenantsController */
/* @var $model PropertyTenants */

$this->breadcrumbs=array(
	'Property Tenants'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PropertyTenants', 'url'=>array('index')),
	array('label'=>'Create PropertyTenants', 'url'=>array('create')),
	array('label'=>'View PropertyTenants', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PropertyTenants', 'url'=>array('admin')),
);
?>

<h1>Update PropertyTenants <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>