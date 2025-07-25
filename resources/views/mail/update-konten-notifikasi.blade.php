<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Pembaruan Konten</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #4f46e5;
            padding: 25px 30px;
            color: white;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 600;
        }
        .content {
            padding: 30px;
        }
        .notification-card {
            background: #f8f9fa;
            border-left: 4px solid #4f46e5;
            padding: 15px;
            margin-bottom: 25px;
        }
        .details {
            margin-bottom: 20px;
        }
        .detail-item {
            margin-bottom: 10px;
            display: flex;
        }
        .detail-label {
            font-weight: 600;
            min-width: 100px;
            color: #555;
        }
        .button {
            display: inline-block;
            background-color: #4f46e5;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            text-align: center;
            margin-top: 15px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #eee;
            background: #f9f9f9;
        }
        .logo {
            margin-bottom: 15px;
        }
        .logo img {
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">
                <img src="{{ public_path('images/logo.png') }}" alt="Logo Universitas Darma Persada">
            </div>
            <h1>Notifikasi Pembaruan Konten</h1>
        </div>
        
        <div class="content">
            <div class="notification-card">
                <p>Halo Admin/Dosen yang terhormat,</p>
                <p>Terdapat pembaruan konten untuk Anda tinjau:</p>
            </div>
            
            <div class="details">
                <div class="detail-item">
                    <span class="detail-label">Judul Konten : </span>
                    <span>{{ $content->page->title }}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Diperbarui Oleh : </span>
                    <span>{{ $editor->name }}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Waktu Pembaruan : </span>
                    <span>{{ \Carbon\Carbon::parse($content->updated_at,'Asia/Jakarta')->format('d/m/Y H:i') }}</span>
                </div>
            </div>
            
            <p>Silakan tinjau pembaruan konten dengan mengklik tombol di bawah ini:</p>
            
            <a href="{{ route('filament.admin.resources.contents.edit',$content->id) }}" class="button" style="color:whitesmoke;">Tinjau Pembaruan Konten</a>
            
            <p>Jika tombol tidak berfungsi, Anda dapat menyalin dan membuka tautan ini di browser Anda:<br>
            <small>{{ route('filament.admin.resources.contents.edit',$content->id) }}</small></p>
        </div>
        
        <div class="footer">
            <p>Email ini dikirim secara otomatis. Harap tidak membalas.</p>
            <p>&copy; 2025. Universitas Darma Persada - Prodi Sistem Informasi</p>
        </div>
    </div>
</body>
</html>
