<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;



Route::get('/',[TicketController::class, 'index']);


Route::post('/tickets/store',[TicketController::class,'store'])->name('task.store');
//Route::delete('/tickets/delete/{id}',[TicketController::class, 'delete'])->name('task.delete');
Route::post('/tickets/edit/{id}', [TicketController::class, 'edit'])->name('task.edit');
Route::put('/tickets/update/{id}',[TicketController::class,'update'])->name('task.update');
