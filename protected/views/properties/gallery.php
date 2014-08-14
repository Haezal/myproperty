<?php
/* @var $this AktivitiController */
/* @var $model Aktiviti */

$this->breadcrumbs=array(
	'Aktiviti'=>array('index'),
	'Kemaskini Galeri Aktiviti',
);
?>

<h1 class="portlet-title"> 
    <span class="portlet-title-text">Galeri Aktiviti : <?php echo $model->address;?></span>
</h1>
<div style="margin-top:30px"></div>

<?php $this->renderPartial('/site/gallery', array('gallery'=>$gallery)); ?>

<?php echo CHtml::link('Selesai', array('arkib'), array('class'=>'btn btn-primary'));?>