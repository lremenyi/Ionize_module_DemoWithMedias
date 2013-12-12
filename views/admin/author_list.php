
<ul class="authorPanelList list mb20 mt10">

<?php foreach($authors as $author) :?>

	<?php
		$id = $author['id_module_demo_author'];
	?>

	<li class="author<?php echo $id ?> pointer" id="author_<?php echo $id ?>" data-id="<?php echo $id ?>">
		<a class="icon delete right"></a>
		<a class="left pl5 edit title" data-id="<?php echo $id ?>">
			<?php echo $author['name'] ?>
		</a>
	</li>

<?php endforeach ;?>

</ul>

<script type="text/javascript">

	// Click Event to display the details of one creator
	$$('.authorPanelList li').each(function(item, idx)
	{
		var id = item.getProperty('data-id');
		var a = item.getElement('a.title');
		var del = item.getElement('a.delete');

		a.removeEvents('click');

		a.addEvent('click', function(e)
		{
			// see : /themes/admin/javascript/ionize/ionize_window.js
			// ION.formWindow : function(id, form, title, wUrl, wOptions, data)
			ION.formWindow(
				'author' + id,			// ID of the window
				'authorForm' + id,		// ID of the author form
				'module_demo_title_edit_author',	// lang term of the window title
				'module/demo/author/get/' + id,		// URL of the controller
				{
					'width':650,
					'height':400,
				}
			);
		});


		ION.initRequestEvent(
			del,
			admin_url + 'module/demo/author/delete/' + id,
			{},
			{
				'confirm': true,
				'message': Lang.get('ionize_confirm_element_delete')
			}
		);

	});

</script>