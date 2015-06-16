<nav role="navigation">
	<ul class="pager">
	<?php if (!isset($post)) : ?>
		<?php if($prev = $page->prevVisible()): ?>
			<li>
				<a href="<?php echo $prev->url() ?>" aria-label="Previous">
					<span aria-hidden="true">&lsaquo; Previous: <?= $page->prevVisible()->title()->html() ?></span>
				</a>
			</li>
		<?php endif; ?>
		<?php if($next = $page->nextVisible()): ?>
			<li>
				<a href="<?php echo $next->url() ?>" aria-label="Next">
					<span aria-hidden="true">Next: <?= $page->nextVisible()->title()->html() ?> &rsaquo;</span>
				</a>
			</li>
		<?php endif; ?>
	<?php else : ?>
    <?php if($post->hasPrevVisible()): ?>
      <li class="previous-post">
        <a href="<?= $post->prevVisible()->url() ?>" aria-label="Previous">
          <span aria-hidden="true">&lsaquo; Previous post: <?= $post->prevVisible()->title()->html() ?></span>
        </a>
      </li>
    <?php endif ?>
    <?php if($post->hasNextVisible()): ?>
      <li>
        <a href="<?= $post->nextVisible()->url() ?>" aria-label="Previous">
          <span aria-hidden="true">Next post: <?= $post->nextVisible()->title()->html() ?> &rsaquo;</span>
        </a>
      </li>
		<?php endif; ?>
	<?php endif; ?>
	</ul>
</nav>
