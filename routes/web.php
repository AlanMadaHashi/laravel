<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');


Route::get('/login', function () {
    return 'Login';
})->name('site.login');


// Parte privada

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorContrller@index')->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

// Rota de redirecionamento
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function () {
    echo "A rota acessada não existe.<a href=" . route('site.index') . "> Clique aqui</a> para ir a página inicial!";
});












//Pode se passar: /contato/{nome}/{categoria}/{assunto}/{mensagem}
// Route::get(
//     '/contato/{nome}/{categoria_id}',
//     function (
//         string $nome,
//         int $categoria_id =1
//     ) {
//         echo "Estamos aqui! . $nome - $categoria_id";
//     }
// )->where('categori_id','[0-9]+')->where('nome','[A-Z]+');

/*
* verbo:
 * http://www.
 * get
 * post
 * put
 * patch
 * delete
 * options 
 * /