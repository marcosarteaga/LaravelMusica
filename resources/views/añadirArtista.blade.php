<form method="POST"  action="/artistas">
	 {{csrf_field()}}
	<label>Nombre</label>
	<input type="text" name="Nom"><br>
	<label>Apellido</label>
	<input type="text" name="Cognom"><br>
	<label>Genero</label>
	<input type="text" name="genero">
	<br>
	<input type="submit" name="">

</form>