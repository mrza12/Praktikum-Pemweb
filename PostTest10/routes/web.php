<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\OrderController;
    Route::get('/pesan', [OrderController::class,
    'showFormPesan'])->name('show-form-pesan');
    Route::post('/submit-order', [OrderController::class,
    'submitData'])->name('submit-pesan');
    Route::get('/', function () {
    return redirect()->route('show-form-pesan'); // Ubah rute ke show-form-pesan
});