<div class="slider_container">
	<section class="big_photo" >
		<div class="slider___item one">
		</div>
		<div class="slider___item two">
		</div>
		<div class="slider___item three">
		</div>
		<div class="slider___item four">
		</div>
	</section>
	<div class=" cr ">
		<div class=" two_slider ">	
			<section class="slider-photo" >
			<?php foreach($sliders as $item): ?>
				<div class="slider__item">
						<img src="/img/slider/thumbs/<?=$item['Slider']['img']?>" alt="<?=$item['Slider']['title']?>">
				</div>
			<?php endforeach ?>
			</section>
			<section class="slider-text" >
			<?php foreach($sliders as $item): ?>
				<div class="slider__item">
					<div class="des_slider">
						<div class="title_des">
							<?=$item['Slider']['title']?>
						</div>
						<p>
							<?=$item['Slider']['body']?>
						</p>

					</div>
					<a href="#modal1" class="feed_back order open_modal">ORDER</a>
				</div>
			<?php endforeach ?>
			</section>
		</div>
	</div>
</div>

