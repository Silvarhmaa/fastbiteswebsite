@php
    $roles = [
        'consumer' => ['label' => 'Konsumen', 'title' => 'Jelajahi makanan', 'icon' => '🛍️'],
        'seller' => ['label' => 'Pemilik usaha', 'title' => 'Dashboard usaha', 'icon' => '🏪'],
        'admin' => ['label' => 'Admin', 'title' => 'Dashboard admin', 'icon' => '🛡️'],
    ];
    $currentRole = $roles[$role];
    $products = [
        ['name' => 'Bento Ayam Teriyaki', 'shop' => 'Dapur Nusa', 'category' => 'Makanan berat', 'price' => 18000, 'original' => 32000, 'stock' => 4, 'emoji' => '🍱', 'tone' => 'peach', 'expiry' => 'Hari ini'],
        ['name' => 'Croissant Butter', 'shop' => 'Roti Pagi', 'category' => 'Roti & pastry', 'price' => 9000, 'original' => 18000, 'stock' => 6, 'emoji' => '🥐', 'tone' => 'yellow', 'expiry' => 'Hari ini'],
        ['name' => 'Salad Kebun Segar', 'shop' => 'Green Bowl', 'category' => 'Makanan sehat', 'price' => 15000, 'original' => 27000, 'stock' => 3, 'emoji' => '🥗', 'tone' => 'mint', 'expiry' => 'Besok'],
        ['name' => 'Donat Gula Kayu Manis', 'shop' => 'Roti Pagi', 'category' => 'Roti & pastry', 'price' => 7000, 'original' => 14000, 'stock' => 8, 'emoji' => '🍩', 'tone' => 'pink', 'expiry' => 'Hari ini'],
        ['name' => 'Paket Nasi Rendang', 'shop' => 'Dapur Nusa', 'category' => 'Makanan berat', 'price' => 22000, 'original' => 38000, 'stock' => 2, 'emoji' => '🍛', 'tone' => 'orange', 'expiry' => 'Besok'],
        ['name' => 'Jus Buah Tropis', 'shop' => 'Buah Baik', 'category' => 'Minuman', 'price' => 8000, 'original' => 15000, 'stock' => 5, 'emoji' => '🥤', 'tone' => 'lime', 'expiry' => 'Hari ini'],
    ];
    $pendingShops = [
        ['name' => 'Kedai Rasa Kita', 'owner' => 'Maya Putri', 'type' => 'Kedai makanan', 'date' => '18 Okt 2026', 'initials' => 'KR'],
        ['name' => 'Daily Bread Co.', 'owner' => 'Fajar Aditya', 'type' => 'Roti & pastry', 'date' => '17 Okt 2026', 'initials' => 'DB'],
        ['name' => 'Segar Selalu Juice', 'owner' => 'Nadia Sari', 'type' => 'Kafe minuman', 'date' => '16 Okt 2026', 'initials' => 'SS'],
    ];
    $merchantInventory = [
        ['name' => 'Bento Ayam Teriyaki', 'category' => 'Makanan berat', 'stock' => 4, 'price' => 18000, 'expiry' => 'Hari ini', 'emoji' => '🍱'],
        ['name' => 'Paket Nasi Rendang', 'category' => 'Makanan berat', 'stock' => 2, 'price' => 22000, 'expiry' => 'Besok', 'emoji' => '🍛'],
        ['name' => 'Es Teh Lemon', 'category' => 'Minuman', 'stock' => 7, 'price' => 6000, 'expiry' => 'Hari ini', 'emoji' => '🍋'],
    ];
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f2">
    <meta name="description" content="FastBites menghubungkan usaha kuliner dengan konsumen untuk menyelamatkan makanan berlebih dengan harga hemat.">
    <title>{{ $currentRole['title'] }} — FastBites</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;color:#222820;background:#f6f7f2;font-synthesis:none;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;--green:#236b45;--green-dark:#184d34;--green-pale:#eaf4ec;--orange:#f7a928;--muted:#858a82;--line:#eceee8;--white:#fff}
        *{box-sizing:border-box}body{margin:0;min-width:320px}button,input,select{font:inherit}button,a{-webkit-tap-highlight-color:transparent}a{color:inherit;text-decoration:none}button{cursor:pointer}
        .app{display:grid;grid-template-columns:244px minmax(0,1fr);min-height:100vh}
        .sidebar{position:sticky;top:0;display:flex;height:100vh;flex-direction:column;padding:28px 18px 20px;border-right:1px solid var(--line);background:#fff}
        .brand{display:flex;align-items:center;gap:11px;padding:0 10px;font-size:19px;font-weight:850;letter-spacing:-.8px}.brand-mark{display:grid;width:39px;height:39px;place-items:center;border-radius:13px;color:#fff;background:var(--green);font-size:20px}.brand em{color:var(--green);font-style:normal}
        .workspace-label{margin:35px 11px 12px;color:#a0a49c;font-size:10px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}.nav{display:grid;gap:5px}.nav-link{display:flex;align-items:center;gap:12px;padding:12px 13px;border-radius:11px;color:#737970;font-size:13px;font-weight:650;transition:.2s}.nav-link:hover{background:#f6f8f4;color:var(--green)}.nav-link.active{color:var(--green-dark);background:var(--green-pale)}.nav-icon{width:21px;text-align:center;font-size:16px}.nav-count{margin-left:auto;padding:3px 7px;border-radius:99px;color:#fff;background:#e98a51;font-size:10px}
        .sidebar-bottom{margin-top:auto}.impact-card{padding:16px;border:1px solid #e5efe4;border-radius:15px;background:linear-gradient(140deg,#f1f8ef,#fff)}.impact-card strong{display:block;margin:8px 0 4px;font-size:13px}.impact-card p{margin:0;color:var(--muted);font-size:11px;line-height:1.5}.impact-icon{font-size:20px}.profile{display:flex;align-items:center;gap:10px;margin-top:17px;padding:14px 8px 0;border-top:1px solid var(--line)}.avatar{display:grid;width:36px;height:36px;flex:0 0 auto;place-items:center;border-radius:50%;color:var(--green-dark);background:#e6efe5;font-size:12px;font-weight:800}.profile-copy{min-width:0}.profile-copy strong,.profile-copy span{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.profile-copy strong{font-size:11px}.profile-copy span{margin-top:3px;color:var(--muted);font-size:10px}
        .main{min-width:0;padding:0 42px 48px}.topbar{display:flex;height:82px;align-items:center;justify-content:space-between;border-bottom:1px solid var(--line)}.breadcrumb{color:var(--muted);font-size:12px}.breadcrumb strong{color:#31382f}.top-actions{display:flex;align-items:center;gap:13px}.role-switch{height:36px;padding:0 11px;border:1px solid var(--line);border-radius:9px;color:#555c53;background:#fff;font-size:11px}.icon-button{position:relative;display:grid;width:37px;height:37px;place-items:center;border:1px solid var(--line);border-radius:10px;background:#fff;font-size:16px}.notification-dot{position:absolute;top:7px;right:7px;width:7px;height:7px;border:1px solid #fff;border-radius:50%;background:#ec664c}
        .content{width:min(1180px,100%);margin:0 auto}.page-heading{display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin:30px 0 23px}.page-heading h1{margin:0;font-size:27px;letter-spacing:-1px}.page-heading p{margin:7px 0 0;color:var(--muted);font-size:12px}.eyebrow{margin:0 0 8px;color:var(--green);font-size:10px;font-weight:800;letter-spacing:.12em;text-transform:uppercase}
        .button{display:inline-flex;min-height:39px;align-items:center;justify-content:center;gap:8px;padding:0 15px;border:0;border-radius:9px;color:#fff;background:var(--green);font-size:11px;font-weight:750;transition:background .2s,transform .2s}.button:hover{transform:translateY(-1px);background:var(--green-dark)}.button.secondary{border:1px solid var(--line);color:#485148;background:#fff}.button.secondary:hover{background:#f8faf6}.button.danger{color:#a53d32;background:#fff0ed}.button.small{min-height:31px;padding:0 11px;font-size:10px}
        .welcome-banner{position:relative;display:flex;min-height:172px;align-items:center;justify-content:space-between;overflow:hidden;padding:26px 34px;border-radius:20px;color:#fff;background:linear-gradient(110deg,#1f6844 0%,#2f8152 60%,#55a36a 100%)}.welcome-banner::after{position:absolute;top:-80px;right:15%;width:260px;height:260px;border:1px solid rgba(255,255,255,.13);border-radius:50%;box-shadow:0 0 0 30px rgba(255,255,255,.035),0 0 0 65px rgba(255,255,255,.03);content:""}.banner-copy{position:relative;z-index:1;max-width:470px}.banner-copy .eyebrow{color:#c9e7c5}.banner-copy h2{margin:0;font-size:24px;letter-spacing:-.7px}.banner-copy p{max-width:430px;margin:9px 0 17px;color:rgba(255,255,255,.79);font-size:11px;line-height:1.6}.banner-copy .button{color:#31583b;background:#fff}.banner-emoji{position:relative;z-index:1;margin-right:25px;font-size:82px;filter:drop-shadow(0 10px 8px rgba(0,0,0,.15));transform:rotate(-8deg)}
        .search-row{display:flex;align-items:center;gap:12px;margin:25px 0 20px}.search-box{display:flex;min-width:0;height:44px;flex:1;align-items:center;gap:9px;padding:0 14px;border:1px solid var(--line);border-radius:11px;background:#fff}.search-box span{color:#969b93}.search-box input{width:100%;border:0;outline:0;color:#333;background:transparent;font-size:11px}.search-box input::placeholder{color:#a1a59e}.location{display:flex;height:44px;align-items:center;gap:8px;padding:0 13px;border:1px solid var(--line);border-radius:11px;color:#596055;background:#fff;font-size:11px}
        .section-head{display:flex;align-items:center;justify-content:space-between;gap:15px;margin:27px 0 13px}.section-head h2{margin:0;font-size:16px;letter-spacing:-.35px}.section-head a{color:var(--green);font-size:10px;font-weight:750}.categories{display:flex;gap:8px;overflow:auto;padding:1px 0 5px}.category-chip{flex:0 0 auto;padding:9px 13px;border:1px solid var(--line);border-radius:99px;color:#666d63;background:#fff;font-size:10px;font-weight:650}.category-chip.active,.category-chip:hover{border-color:var(--green);color:#fff;background:var(--green)}
        .product-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:15px}.product-card{overflow:hidden;border:1px solid #eaede7;border-radius:15px;background:#fff;transition:transform .2s,box-shadow .2s}.product-card:hover{transform:translateY(-3px);box-shadow:0 12px 30px rgba(32,54,36,.08)}.product-art{position:relative;display:grid;height:135px;place-items:center;overflow:hidden;font-size:66px}.product-art::before,.product-art::after{position:absolute;border:1px solid rgba(255,255,255,.45);border-radius:50%;content:""}.product-art::before{width:150px;height:150px;right:-16px;top:-64px}.product-art::after{width:90px;height:90px;left:-33px;bottom:-35px}.tone-peach{background:linear-gradient(135deg,#f9d9c4,#f2b49b)}.tone-yellow{background:linear-gradient(135deg,#f7e5ae,#f2c56d)}.tone-mint{background:linear-gradient(135deg,#d4ebd1,#9bcf9f)}.tone-pink{background:linear-gradient(135deg,#f4d9e6,#e7aec7)}.tone-orange{background:linear-gradient(135deg,#f3d5a3,#e8a764)}.tone-lime{background:linear-gradient(135deg,#d8edb1,#a4ce72)}.product-emoji{position:relative;z-index:1;filter:drop-shadow(0 9px 8px rgba(53,53,30,.15))}.discount{position:absolute;z-index:2;top:10px;left:10px;padding:5px 8px;border-radius:99px;color:#9d4529;background:#fff8eb;font-size:9px;font-weight:800}.product-details{padding:13px}.shop-name{display:flex;align-items:center;gap:5px;color:#858b81;font-size:9px}.verified{color:var(--green)}.product-title{margin:7px 0 9px;font-size:12px;font-weight:750}.product-meta{display:flex;align-items:center;justify-content:space-between;color:#838980;font-size:9px}.price-row{display:flex;align-items:baseline;gap:6px;margin-top:11px}.price{color:#263c2d;font-size:14px;font-weight:850}.old-price{color:#a5aaa1;font-size:9px;text-decoration:line-through}.card-footer{display:flex;align-items:center;justify-content:space-between;margin-top:12px;padding-top:11px;border-top:1px solid #f0f1ed}.stock{color:#c37239;font-size:9px;font-weight:700}.add-button{display:grid;width:28px;height:28px;place-items:center;border:0;border-radius:9px;color:#fff;background:var(--green);font-size:17px}.add-button:hover{background:var(--green-dark)}
        .stats-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:13px;margin:22px 0}.stat-card{padding:17px;border:1px solid var(--line);border-radius:14px;background:#fff}.stat-top{display:flex;align-items:center;justify-content:space-between;color:var(--muted);font-size:10px}.stat-icon{display:grid;width:31px;height:31px;place-items:center;border-radius:10px;background:#edf5ee;font-size:15px}.stat-value{display:flex;align-items:baseline;gap:8px;margin-top:13px;font-size:23px;font-weight:820;letter-spacing:-.8px}.stat-trend{color:var(--green);font-size:9px;font-weight:700;letter-spacing:0}.stat-note{margin-top:4px;color:#999e96;font-size:9px}
        .dashboard-grid{display:grid;grid-template-columns:minmax(0,1.55fr) minmax(230px,.85fr);gap:16px}.panel{overflow:hidden;border:1px solid var(--line);border-radius:15px;background:#fff}.panel-head{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:17px 18px;border-bottom:1px solid #f0f1ed}.panel-head h2{margin:0;font-size:13px}.panel-head p{margin:4px 0 0;color:var(--muted);font-size:9px}.panel-body{padding:18px}.chart{display:flex;height:170px;align-items:flex-end;justify-content:space-around;gap:12px;padding:15px 6px 0;border-bottom:1px solid #edf0e9;background:repeating-linear-gradient(to bottom,transparent 0,transparent 41px,#f1f3ef 42px)}.chart-col{display:flex;height:100%;flex:1;flex-direction:column;align-items:center;justify-content:flex-end;gap:8px}.bar-pair{display:flex;height:calc(100% - 20px);align-items:flex-end;gap:4px}.bar{width:12px;min-height:8px;border-radius:5px 5px 0 0;background:#c9e2ca}.bar.strong{background:#4b9363}.chart-label{padding-bottom:7px;color:#969b93;font-size:9px}.legend{display:flex;gap:15px;margin-top:12px;color:#858a82;font-size:9px}.legend i{display:inline-block;width:8px;height:8px;margin-right:5px;border-radius:3px;background:#c9e2ca}.legend i.green{background:#4b9363}
        .activity-list{display:grid}.activity{display:flex;align-items:center;gap:10px;padding:12px 0;border-bottom:1px solid #f0f1ed}.activity:last-child{border:0}.activity-icon{display:grid;width:32px;height:32px;flex:0 0 auto;place-items:center;border-radius:10px;background:#f3f5ee}.activity-copy{min-width:0;flex:1}.activity-copy strong,.activity-copy span{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.activity-copy strong{font-size:10px}.activity-copy span{margin-top:4px;color:var(--muted);font-size:9px}.activity time{color:#999e96;font-size:9px}
        .table-wrap{overflow:auto}.data-table{width:100%;border-collapse:collapse;text-align:left;white-space:nowrap}.data-table th{padding:12px 16px;color:#989d95;background:#fafbf8;font-size:9px;font-weight:750;text-transform:uppercase;letter-spacing:.06em}.data-table td{padding:13px 16px;border-top:1px solid #f0f1ed;color:#525950;font-size:10px}.table-shop{display:flex;align-items:center;gap:9px}.shop-avatar{display:grid;width:32px;height:32px;place-items:center;border-radius:10px;color:#436349;background:#eaf3e8;font-size:10px;font-weight:800}.table-shop strong,.table-shop span{display:block}.table-shop strong{color:#2d342d;font-size:10px}.table-shop span{margin-top:3px;color:#92978f;font-size:9px}.status{display:inline-flex;align-items:center;gap:5px;padding:5px 8px;border-radius:99px;color:#a66723;background:#fff4df;font-size:9px;font-weight:750}.status::before{width:5px;height:5px;border-radius:50%;background:currentColor;content:""}.status.approved{color:#39744d;background:#eaf4eb}.status.rejected{color:#aa493a;background:#fff0ed}.table-actions{display:flex;gap:6px}
        .modal-backdrop{position:fixed;z-index:20;inset:0;display:none;align-items:center;justify-content:center;padding:20px;background:rgba(25,34,27,.42)}.modal-backdrop.open{display:flex}.modal{width:min(470px,100%);padding:24px;border-radius:18px;background:#fff;box-shadow:0 24px 70px rgba(0,0,0,.2)}.modal-header{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:20px}.modal-header h2{margin:0;font-size:18px}.modal-header p{margin:6px 0 0;color:var(--muted);font-size:10px}.close-button{display:grid;width:30px;height:30px;place-items:center;border:0;border-radius:8px;background:#f4f5f1;font-size:17px}.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:13px}.form-field{display:grid;gap:6px}.form-field.full{grid-column:1/-1}.form-field label{color:#555d53;font-size:10px;font-weight:700}.form-field input,.form-field select{width:100%;height:39px;padding:0 10px;border:1px solid #e5e8e1;border-radius:8px;outline:0;background:#fff;font-size:10px}.form-field input:focus,.form-field select:focus{border-color:#55916a;box-shadow:0 0 0 3px #eaf4ec}.modal-actions{display:flex;justify-content:flex-end;gap:8px;margin-top:19px}.toast{position:fixed;z-index:30;right:24px;bottom:24px;max-width:min(360px,calc(100vw - 32px));padding:12px 16px;border-radius:11px;color:#fff;background:#214e34;box-shadow:0 10px 30px rgba(0,0,0,.18);font-size:11px;opacity:0;pointer-events:none;transform:translateY(10px);transition:.22s}.toast.visible{opacity:1;transform:translateY(0)}
        .mobile-nav{display:none}.empty-state{padding:32px;text-align:center;color:var(--muted);font-size:11px}
        @media(max-width:1050px){.main{padding-right:25px;padding-left:25px}.sidebar{width:auto}.app{grid-template-columns:220px minmax(0,1fr)}.product-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.stats-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
        @media(max-width:760px){.app{display:block;padding-bottom:67px}.sidebar{display:none}.main{padding:0 18px 28px}.topbar{height:62px}.breadcrumb{font-size:11px}.role-switch{height:33px;max-width:150px;font-size:10px}.page-heading{align-items:flex-start;margin:22px 0 18px}.page-heading h1{font-size:22px}.page-heading p{font-size:10px}.welcome-banner{min-height:160px;padding:21px;border-radius:16px}.banner-copy h2{max-width:240px;font-size:20px}.banner-copy p{max-width:250px;font-size:10px}.banner-emoji{margin-right:0;font-size:58px}.search-row{align-items:stretch;flex-direction:column;margin:18px 0}.search-box,.location{height:42px}.product-grid{grid-template-columns:repeat(2,minmax(0,1fr));gap:10px}.product-art{height:112px;font-size:55px}.product-details{padding:10px}.product-title{min-height:30px;font-size:11px}.price{font-size:12px}.stats-grid{gap:9px}.stat-card{padding:13px}.stat-value{font-size:20px}.dashboard-grid{grid-template-columns:1fr}.panel-head{padding:15px}.panel-body{padding:14px}.mobile-nav{position:fixed;z-index:10;right:0;bottom:0;left:0;display:flex;height:63px;align-items:center;justify-content:space-around;border-top:1px solid var(--line);background:rgba(255,255,255,.96);backdrop-filter:blur(12px)}.mobile-nav a{display:grid;justify-items:center;gap:4px;color:#828980;font-size:9px}.mobile-nav a.active{color:var(--green);font-weight:800}.mobile-nav span{font-size:17px}.chart{height:145px}.role-label{display:none}}
        @media(max-width:390px){.main{padding-right:13px;padding-left:13px}.product-grid{gap:8px}.product-art{height:98px}.product-title{font-size:10px}.banner-emoji{font-size:46px}.stats-grid{gap:7px}.stat-card{padding:11px}}
    </style>
</head>
<body data-role="{{ $role }}">
<div class="app">
    <aside class="sidebar">
        <a class="brand" href="{{ url('/') }}"><span class="brand-mark">🥬</span><span>fastbites<em>.</em></span></a>
        <div class="workspace-label">Workspace</div>
        <nav class="nav" aria-label="Navigasi utama">
            @if($role === 'consumer')
                <a class="nav-link active" href="{{ url('/') }}"><span class="nav-icon">⌂</span>Jelajahi makanan</a>
                <a class="nav-link" href="#pesanan"><span class="nav-icon">▤</span>Pesanan saya</a>
                <a class="nav-link" href="#favorit"><span class="nav-icon">♡</span>Favorit</a>
                <a class="nav-link" href="#dampak"><span class="nav-icon">✳</span>Dampak saya</a>
            @elseif($role === 'seller')
                <a class="nav-link active" href="{{ route('dashboard.seller') }}"><span class="nav-icon">▦</span>Ringkasan</a>
                <a class="nav-link" href="#produk"><span class="nav-icon">◇</span>Produk saya</a>
                <a class="nav-link" href="#pesanan"><span class="nav-icon">▤</span>Pesanan masuk</a>
                <a class="nav-link" href="#laporan"><span class="nav-icon">▥</span>Laporan penjualan</a>
            @else
                <a class="nav-link active" href="{{ route('dashboard.admin') }}"><span class="nav-icon">▦</span>Ringkasan</a>
                <a class="nav-link" href="#verifikasi"><span class="nav-icon">✓</span>Verifikasi usaha <span class="nav-count">8</span></a>
                <a class="nav-link" href="#pengguna"><span class="nav-icon">♙</span>Pengguna</a>
                <a class="nav-link" href="#laporan"><span class="nav-icon">▥</span>Laporan platform</a>
            @endif
        </nav>
        <div class="workspace-label">Lainnya</div>
        <nav class="nav" aria-label="Navigasi lainnya">
            <a class="nav-link" href="#bantuan"><span class="nav-icon">?</span>Pusat bantuan</a>
            <a class="nav-link" href="#pengaturan"><span class="nav-icon">⚙</span>Pengaturan</a>
        </nav>
        <div class="sidebar-bottom">
            <div class="impact-card"><span class="impact-icon">🌱</span><strong>Selamatkan, jangan sia-siakan.</strong><p>Setiap makanan terselamatkan adalah langkah kecil menuju bumi lebih baik.</p></div>
            <div class="profile"><span class="avatar">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</span><div class="profile-copy"><strong>{{ auth()->user()->name }}</strong><span>{{ $currentRole['label'] }}</span></div></div>
        </div>
    </aside>
    <main class="main">
        <header class="topbar">
            <div class="breadcrumb">FastBites <span aria-hidden="true">/</span> <strong>{{ $currentRole['title'] }}</strong></div>
            <div class="top-actions">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="button secondary small" type="submit">Keluar</button>
                </form>
                <button class="icon-button" type="button" aria-label="Notifikasi" data-toast="Kamu sudah melihat semua notifikasi.">♧<span class="notification-dot"></span></button>
            </div>
        </header>
        <div class="content">
            @if($role === 'consumer')
                <section class="page-heading">
                    <div><p class="eyebrow">Selamat datang</p><h1>Hai, {{ auth()->user()->name }} 👋</h1><p>Temukan makanan enak yang masih punya cerita.</p></div>
                    <button class="button secondary" type="button" data-toast="Lokasi pengambilan: Bandung, Jawa Barat.">📍 Bandung</button>
                </section>
                <section class="welcome-banner">
                    <div class="banner-copy"><p class="eyebrow">✨ Pilihan baik hari ini</p><h2>Enak di perut, ringan di bumi.</h2><p>Temukan makanan berlebih dari usaha kuliner favoritmu dengan harga lebih hemat.</p><a class="button" href="#produk">Lihat makanan dekatmu <span>→</span></a></div>
                    <div class="banner-emoji" aria-hidden="true">🥗</div>
                </section>
                <div class="search-row">
                    <label class="search-box"><span>⌕</span><input id="product-search" type="search" placeholder="Cari makanan, toko, atau kategori..." aria-label="Cari makanan"></label>
                    <button class="location" type="button" data-toast="Menampilkan makanan di sekitar Bandung.">📍 Antar/jemput di sekitar Bandung <span>⌄</span></button>
                </div>
                <section>
                    <div class="section-head"><h2>Kategori pilihan</h2><a href="#produk">Lihat semua</a></div>
                    <div class="categories" aria-label="Filter kategori">
                        <button class="category-chip active" type="button" data-category="Semua">🍽️ Semua</button>
                        <button class="category-chip" type="button" data-category="Makanan berat">🍱 Makanan berat</button>
                        <button class="category-chip" type="button" data-category="Roti & pastry">🥐 Roti & pastry</button>
                        <button class="category-chip" type="button" data-category="Makanan sehat">🥗 Makanan sehat</button>
                        <button class="category-chip" type="button" data-category="Minuman">🥤 Minuman</button>
                    </div>
                </section>
                <section id="produk">
                    <div class="section-head"><h2>Enak hari ini <span style="color:#91978e;font-size:10px;font-weight:500">· harga spesial sebelum habis</span></h2><a href="#produk">Lihat semua →</a></div>
                    <div class="product-grid" id="product-grid">
                        @foreach($products as $product)
                            @php($discount = (int) round((1 - $product['price'] / $product['original']) * 100))
                            <article class="product-card" data-product data-category="{{ $product['category'] }}" data-search="{{ strtolower($product['name'].' '.$product['shop'].' '.$product['category']) }}">
                                <div class="product-art tone-{{ $product['tone'] }}"><span class="discount">-{{ $discount }}%</span><span class="product-emoji" aria-hidden="true">{{ $product['emoji'] }}</span></div>
                                <div class="product-details">
                                    <div class="shop-name"><span class="verified">●</span> {{ $product['shop'] }} <span class="verified">✓</span></div>
                                    <h3 class="product-title">{{ $product['name'] }}</h3>
                                    <div class="product-meta"><span>⏱ {{ $product['expiry'] }}</span><span>{{ $product['category'] }}</span></div>
                                    <div class="price-row"><span class="price">Rp{{ number_format($product['price'], 0, ',', '.') }}</span><span class="old-price">Rp{{ number_format($product['original'], 0, ',', '.') }}</span></div>
                                    <div class="card-footer"><span class="stock">Tersisa {{ $product['stock'] }} porsi</span><button class="add-button" type="button" aria-label="Tambah {{ $product['name'] }} ke keranjang" data-add="{{ $product['name'] }}">+</button></div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <p class="empty-state" id="no-products" hidden>Tidak ada makanan yang cocok. Coba kata kunci atau kategori lain.</p>
                </section>
            @elseif($role === 'seller')
                <section class="page-heading">
                    <div><p class="eyebrow">Dashboard pemilik usaha</p><h1>Halo, {{ auth()->user()->name }} 👋</h1><p>Kelola produk surplus dan lihat dampak baik usahamu.</p></div>
                    <button class="button" type="button" data-open-modal>＋ Tambah produk</button>
                </section>
                <section class="stats-grid" aria-label="Ringkasan performa usaha">
                    <article class="stat-card"><div class="stat-top">Penjualan hari ini <span class="stat-icon">💰</span></div><div class="stat-value">Rp486rb <span class="stat-trend">↗ 12,8%</span></div><div class="stat-note">dibanding hari sebelumnya</div></article>
                    <article class="stat-card"><div class="stat-top">Produk terselamatkan <span class="stat-icon">🥡</span></div><div class="stat-value"><span data-saved-count>38</span> <span class="stat-trend">↗ 8 porsi</span></div><div class="stat-note">makanan tidak berakhir di tempat sampah</div></article>
                    <article class="stat-card"><div class="stat-top">Pesanan aktif <span class="stat-icon">🛍️</span></div><div class="stat-value">12 <span class="stat-trend">4 siap diambil</span></div><div class="stat-note">perlu disiapkan hari ini</div></article>
                    <article class="stat-card"><div class="stat-top">Rating toko <span class="stat-icon">⭐</span></div><div class="stat-value">4,9 <span class="stat-trend">sangat baik</span></div><div class="stat-note">dari 126 ulasan konsumen</div></article>
                </section>
                <section class="dashboard-grid">
                    <article class="panel" id="laporan"><div class="panel-head"><div><h2>Performa penjualan</h2><p>Ringkasan penjualan makanan surplus</p></div><button class="button secondary small" type="button" data-toast="Rentang laporan: 7 hari terakhir.">7 hari terakhir⌄</button></div><div class="panel-body"><div class="chart" aria-label="Grafik penjualan mingguan"><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:34%"></i><i class="bar strong" style="height:52%"></i></div><span class="chart-label">Sel</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:43%"></i><i class="bar strong" style="height:68%"></i></div><span class="chart-label">Rab</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:30%"></i><i class="bar strong" style="height:45%"></i></div><span class="chart-label">Kam</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:54%"></i><i class="bar strong" style="height:72%"></i></div><span class="chart-label">Jum</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:44%"></i><i class="bar strong" style="height:62%"></i></div><span class="chart-label">Sab</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:66%"></i><i class="bar strong" style="height:86%"></i></div><span class="chart-label">Min</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:56%"></i><i class="bar strong" style="height:76%"></i></div><span class="chart-label">Sen</span></div></div><div class="legend"><span><i></i>Minggu lalu</span><span><i class="green"></i>Minggu ini</span></div></div></article>
                    <article class="panel"><div class="panel-head"><div><h2>Aktivitas terbaru</h2><p>Pesanan dan kabar tokomu</p></div><a class="section-head" href="#pesanan">Lihat semua</a></div><div class="panel-body activity-list"><div class="activity"><span class="activity-icon">🛍️</span><div class="activity-copy"><strong>Pesanan baru #FB-2041</strong><span>2 Bento Ayam Teriyaki</span></div><time>5 mnt</time></div><div class="activity"><span class="activity-icon">🥡</span><div class="activity-copy"><strong>Produk berhasil diselamatkan</strong><span>Pesanan #FB-2038 selesai</span></div><time>32 mnt</time></div><div class="activity"><span class="activity-icon">⭐</span><div class="activity-copy"><strong>Ulasan baru dari Rani</strong><span>“Enak, harga juga hemat!”</span></div><time>1 jam</time></div></div></article>
                </section>
                <section class="panel" id="produk" style="margin-top:16px"><div class="panel-head"><div><h2>Produk surplus kamu</h2><p>Atur stok dan harga produk yang tersedia</p></div><button class="button secondary small" type="button" data-open-modal>＋ Tambah produk</button></div><div class="table-wrap"><table class="data-table"><thead><tr><th>Produk</th><th>Stok</th><th>Harga spesial</th><th>Batas konsumsi</th><th>Status</th></tr></thead><tbody id="inventory-body">@foreach($merchantInventory as $item)<tr><td><div class="table-shop"><span class="shop-avatar" style="font-size:17px">{{ $item['emoji'] }}</span><div><strong>{{ $item['name'] }}</strong><span>{{ $item['category'] }}</span></div></div></td><td>{{ $item['stock'] }} porsi</td><td><strong>Rp{{ number_format($item['price'], 0, ',', '.') }}</strong></td><td>{{ $item['expiry'] }}</td><td><span class="status approved">Tersedia</span></td></tr>@endforeach</tbody></table></div></section>
            @else
                <section class="page-heading">
                    <div><p class="eyebrow">Senin, 19 Oktober 2026</p><h1>Semua bergerak lebih baik 👋</h1><p>Pantau ekosistem FastBites dan bantu lebih banyak makanan terselamatkan.</p></div>
                    <button class="button secondary" type="button" data-toast="Laporan platform siap diunduh pada versi produksi.">↓ Unduh laporan</button>
                </section>
                <section class="stats-grid" aria-label="Statistik platform">
                    <article class="stat-card"><div class="stat-top">Total transaksi <span class="stat-icon">🧾</span></div><div class="stat-value">2.481 <span class="stat-trend">↗ 18,4%</span></div><div class="stat-note">transaksi berhasil bulan ini</div></article>
                    <article class="stat-card"><div class="stat-top">Makanan terselamatkan <span class="stat-icon">🥗</span></div><div class="stat-value">6.204 <span class="stat-trend">↗ 22,1%</span></div><div class="stat-note">porsi surplus telah dinikmati</div></article>
                    <article class="stat-card"><div class="stat-top">Usaha terdaftar <span class="stat-icon">🏪</span></div><div class="stat-value">186 <span class="stat-trend">↗ 14 baru</span></div><div class="stat-note">pelaku usaha kuliner bergabung</div></article>
                    <article class="stat-card"><div class="stat-top">Perlu verifikasi <span class="stat-icon">🪪</span></div><div class="stat-value"><span data-pending-count>8</span> <span class="stat-trend" style="color:#c17a25">perlu ditinjau</span></div><div class="stat-note">pengajuan usaha menunggu tindakan</div></article>
                </section>
                <section class="dashboard-grid">
                    <article class="panel"><div class="panel-head"><div><h2>Dampak FastBites</h2><p>Perkembangan penyelamatan makanan minggu ini</p></div><button class="button secondary small" type="button" data-toast="Rentang laporan: minggu ini.">Minggu ini⌄</button></div><div class="panel-body"><div class="chart" aria-label="Grafik dampak mingguan"><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:35%"></i><i class="bar strong" style="height:48%"></i></div><span class="chart-label">Sel</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:42%"></i><i class="bar strong" style="height:63%"></i></div><span class="chart-label">Rab</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:38%"></i><i class="bar strong" style="height:54%"></i></div><span class="chart-label">Kam</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:52%"></i><i class="bar strong" style="height:70%"></i></div><span class="chart-label">Jum</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:46%"></i><i class="bar strong" style="height:60%"></i></div><span class="chart-label">Sab</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:58%"></i><i class="bar strong" style="height:86%"></i></div><span class="chart-label">Min</span></div><div class="chart-col"><div class="bar-pair"><i class="bar" style="height:53%"></i><i class="bar strong" style="height:78%"></i></div><span class="chart-label">Sen</span></div></div><div class="legend"><span><i></i>Minggu lalu</span><span><i class="green"></i>Minggu ini</span></div></div></article>
                    <article class="panel"><div class="panel-head"><div><h2>Aktivitas platform</h2><p>Kabar terbaru dari komunitas</p></div></div><div class="panel-body activity-list"><div class="activity"><span class="activity-icon">🏪</span><div class="activity-copy"><strong>14 usaha baru bergabung</strong><span>Komunitas terus bertumbuh</span></div><time>Hari ini</time></div><div class="activity"><span class="activity-icon">🥡</span><div class="activity-copy"><strong>6.204 porsi terselamatkan</strong><span>Terima kasih, FastBites crew!</span></div><time>Bulan ini</time></div><div class="activity"><span class="activity-icon">📍</span><div class="activity-copy"><strong>Bandung jadi kota teraktif</strong><span>1.208 transaksi bulan ini</span></div><time>Kemarin</time></div></div></article>
                </section>
                <section class="panel" id="verifikasi" style="margin-top:16px"><div class="panel-head"><div><h2>Pengajuan verifikasi usaha</h2><p>Tinjau identitas usaha sebelum toko mulai berjualan</p></div><button class="button secondary small" type="button" data-toast="Menampilkan seluruh pengajuan yang perlu ditinjau.">Semua pengajuan <span data-pending-label>8</span></button></div><div class="table-wrap"><table class="data-table"><thead><tr><th>Nama usaha</th><th>Pemilik</th><th>Jenis usaha</th><th>Tanggal ajukan</th><th>Status</th><th>Tindakan</th></tr></thead><tbody id="verification-body">@foreach($pendingShops as $shop)<tr data-verification-row><td><div class="table-shop"><span class="shop-avatar">{{ $shop['initials'] }}</span><div><strong>{{ $shop['name'] }}</strong><span>Dokumen usaha lengkap</span></div></div></td><td>{{ $shop['owner'] }}</td><td>{{ $shop['type'] }}</td><td>{{ $shop['date'] }}</td><td><span class="status">Menunggu</span></td><td><div class="table-actions"><button class="button small" type="button" data-review="approved">Setujui</button><button class="button danger small" type="button" data-review="rejected">Tolak</button></div></td></tr>@endforeach</tbody></table></div></section>
            @endif
        </div>
    </main>
</div>
<nav class="mobile-nav" aria-label="Navigasi cepat">
    @if($role === 'consumer')
        <a class="active" href="{{ url('/') }}"><span>⌂</span>Jelajahi</a><a href="#pesanan"><span>▤</span>Pesanan</a><a href="#favorit"><span>♡</span>Favorit</a><a href="#dampak"><span>♙</span>Akun</a>
    @elseif($role === 'seller')
        <a class="active" href="{{ route('dashboard.seller') }}"><span>▦</span>Ringkasan</a><a href="#produk"><span>◇</span>Produk</a><a href="#pesanan"><span>▤</span>Pesanan</a><a href="#pengaturan"><span>♙</span>Akun</a>
    @else
        <a class="active" href="{{ route('dashboard.admin') }}"><span>▦</span>Ringkasan</a><a href="#verifikasi"><span>✓</span>Verifikasi</a><a href="#pengguna"><span>♙</span>Pengguna</a><a href="#pengaturan"><span>⚙</span>Pengaturan</a>
    @endif
</nav>
<div class="modal-backdrop" id="product-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    <form class="modal" id="product-form">
        <div class="modal-header"><div><h2 id="modal-title">Tambah produk surplus</h2><p>Bagikan makanan berlebihmu, bantu kurangi food waste.</p></div><button class="close-button" type="button" data-close-modal aria-label="Tutup">×</button></div>
        <div class="form-grid">
            <div class="form-field full"><label for="new-name">Nama produk</label><input id="new-name" name="name" placeholder="Contoh: Nasi ayam bumbu Bali" required></div>
            <div class="form-field"><label for="new-category">Kategori</label><select id="new-category" name="category"><option>Makanan berat</option><option>Roti & pastry</option><option>Makanan sehat</option><option>Minuman</option></select></div>
            <div class="form-field"><label for="new-stock">Jumlah porsi</label><input id="new-stock" name="stock" type="number" min="1" value="5" required></div>
            <div class="form-field"><label for="new-price">Harga spesial (Rp)</label><input id="new-price" name="price" type="number" min="1000" step="500" placeholder="15000" required></div>
            <div class="form-field"><label for="new-expiry">Batas konsumsi</label><select id="new-expiry" name="expiry"><option>Hari ini</option><option>Besok</option><option>2 hari lagi</option></select></div>
        </div>
        <div class="modal-actions"><button class="button secondary" type="button" data-close-modal>Batal</button><button class="button" type="submit">Simpan produk</button></div>
    </form>
</div>
<div class="toast" id="toast" role="status" aria-live="polite"></div>
<script>
(() => {
    const toast = document.getElementById('toast');
    let toastTimer;
    const showToast = (message) => {
        toast.textContent = message;
        toast.classList.add('visible');
        window.clearTimeout(toastTimer);
        toastTimer = window.setTimeout(() => toast.classList.remove('visible'), 2800);
    };
    document.querySelectorAll('[data-toast]').forEach((button) => {
        button.addEventListener('click', () => showToast(button.dataset.toast));
    });

    let activeCategory = 'Semua';
    const searchInput = document.getElementById('product-search');
    const filterProducts = () => {
        if (!searchInput) return;
        const term = searchInput.value.trim().toLocaleLowerCase('id');
        let visibleCount = 0;
        document.querySelectorAll('[data-product]').forEach((card) => {
            const matchesCategory = activeCategory === 'Semua' || card.dataset.category === activeCategory;
            const matchesSearch = card.dataset.search.includes(term);
            card.hidden = !(matchesCategory && matchesSearch);
            if (!card.hidden) visibleCount++;
        });
        document.getElementById('no-products').hidden = visibleCount !== 0;
    };
    searchInput?.addEventListener('input', filterProducts);
    document.querySelectorAll('[data-category]').forEach((chip) => {
        chip.addEventListener('click', () => {
            activeCategory = chip.dataset.category;
            document.querySelectorAll('[data-category]').forEach((item) => item.classList.toggle('active', item === chip));
            filterProducts();
        });
    });

    let cartCount = 0;
    document.querySelectorAll('[data-add]').forEach((button) => {
        button.addEventListener('click', () => {
            cartCount++;
            showToast(`${button.dataset.add} ditambahkan ke keranjang · ${cartCount} item`);
        });
    });

    const modal = document.getElementById('product-modal');
    document.querySelectorAll('[data-open-modal]').forEach((button) => button.addEventListener('click', () => {
        modal.classList.add('open');
        document.getElementById('new-name').focus();
    }));
    document.querySelectorAll('[data-close-modal]').forEach((button) => button.addEventListener('click', () => modal.classList.remove('open')));
    modal?.addEventListener('click', (event) => {
        if (event.target === modal) modal.classList.remove('open');
    });
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') modal?.classList.remove('open');
    });
    document.getElementById('product-form')?.addEventListener('submit', (event) => {
        event.preventDefault();
        const form = event.currentTarget;
        if (!form.reportValidity()) return;
        const values = new FormData(form);
        const name = values.get('name').toString().trim();
        const category = values.get('category').toString();
        const stock = Number(values.get('stock'));
        const price = Number(values.get('price'));
        const expiry = values.get('expiry').toString();
        const row = document.createElement('tr');
        const cells = [
            `<div class="table-shop"><span class="shop-avatar" style="font-size:17px">🥡</span><div><strong>${escapeHtml(name)}</strong><span>${escapeHtml(category)}</span></div></div>`,
            `${stock} porsi`,
            `<strong>Rp${new Intl.NumberFormat('id-ID').format(price)}</strong>`,
            escapeHtml(expiry),
            '<span class="status approved">Tersedia</span>',
        ];
        cells.forEach((html) => {
            const cell = document.createElement('td');
            cell.innerHTML = html;
            row.appendChild(cell);
        });
        document.getElementById('inventory-body').prepend(row);
        form.reset();
        modal.classList.remove('open');
        showToast(`${name} ditambahkan ke daftar produk.`);
    });

    document.querySelectorAll('[data-review]').forEach((button) => {
        button.addEventListener('click', () => {
            const row = button.closest('[data-verification-row]');
            if (!row) return;
            const approved = button.dataset.review === 'approved';
            const status = row.querySelector('.status');
            status.textContent = approved ? 'Disetujui' : 'Ditolak';
            status.className = `status ${approved ? 'approved' : 'rejected'}`;
            row.querySelector('.table-actions').innerHTML = '<span style="color:#858a82;font-size:10px">Selesai ditinjau</span>';
            const count = document.querySelector('[data-pending-count]');
            const label = document.querySelector('[data-pending-label]');
            const nextCount = Math.max(0, Number(count.textContent) - 1);
            count.textContent = nextCount;
            label.textContent = nextCount;
            showToast(`${row.querySelector('.table-shop strong').textContent} ${approved ? 'disetujui' : 'ditolak'}.`);
        });
    });

    function escapeHtml(value) {
        return value.replace(/[&<>"']/g, (character) => ({
            '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;',
        })[character]);
    }
})();
</script>
</body>
</html>
