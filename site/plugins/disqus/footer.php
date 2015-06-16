<script type="text/javascript">
	var disqus_shortname = '<?php echo $disqus_shortname ?>';

	(function () {
		var s = document.createElement('script'); s.async = true;
		s.type = 'text/javascript';
		s.src = '//' + disqus_shortname + '.disqus.com/count.js';
		(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
	}());

	// called by disqus
	function disqus_config() {
	this.callbacks.onReady = [function() {
		// if your code respond to this event to resize the sidebar
		$(window).trigger('resize');
	}];
	}
</script>