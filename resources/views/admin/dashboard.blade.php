<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #3b82f6;
            --bg: #f8fafc;
            --card: #ffffff;
            --text: #1e293b;
            --border: #e2e8f0;
            --success: #10b981;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--border);
        }
        
        .header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text);
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-name {
            font-weight: 600;
            color: var(--text);
        }
        
        .btn-logout {
            background: #fee2e2;
            border: 1px solid #ef4444;
            color: #ef4444;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
        }
        
        .btn-logout:hover {
            background: #fecaca;
        }
        
        /* Main Card */
        .main-card {
            background: var(--card);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .welcome-section {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .welcome-section h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: var(--text);
        }
        
        .welcome-section p {
            color: #64748b;
            margin-bottom: 25px;
        }
        
        .btn-download {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--success) 0%, #0ca678 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s;
            box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.3);
        }
        
        .btn-download:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px -1px rgba(16, 185, 129, 0.4);
        }

        .btn-create {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--primary) 0%, #1e40af 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s;
            box-shadow: 0 4px 6px -1px rgba(59, 130, 246, 0.3);
            margin-left: 10px;
        }

        .btn-create:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px -1px rgba(59, 130, 246, 0.4);
        }
        
        /* Table Section */
        .table-section h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .table-container {
            overflow-x: auto;
            border-radius: 8px;
            border: 1px solid var(--border);
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }
        
        .data-table thead {
            background-color: #f1f5f9;
        }
        
        .data-table th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: var(--text);
            border-bottom: 2px solid var(--border);
        }
        
        .data-table td {
            padding: 15px;
            border-bottom: 1px solid var(--border);
        }
        
        .data-table tbody tr:hover {
            background-color: #f8fafc;
        }
        
        .org-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .org-education {
            background-color: #dbeafe;
            color: #1d4ed8;
        }
        
        .org-business {
            background-color: #dcfce7;
            color: #15803d;
        }
        
        .org-health {
            background-color: #fee2e2;
            color: #b91c1c;
        }
        
        .wa-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .wa-link:hover {
            text-decoration: underline;
        }
        .aksi {
            display: flex;
            gap: 1rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .user-info {
                width: 100%;
                justify-content: space-between;
            }
            
            .main-card {
                padding: 20px;
            }
            
            .data-table th,
            .data-table td {
                padding: 12px 10px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }
            
            .header h1 {
                font-size: 1.5rem;
            }
            
            .btn-download {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
        
        /* Pagination */
        .pagination-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        
        .pagination-container .pagination {
            display: flex;
            gap: 8px;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .pagination-container .pagination li {
            margin: 0;
        }
        
        .pagination-container .pagination a,
        .pagination-container .pagination span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            line-height: 0; /* ensure SVGs are perfectly centered */
            border: 1px solid var(--border);
            background: var(--card);
            color: var(--text);
            text-decoration: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: background .15s ease, transform .12s ease, color .15s ease, border-color .15s ease;
        }

        /* Resize and block SVG icons inside pagination items */
        .pagination-container .pagination a svg,
        .pagination-container .pagination span svg {
            width: 16px;
            height: 16px;
            display: block;
        }

        /* Font Awesome chevrons inside custom pagination */
        .custom-pagination .pagination a i,
        .custom-pagination .pagination span i {
            font-size: 14px;
            line-height: 0;
            display: inline-block;
        }

        .custom-pagination .pagination li a,
        .custom-pagination .pagination li span {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .custom-pagination .pagination li a i { color: var(--text); }
        .custom-pagination .pagination li a:hover i { color: #fff; }
        .custom-pagination .pagination li.disabled span i { color: #94a3b8; opacity: .6; }
        .custom-pagination .pagination li.active span { background: var(--primary); color: #fff; border-color: var(--primary); font-weight:600; }
        .custom-pagination .pagination li.active span i { color: #fff; }
        
        .pagination-container .pagination a:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
            transform: translateY(-2px);
        }
        
        .pagination-container .pagination .active span {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
            font-weight: 600;
        }
        
        .pagination-container .pagination .disabled span,
        .pagination-container .pagination .disabled a {
            color: #94a3b8;
            cursor: not-allowed;
            opacity: 0.5;
            transform: none;
            background: var(--card);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .pagination-container {
                margin-top: 15px;
            }
            
            .pagination-container .pagination a,
            .pagination-container .pagination span {
                width: 32px;
                height: 32px;
                font-size: 0.8rem;
            }

            .pagination-container .pagination a svg,
            .pagination-container .pagination span svg {
                width: 14px;
                height: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Dashboard Admin</h1>
            <div class="user-info">
                <span class="user-name">Halo, {{ Auth::user()->name ?? 'Admin' }}! 👋</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <i class="fas fa-sign-out-alt"></i>
                        Keluar
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Main Card -->
        <div class="main-card">
            <div class="welcome-section">
                <h2>Rekapitulasi Data</h2>
                <p>Unduh data terbaru dalam format Excel untuk analisis lebih lanjut atau buat data baru</p>
                <a href="{{ route('form.export') }}" class="btn-download">
                    <i class="fas fa-file-excel"></i>
                    Download Data Excel
                </a>
                <a href="{{ route('form.index') }}" class="btn-create">
                    <i class="fas fa-plus"></i>
                    Buat Data Baru
                </a>
            </div>
            
            <!-- Table Section (supports both Forms and Users views using same table markup) -->
            <div class="table-section">
                <div style="display:flex; align-items:center; justify-content:space-between; gap:10px; margin-bottom:10px;">
                    <h3 style="margin:0; display:flex; align-items:center; gap:10px;">
                        <i class="fas fa-table"></i>
                        @if(request('view') == 'users') Data Pengguna @else Data Terbaru @endif
                    </h3>

                    <div style="display:flex; gap:8px; align-items:center;">
                        <a href="{{ route('admin.dashboard') }}" class="btn-create" style="background: {{ request('view') == 'users' ? 'transparent' : '' }}; color: {{ request('view') == 'users' ? 'var(--text)' : 'white' }}; box-shadow: none; padding:8px 12px; font-size:0.92rem;">Data Terbaru</a>
                        <a href="{{ route('admin.dashboard') }}?view=users" class="btn-create" style="background: {{ request('view') == 'users' ? 'linear-gradient(135deg, #6b7280 0%, #374151 100%)' : '' }}; box-shadow: none; padding:8px 12px; font-size:0.92rem;">Data Pengguna</a>
                    </div>
                </div>

                <!-- Search & filters (only for users view) -->
                @if(request('view') == 'users')
                <form method="GET" action="{{ route('admin.dashboard') }}" style="display:flex; gap:10px; align-items:center; margin-bottom:12px;">
                    <input type="hidden" name="view" value="users">
                    <input type="text" name="user_q" placeholder="Cari nama atau email..." value="{{ request('user_q') }}" style="padding:8px 10px; border:1px solid var(--border); border-radius:6px; width:260px;">

                    <select name="user_role" style="padding:8px 10px; border:1px solid var(--border); border-radius:6px;">
                        <option value="">Semua role</option>
                        <option value="admin" {{ request('user_role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ request('user_role') == 'user' ? 'selected' : '' }}>User</option>
                    </select>

                    <button type="submit" style="background:var(--primary); color:white; padding:8px 12px; border-radius:6px; border:none; font-weight:600;">Cari</button>
                    <a href="{{ route('admin.dashboard') }}" style="padding:8px 12px; border-radius:6px; border:1px solid var(--border); text-decoration:none; color:var(--text);">Reset</a>

                    <div style="margin-left:auto; color:#64748b; font-size:0.9rem;">Total: <strong>{{ $users->total() ?? 0 }}</strong></div>
                </form>
                @endif

                <div class="table-container">
                    <table class="data-table">
                        <thead>
                        @if(request('view') == 'users')
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Tanggal Dibuat</th>
                            </tr>
                        @else
                            <tr>
                                <th>Nama</th>
                                <th>Organisasi</th>
                                <th>Daerah</th>
                                <th>Nomor WA</th>
                                <th>Aksi</th>
                            </tr>
                        @endif
                        </thead>

                        <tbody id="data-table-body">
                        @if(request('view') == 'users')
                            @forelse ($users ?? collect() as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role ?? 'user' }}</td>
                                <td>{{ $user->created_at ? $user->created_at->format('d M Y') : '-' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" style="text-align:center; padding:20px;">Tidak ada pengguna.</td>
                            </tr>
                            @endforelse
                        @else
                            @forelse ($data as $d)
                            <tr>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->organization }}</td>
                                <td>{{ $d->daerah }}</td>
                                <td>{{ $d->no_telp }}</td>
                                <td class="aksi">
                                    <a href="/form/edit/{{ $d->id }}" style="color: var(--primary); text-decoration: none; font-weight: 600;">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <form action="/form/destroy/{{ $d->id }}" method="POST" onsubmit="return confirm('Yakin hapus data?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; color: #ef4444; cursor: pointer; font-weight: 600; font-family: inherit; display: flex; align-items: center; gap: 4px;">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" style="text-align: center; padding: 20px;">Data tidak ada</td>
                            </tr>
                            @endforelse
                        @endif
                        </tbody>
                    </table>
                </div>

                <div class="pagination-container">
                    @if(request('view') == 'users')
                        {{ $users->links('vendor.pagination.custom') }}
                    @else
                        {{ $data->links('vendor.pagination.custom') }}
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div style="text-align: center; color: #64748b; font-size: 0.9rem; padding-top: 20px; border-top: 1px solid var(--border);">
            PPLG SMKS Muhammadiyah 1 Genteng • {{ date('d M Y') }}
        </div>
    </div>
</body>
</html>