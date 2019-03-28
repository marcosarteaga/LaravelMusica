<h1 align="center" >Artistas</h1>
<a href="añadirArtista"> <img align="right" width="70" height="70" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx4y333n4ZUsCCuT5z2Yk5lLwwZJnQIyT2eGoAPvd6Og6T2fGN"></a>
<table align="center" width="400" >
	<tr>
		<td>Nom</td>
		<td>Apellido</td>
		<td>Genero</td>
	</tr>
	@foreach ($arrayartistas as $artista)
	<tr>
		<td>{{$artista->Nom}}</td>
		<td>{{$artista->Cognom}}</td>
		<td>{{$artista->genero}}</td>
	</tr>
	@endforeach
</table>

