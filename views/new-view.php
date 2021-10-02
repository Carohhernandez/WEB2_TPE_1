<?php require 'header.php' ?>

	<div class="container">
		<div class="post">
			<article>
				<h2 class="title">New Article</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="form" method="post">
					<input type="text" name="title" placeholder="Article Title">
					<input type="text" name="subtitle" placeholder="Article Subtitle">
					<textarea name="content" placeholder="Article content"></textarea>
					<input type="file" name="thumb">

					<input type="submit" value="Create">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php' ?>
