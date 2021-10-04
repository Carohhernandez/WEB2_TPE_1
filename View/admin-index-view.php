<?php require 'header.php'; ?>

<div class="container">

	<h2>Control Panel</h2>
	<a href="new.php" class="btn">Nuevo Post</a>
	<a href="close.php" class="btn">Log Out</a>

	<?php foreach($posts as $post): ?>
	<section class="post">
		<article>
			<h2 class="title"><?php echo $post['id'] . '.- ' . $post['title']; ?></h2>
			<a href="edit.php?id=<?php echo $post['id']; ?>">Edit</a>
			<a href="../single.php?id=<?php echo $post['id']; ?>">See</a>
			<a href="delete.php?id=<?php echo $post['id']; ?>">Delete</a>
		</article>
	</section>
	<?php endforeach; ?>

	<?php require '../pagination.php' ?>

</div>

<?php require 'footer.php' ?>
