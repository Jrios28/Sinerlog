<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PessoaController;


// Route::get('pessoa', PessoaController::class, 'index')->name('api.v1.pessoa.index');
// Route::post('pessoa', PessoaController::class, 'store')->name('api.v1.pessoa.store');
// Route::get('pessoa/{Pessoa}', PessoaController::class, 'show')->name('api.v1.pessoa.show');
// Route::put('pessoa/{Pessoa}', PessoaController::class, 'update')->name('api.v1.pessoa.update');
// Route::delete('pessoa/{Pessoa}', PessoaController::class, 'delete')->name('api.v1.pessoa.delete');

Route::apiResource('/pessoa', PessoaController::class)->names('api.v1.pessoa');

