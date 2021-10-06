{include file="header.tpl"}

	<div class="container">
		<div class="post">
			<article>
				<h2 class="title">Inicia Sesion</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form" method="post">
					<input type="text" name="user" placeholder="User">
					<input type="password" name="password" placeholder="Password">
					<input type="submit" value="Log In">
				</form>
			</article>
		</div>
	</div>



