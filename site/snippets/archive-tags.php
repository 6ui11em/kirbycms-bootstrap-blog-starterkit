<div id="tags">
  <header>
    <h4>Tags:</h4>
  </header>
  <?php
    $tags = getTagsArchive();
    if($tags->count() > 0): ?>
  <ul class="nav">
  <?php foreach($tags as $tag): ?>
    <li>
      <a href="<?php echo $site->url().$tag->url() ?>">
        <?php echo $tag->name() ?> (<?= $tag->results() ?>)
      </a>
    </li>
  <?php endforeach ?>
  </ul>
<?php else: ?>
  <p><strong>No tags found.</strong></p>
<?php endif ?>
</div>
