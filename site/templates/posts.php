<?php snippet( 'header') ?>

<div class="container">
	<div class="row main">
		<section id="posts" class="posts col-sm-9">

		<?php foreach($posts as $post): ?>
			<article class="post row">
				<header class="col-xs-12">
					<h2>
						<a href="<?= getPostUrl($post) ?>">
							<?= $post->title()->html() ?>
						</a>
					</h2>
					<div class="meta">
						<span class="author">Posted by <a href="<?= $site->url() ?>/author/<?= urlencode($post->author()) ?>"><?php echo getAuthorName((string)$post->author()) ?></a></span> on <time datetime="<?= $post->date('Y-m-d') ?>"><?= $post->date(c::get('posts-date-format')) ?></time>
					</div>
					<?= getCoverImage($post, array('class' => 'img-responsive')) ?>
				</header>
				<div class="post-content col-xs-12">
					<?= $post->text()->kirbytext() ?>
				</div>
				<?php snippet('post-footer', array('post'       => $post,
																					 'author'     => true,
																					 'tags'       => true,
																					 'category'   => true,
																					 'class'			=> 'post-footer col-xs-12')) ?>
			</article>
		<?php endforeach ?>

		<?php snippet('nav-pagination') ?>

		</section>

		<aside id="sidebar" class="sidebar col-sm-3">
			<?php snippet('archives', array('dates'      => true,
																			'authors'    => true,
																			'tags'       => true,
																			'categories' => true,
																		  'class'			 => 'sidebar-widget')) ?>
		</aside>
	</div>
</div>

<?php snippet( 'footer') ?>
