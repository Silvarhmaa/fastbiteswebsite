<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f2">
    <title>Masuk — FastBites</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;color:#222820;background:#f6f7f2;font-synthesis:none;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;--green:#236b45;--green-dark:#184d34;--muted:#858a82;--line:#e7ebe4}
        *{box-sizing:border-box}body{display:grid;min-height:100vh;margin:0;padding:24px;place-items:center}.auth-card{width:min(100%,430px);padding:38px;border:1px solid var(--line);border-radius:22px;background:#fff;box-shadow:0 18px 55px rgba(39,70,45,.08)}.brand{display:flex;align-items:center;gap:10px;margin-bottom:32px;color:#222820;font-size:21px;font-weight:850;letter-spacing:-.8px;text-decoration:none}.brand-mark{display:grid;width:41px;height:41px;place-items:center;border-radius:13px;color:#fff;background:var(--green);font-size:21px}.brand em{color:var(--green);font-style:normal}.eyebrow{margin:0 0 8px;color:var(--green);font-size:11px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}h1{margin:0;font-size:27px;letter-spacing:-.8px}.intro{margin:9px 0 25px;color:var(--muted);font-size:13px;line-height:1.6}.field{display:grid;gap:7px;margin:17px 0}.field label{font-size:12px;font-weight:700}.field input,.field select{width:100%;height:45px;padding:0 13px;border:1px solid var(--line);border-radius:10px;outline:none;color:#29342b;background:#fff;font:inherit;font-size:13px}.field input:focus,.field select:focus{border-color:var(--green);box-shadow:0 0 0 3px rgba(35,107,69,.1)}.error{color:#b33b30;font-size:11px}.remember{display:flex;align-items:center;gap:8px;margin:14px 0;color:#636a61;font-size:12px}.remember input{accent-color:var(--green)}.submit{width:100%;height:46px;margin-top:9px;border:0;border-radius:10px;color:#fff;background:var(--green);font:inherit;font-size:13px;font-weight:750;cursor:pointer}.submit:hover{background:var(--green-dark)}.foot{margin:22px 0 0;color:#6f766d;text-align:center;font-size:12px}.foot a{color:var(--green);font-weight:750;text-decoration:none}.notice{margin-bottom:15px;padding:11px 13px;border-radius:9px;color:#9d382e;background:#fff0ed;font-size:12px}@media(max-width:480px){body{padding:14px}.auth-card{padding:28px 23px}}
    </style>
</head>
<body>
<main class="auth-card">
    <a class="brand" href="{{ url('/') }}"><span class="brand-mark">🥬</span><span>fastbites<em>.</em></span></a>
    <p class="eyebrow">Selamat datang kembali</p>
    <h1>Masuk ke FastBites</h1>
    <p class="intro">Masuk untuk menemukan makanan surplus atau mengelola tokomu.</p>

    @if($errors->any())
        <div class="notice" role="alert">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required autofocus>
            @error('email')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="field">
            <label for="password">Kata sandi</label>
            <input id="password" name="password" type="password" autocomplete="current-password" required>
            @error('password')<span class="error">{{ $message }}</span>@enderror
        </div>
        <label class="remember"><input name="remember" type="checkbox" value="1"> Ingat saya</label>
        <button class="submit" type="submit">Masuk</button>
    </form>
    <p class="foot">Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
</main>
</body>
</html>
