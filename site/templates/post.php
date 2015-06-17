<?php snippet( 'header') ?>

<div class="container">
	<div class="row main">
		<section id="post" class="col-sm-9 single-post">

			<article class="post row">
				<header class="col-xs-12">
					<?= getCoverImage($post, array('class' => 'img-responsive')) ?>
					<h1 class="post-title">
						<a href="<?= getPostUrl($post) ?>">
							<?= $post->title()->html() ?>
						</a>
					</h1>
					<div class="meta">
						<span class="author">Posted by <a href="<?= $site->url() ?>/author/<?= urlencode($post->author()) ?>"><?php echo getAuthorName((string)$post->author()) ?></a></span> on <time datetime="<?= $post->date('Y-m-d') ?>"><?= $post->date(c::get('posts-date-format')) ?></time>
					</div>
				</header>
				<div class="post-content col-xs-12">
					<?= $post->text()->kirbytext() ?>
				</div>
				<?php snippet('post-footer', array('post'       => $post,
																					 'author'     => true,
																					 'avatar'     => true,
																					 'tags'       => true,
																					 'categories' => true,
																					 'comments'		=> c::get('comments'),
																					 'class'			=> 'col-xs-12')) ?>
			</article>

			<?= snippet('nav-pager') ?>

			<?= getPostComments($post) ?>
		
		</section>
		<?php snippet('sidebar') ?>
	</div>
</div>

<?php snippet('footer') ?>
