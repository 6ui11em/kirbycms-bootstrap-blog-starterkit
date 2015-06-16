<?php
    echo page(c::get('posts-page'))->children()->visible()->limit(10)->feed(array(
        'title'        => $page->title(),
				'description'	 => $page->description(),
        'link'         => c::get('posts-page'),
        'url'          => $page->url(),
    ));
?>