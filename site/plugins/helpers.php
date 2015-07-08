<?php

/**
 * getPostUrl()
 *
 * Returns the full URL of a given post in wordpress-style.
 *
 * @param  mixed $post
 * @return string
 */
function getPostUrl($post) {
  $site = site();

  $uri  = $site->url();
  $uri .=   '/' . $post->date('Y')
          . '/' . $post->date('m')
          . '/' . $post->date('d')
          . '/' . $post->slug();

  return $uri;
}

/**
 * getAuthorName()
 *
 * Returns the full name of a given author instead of the username.
 *
 * @param  string $username
 * @return string
 */
function getAuthorName($username) {
  $site = site();
  $author = $site->users()->get($username);
  $name = $username;

  if($author) {
    if($author->firstname()) {
      $name =  $author->firstname();
      if($author->lastname()){
        $name .= ' ' . $author->lastname();
      }
    }
  }

  return $name;
}

/**
 * getCoverImage()
 *
 * Returns an img-element with the coverimage for a given post if exists.
 *
 * @param  mixed $post
 * @return string
 */
function getCoverImage($post, $attr = '') {

  $coverimage = (string)$post->coverimage();

  if($coverimage != "") {
    $img = brick('img');
    $img->attr('src', $post->image($coverimage)->url());
    $img->attr('alt', $post->title()->html());
		
		if (!empty($attr)) {
			foreach ($attr as $k => $v) 
				$img->attr($k, $v);
		}

    return $img;
  }
}

/**
 * getDatesArchive()
 *
 * Returns all years and months where posts exists.
 *
 * @return array
 */
function getDatesArchive() {
  $site = site();
  $posts = $site->find(c::get('posts-page'))->children()->visible();

  if($posts->count() > 0) {
    foreach ($posts as $post) {
      $year = $post->date('Y');
      $month = $post->date('m');
      if(isset($dates[$year][$month])) {
        $dates[$year][$month] += 1;
      } else {
        $dates[$year][$month] = 1;
      }
    }
    return $dates;
  }
}

/**
 * getTagsArchive()
 *
 * Returns tagcloud.
 *
 * @return array
 */
function getTagsArchive() {
  return tagcloud(page(c::get('posts-page')), array('field'   => 'tags',
                                       'param'   => 'tag',
                                       'baseurl' => ''));
}

/**
 * getTagsArchive()
 *
 * Returns categorycloud.
 *
 * @return array
 */
function getCategoriesArchive() {
  return tagcloud(page(c::get('posts-page')), array('field'   => 'category',
                                       'param'   => 'category',
                                       'baseurl' => ''));
}

/**
 * getAuthorsArchive()
 *
 * Returns authorcloud.
 *
 * @return array
 */
function getAuthorsArchive() {
  return tagcloud(page(c::get('posts-page')), array('field'   => 'author',
                                       'param'   => 'author',
                                       'baseurl' => ''));
}

/**
 * getCategoryTitle()
 *
 * Returns title of given category name.
 *
 * @return string
 */
function getCategoryTitle($cat) {
	$categories = page(c::get('categories-page', 'categories'))->children();

	if (count($categories) > 0) {
		if ($cat_page = $categories->find($cat))
			$cat = $cat_page->title();
	}
	
	return $cat;
}

/**
 * getCategoryURL()
 *
 * Returns title of given category url.
 *
 * @return string
 */
function getCategoryURL($cat) {	
	return site()->url() . '/category/' . urlencode($cat);
}

/**
 * getPostExcerpt()
 *
 * Returns the first $limit words of the content of the post.
 *
 * @param  mixed $post
 * @param  int $length (optional, default config value)
 * @return string
 */
function getPostExcerpt($post, $length = '') {
	if (empty($length))
		$length = c::get('excerpt-length');
	
  return $post->text()->kirbytext()->excerpt($length, 'words');
}

/**
 * getPostComments()
 *
 * Returns the first $limit words of the content of the post.
 *
 * @param  mixed $post
 * @return string
 */
function getPostComments($post) {
	
	if (!c::get('comments'))
		return;

	return disqus_comments($post);
}
	
/**
 * getPostCommentsCounter()
 *
 * Returns the first $limit words of the content of the post.
 *
 * @param  mixed $post
 * @return string
 */
function getPostCommentsCounter($post) {
	
	if (!c::get('comments'))
		return;
	
	return disqus_counter($post);
}
	
/**
 * getPostCommentsCounter()
 *
 * Returns the first $limit words of the content of the post.
 *
 * @param  mixed $post
 * @return string
 */
function getBlogFooter($post) {
	
	if (!in_array($post->template(), c::get('posts-templates')))
		return;
	
	$html = '';
	
	if (c::get('comments'))
		$html .= disqus_footer($post);
	
	return $html;
}
	

?>
