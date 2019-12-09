<?php

use Illuminate\Database\Seeder;

use App\Libro;
use App\Categoria;
use App\Etiqueta;

use Carbon\Carbon;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categoria::truncate(); // Evita duplicados
        $categoria = new Categoria();
        $categoria->nombre = "Categoria 1";
        $categoria->save();

        //Etiqueta::truncate();
        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "Etiqueta 1";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "Etiqueta 2";
        $etiqueta->save();

        //Libro::truncate();
        $libro = new Libro();
        $libro->titulo = "Primer libro";
        $libro->descripcion = "Descripcion libro";
        $libro->contenido = "<p>Contenido</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([1,2]);

        $libro = new Libro();
        $libro->titulo = "Segundo libro";
        $libro->descripcion = "Descripcion libro";
        $libro->contenido = "<p>Contenido</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();
        $libro->etiquetas()->attach([1]);

        $libro = new Libro();
        $libro->titulo = "Segundo libro";
        $libro->descripcion = "Descripcion libro";
        $libro->contenido = "<p>Contenido</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([2]);
    }
}
