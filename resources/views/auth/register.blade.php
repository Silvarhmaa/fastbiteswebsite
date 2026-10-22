<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f2">
    <title>Daftar — FastBites</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;color:#222820;background:#f6f7f2;font-synthesis:none;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;--green:#236b45;--green-dark:#184d34;--muted:#858a82;--line:#e7ebe4}
        *{box-sizing:border-box}body{display:grid;min-height:100vh;margin:0;padding:24px;place-items:center}.auth-card{width:min(100%,450px);padding:38px;border:1px solid var(--line);border-radius:22px;background:#fff;box-shadow:0 18px 55px rgba(39,70,45,.08)}.brand{display:flex;align-items:center;gap:10px;margin-bottom:29px;color:#222820;font-size:21px;font-weight:850;letter-spacing:-.8px;text-decoration:none}.brand-mark{display:grid;width:41px;height:41px;place-items:center;border-radius:13px;color:#fff;background:var(--green);font-size:21px}.brand em{color:var(--green);font-style:normal}.eyebrow{margin:0 0 8px;color:var(--green);font-size:11px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}h1{margin:0;font-size:27px;letter-spacing:-.8px}.intro{margin:9px 0 23px;color:var(--muted);font-size:13px;line-height:1.6}.field{display:grid;gap:7px;margin:15px 0}.field label{font-size:12px;font-weight:700}.field input,.field select{width:100%;height:44px;padding:0 13px;border:1px solid var(--line);border-radius:10px;outline:none;color:#29342b;background:#fff;font:inherit;font-size:13px}.field input:focus,.field select:focus{border-color:var(--green);box-shadow:0 0 0 3px rgba(35,107,69,.1)}.error{color:#b33b30;font-size:11px}.submit{width:100%;height:46px;margin-top:9px;border:0;border-radius:10px;color:#fff;background:var(--green);font:inherit;font-size:13px;font-weight:750;cursor:pointer}.submit:hover{background:var(--green-dark)}.foot{margin:21px 0 0;color:#6f766d;text-align:center;font-size:12px}.foot a{color:var(--green);font-weight:750;text-decoration:none}.notice{margin-bottom:15px;padding:11px 13px;border-radius:9px;color:#9d382e;background:#fff0ed;font-size:12px}.hint{color:var(--muted);font-size:10px;line-height:1.5}@media(max-width:480px){body{padding:14px}.auth-card{padding:28px 23px}}
    </style>
</head>
<body>
<main class="auth-card">
    <a class="brand" href="{{ url('/') }}"><span class="brand-mark">🥬</span><span>fastbites<em>.</em></span></a>
    <p class="eyebrow">Mulai selamatkan makanan</p>
    <h1>Buat akun FastBites</h1>
    <p class="intro">Bergabung sebagai konsumen, pemilik usaha kuliner, atau admin.</p>

    @if($errors->any())
        <div class="notice" role="alert">Periksa kembali data yang kamu masukkan.</div>
    @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div class="field">
            <label for="name">Nama lengkap</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required autofocus>
            @error('name')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required>
            @error('email')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="field">
            <label for="role">Saya ingin bergabung sebagai</label>
            <select id="role" name="role" required>
                <option value="consumer" @selected(old('role', 'consumer') === 'consumer')>Konsumen — membeli makanan surplus</option>
                <option value="seller" @selected(old('role') === 'seller')>Pemilik usaha — menjual produk surplus</option>
                <option value="admin" @selected(old('role') === 'admin')>Admin — mengelola platform</option>
            </select>
            @error('role')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="field" id="admin-code-field" hidden>
            <label for="admin_registration_code">Kode undangan admin</label>
            <input id="admin_registration_code" name="admin_registration_code" type="password" autocomplete="off" aria-describedby="admin-code-hint">
            <span class="hint" id="admin-code-hint">Minta kode undangan kepada pengelola platform.</span>
            @error('admin_registration_code')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="field">
            <label for="password">Kata sandi</label>
            <input id="password" name="password" type="password" autocomplete="new-password" minlength="8" required>
            <span class="hint">Gunakan minimal 8 karakter.</span>
            @error('password')<span class="error">{{ $message }}</span>@enderror
        </div>
        <div class="field">
            <label for="password_confirmation">Konfirmasi kata sandi</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required>
        </div>
        <button class="submit" type="submit">Buat akun</button>
    </form>
    <p class="foot">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
</main>
<script>
    const roleSelect = document.querySelector('#role');
    const adminCodeField = document.querySelector('#admin-code-field');
    const adminCodeInput = document.querySelector('#admin_registration_code');

    function updateAdminCodeField() {
        const isAdmin = roleSelect.value === 'admin';
        adminCodeField.hidden = !isAdmin;
        adminCodeInput.required = isAdmin;
    }

    roleSelect.addEventListener('change', updateAdminCodeField);
    updateAdminCodeField();
</script>
</body>
</html>
