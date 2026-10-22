<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f2">
    <title>Dashboard Merchant — FastBites</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;color:#222820;background:#f6f7f2;--green:#236b45;--muted:#858a82;--line:#e7ebe4}
        *{box-sizing:border-box}body{display:grid;min-height:100vh;margin:0;padding:24px;place-items:center}.card{width:min(100%,640px);padding:40px;border:1px solid var(--line);border-radius:22px;background:#fff;box-shadow:0 18px 55px rgba(39,70,45,.08)}.brand{display:flex;align-items:center;gap:10px;margin-bottom:40px;color:#222820;font-size:20px;font-weight:850;letter-spacing:-.8px;text-decoration:none}.brand-mark{display:grid;width:39px;height:39px;place-items:center;border-radius:13px;color:#fff;background:var(--green);font-size:20px}.brand em{color:var(--green);font-style:normal}.eyebrow{margin:0 0 9px;color:var(--green);font-size:11px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}h1{margin:0;font-size:30px;letter-spacing:-1px}.intro{margin:10px 0 26px;color:var(--muted);font-size:13px;line-height:1.7}.placeholder{padding:20px;border:1px dashed #cfdccf;border-radius:13px;color:#657064;background:#f8fbf7;font-size:12px;line-height:1.7}.placeholder strong{display:block;margin-bottom:4px;color:#29342b;font-size:13px}.actions{display:flex;flex-wrap:wrap;gap:10px;margin-top:25px}.button{display:inline-flex;min-height:41px;align-items:center;justify-content:center;padding:0 15px;border:1px solid var(--line);border-radius:9px;color:#485148;background:#fff;font-size:11px;font-weight:750;cursor:pointer}.button.primary{border-color:var(--green);color:#fff;background:var(--green)}.button.primary:hover{background:#184d34}form{margin:0}@media(max-width:520px){body{padding:14px}.card{padding:28px 23px}h1{font-size:26px}}
    </style>
</head>
<body>
<main class="card">
    <a class="brand" href="{{ route('home') }}"><span class="brand-mark">🥬</span><span>fastbites<em>.</em></span></a>
    <p class="eyebrow">Dashboard Merchant</p>
    <h1>Halo, {{ auth()->user()->name }} 👋</h1>
    <p class="intro">Halaman khusus pemilik usaha. Dashboard ini sudah dipisahkan agar fitur toko, produk surplus, dan pesanan bisa dikembangkan di sini.</p>
    <div class="placeholder"><strong>Ruang kerja usahamu</strong>Pengelolaan profil toko, produk, stok, dan pesanan akan tersedia di halaman ini.</div>
    <div class="actions">
        <a class="button primary" href="{{ route('home') }}">Lihat marketplace</a>
        <form method="POST" action="{{ route('logout') }}">@csrf<button class="button" type="submit">Keluar</button></form>
    </div>
</main>
</body>
</html>
