<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<div class="row">
		<div class="col-md-3">
			<?php
				// $this->beginWidget('zii.widgets.CPortlet', array(
				// 	'title'=>'Operations',
				// ));
				$this->widget('booster.widgets.TbMenu', array(
					'items'=>$this->menu,
					'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
		            'stacked'=>true, // whether this is a stacked menu
					'htmlOptions'=>array('class'=>'operations'),
				));
				// $this->endWidget();
			?>
		</div>
		<div class="col-md-9">
			<?php echo $content; ?>
		</div>
	</div>
<?php $this->endContent(); ?>