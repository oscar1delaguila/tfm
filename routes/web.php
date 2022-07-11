<?php

use Illuminate\Support\Facades\Route;
use App\Models\Juguete;
use App\Http\Resources\JuguetesResource;
use App\Http\Resources\JugueteIdResource;
use App\Models\Categoria;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


/*
//API JSON para /juguetes/<page>
Route::get('/', function () {

    return JuguetesResource::collection(\App\Models\Juguete::get());
  
});
*/


//API JSON para /juguetes/<page>
Route::get('/juguetes/{page}', function ($page) {

    return JuguetesResource::collection(Juguete::simplePaginate($perPage = 10, $columns = ['id','nombre_juguete','descripcion','fecha_publicacion'], $pageName = '',$page));
  
});

//API JSON para /juguetes/
Route::get('/juguetes', function () {

    return JuguetesResource::collection(\App\Models\Juguete::get());
  
});



//API /juguete/<id>
Route::get('/juguete/{id}', function ($id) {

    return new JugueteIdResource(\App\Models\Juguete::find($id));
  
});

