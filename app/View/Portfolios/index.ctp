<div class="breadcrumbs_item_container">
	<a href="/" class="breadcrumbs_item">Home page</a>
	<a class="breadcrumbs_item">Portfolio</a>
</div>
<?php //debug($data); ?>
<div class="content">
	<ul class="portfolio_list">
		<?php foreach($data as $item): ?>
			<li>
				<div class="portfolio_item">
					<div class="portfolio_item_img">
						<img src="/upload/<?=$item['Portfolio']['pf1']?>" alt="<?=$item['Portfolio']['title']?>">
					</div>
					<div class="portfolio_item_des">
						<div class="title_min">
							<h3><?=$item['Portfolio']['title']?></h3>
						</div>
						<p>
							<?= $this->Text->truncate(strip_tags($item['Portfolio']['requirements']), 150, array('ellipsis' => '...', 'exact' => true)) ?>
						</p>
						<a href="#modal3" class="open_modal read_more">Order it now</a>
						<a href="/portfolio/<?=$item['Portfolio']['id']?>" class="read_more fl_r">Read more</a>
					</div>
				</div>
			</li>
		<?php endforeach?>
	</ul>
</div>