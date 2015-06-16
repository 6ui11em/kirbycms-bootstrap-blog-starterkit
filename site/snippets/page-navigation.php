    <nav role="navigation">
    	<ul class="pager">
      <?php if($prev = $page->prevVisible()): ?>
				<li><a href="<?php echo $prev->url() ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
     	<?php else : ?>
     		<li class="disabled"><span><span aria-hidden="true">&laquo;</span></span></li>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
				<li><a href="<?php echo $next->url() ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
     	<?php else : ?>
     		<li class="disabled"><span><span aria-hidden="true">&raquo;</span></span></li>
      <?php endif; ?>
			</ul>
    </nav>
