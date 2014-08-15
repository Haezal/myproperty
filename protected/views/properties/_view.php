<?php
/* @var $this PropertiesController */
/* @var $data Properties */
?>
<?php $box = $this->beginWidget(
    'booster.widgets.TbPanel',
    array(
        'title' => CHtml::encode($data->propertyType->name),
        'headerIcon' => 'home',
    	'padContent' => true,
    )
);?>

<div class="row">
	<div class="col-md-3">
		<?php 
		// get thumbnails by ranking no 1 per property_id
		$images=GalleryPhoto::model()->findByAttributes(array('gallery_id'=>$data->gallery_id));


		?>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<?php  
				if($images){
					echo CHtml::image(Yii::app()->request->baseUrl .'/gallery/'.$images->id.'small.jpg'); 
				}
				else{
					echo CHtml::image(Yii::app()->request->baseUrl .'/images/nophoto.png'); 
				}
				?>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<b><?php echo CHtml::encode($data->getAttributeLabel('property_status_id')); ?>:</b>
		<?php echo CHtml::encode($data->propertyStatus->name); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
		<?php echo CHtml::encode($data->address); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('address_more')); ?>:</b>
		<?php echo CHtml::encode($data->address_more); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
		<?php echo CHtml::encode($data->postcode); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
		<?php echo CHtml::encode($data->city); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('state_id')); ?>:</b>
		<?php echo CHtml::encode($data->state->name); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
		<?php echo CHtml::encode($data->is_active); ?>
		<br />
	    <div style="float:right;">
	        <?php echo CHtml::link('View more &raquo;', array('view', 'id'=>$data->id),array('class'=>'btn btn-xs btn-default')); ?>
	    </div>
	    <div class="clearfix"></div>
	</div>
</div>
<?php $this->endWidget() ?>