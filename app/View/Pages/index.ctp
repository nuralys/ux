<ul class="about_nav">
	<li><a href="/page/why_choose_us">Why choose us? </a></li>
	<li><a href="/page/what_we_offer">What We Offer   </a></li>
	<li><a href="/page/our_team">  Our team </a></li>
	<li><a href="/page/featured_service"> Featured service</a></li>
	<div class="breadcrumbs_item_container">
		<a href="/" class="breadcrumbs_item">Home page</a>
		<a class="breadcrumbs_item"><?=$page['Page']['title']?></a>
	</div>
</ul>
<div class="content">
				<div class="about_container">
					<div class="about_img">
						<img src="/img/page/<?=$page['Page']['img']?>" alt="<?=$page['Page']['title']?>">
					</div>
					<div class="about_text">
						<div class="title"><?=$page['Page']['title']?></div>
						<?=$page['Page']['body']?>
					</div>
				</div>
			</div>