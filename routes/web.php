<?php

use App\Livewire\AddDriver;
use App\Livewire\BookTickets;
use App\Livewire\Dashboard;
use App\Livewire\DriverRecord;
use App\Livewire\DriversShift;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\RouteAsign;
use App\Livewire\Status;
use App\Livewire\TicketRecord;
use Illuminate\Support\Facades\Route;

Route::get('/',Register::class);
Route::get('/login',Login::class);
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/tickets',BookTickets::class);
Route::get('/routes',RouteAsign::class);
Route::get('/record',TicketRecord::class);
Route::get('/driver',AddDriver::class);
Route::get('/info',DriverRecord::class);
Route::get('/shifts',DriversShift::class);
Route::get('/status',Status::class);



