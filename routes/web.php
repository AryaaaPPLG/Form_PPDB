<?php

use App\Http\Controllers\AuthController; // <--- Jangan lupa import ini di paling atas!
use App\Http\Controllers\FormController;
use App\Models\Form;
use Illuminate\Support\Facades\Route;

// 1. Route Publik (User biasa)
Route::redirect('/', '/form');
Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::get('/form/submit', function () {
    return view('form.not_allowed', [
        'message' => 'Form harus diisi terlebih dahulu sebelum melihat halaman ini.'
    ]);
});

    Route::get('/succesfully', function () {
        // Cek apakah user memiliki session success atau pernah submit form
        if (!session()->has('success')) {
            return redirect('/form')->with('error', 'Anda harus mengisi form terlebih dahulu.');
        }
        
        // Ambil pesan success dan hapus session agar tidak bisa kembali ke halaman ini
        $successMessage = session('success');
        session()->forget('success');
        
        return view('succesfully', ['success' => $successMessage]);
    })->name('form.success');
    Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');

// 2. Route Authentication (Gerbang Login & Logout)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 3. Route Khusus Admin (DIPROTEKSI)
Route::middleware(['auth'])->group(function () {

    // CRUD
    Route::get('/form/edit/{id}', [FormController::class, 'edit']);
    Route::put('/form/update/{id}', [FormController::class, 'update']);
    Route::delete('/form/destroy/{id}', [FormController::class, 'destroy']);

    // Dashboard Admin
    Route::get('/admin/dashboard', function (\Illuminate\Http\Request $request) {
        // Cek lagi biar aman, cuma admin yang boleh masuk sini
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Anda bukan Admin!');
        }

        // Forms data (existing) — independent paginator 'forms_page'
        $data = Form::orderBy('created_at', 'desc')
            ->paginate(5, ['*'], 'forms_page')
            ->withQueryString(); // Menampilkan 5 data per halaman

        // Users data (search + filter)
        $usersQuery = \App\Models\User::query();

        // Search by name or email via 'user_q'
        if ($request->filled('user_q')) {
            $search = $request->user_q;
            $usersQuery->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter by role via 'user_role'
        if ($request->filled('user_role')) {
            $usersQuery->where('role', $request->user_role);
        }

        // Default per-page for users
        $perPage = 5;

        // Use a separate paginator parameter to avoid conflict with other paginators
        $users = $usersQuery->orderBy('created_at', 'desc')
            ->paginate($perPage, ['*'], 'users_page')
            ->withQueryString();

        return view('admin.dashboard', compact('data', 'users'));
        })->name('admin.dashboard');



    // Fitur Export (Hanya admin)
    Route::get('/form/export', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Akses Ditolak');
        }
        return app(FormController::class)->export();
    })->name('form.export');
});
