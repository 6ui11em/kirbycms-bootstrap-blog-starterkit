<div id="categories">
	<h4>Categories:</h4>
  <?php
  $categories = getCategoriesArchive();
  if($categories->count() > 0): ?>
    <ul class="nav">
    <?php foreach($categories as $category): ?>
      <li>
        <a href="<?php echo getCategoryURL($category->name()) ?>">
          <?php echo getCategoryTitle($category->name()) ?> (<?= $category->results() ?>)
        </a>
      </li>
    <?php endforeach ?>
    </ul>
  <?php else: ?>
    <p><strong>No categories found.</strong></p>
  <?php endif ?>
</div>
