<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submission Successful</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #1b3a82;
            --secondary-bg: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
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
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .success-container {
            width: 100%;
            max-width: 500px;
            background: var(--card-bg);
            border-radius: 20px;
            box-shadow: 0 10px 25px -5px rgba(27, 58, 130, 0.1), 0 8px 10px -6px rgba(27, 58, 130, 0.1);
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .success-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, #10b981 0%, #facc15 50%, #f97316 100%);
        }

        .success-icon {
            color: #10b981; /* Green checkmark */
            font-size: 4rem;
            margin-bottom: 1.5rem;
        }

        h1 {
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--primary-blue);
            margin-bottom: 0.75rem;
        }

        p {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .btn-home {
            display: inline-block;
            padding: 0.8rem 1.8rem;
            background: linear-gradient(135deg, var(--primary-blue) 0%, #162f6b 100%);
            color: white;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px -1px rgba(27, 58, 130, 0.3);
            text-decoration: none; /* Remove underline from link */
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(27, 58, 130, 0.4);
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">✅</div>
        <h1>Data Berhasil Dikirim!</h1>
        <p>Terima kasih telah mengisi formulir. Data Anda telah berhasil direkam.</p>
        <a href="{{ route('form.index') }}" class="btn-home">Kembali ke Formulir</a>
    </div>
</body>
</html>
