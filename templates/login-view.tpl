{include file="header.tpl"}
<!-- login y acceder son variables que afectan el mensaje que se despliega en el boton de login/logout y la operacion que realiza el boton -->

	<div class="d-flex flex-column align-items-center">
		<h2 class="mt-5">Inicia Sesion</h2>
		<div class="d-flex p-4 form-container">
			<form action="verify" method="post" class='d-flex flex-column w-100'>
			 	<label class='d-block mb-2'>Ingrese su email:</label>
				<input type="email" name="email" placeholder="Email" class='mb-2' required>
				<label class='d-block mb-2'>Ingrese el titulo del articulo:</label>
				<input type="password" name="password" placeholder="Password" class='mb-2' required>
				<p>Admin user: admin@gmail.com pass: 123456</p>
				<button type="submit" class='mt-4'>LOG IN</button>
			</form>
		</div>
	</div>
	<div class='mt-4 w-100 d-flex justify-content-center'>
		<h4 class="alert-danger p-4" >{$error}</h4>
	</div>

{include file="footer.tpl"}