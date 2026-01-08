<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belum Diisi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }
        
        .success-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 520px;
            width: 100%;
            overflow: hidden;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .success-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #ee5a52);
            animation: shimmer 3s infinite;
        }
        
        .error-container {
            text-align: center;
            padding: 45px 35px;
            position: relative;
            z-index: 1;
        }
        
        .icon-container {
            width: 90px;
            height: 90px;
            margin: 0 auto 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            box-shadow: 0 10px 30px rgba(255, 107, 107, 0.4);
            animation: pulse-error 2s infinite;
            position: relative;
            overflow: hidden;
        }
        
        .icon-container::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
            animation: rotate 10s linear infinite reverse;
            opacity: 0.5;
        }
        
        .error-icon i {
            font-size: 45px;
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
            position: relative;
            z-index: 2;
        }
        
        h1 {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 15px;
            color: #1a202c;
            letter-spacing: -0.5px;
            text-transform: uppercase;
            background: linear-gradient(135deg, #2d3748, #4a5568);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .message {
            font-size: 16px;
            line-height: 1.7;
            color: #4a5568;
            margin-bottom: 25px;
            font-weight: 500;
        }
        
        .error-message {
            color: #e53e3e;
            font-weight: 800;
            font-size: 18px;
            background: linear-gradient(120deg, #ff6b6b, #ee5a52);
            background-size: 100%;
            background-clip: text;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(238, 90, 82, 0.3);
        }
        
        .btn {
            display: inline-block;
            padding: 14px 28px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            cursor: pointer;
            margin: 0 8px;
            position: relative;
            overflow: hidden;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn:hover::before {
            left: 100%;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #4299e1, #3182ce);
            color: white;
            box-shadow: 0 8px 25px rgba(66, 153, 225, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 30px rgba(66, 153, 225, 0.6);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #a0aec0, #718096);
            color: white;
            box-shadow: 0 8px 25px rgba(160, 174, 192, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-secondary:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 30px rgba(160, 174, 192, 0.6);
        }
        
        .action-buttons {
            margin-top: 35px;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        @keyframes pulse-error {
            0% { transform: scale(1); box-shadow: 0 10px 30px rgba(255, 107, 107, 0.4); }
            50% { transform: scale(1.05); box-shadow: 0 15px 40px rgba(255, 107, 107, 0.6); }
            100% { transform: scale(1); box-shadow: 0 10px 30px rgba(255, 107, 107, 0.4); }
        }
        
        @keyframes shimmer {
            0% { background-position: -200px 0; }
            100% { background-position: 200px 0; }
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @media (max-width: 640px) {
            .success-container {
                margin: 15px;
                border-radius: 16px;
            }
            
            h1 {
                font-size: 26px;
            }
            
            .icon-container {
                width: 70px;
                height: 70px;
                margin-bottom: 20px;
            }
            
            .icon-container i {
                font-size: 35px;
            }
            
            .btn {
                padding: 12px 24px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="error-container">
            <div class="icon-container error-icon">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <h1>Oops!</h1>
            <div class="message error-message">
                {{ $message }}
            </div>
            <div class="action-buttons">
                <a href="{{ route('form.index') }}" class="btn btn-primary">Kembali ke Form</a>
                <a href="/" class="btn btn-secondary">Beranda</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.success-container');
            
            // Tambahkan efek hover pada container
            container.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.transition = 'transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            });
            
            container.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
            
            // Tambahkan efek klik pada tombol
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = '';
                    }, 150);
                });
            });
            
            // Tambahkan animasi tambahan pada icon
            const icon = document.querySelector('.icon-container');
            if (icon) {
                icon.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                });
                
                icon.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                });
            }
            
            // Tambahkan efek partikel halus
            const body = document.body;
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.style.position = 'fixed';
                particle.style.width = '4px';
                particle.style.height = '4px';
                particle.style.background = 'rgba(255, 255, 255, 0.3)';
                particle.style.borderRadius = '50%';
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.top = Math.random() * 100 + 'vh';
                particle.style.pointerEvents = 'none';
                particle.style.animation = `float ${2 + Math.random() * 3}s linear infinite`;
                body.appendChild(particle);
            }
            
            // Tambahkan keyframes untuk animasi partikel
            const style = document.createElement('style');
            style.textContent = `
                @keyframes float {
                    0% { transform: translateY(0) rotate(0deg); opacity: 0; }
                    50% { opacity: 1; }
                    100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
</body>
</html>