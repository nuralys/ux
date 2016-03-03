<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout ?> | ux.kz</title>
	<?php if(isset($meta['keywords'])): ?>
		<meta name="keywords" content="<?=$meta['keywords']?>">
	<?php endif; ?>
	<?php if(isset($meta['description'])): ?>
		<meta name="description" content="<?=$meta['description']?>">
	<?php endif; ?>
	<meta content="telephone=no" name="format-detection">
	<meta name="robots" content="noodp, noydir">
	<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
	<meta name="HandheldFriendly" content="true">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	
	<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('reset', 'style', 'slide', 'jquery.fancybox.css?v=2.1.5'));
	echo $this->Html->script(array('http://code.jquery.com/jquery-2.1.4.js', 'jquery.fancybox.pack', 'app'));
	 ?>
	
</head>
<body>
	<div class="page">
		<?=$this->element('header')?>
		<div class="container">
			<div class="cr">
				<?php //echo $cat_menu; ?>
				<?php echo $this->Session->flash('auth'); ?>
				<?php echo $this->Session->flash('good'); ?>
				<?php echo $this->Session->flash('bad'); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<?php if($this->request->params['controller'] == 'pages' && $this->request->params['action'] != 'contacts'): ?>
				<?php  echo $this->element('news_reviews_clients') ?>
			<?php endif ?>
		</div>
			<?=$this->element('footer')?>
	</div>
	
	<?php echo $this->element('contact_us') ?>
</body>
</html>