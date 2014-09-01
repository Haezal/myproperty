<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>
	Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i> 
	<?php if (!Yii::app()->user->isGuest): ?>
		<?php echo Yii::app()->getModule('user')->user()->profile->getAttribute('first_name'); ?> 
		<?php echo Yii::app()->getModule('user')->user()->profile->getAttribute('last_name'); ?>
	<?php endif ?>
</h1>

<?php if (!Yii::app()->user->isGuest): ?>
	<?php 
	// call property list by widgets
	// $this->widget('application.components.Properties.Properties'); 
	?>
<?php endif ?>