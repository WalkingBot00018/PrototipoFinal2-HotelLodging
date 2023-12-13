<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;

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

Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('user.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('user.store');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('user.shows');
Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('user.edit');
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/rol', [RolesController::class, 'index'])->name('role.index');
Route::get('/rol/create', [RolesController::class, 'create'])->name('role.create');
Route::post('/rol/store', [RolesController::class, 'store'])->name('role.store');
Route::get('/rol/{role}', [RolesController::class, 'show'])->name('role.shows');
Route::get('/rol/{role}/editar', [RolesController::class, 'edit'])->name('role.edit');
Route::put('/rol/{role}', [RolesController::class, 'update'])->name('role.update');
Route::delete('/rol/{role}', [RolesController::class, 'destroy'])->name('role.destroy');


Route::get('/cliente', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/cliente/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/cliente/store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/cliente/{clientes}', [CustomerController::class, 'show'])->name('customer.shows');
Route::get('/cliente/{clientes}/editar', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/cliente/{clientes}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/cliente/{clientes}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('/reservas', [BookingsController::class, 'index'])->name('bookings.index');
Route::get('/reservas/create', [BookingsController::class, 'create'])->name('bookings.create');
Route::post('/reservas/store', [BookingsController::class, 'store'])->name('bookings.store');
Route::get('/reservas/{reservas}', [BookingsController::class, 'show'])->name('bookings.shows');
Route::get('/reservas/{reservas}/editar', [BookingsController::class, 'edit'])->name('bookings.edit');
Route::put('/reservas/{reservas}', [BookingsController::class, 'update'])->name('bookings.update');
Route::delete('/reservas/{reservas}', [BookingsController::class, 'destroy'])->name('bookings.destroy');


Route::get('/factura', [BillingController::class, 'index'])->name('billing.index');
Route::get('/factura/create', [BillingController::class, 'create'])->name('billing.create');
Route::post('/factura/store', [BillingController::class, 'store'])->name('billing.store');
Route::get('/factura/{facturacion}', [BillingController::class, 'show'])->name('billing.shows');
Route::get('/factura/{facturacion}/editar', [BillingController::class, 'edit'])->name('billing.edit');
Route::put('/factura/{facturacion}', [BillingController::class, 'update'])->name('billing.update');
Route::delete('/factura/{facturacion}', [BillingController::class, 'destroy'])->name('billing.destroy');


Route::get('/pagomet', [PaymentMethodController::class, 'index'])->name('payment_method.index');
Route::get('/pagomet/create', [PaymentMethodController::class, 'create'])->name('payment_method.create');
Route::post('/pagomet/store', [PaymentMethodController::class, 'store'])->name('payment_method.store');
Route::get('/pagomet/{metodpagos}', [PaymentMethodController::class, 'show'])->name('payment_method.shows');
Route::get('/pagomet/{metodpagos}/editar', [PaymentMethodController::class, 'edit'])->name('payment_method.edit');
Route::put('/pagomet/{metodpagos}', [PaymentMethodController::class, 'update'])->name('payment_method.update');
Route::delete('/pagomet/{metodpagos}', [PaymentMethodController::class, 'destroy'])->name('payment_method.destroy');


 //Rutas de Login y Logout
 Route::get('login', [LoginController::class,'index'])->name('login');
 Route::post('logout', [LogoutController::class,'store'])->name('logout');
 Route::post('login', [LoginController::class,'store']);

 //Vista de usuario logueado
 Route::get('/home', [HomeController::class,'index'])->name('home.index')->middleware('auth');