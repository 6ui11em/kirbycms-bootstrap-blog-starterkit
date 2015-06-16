<?php snippet('header') ?>

	<div class="container" role="main">
		<h1><?php echo $page->title()->html() ?></h1>
		
		<ul class="list-group">
      <li class="list-group-item"><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
      <li class="list-group-item"><b>Tags:</b> <?php echo $page->tags() ?></li>
		</ul>
		
		<div class="text">
			<?php echo $page->text()->kirbytext() ?>
     
			<div class="row">
				<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
					<div class="col-xs-6 col-md-3">
						<a href="#" class="thumbnail">
			        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
						</a>
					</div>
       <?php endforeach ?>
			</div>
			
		</div>
		
		<?php snippet('nav-pager') ?>
				
	</div> <!-- // container -->

<?php snippet('footer') ?>