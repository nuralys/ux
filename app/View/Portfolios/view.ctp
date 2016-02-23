<div class="breadcrumbs_item_container">
						<a href="/" class="breadcrumbs_item">Home page</a>
						<a href="/portfolio" class="breadcrumbs_item">Portfolio</a>
						<a class="breadcrumbs_item"><?=$data['Portfolio']['title']?></a>
					</div>
				
				<div class="content">
					<div class="portfolio_container">
						<div class="title">
							<h1><?=$data['Portfolio']['title']?></h1>
						</div>
						<ul class="portfolio_second_lvl">
							<li>
								<div class="title_min">
									<h3>requirements:</h3>
								</div>
								<p><?=$data['Portfolio']['requirements']?></p>
							</li>
							<li>
								<div class="title_min">
									<h3>previous forms:</h3>
								</div>
								<div class="portfolio_second_img">
									<img src="/upload/<?=$data['Portfolio']['pf1']?>" alt="">
								</div>
								<div class="portfolio_second_img">
									<img src="/upload/<?=$data['Portfolio']['pf2']?>" alt="">
								</div>
								<div class="portfolio_second_img">
									<img src="/upload/<?=$data['Portfolio']['pf3']?>" alt="">
								</div>
							</li>
							
							<li>
								<div class="title_min">
									<h3>solution:</h3>
								</div>
								<p><?=$data['Portfolio']['solutions']?></p>
							</li>
							<li>
								<div class="title_min">
									<h3>previous forms:</h3>
								</div>
								<div class="portfolio_second_img">
									<img src="/upload/<?=$data['Portfolio']['pf4']?>" alt="">
								</div>
								<div class="portfolio_second_img">
									<img src="/upload/<?=$data['Portfolio']['pf5']?>" alt="">
								</div>
								<div class="portfolio_second_img">
									<img src="/upload/<?=$data['Portfolio']['pf6']?>" alt="">
								</div>
							</li>
						</ul>
						<a href="" class="read_more">Order it now</a>
					</div>
					
				</div>