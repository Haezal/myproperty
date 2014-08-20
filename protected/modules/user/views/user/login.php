<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<h1><?php echo UserModule::t("Login"); ?></h1>

<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>

<p><?php echo UserModule::t("Please fill out the following form with your login credentials:"); ?></p>

<div class="row">
	<div class="col-md-4">
		<?php echo CHtml::beginForm(array('class'=>'form-horizontal')); ?>

			<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
			
			<?php echo CHtml::errorSummary($model); ?>

			<div class="form-group">
				<?php echo CHtml::activeLabelEx($model,'username', array('class'=>'col-sm-5 control-label')); ?>
				<?php echo CHtml::activeTextField($model,'username', array('class'=>'form-control')) ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::activeLabelEx($model,'password', array('class'=>'col-sm-5 control-label')); ?>
				<?php echo CHtml::activePasswordField($model,'password', array('class'=>'form-control')) ?>
			</div>
			
			<div class="row">
				<p class="hint">
				<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
				</p>
			</div>
			
			<div class="row rememberMe">
				<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
				<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<?php echo CHtml::submitButton(UserModule::t("Login"), array('class'=>'btn btn-default')); ?>
				</div>
			</div>
			
		<?php echo CHtml::endForm(); ?>
	</div>
</div><!-- form -->


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>