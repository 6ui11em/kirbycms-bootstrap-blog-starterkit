<?php
if(!isset($date))     $date     = true;
if(!isset($author))   $author   = false;
if(!isset($avatar))   $avatar   = false;
if(!isset($tags))     $tags     = false;
if(!isset($category)) $category = false;
if(!isset($class))    $class    = false;
if(!isset($comments)) $comments = false;
?>

<footer <?php if($class) echo 'class="' . $class . '"' ?>>
	<div class="row">

		<?php if($author && $post->author() != ""): ?>
			<div class="author col-sm-5">
				Posted by:
				<?php if($avatar = $site->user((string)$post->author())->avatar()): ?>
					<img src="<?= $avatar->url() ?>"
							 alt="<?= getAuthorName((string)$post->author()) ?>'s avatar" class="avatar">
				<?php endif ?>
				<a href="<?= $site->url() ?>/author/<?= urlencode($post->author()) ?>">
					<?= getAuthorName((string)$post->author()) ?>
				</a>
				<?php if($date): ?>
						on <time datetime="<?= $post->date('Y-m-d') ?>"><?= $post->date(c::get('posts-date-format')) ?></time>
				<?php endif ?>
				<?php if($category &&  $post->category() != ""): ?>
						in <?php $count=0; foreach($post->category()->split() as $cat) : if ($count > 0) echo ', '; ?><a href="<?= getCategoryURL($cat);  ?>"><?= getCategoryTitle($cat); ?></a><?php $count++; endforeach; ?>	
				<?php endif ?>
			</div>
		<?php endif ?>

		<?php if($tags && $post->tags() != ""): ?>
			<div class="tags col-sm-6">
				Tags: 
					<?php foreach($post->tags()->split(',') as $k => $tag): ?><?php if ($k > 0) echo ', '; ?><a href="<?= $site->url() ?>/tag/<?= urlencode($tag) ?>"><?= trim($tag) ?></a><?php endforeach ?>
			</div>
		<?php endif ?>
		
		<?php if($comments) : ?>
		<div class="col-sm-1 text-right">
			<?= getPostCommentsCounter($post) ?> <span class="glyphicon glyphicon-comment"></span>
		</div>
		<?php endif ?>
	</div>

</footer>
