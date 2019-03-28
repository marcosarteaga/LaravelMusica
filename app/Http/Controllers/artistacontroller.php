<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artista;
use DB;

class artistacontroller extends Controller
{

	public function artistas()
	{
		$artistas = DB::table('artista')->select('Nom','Cognom','genero')->get();
		return view('artistas',array('arrayartistas'=> $artistas));

	}
	public function formulario(){
		return view('añadirArtista');
	}



		public function addArtista(Request $request)
	{
		$artista = new artista;
        $artista->Nom = $request->input('Nom');
        $artista->Cognom = $request->input('Cognom');
		$artista->genero = $request->input('genero');
        $artista->save();
		$artistas = DB::table('artista')->select('Nom','Cognom','genero')->get();
		return view('/artistas',array('arrayartistas'=> $artistas));

	}
}
