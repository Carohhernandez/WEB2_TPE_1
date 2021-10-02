<?php require 'header.php'; ?>

	<div class="container">
		<div class="post">
			<article>
				<h2 class="title">Edit</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form" enctype="multipart/form-data" method="post">
					<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
					<input type="text" name="title" value="<?php echo $post['title'] ?>">
					<input type="text" name="subtitle" value="<?php echo $post['subtitle']; ?>">
					<textarea name="content"><?php echo $post['content']; ?></textarea>
					<input type="file" name="thumb">
					<input type="hidden" name="thumb_saved" value="<?php echo $post['thumb']; ?>">

					<input type="submit" value="Save">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php' ?>