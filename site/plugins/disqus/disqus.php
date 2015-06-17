<?php

/**
 * Disqus Plugin
 *
 * @author Guillem Lorman <guillem@bajoelcocotero.com>
 * @version 2.0.0
 */
function disqus_comments($post, $params = array()) {

  // set all default values
  $defaults = array(
    'disqus_shortname'			=> c::get('disqus-shortname'),
    'disqus_identifier '   	=> $post->slug(),
    'disqus_title '   			=> $post->title()->title(),
    'disqus_url ' 					=> getPostUrl($post),
    'snippet'     					=> false,
  );

  $options = array_merge($defaults, $params);
	
  if($options['snippet']) {
    $html .= snippet($options['snippet'], $options, true);
  } else {
    $html .= tpl::load(__DIR__ . DS . 'comments.php', $options);
  }

	return $html;
}

function disqus_counter($post) {
	
	$html .= tpl::load(__DIR__ . DS . 'counter.php', array(
		'url'			=> getPostUrl($post),
		'slug'		=> $post->slug()
	));
	
	return $html;
}

function disqus_footer($post) {

	$html .= tpl::load(__DIR__ . DS . 'footer.php', array(
		'disqus_shortname'			=> c::get('disqus-shortname')
	));

	return $html;
}

