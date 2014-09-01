<?php
/* @var $this PropertiesController */
/* @var $model Properties */

$this->breadcrumbs=array(
	'Properties'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Properties', 'url'=>array('index')),
);
?>

<h1><span class="glyphicon glyphicon-calender"></span> Calendar View</h1>

<?php  
$this->widget('ext.calendar-advance.AdvanceCalendarWidget',array('month'=>$month, 'year'=>$year, 'events'=>$events));
?>