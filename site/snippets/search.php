<form action="<?= $site->find('search')->url() ?>">
 <div class="input-group">
		<input type="text" placeholder="Search for..." class="form-control" name="q">
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit" value="search"><span class="glyphicon glyphicon-search"></span></button>
		</span>
	</div><!-- /input-group -->
  <input type="hidden" name="l" value="posts">
</form>
