<?php

use App\Livewire\GraphContainer;
use Illuminate\Support\Facades\Route;

Route::get('/', GraphContainer::class)->name('home');
