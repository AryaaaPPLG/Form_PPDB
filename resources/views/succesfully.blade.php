<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berhasil Dikirim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }
        
        .success-container {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 100, 0, 0.08);
            max-width: 520px;
            width: 100%;
            padding: 50px 40px;
            text-align: center;
            border-top: 6px solid #10b981;
            position: relative;
            overflow: hidden;
        }
        
        /* Elemen dekoratif */
        .success-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #10b981, #34d399, #10b981);
        }
        
        .icon-container {
            width: 100px;
            height: 100px;
            background-color: #f0fdf4;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 30px;
            border: 4px solid #d1fae5;
        }
        
        .error-container {
            text-align: center;
            padding: 40px 30px;
        }
        
        .error-icon {
            background-color: #fef2f2;
            border: 4px solid #fee2e2;
        }
        
        .error-icon i {
            color: #ef4444;
            font-size: 50px;
        }
        
        .error-message {
            color: #dc2626;
            font-weight: 600;
        }
        
        .success-icon {
            color: #10b981;
            font-size: 50px;
        }
        
        h1 {
            color: #047857;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        
        .message {
            color: #374151;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 35px;
        }
        
        .highlight {
            color: #059669;
            font-weight: 600;
        }
        
        .status-indicator {
            display: inline-flex;
            align-items: center;
            background-color: #f0fdf4;
            color: #065f46;
            padding: 12px 24px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 30px;
            border: 1px solid #a7f3d0;
        }
        
        .status-icon {
            margin-right: 10px;
            color: #10b981;
            font-size: 18px;
        }
        
        .info-box {
            background: linear-gradient(135deg, #f0fdf4 0%, #f8fafc 100%);
            border-radius: 18px;
            padding: 32px;
            margin-top: 28px;
            text-align: left;
            border: 1px solid #d1fae5;
            border-left: 5px solid #10b981;
            box-shadow: 0 8px 24px rgba(16, 185, 129, 0.1);
            transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
            position: relative;
            overflow: hidden;
        }
        
        .info-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #10b981, #34d399, transparent);
        }
        
        .info-box:hover {
            box-shadow: 0 12px 32px rgba(16, 185, 129, 0.15);
            transform: translateY(-4px);
            border-color: #a7f3d0;
        }
        
        .info-title {
            color: #047857;
            font-weight: 700;
            font-size: 19px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            letter-spacing: 0.4px;
        }
        
        .info-title i {
            margin-right: 12px;
            font-size: 22px;
            color: #10b981;
            background: rgba(16, 185, 129, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .info-box:hover .info-title i {
            background: rgba(16, 185, 129, 0.2);
            transform: scale(1.1);
        }
        
        .info-content {
            color: #4b5563;
            font-size: 15px;
            line-height: 1.8;
        }
        
        .info-content p {
            margin-bottom: 14px;
            font-weight: 500;
        }
        
        .info-content p:first-of-type {
            color: #047857;
            font-weight: 600;
        }
        
        .info-content ul {
            padding-left: 28px;
            margin: 14px 0;
            background: rgba(16, 185, 129, 0.03);
            padding: 14px 14px 14px 28px;
            border-radius: 10px;
            border-left: 3px solid #d1fae5;
        }
        
        .info-content li {
            margin-bottom: 10px;
            position: relative;
            color: #374151;
        }
        
        .info-content li:last-child {
            margin-bottom: 0;
        }
        
        .info-content li:before {
            content: '✓';
            color: #10b981;
            font-weight: bold;
            margin-left: -18px;
            margin-right: 8px;
            font-size: 16px;
        }

        /* Powered By logos */
        .powered-by {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            margin-top: 28px;
            padding-top: 24px;
            border-top: 2px solid #d1fae5;
            background: linear-gradient(90deg, rgba(16, 185, 129, 0.03) 0%, transparent 100%);
            padding: 20px 0;
            border-radius: 12px;
        }

        .powered-text {
            color: #047857;
            font-weight: 700;
            font-size: 16px;
            white-space: nowrap;
            flex-shrink: 0;
            letter-spacing: 0.4px;
        }

        .powered-by .logos {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 16px;
            flex-grow: 1;
        }

        .powered-by .logos img {
            height: 90px;
            width: auto;
            object-fit: contain;
            display: block;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.06));
        }

        .powered-by .logos img:hover {
            transform: scale(1.1) translateY(-4px);
            filter: drop-shadow(0 6px 12px rgba(16, 185, 129, 0.2));
        }

        @media (max-width: 576px) {
            .powered-by {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                padding: 16px 0;
            }

            .powered-by .logos {
                justify-content: flex-start;
                flex-wrap: wrap;
                width: 100%;
                gap: 12px;
            }

            .powered-by .logos img {
                height: 75px;
            }
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 14px 28px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
        }
        
        .btn-primary {
            background-color: #10b981;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #059669;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }
        
        .btn-secondary {
            background-color: #f3f4f6;
            color: #374151;
            border: 1px solid #d1d5db;
        }
        
        .btn-secondary:hover {
            background-color: #e5e7eb;
            transform: translateY(-2px);
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        .footer-note {
            margin-top: 30px;
            color: #6b7280;
            font-size: 14px;
            font-style: italic;
            line-height: 1.5;
        }
        
        /* Animasi */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .success-container {
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes checkmark {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
        
        .success-icon {
            animation: checkmark 0.5s cubic-bezier(0.65, 0, 0.45, 1) 0.3s both;
        }
        
        .error-icon i {
            animation: shake 0.5s ease-in-out 0.3s both;
        }
        
        /* Responsif */
        @media (max-width: 576px) {
            .success-container {
                padding: 40px 25px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .message {
                font-size: 16px;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 12px;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        @if(session('error'))
            <div class="error-container">
                <div class="icon-container error-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <h1>Oops!</h1>
                <div class="message error-message">
                    {{ session('error') }}
                </div>
                <div class="action-buttons">
                    <button class="btn btn-primary" onclick="window.location.href='{{ route('form.index') }}'">
                        <i class="fas fa-arrow-left"></i> Kembali ke Form
                    </button>
                    <button class="btn btn-secondary" onclick="window.location.href='/'">
                        <i class="fas fa-home"></i> Beranda
                    </button>
                </div>
            </div>
        @else
            <div class="icon-container">
                <i class="fas fa-check-circle success-icon"></i>
            </div>
            
            <h1>Data Berhasil Dikirim!</h1>
            
            <div class="message">
                @if(isset($success))
                    {{ $success }}
                @else
                    Terima kasih telah mengirimkan data Anda. <span class="highlight">Tim admin kami telah menerima informasi yang Anda kirimkan</span> dan akan segera memprosesnya.
                @endif
            </div>
            
            <div class="status-indicator">
                <i class="fas fa-clock status-icon"></i>
                <span>Menunggu Verifikasi Admin</span>
            </div>
            
            <div class="info-box">
                <div class="powered-by">
                    <div class="powered-text">&copy;Powered By PPLG</div>
                    <div class="logos">
                        <img src="{{ asset('assets/logo2.png') }}" alt="PPLG Logo 2" style="height: 90px; width: auto;">
                    </div>
                </div>
            </div>
            
            <div class="action-buttons">
                <button class="btn btn-primary" onclick="window.location.href='{{ route('form.index') }}'">
                    <i class="fas fa-plus"></i> Isi Form Lagi
                </button>
                <button class="btn btn-secondary" onclick="window.location.href='/'">
                    <i class="fas fa-home"></i> Beranda
                </button>
            </div>
            
            <div class="footer-note">
                Proses verifikasi biasanya memerlukan waktu 1-3 hari kerja. Terima kasih atas kesabaran Anda.
            </div>
        @endif
    </div>

    <script>
        // Menambahkan sedikit interaksi
        document.addEventListener('DOMContentLoaded', function() {
            // Efek hover untuk seluruh container
            const container = document.querySelector('.success-container');
            
            container.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            container.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
            
            // Tambahkan efek klik pada tombol
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });
            
            // Tambahkan pesan konsol untuk developer
            console.log('Halaman notifikasi sukses - Data berhasil dikirim');
        });
    </script>
</body>
</html>