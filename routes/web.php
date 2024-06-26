<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('personal');

Route::resource('/personals', PersonalController::class);

Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->name('persona');
Route::get('/personal/crear', [App\Http\Controllers\PersonalController::class, 'create'])->name('create');

//Proveedores
Route::get('/proveedor', [App\Http\Controllers\ProveedorController::class, 'index'])->name('indexp');
Route::get('/proveedor/ver', [App\Http\Controllers\ProveedorController::class, 'ver'])->name('verp');
Route::get('/proveedor/crear', [App\Http\Controllers\ProveedorController::class, 'create'])->name('crearp');
Route::get('/proveedor/guardar', [App\Http\Controllers\ProveedorController::class, 'store'])->name('guardarp');
Route::get('/proveedor/borrar/{id}', [App\Http\Controllers\ProveedorController::class, 'destroy'])->name('borrarp');
Route::get('/proveedor/editar/{id}', [App\Http\Controllers\ProveedorController::class, 'edit'])->name('editarp');
Route::get('/proveedor/update/{id}', [App\Http\Controllers\ProveedorController::class, 'update'])->name('updatep');

//CLientes
Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('indexc');
Route::get('/cliente/ver', [App\Http\Controllers\ClienteController::class, 'ver'])->name('verc');
Route::get('/cliente/crear', [App\Http\Controllers\ClienteController::class, 'create'])->name('crearc');
Route::get('/cliente/guardar', [App\Http\Controllers\ClienteController::class, 'store'])->name('guardarc');
Route::get('/cliente/borrar/{id}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('borrarc');
Route::get('/cliente/editar/{id}', [App\Http\Controllers\ClienteController::class, 'edit'])->name('editarc');
Route::get('/cliente/update/{id}', [App\Http\Controllers\ClienteController::class, 'update'])->name('updatec');


//Productos
Route::get('/producto', [App\Http\Controllers\ProductoController::class, 'index'])->name('indexpr');
Route::get('/producto/ver/{id}', [App\Http\Controllers\ProductoController::class, 'ver'])->name('verpr');
Route::get('/producto/crear', [App\Http\Controllers\ProductoController::class, 'create'])->name('crearpr');
Route::get('/producto/guardar', [App\Http\Controllers\ProductoController::class, 'store'])->name('guardarpr');
Route::get('/producto/borrar/{id}', [App\Http\Controllers\ProductoController::class, 'destroy'])->name('borrarpr');
Route::get('/producto/editar/{id}', [App\Http\Controllers\ProductoController::class, 'edit'])->name('editarpr');
Route::get('/producto/update/{id}', [App\Http\Controllers\ProductoController::class, 'update'])->name('updatepr');
Route::get('/producto/cargar', [App\Http\Controllers\ProductoController::class, 'cargar'])->name('cargarp');
Route::get('/producto/descarga', [App\Http\Controllers\ProductoController::class, 'descarga'])->name('descargap');
Route::get('/producto/descargo', [App\Http\Controllers\ProductoController::class, 'descargo'])->name('descargop');
Route::get('/producto/descargodetalle', [App\Http\Controllers\ProductoController::class, 'descargodetalle'])->name('descargodetalle');
Route::get('/producto/descargoborrar/{id}', [App\Http\Controllers\ProductoController::class, 'descargoborrar'])->name('descargopborrar');
Route::get('/producto/descargoguardar', [App\Http\Controllers\ProductoController::class, 'descargoguardar'])->name('descargoguardar');



// Cotizaciones
Route::get('/cotizacion', [App\Http\Controllers\CotizacioncController::class, 'index'])->name('indexco');
Route::get('/cotizacion/crear', [App\Http\Controllers\CotizacioncController::class, 'create'])->name('crearco');
Route::get('/cotizacion/detalleconcabe', [App\Http\Controllers\CotizacioncController::class, 'detalleconcabe'])->name('detalleconcabe');
Route::get('/cotizacion/detalleadd', [App\Http\Controllers\CotizacioncController::class, 'detalleadd'])->name('detalleadd');
Route::get('/cotizacion/ver/{id}', [App\Http\Controllers\CotizacioncController::class, 'ver'])->name('verco');
Route::get('/cotizacion/verpdf/{id}', [App\Http\Controllers\CotizacioncController::class, 'verpdf'])->name('verpdf');

Route::get('/cotizacion/borrardet/{id}', [App\Http\Controllers\CotizacioncController::class, 'borrardet'])->name('borrardet');

 
 

//Compras
Route::get('/compra', [App\Http\Controllers\ComprasController::class, 'index'])->name('indexcomp');
Route::get('/compra/ver/{id}', [App\Http\Controllers\ComprasController::class, 'ver'])->name('vercomp');
Route::get('/compra/verpdf/{id}', [App\Http\Controllers\ComprasController::class, 'verpdf'])->name('verpdfc');
Route::get('/compra/crear', [App\Http\Controllers\ComprasController::class, 'create'])->name('crearcomp');
Route::get('/compra/guardarenc', [App\Http\Controllers\ComprasController::class, 'guardarenc'])->name('guardarenc');
Route::get('/compra/guardardet', [App\Http\Controllers\ComprasController::class, 'guardardet'])->name('guardardet');
Route::get('/compra/borrar/{id}', [App\Http\Controllers\ComprasController::class, 'destroy'])->name('borrarcomp');
Route::get('/compra/editar/{id}', [App\Http\Controllers\ComprasController::class, 'edit'])->name('editarcomp');
Route::get('/compra/update/{id}', [App\Http\Controllers\ComprasController::class, 'update'])->name('updatecomp');
Route::get('/compra/guardartodo', [App\Http\Controllers\ComprasController::class, 'guardartodo'])->name('guardartodo');