<div class="breadcrumbs_item_container">
	<a href="/" class="breadcrumbs_item">Home page</a>
	<a class="breadcrumbs_item">NEWS</a>
</div>

<div class="content">
	<ul class="news_list">
	<?php foreach($news as $item): ?>
		<li>
			<div class="news_item">
				<div class="news_img">
					<img src="/img/news/thumbs/<?=$item['News']['img'] ?>" alt="<?=$item['News']['title'] ?>">
				</div>
				<div class="title_min">
					<h3><?=$item['News']['title'] ?></h3>
				</div>
				<div class="date"><?=$item['News']['date'] ?></div>
				<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 850, array('ellipsis' => '...', 'exact' => true)) ?></p>
				<a href="/news/<?=$item['News']['id'] ?>" class="read_more">Read more</a>
			</div>
		</li>
		<?php endforeach ?>
	</ul>
</div>