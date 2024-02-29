<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin');
});

require __DIR__.'/auth.php';
