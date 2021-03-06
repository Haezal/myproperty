<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$properties=array();
		if (!Yii::app()->user->isGuest) {
			// get property list
			$properties=new CActiveDataProvider('Properties', array(
                'criteria'=>array(
                    'condition'=>'user_id=:user_id',
                    'params'=>array(':user_id'=>Yii::app()->user->id),
                ),
            ));
		}

		$this->render('index', array('properties'=>$properties));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionShowImage($id=1,$height=100,$width=100)
	{
		$folder = Yii::app()->basePath.'/../gallery/';

		if(!is_dir($folder)){
			mkdir($folder);
		}
		$img = GalleryPhoto::model()->findByPk($id);
		//~ $filename = $id.'_h'.$height.'w'.$width.'.jpg';
		$filename = $id.'_h'.$height.'_w'.$width.'.jpg';
		$filenameOri = $id.'.jpg';
        $file=$folder.$filename;

        if (file_exists($file))
        {
		   $request = Yii::app()->getRequest();
		   $request->sendFile(basename($file),file_get_contents($file));
        }		
		else {
			$thumb=Yii::app()->phpThumb->create($folder.$filenameOri);
			$thumb->resize($width,$height);
			$thumb->save($file);			
			//~ $thumb->show();			
		   $request = Yii::app()->getRequest();
		   $request->sendFile(basename($file),file_get_contents($file));
		}

	}
}