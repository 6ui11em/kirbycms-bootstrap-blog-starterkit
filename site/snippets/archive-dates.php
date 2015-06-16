<?php
if(!isset($class)) $class = false;
?>

<div id="dates" <?php if($class) echo 'class="' . $class . '"' ?>>
	<h4>Dates:</h4>
  <?php if($dates = getDatesArchive()): ?>
  <ul class="nav">
  <?php foreach ($dates as $year => $months): ?>
    <li>
      <a href="<?php echo $site->url() ?>/<?= $year ?>" class="nav-header">
        <?= $year ?>
      </a>
      <ul class="nav">
      <?php foreach ($months as $month => $number): ?>
        <?php $month = DateTime::createFromFormat('!m', $month) ?>
        <li>
          <a href="<?= $site->url()
                       . '/' . $year
                       . '/' . $month->format('m') ?>">
            <?= $month->format('F') ?> (<?= $number ?>)
          </a>
        </li>
      <?php endforeach ?>
      </ul>
    </li>
  <?php endforeach ?>
  </ul>
  <?php else: ?>
    <p><strong>No dates found.</strong></p>
  <?php endif ?>
</div>
