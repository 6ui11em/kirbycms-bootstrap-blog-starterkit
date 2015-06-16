<?php
if(!isset($dates))      $dates      = false;
if(!isset($authors))    $authors    = false;
if(!isset($tags))       $tags       = false;
if(!isset($categories)) $categories = false;
if(!isset($class))      $class    = false;
?>

<div id="archives" <?php if($class) echo 'class="' . $class . '"' ?>>
  <header>
    <h3>Archive options:</h3>
  </header>

  <?php if($tags) snippet('archive-tags') ?>

  <?php if($categories) snippet('archive-categories') ?>

  <?php if($dates) snippet('archive-dates') ?>

  <?php if($authors) snippet('archive-authors') ?>

</div>
