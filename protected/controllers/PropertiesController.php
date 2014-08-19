<?php

class PropertiesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'gallery', 'delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$height=600;
		$width=800;

		$model=$this->loadModel($id);

		// get gallery photo to view
		$gallery = GalleryPhoto::model()->findAllByAttributes(array('gallery_id'=>$model->gallery_id));

        $images = null;
		if($gallery){
            foreach($gallery as $v) {
                $images[$v->id]['id'] = $v->id;
                $images[$v->id]['caption'] = $v->description;
                $images[$v->id]['content'] = '<img height="'.$height.'" width="'.$width.'" src="' . Yii::app()->createUrl("site/showImage", array("id" => $v->id,'height'=>600,'width'=>800)).'" />';
                $images[$v->id]['thumb'] = '<img src="' . Yii::app()->createUrl("site/showImage", array("id" => $v->id,'height'=>600,'width'=>800)).'" />';
            }
        }

		$this->render('view',array(
			'model'=>$model,
			'gallery'=>$gallery,
			'images'=>$images,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
        $user_id = Yii::app()->user->id;
		$model=new Properties;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Properties']))
		{
			$model->attributes=$_POST['Properties'];
            if(!Yii::app()->user->isAdmin())
                $model->user_id=$user_id;
			if($model->save()){

				$gallery = new Gallery();
				$gallery->name = true;
				$gallery->description = true;
				$gallery->versions = array(
				    'small' => array(
				        'resize' => array(200, null),
				    ),
				    'medium' => array(
				        'resize' => array(800, null),
				    )
				);
				$gallery->save();

				$model->gallery_id=$gallery->id;
				$model->save();
				$this->redirect(array('gallery','id'=>$model->id));
			}
		}

		// get dropdown value
		$propertyTypes=CHtml::listData(PropertyTypes::model()->findAll(), 'id', 'name');
        $propertyStatuses=CHtml::listData(PropertyStatuses::model()->findAll(), 'id', 'name');
        $states=CHtml::listData(States::model()->findAll(), 'id', 'name');
        $users=CHtml::listData(User::model()->findAll(), 'id', 'username');

		$this->render('create',array(
			'model'=>$model,
            'propertyTypes'=>$propertyTypes,
            'propertyStatuses'=>$propertyStatuses,
            'states'=>$states,
            'users'=>$users,
		));
	}

    public function actionGallery($id){
        $model = $this->loadModel($id);

        $gallery = Gallery::model()->findByPk($model->gallery_id);

        $this->render('gallery', array('model'=>$model, 'gallery'=>$gallery));
    }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$gallery=$model->gallery;
		if(!$gallery){
			$gallery=new Gallery;
		}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Properties']))
		{
			$model->attributes=$_POST['Properties'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		// get dropdown value
		$propertyTypes=CHtml::listData(PropertyTypes::model()->findAll(), 'id', 'name');
        $propertyStatuses=CHtml::listData(PropertyStatuses::model()->findAll(), 'id', 'name');
        $states=CHtml::listData(States::model()->findAll(), 'id', 'name');
        $users=CHtml::listData(User::model()->findAll(), 'id', 'username');

		$this->render('update',array(
			'model'=>$model,
            'propertyTypes'=>$propertyTypes,
            'propertyStatuses'=>$propertyStatuses,
            'states'=>$states,
            'users'=>$users,
            'gallery'=>$gallery,
		));
	}


	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : (Yii::app()->user->isAdmin()) ? array('admin'):array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        if(Yii::app()->user->isAdmin()){
            $dataProvider=new CActiveDataProvider('Properties');
        }
        else{
            $dataProvider=new CActiveDataProvider('Properties', array(
                'criteria'=>array(
                    'condition'=>'user_id=:user_id',
                    'params'=>array(':user_id'=>Yii::app()->user->id),
                ),
            ));
        }
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Properties('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Properties']))
			$model->attributes=$_GET['Properties'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Properties the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Properties::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Properties $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='properties-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
