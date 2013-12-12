
<ul class="authorPanelList list mb20 mt10">

<?php foreach($authors as $author) :?>

	<?php
		$id = $author['id_module_demo_author'];
	?>

	<li class="author<?php echo $id ?> pointer" id="author_<?php echo $id ?>" data-id="<?php echo $id ?>">
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
		var a = item.getElement('a.title');
		a.removeEvents('click');

		// Adds Drag'n'Drop behavior on each author name
		ION.addDragDrop(
			a,						// DOM element to drag
			'.dropDemoAuthor',		// Selector of the drop areas.
			'DEMO_MODULE.dropAuthorOnParent' // Method to execute when the dragged element is dropped
		);

	});

</script>