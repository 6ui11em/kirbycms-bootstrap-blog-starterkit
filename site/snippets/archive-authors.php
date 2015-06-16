<div id="authors">
	<h4>Authors:</h4>
  <?php
  $authors = getAuthorsArchive();
  if($authors->count() > 0): ?>
    <ul class="nav">
    <?php foreach($authors as $author): ?>
      <li>
        <a href="<?php echo $site->url().$author->url() ?>">
          <?= getAuthorName($author->name()) ?> (<?= $author->results() ?>)
        </a>
      </li>
    <?php endforeach ?>
    </ul>
  <?php else: ?>
    <p><strong>No authors found.</strong></p>
  <?php endif ?>
</div>
