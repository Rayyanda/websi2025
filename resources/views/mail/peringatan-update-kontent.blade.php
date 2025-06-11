<!DOCTYPE html>
<html lang="en" style="background-color: #ffffff; margin:0; padding:0;">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Content Update Alert</title>
</head>
<body style="background-color: #ffffff; margin:0; padding:0; font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: #6b7280;">
  <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #ffffff; padding: 32px 16px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" role="presentation" style="background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); padding: 48px 48px 56px; text-align: left;">
          <tr>
            <td style="padding-bottom: 24px;">
              <h1 style="margin: 0; font-size: 48px; font-weight: 700; color: #111827; line-height: 1.1;">
                Peringatan Update Konten
              </h1>
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 24px; font-size: 18px; line-height: 1.5; color: #4b5563;">
              Halo Admin,
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 32px; font-size: 18px; line-height: 1.6; color: #374151;">
              Kami ingin memberi tahu Anda bahwa sudah waktunya untuk melakukan update konten terbaru pada sistem.
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 32px;">
              <div style="background-color: #f9fafb; border-radius: 8px; padding: 20px; font-size: 16px; line-height: 1.5; color: #374151; box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.05);">
                {{-- Contoh menampilkan daftar konten yang diupdate --}}
                <ul style="margin: 0; padding-left: 20px; color: #374151;">
                  {{-- @foreach ($updatedContents as $content)
                    <li><strong>{{ $content['title'] }}</strong> - Diupdate pada {{ $content['updated_at']->format('d M Y H:i') }}</li>
                  @endforeach --}}
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 24px; font-size: 18px; line-height: 1.5; color: #4b5563;">
              Harap periksa & verifikasi konten sesuai kebutuhan. Terima kasih atas perhatian dan kerjasamanya.
            </td>
          </tr>
          <tr>
            <td style="font-size: 18px; line-height: 1.5; color: #6b7280;">
              Hormat kami,<br />
              Tim Content Management
            </td>
          </tr>
          <tr>
            <td style="padding-top: 48px; font-size: 14px; color: #9ca3af; text-align: center;">
              &copy; {{ date('Y') }} Perusahaan Anda. Semua hak cipta dilindungi.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>

