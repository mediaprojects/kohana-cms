<div class="grid_4">
<?php
	$url = Route::get('admin_cms')->uri(array('action'=>'menu'));
	echo Request::factory($url)->execute()->response;
?>
</div>

<div class="grid_12">
<?php
	$url = Route::get('admin_cms')->uri(array(
		'action' => 'edit',
		'id' => $page->id,
	));
	echo Request::factory($url)->execute()->response;
?>
</div>
