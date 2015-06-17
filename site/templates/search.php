<?php snippet( 'header') ?>

<div class="container">
	<div class="row main">
		<section id="search" class="archive search posts col-sm-9">

		<?php if($query): ?>
			<h1><?= $page->resultTitle() ?> "<?= $query ?>"</h1>

				<div id="searchresults">
				<?php if($results != "" ): ?>

					<?php foreach($results as $result): ?>
						<article class="post row">

									<?php if($result->template() == 'post'): ?>
										<header class="col-xs-12">
											<h2>
												Post:
												<a href="<?= getPostUrl($result) ?>">
													<?= $result->title()->html() ?>
												</a>
											</h2>
											<div class="meta">
												<span class="author">Posted by <a href="<?= $site->url() ?>/author/<?= urlencode($result->author()) ?>"><?php echo getAuthorName((string)$result->author()) ?></a></span> on <time datetime="<?= $result->date('Y-m-d') ?>"><?= $result->date(c::get('posts-date-format')) ?></time>
											</div>
										</header>
										<div class="post-content col-xs-12">
											<?= getPostExcerpt($result) ?>
										</div>
										<?php snippet('post-footer', array('post'       => $result,
																											 'author'     => true,
																											 'tags'       => true,
																											 'category'   => true,
																											 'comments'		=> c::get('comments'),
																											 'class'			=> 'post-footer col-xs-12')) ?>

									<?php else: ?>
										<header class="col-xs-12">
											<h2>
												Page:
												<a href="<?= $result->url() ?>">
													<?= $result->title()->html() ?>
												</a>
											</h2>
										</header>
									<?php endif ?>


						</article>

					<?php endforeach ?>

			<?php else: ?>
				<?= $page->noposts()->kirbytext() ?>
			<?php endif ?>
			</div>
		<?php else: ?>
		 <h1><?= $page->title() ?></h1>
		 <?= $page->nosearch()->kirbytext() ?>
		<?php endif ?>

		</section>
		<?php snippet('sidebar') ?>
	</div>
</div>

<?php snippet( 'footer') ?>
