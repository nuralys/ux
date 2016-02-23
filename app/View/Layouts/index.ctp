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
		<?=$this->element('slider')?>
		<div class="about_us_container">
		    <div class="cr">
		    <?php //echo $cat_menu; ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
				<ul class="about_us_container_list">
					<li>
						<div class="about_us_item why_choose_us">
							<img src="img/about_icon.png" alt="">
							<div class="about_item_title">
								Why choose us?
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
							<a href="" class="read_more">Read more</a>
						</div>
					</li>
					<li>
						<div class="about_us_item what_we_offer">
							<img src="img/about_icon2.png" alt="">
							<div class="about_item_title">
							What We Offer
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
							<a href="" class="read_more">Read more</a>
						</div>
					</li>
					<li>
						<div class="about_us_item our_team">
							<img src="img/about_icon3.png" alt="">
							<div class="about_item_title">
								Our team
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
							<a href="" class="read_more">Read more</a>
						</div>
					</li>
					<li>
						<div class="about_us_item featured_services">
							<img src="img/about_icon4.png" alt="">
							<div class="about_item_title">
								Featured services
							</div>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</p>
							<a href="" class="read_more">Read more</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<?=$this->element('news_reviews_clients')?>
		
		<?=$this->element('footer')?>
	</div>
	<?php echo $this->element('contact_us') ?>
</body>
</html>