<?php if($pagination->hasPages()): ?>

<nav id="pagination">
  <ul class="pagination">

    <?php if($pagination->hasPrevPage()): ?>
      <li id="pagination-first">
        <a href="<?php echo $pagination->firstPageURL() ?>" aria-label="First">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>

      <li id="pagination-prev">
        <a href="<?php echo $pagination->prevPageURL() ?>" aria-label="Previous">
          <span aria-hidden="true">&lsaquo;</span>
        </a>
      </li>
    <?php else: ?>
      <li id="pagination-first" class="disabled">
        <a href="<?php echo $pagination->firstPageURL() ?>" aria-label="First">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li id="pagination-prev" class="disabled">
        <a href="<?php echo $pagination->prevPageURL() ?>" aria-label="Previous">
          <span aria-hidden="true">&lsaquo;</span>
        </a>
      </li>
    <?php endif ?>

    <?php foreach($pagination->range(8) as $r): ?>
      <li <?php if($pagination->page() == $r) echo ' class="active"' ?>>
        <a href="<?php echo $pagination->pageURL($r) ?>">
          <?php echo $r ?>
        </a>
      </li>
    <?php endforeach ?>

    <?php if($pagination->hasNextPage()): ?>
      <li id="pagination-next">
        <a href="<?php echo $pagination->nextPageURL() ?>" aria-label="Next">
          <span aria-hidden="true">&rsaquo;</span>
        </a>
      </li>

      <li id="pagination-last">
        <a href="<?php echo $pagination->lastPageURL() ?>" aria-label="Last">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    <?php else: ?>
      <li id="pagination-next" class="disabled">
        <a href="<?php echo $pagination->nextPageURL() ?>" aria-label="Next">
          <span aria-hidden="true">&rsaquo;</span>
        </a>
      </li>
      <li id="pagination-last" class="disabled">
        <a href="<?php echo $pagination->lastPageURL() ?>" aria-label="Last">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    <?php endif ?>

  </ul>
</nav>

<?php endif ?>
