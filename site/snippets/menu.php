<div id="navbar" class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
    <?php foreach($pages->visible() as $p): ?>
      <?php if($p->hasVisibleChildren() && $p->template() != 'posts'): ?>
				<li class="dropdown">
					<a class="dropdown-toggle<?php e($p->isOpen(), ' active') ?>" data-toggle="dropdown" role="button" aria-expanded="false" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<?php foreach($p->children()->visible() as $p): ?>
						<li>
							<a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
						</li>
						<?php endforeach ?>
					</ul>
				</li>
      <?php else : ?>
				<li>
					<a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
				</li>
      <?php endif; ?>

      <?php if($p->hasVisibleChildren()): ?>
      <?php endif ?>

    </li>
    <?php endforeach ?>
	</ul>
</div><!--/.nav-collapse -->