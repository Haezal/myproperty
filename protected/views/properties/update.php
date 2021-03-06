<?php
/* @var $this PropertiesController */
/* @var $model Properties */

$this->breadcrumbs=array(
	'Properties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Properties', 'url'=>array('index')),
	array('label'=>'Create Properties', 'url'=>array('create')),
	array('label'=>'View Properties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Properties', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Update Properties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array(
    'model'=>$model,
    'propertyTypes'=>$propertyTypes,
    'propertyStatuses'=>$propertyStatuses,
    'states'=>$states,
    'users'=>$users,
)); ?>
<?php $this->renderPartial('/site/gallery', array('gallery'=>$model->gallery)); ?>