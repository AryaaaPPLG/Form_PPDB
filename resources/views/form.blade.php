<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Data Sekolah</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* Palette diambil dari Poster */
            --primary-blue: #1b3a82; 
            --secondary-bg: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #cbd5e1;
            
            /* Aksen Orange */
            --accent-orange: #f59e0b; 
            
            /* Gradasi dekorasi */
            --decoration-gradient: linear-gradient(90deg, #10b981 0%, #facc15 50%, #f97316 100%);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--secondary-bg);
            background-image: radial-gradient(#e2e8f0 1px, transparent 1px);
            background-size: 20px 20px;
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 550px;
            margin-top: 2rem;
        }

        /* Card Design */
        .card {
            background: var(--card-bg);
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(27, 58, 130, 0.1), 0 8px 10px -6px rgba(27, 58, 130, 0.1);
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: var(--decoration-gradient);
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center; /* Memastikan logo di tengah */
        }

        /* Styling Logo Muhammadiyah */
        .header img {
            width: 100px; /* Ukuran logo */
            height: auto;
            margin-bottom: 1.5rem; /* Jarak antara logo dan judul */
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1)); /* Efek bayangan halus */
        }

        .header h1 {
            font-size: 1.75rem; /* Sedikit disesuaikan agar tidak terlalu panjang */
            font-weight: 800;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
            text-transform: uppercase;
            line-height: 1.3;
        }

        .header p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .form-group { margin-bottom: 1.25rem; }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            font-size: 0.9rem;
        }

        /* Input field */
        input[type="text"] {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid var(--border);
            border-radius: 12px;
            background-color: #fff;
            font-size: 1rem;
            color: var(--text-main);
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: var(--accent-orange);
            box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.15);
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* Tombol Submit */
        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, var(--primary-blue) 0%, #162f6b 100%);
            color: white;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 4px 6px -1px rgba(27, 58, 130, 0.3);
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(27, 58, 130, 0.4);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .alert {
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            font-weight: 600;
            text-align: center;
        }
        .alert-success {
            background-color: #ecfdf5;
            color: #059669;
            border: 1px solid #6ee7b7;
        }

        .footer-text {
            text-align: center;
            margin-top: 25px;
            color: var(--text-muted);
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .footer-text span {
            color: var(--primary-blue);
            font-weight: 700;
        }

        @media (max-width: 640px) {
            .row { grid-template-columns: 1fr; } 
            .card { padding: 1.5rem; }
            .header h1 { font-size: 1.4rem; }
        }
    </style>
</head>
<body>

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                ✅ {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="header">
                <img class="w-full h-full" src="https://logos-world.net/wp-content/uploads/2023/08/Muhammadiyah-Logo-500x281.png" alt="Logo Muhammadiyah">
                
                <h1>Absensi Pertemuan PDM Se-Balappan dan PCM se-Kab Banyuwangi</h1>
                <p>Silakan lengkapi data di bawah ini dengan benar untuk keperluan administrasi.</p>
            </div>

            <form action="{{ route('form.submit') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap Anda" required value="{{ old('name') }}">
                    @error('name')
                        <div style="color: red; font-size: 0.875rem; margin-top: 0.5rem;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="organization">Utusan</label>
                    <input type="text" id="organization" name="organization" placeholder="Contoh: PDM Balappan atau PCM Banyuwangi" required value="{{ old('organization') }}">
                    @error('organization')
                        <div style="color: red; font-size: 0.875rem; margin-top: 0.5rem;">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <label for="daerah">Alamat / Daerah</label>
                        <input type="text" id="daerah" name="daerah" placeholder="Kota/Kabupaten" value="{{ old('daerah') }}">
                        @error('daerah')
                            <div style="color: red; font-size: 0.875rem; margin-top: 0.5rem;">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="no_telp">Nomor WhatsApp</label>
                        <input type="text" id="no_telp" name="no_telp" placeholder="08xxxxxxxxxx" value="{{ old('no_telp') }}">
                        @error('no_telp')
                            <div style="color: red; font-size: 0.875rem; margin-top: 0.5rem;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn-submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13"/><path d="M22 2 15 22 11 13 2 9 22 2"/></svg>
                    Kirim Data
                </button>
            </form>
        </div>
        
        <p class="footer-text">
            &copy; {{ date('Y') }} <span>PPLG SMKS Muhammadiyah 1 Genteng</span>
        </p>
    </div>

</body>
</html>