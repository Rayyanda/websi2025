<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi Update Konten</title>
    <style>
        /* Base Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f7fafc;
            margin: 0;
            padding: 0;
        }
        
        /* Email Container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        /* Header */
        .header {
            background-color: #3B82F6;
            padding: 20px;
            text-align: center;
            color: white;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        /* Content */
        .content {
            padding: 25px;
        }
        
        .content h1 {
            color: #1E3A8A;
            font-size: 22px;
            margin-top: 0;
        }
        
        .content p {
            margin-bottom: 15px;
        }
        
        /* Button */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3B82F6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .btn:hover {
            background-color: #2563EB;
        }
        
        /* Footer */
        .footer {
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #6B7280;
            background-color: #F3F4F6;
        }
        
        /* Alert Box */
        .alert {
            background-color: #FEF3C7;
            border-left: 4px solid #F59E0B;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        /* Metadata */
        .metadata {
            font-size: 14px;
            color: #6B7280;
            margin-bottom: 10px;
        }
        
        .metadata div {
            margin-bottom: 5px;
        }
        
        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-container {
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">Sistem Konten</div>
            <div>Notifikasi Update Konten</div>
        </div>
        
        <div class="content">
            <h1>Permintaan Update Konten</h1>
            
            <div class="alert">
                Diperlukan tindakan dari Anda untuk melakukan pembaruan konten.
            </div>
            
            <p>Halo Admin,</p>
            
            <p>Anda menerima email ini karena terdapat permintaan pembaruan konten yang memerlukan tindakan dari Anda.</p>
            
            @foreach ($konten as $item)
            <div class="metadata">
                <div><strong>Jenis Konten:</strong> Artikel Blog</div>
                <div><strong>Judul Konten:</strong> {{ $item->page->title }}</div>
                <div><strong>Pembaruan Terakhir:</strong> {{ \Carbon\Carbon::parse($item->updated_at)->format('d F Y') }}</div>
                <div><strong>Peminta:</strong> Tim Konten</div>
                <a href="{{ route('filament.admin.resources.contents.index') }}" class="btn">Lihat</a>
            </div>
            <hr>
            @endforeach
            
            <p>Jika tombol di atas tidak bekerja, salin dan tempel URL berikut di browser Anda:  </p>
            <a href="{{ route('filament.admin.resources.contents.index') }}" class="btn">Lihat</a>
            
            <p>Harap segera memproses permintaan ini sebelum <strong>{{ \Carbon\Carbon::now('Asia/Jakarta')->addDays(3)->format('d F Y') }}</strong>.</p>
            
            <p>Terima kasih,<br>Tim Sistem Konten</p>
        </div>
        
        <div class="footer">
            <div>©2025 Sistem Konten. Semua hak dilindungi.</div>
            <div>Email ini dikirim secara otomatis, harap tidak membalas.</div>
            <div>Anda menerima email ini karena Anda terdaftar sebagai admin sistem.</div>
        </div>
    </div>
</body>
</html>
