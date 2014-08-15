<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/doc.min.css">
	<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">

	<!-- <div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div> --><!-- header -->

	
		<?php 
		$this->widget(
		    'booster.widgets.TbNavbar',
		    array(
		        'brand' => Yii::app()->name,
		        'fixed' => 'top',
		    	'fluid' => true,
		        'items' => array(
		            array(
		                'class' => 'booster.widgets.TbMenu',
		            	'type' => 'navbar',
		                'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),
							array('label'=>'My Property', 'url'=>array('/properties'), 'visible'=>!Yii::app()->user->isGuest),
							// array('label'=>'User List', 'url'=>array('/user/admin'), 'visible'=>!Yii::app()->user->isGuest),
							// array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
							// array('label'=>'Register', 'url'=>array('/user/registration'), 'visible'=>Yii::app()->user->isGuest),
							// array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
		            ),
		            array(
		                'class' => 'booster.widgets.TbMenu',
		                'type' => 'navbar',
		                'htmlOptions' => array('class' => 'pull-right'),
		                'items' => array(
		                    array('label'=>'User List', 'url'=>array('/user/admin'), 'visible'=>Yii::app()->user->isAdmin()),
		                    '---',
		                    array(
		                        'label' => 'My Profile',
		                        'url' => '#',
		                        'items' => array(
		                            array('label' => 'Setting', 'url' => array('/user/profile/edit')),
		                            // array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		                            '---',
		                            array(
		                                'label' => 'Logout ('.Yii::app()->user->name.')',
		                                'url' => array('/site/logout'),
		                                'visible'=>!Yii::app()->user->isGuest
		                            ),
		                        ),
		                        'visible'=>!Yii::app()->user->isGuest,
		                    ),
		                    array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
		                    array('label'=>'Register', 'url'=>array('/user/registration'), 'visible'=>Yii::app()->user->isGuest),
		                ),
		            ),
		        )
		    )
		);
		?>
	
	<div id="content">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('booster.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
	</div>

	<div class="clear"></div>

</div><!-- container -->
<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
    <div class="bs-docs-social">
  <ul class="bs-docs-social-buttons">
    <li>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twbs&amp;repo=bootstrap&amp;type=watch&amp;count=true" width="100" height="20" title="Star on GitHub"></iframe>
    </li>
    <li>
      <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twbs&amp;repo=bootstrap&amp;type=fork&amp;count=true" width="102" height="20" title="Fork on GitHub"></iframe>
    </li>
    <li class="follow-btn">
      <iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.1407888064.html#_=1408063405218&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=twbootstrap&amp;show_count=true&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 242px; height: 20px;"></iframe>
    </li>
    <li class="tweet-btn">
      <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1407888064.html#_=1408063405214&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fgetbootstrap.com%2F&amp;related=mdo%3ACreator%20of%20Bootstrap&amp;size=m&amp;text=Bootstrap&amp;url=http%3A%2F%2Fgetbootstrap.com%2F&amp;via=twbootstrap" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 110px; height: 20px;"></iframe>
    </li>
  </ul>
</div>


    <p>Designed and built with all the love in the world by <a href="http://twitter.com/mdo" target="_blank">@mdo</a> and <a href="http://twitter.com/fat" target="_blank">@fat</a>.</p>
    <p>Maintained by the <a href="https://github.com/twbs?tab=members">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>
    <p>Code licensed under <a href="https://github.com/twbs/bootstrap/blob/master/LICENSE" target="_blank">MIT</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
    <ul class="bs-docs-footer-links muted">
      <li>Currently v3.2.0</li>
      <li>·</li>
      <li><a href="https://github.com/twbs/bootstrap">GitHub</a></li>
      <li>·</li>
      <li><a href="../getting-started/#examples">Examples</a></li>
      <li>·</li>
      <li><a href="../2.3.2/">v2.3.2 docs</a></li>
      <li>·</li>
      <li><a href="../about/">About</a></li>
      <li>·</li>
      <li><a href="http://expo.getbootstrap.com">Expo</a></li>
      <li>·</li>
      <li><a href="http://blog.getbootstrap.com">Blog</a></li>
      <li>·</li>
      <li><a href="https://github.com/twbs/bootstrap/issues?state=open">Issues</a></li>
      <li>·</li>
      <li><a href="https://github.com/twbs/bootstrap/releases">Releases</a></li>
    </ul>
  </div>
</footer>

</body>
</html>
