<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f2">
    <meta name="description" content="Temukan makanan surplus yang masih layak dinikmati dari usaha kuliner di sekitarmu, dengan harga lebih hemat.">
    <title>FastBites — Makanan enak, bumi lebih baik</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;color:#222820;background:#f6f7f2;font-synthesis:none;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;--green:#236b45;--green-dark:#184d34;--green-pale:#eaf4ec;--muted:#858a82;--line:#e7ebe4;--white:#fff}
        *{box-sizing:border-box}html{scroll-behavior:smooth}body{margin:0;min-width:320px}a{color:inherit;text-decoration:none}button,input{font:inherit}button,a{-webkit-tap-highlight-color:transparent}
        .shell{width:min(1160px,calc(100% - 48px));margin:auto}.topbar{position:sticky;z-index:5;top:0;border-bottom:1px solid rgba(231,235,228,.85);background:rgba(255,255,255,.94);backdrop-filter:blur(14px)}.nav{display:flex;min-height:76px;align-items:center;justify-content:space-between;gap:24px}.brand{display:flex;align-items:center;gap:10px;font-size:20px;font-weight:850;letter-spacing:-.8px}.brand-mark{display:grid;width:39px;height:39px;place-items:center;border-radius:13px;color:#fff;background:var(--green);font-size:20px}.brand em{color:var(--green);font-style:normal}.nav-links{display:flex;align-items:center;gap:29px;color:#636a61;font-size:12px;font-weight:650}.nav-links a:hover{color:var(--green)}.nav-actions{display:flex;align-items:center;gap:10px}.button{display:inline-flex;min-height:42px;align-items:center;justify-content:center;gap:8px;padding:0 16px;border:1px solid transparent;border-radius:10px;color:#fff;background:var(--green);font-size:12px;font-weight:750;transition:background .2s,transform .2s}.button:hover{transform:translateY(-1px);background:var(--green-dark)}.button.light{border-color:var(--line);color:#424b42;background:#fff}.button.light:hover{background:#f7faf6}.button.small{min-height:38px;padding:0 14px}
        .hero-wrap{padding:38px 0 0}.hero{position:relative;display:grid;min-height:410px;grid-template-columns:1.1fr .9fr;align-items:center;overflow:hidden;padding:48px 58px;border-radius:26px;color:#fff;background:linear-gradient(112deg,#194e35 0%,#236b45 55%,#55a36a 100%)}.hero:before,.hero:after{position:absolute;border:1px solid rgba(255,255,255,.13);border-radius:50%;content:""}.hero:before{top:-175px;right:-20px;width:510px;height:510px;box-shadow:0 0 0 35px rgba(255,255,255,.035),0 0 0 75px rgba(255,255,255,.025)}.hero:after{right:12%;bottom:-220px;width:350px;height:350px}.hero-copy{position:relative;z-index:1;max-width:560px}.eyebrow{margin:0 0 13px;color:#d1eccd;font-size:11px;font-weight:800;letter-spacing:.14em;text-transform:uppercase}.hero h1{max-width:560px;margin:0;font-size:clamp(38px,5vw,58px);line-height:1.04;letter-spacing:-2.8px}.hero h1 span{color:#d9efb9}.hero-copy>p:not(.eyebrow){max-width:450px;margin:18px 0 25px;color:rgba(255,255,255,.79);font-size:14px;line-height:1.75}.hero-actions{display:flex;flex-wrap:wrap;gap:11px}.hero .button{min-height:47px;padding:0 18px;color:var(--green-dark);background:#fff}.hero .button:hover{background:#eff8e8}.hero .button.outline{border-color:rgba(255,255,255,.4);color:#fff;background:transparent}.hero .button.outline:hover{background:rgba(255,255,255,.1)}.hero-art{position:relative;z-index:1;display:grid;min-height:300px;place-items:center}.food-orbit{position:relative;display:grid;width:278px;height:278px;place-items:center;border:1px solid rgba(255,255,255,.26);border-radius:50%;background:rgba(255,255,255,.1);box-shadow:0 22px 60px rgba(14,48,29,.2)}.food-orbit:before{position:absolute;inset:20px;border:1px dashed rgba(255,255,255,.36);border-radius:50%;content:""}.food-main{display:grid;width:192px;height:192px;place-items:center;border-radius:50%;background:linear-gradient(145deg,#fff8df,#f7dcad);font-size:102px;box-shadow:0 16px 38px rgba(0,0,0,.18);transform:rotate(-8deg)}.floating-note{position:absolute;display:flex;align-items:center;gap:9px;padding:11px 14px;border:1px solid rgba(255,255,255,.55);border-radius:13px;color:#26382a;background:#fff;box-shadow:0 12px 24px rgba(20,53,31,.18);font-size:11px;font-weight:750}.floating-note span{font-size:20px}.floating-note.top{top:28px;right:-25px}.floating-note.bottom{bottom:28px;left:-30px}
        .impact-row{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:20px 0 58px}.impact{display:flex;align-items:center;gap:13px;padding:18px 20px;border:1px solid var(--line);border-radius:15px;background:#fff}.impact-icon{display:grid;width:42px;height:42px;flex:0 0 auto;place-items:center;border-radius:13px;background:var(--green-pale);font-size:20px}.impact strong,.impact span{display:block}.impact strong{font-size:14px}.impact span{margin-top:3px;color:var(--muted);font-size:10px}
        .section{padding:4px 0 66px}.section-heading{display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin-bottom:20px}.section-heading h2{margin:0;font-size:27px;letter-spacing:-.9px}.section-heading p{margin:7px 0 0;color:var(--muted);font-size:12px}.section-heading>a{color:var(--green);font-size:12px;font-weight:750}.browse-tools{display:flex;align-items:center;justify-content:space-between;gap:15px;margin:20px 0}.search{display:flex;width:min(410px,100%);height:44px;align-items:center;gap:10px;padding:0 13px;border:1px solid var(--line);border-radius:11px;background:#fff;color:#899087}.search input{width:100%;border:0;outline:0;color:#29342b;background:transparent;font-size:12px}.search input::placeholder{color:#9aa097}.chips{display:flex;flex-wrap:wrap;gap:8px}.chip{min-height:35px;padding:0 13px;border:1px solid var(--line);border-radius:30px;color:#656c63;background:#fff;font-size:10px;font-weight:700;cursor:pointer}.chip:hover,.chip.active{border-color:var(--green);color:#fff;background:var(--green)}
        .product-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:18px}.product-card{overflow:hidden;border:1px solid var(--line);border-radius:17px;background:#fff;transition:transform .2s,box-shadow .2s}.product-card:hover{transform:translateY(-3px);box-shadow:0 14px 35px rgba(39,70,45,.1)}.product-art{position:relative;display:grid;height:176px;place-items:center;overflow:hidden}.product-art:before{position:absolute;width:185px;height:185px;border:1px solid rgba(40,65,40,.08);border-radius:50%;box-shadow:0 0 0 20px rgba(255,255,255,.22),0 0 0 42px rgba(255,255,255,.18);content:""}.tone-peach{background:#f8dfce}.tone-yellow{background:#f7e9bf}.tone-mint{background:#dceee0}.tone-pink{background:#f5dce1}.tone-orange{background:#f6dfc9}.tone-lime{background:#e5efc9}.product-emoji{position:relative;z-index:1;filter:drop-shadow(0 10px 9px rgba(55,48,30,.13));font-size:86px;transform:rotate(-7deg)}.discount{position:absolute;z-index:2;top:13px;left:13px;padding:6px 9px;border-radius:7px;color:#fff;background:#e57945;font-size:10px;font-weight:800}.fresh-badge{position:absolute;z-index:2;right:12px;bottom:12px;padding:6px 9px;border:1px solid rgba(255,255,255,.8);border-radius:7px;color:#315a3d;background:rgba(255,255,255,.88);font-size:9px;font-weight:750}.product-details{padding:15px}.shop-name{display:flex;align-items:center;gap:5px;color:#70776e;font-size:10px}.verified{color:var(--green)}.product-title{margin:8px 0 10px;font-size:15px;letter-spacing:-.2px}.product-meta{display:flex;flex-wrap:wrap;gap:7px;color:#7f867c;font-size:10px}.product-meta span{padding:5px 7px;border-radius:6px;background:#f5f7f3}.price-row{display:flex;align-items:center;gap:8px;margin-top:14px}.price{color:var(--green-dark);font-size:16px;font-weight:850}.old-price{color:#9da198;font-size:10px;text-decoration:line-through}.card-footer{display:flex;align-items:center;justify-content:space-between;gap:10px;margin-top:13px;padding-top:12px;border-top:1px solid #f0f1ed}.stock{color:#70776e;font-size:10px}.product-link{display:inline-flex;min-height:33px;align-items:center;padding:0 11px;border-radius:8px;color:#fff;background:var(--green);font-size:10px;font-weight:750}.product-link:hover{background:var(--green-dark)}.empty-state{padding:38px 15px;border:1px dashed #d9dfd6;border-radius:14px;color:var(--muted);text-align:center;font-size:13px}
        .seller-banner{display:flex;align-items:center;justify-content:space-between;gap:24px;margin-bottom:66px;padding:27px 32px;border:1px solid #dce9dc;border-radius:17px;background:linear-gradient(110deg,#edf6e9,#fff)}.seller-banner h2{margin:0;font-size:20px;letter-spacing:-.5px}.seller-banner p{margin:6px 0 0;color:#777f75;font-size:12px;line-height:1.6}.seller-banner .button{flex:0 0 auto}.footer{padding:24px 0;border-top:1px solid var(--line);color:#858a82;font-size:10px}.footer-inner{display:flex;justify-content:space-between;gap:20px}.footer strong{color:#485148}
        @media(max-width:850px){.nav-links{gap:16px}.hero{min-height:365px;padding:38px}.hero-art{transform:scale(.82)}.product-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.browse-tools{align-items:flex-start;flex-direction:column}.search{width:100%}.impact-row{margin-bottom:44px}}
        @media(max-width:600px){.shell{width:min(100% - 30px,480px)}.nav{min-height:66px;gap:10px}.brand{font-size:18px}.brand-mark{width:35px;height:35px}.nav-links{display:none}.nav-actions{gap:6px}.nav-actions .button{min-height:36px;padding:0 10px;font-size:10px}.nav-actions .button.light{display:none}.hero-wrap{padding-top:18px}.hero{grid-template-columns:1fr;min-height:0;padding:32px 25px 24px;border-radius:20px}.hero h1{font-size:42px;letter-spacing:-2px}.hero-copy>p:not(.eyebrow){font-size:12px}.hero-art{min-height:220px;margin-top:8px;transform:scale(.76)}.food-orbit{width:250px;height:250px}.food-main{width:170px;height:170px;font-size:88px}.floating-note.top{right:-22px}.floating-note.bottom{left:-20px}.impact-row{grid-template-columns:1fr;gap:9px;margin:13px 0 43px}.impact{padding:13px 15px}.section{padding-bottom:44px}.section-heading{align-items:flex-start}.section-heading h2{font-size:23px}.section-heading p{max-width:270px;line-height:1.5}.section-heading>a{padding-top:5px;white-space:nowrap}.chips{flex-wrap:nowrap;width:100%;overflow-x:auto;padding-bottom:5px}.chip{flex:0 0 auto}.product-grid{grid-template-columns:1fr;gap:12px}.product-card{display:grid;grid-template-columns:38% 1fr}.product-art{height:100%;min-height:178px}.product-art:before{width:130px;height:130px}.product-emoji{font-size:67px}.fresh-badge{right:7px;bottom:8px;padding:5px;font-size:8px}.product-details{padding:12px}.product-title{font-size:13px}.price{font-size:14px}.stock{font-size:9px}.product-link{padding:0 8px;font-size:9px}.seller-banner{align-items:flex-start;flex-direction:column;margin-bottom:42px;padding:22px}.seller-banner h2{font-size:18px}.footer-inner{flex-direction:column;gap:8px}}
        .footer{padding:46px 0 0;border-top:1px solid #e8ebe5;color:#667064;background:#fff;font-size:11px}.footer-inner{display:block}.footer-main{display:grid;grid-template-columns:1.5fr repeat(3,1fr);gap:38px;padding-bottom:35px}.footer-brand p{max-width:280px;margin:13px 0;color:#7a8177;line-height:1.8}.footer-title{margin:3px 0 15px;color:#30382f;font-size:12px;font-weight:800}.footer-links{display:grid;gap:11px}.footer-links a{width:fit-content;color:#737a70;transition:color .2s}.footer-links a:hover{color:var(--green)}.footer-social{display:flex;gap:8px;margin-top:16px}.footer-social a{display:grid;width:31px;height:31px;place-items:center;border:1px solid var(--line);border-radius:50%;color:#53614f;font-size:10px;font-weight:750}.footer-social a:hover{border-color:var(--green);color:var(--green)}.footer-info{display:grid;grid-template-columns:1.2fr 1fr;gap:30px;padding:22px 0;border-top:1px solid #edf0eb}.footer-info-group{display:flex;flex-wrap:wrap;align-items:center;gap:8px}.footer-info-group strong{width:100%;margin-bottom:3px;color:#465044;font-size:10px}.footer-tag{padding:6px 9px;border:1px solid #edf0eb;border-radius:5px;color:#737a70;background:#fafbf9;font-size:9px}.footer-bottom{display:flex;justify-content:space-between;gap:15px;margin-top:12px;padding:17px 0;border-top:1px solid #edf0eb;color:#858a82;font-size:10px}.footer-bottom strong{color:#485148}
        @media(max-width:850px){.footer-main{grid-template-columns:repeat(2,minmax(0,1fr));gap:28px}}
        @media(max-width:600px){.footer{padding-top:32px}.footer-main{grid-template-columns:repeat(2,minmax(0,1fr));gap:25px 16px;padding-bottom:25px}.footer-brand{grid-column:1/-1}.footer-brand p{max-width:360px}.footer-info{grid-template-columns:1fr;gap:18px;padding:18px 0}.footer-bottom{flex-direction:column;gap:7px;line-height:1.6}}
        @media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}*,*::before,*::after{transition:none!important}}
        .impact-row{gap:16px;margin:24px 0 58px}
        .impact-card{--impact-accent:#357b4d;--impact-tint:#edf7eb;position:relative;isolation:isolate;display:flex;min-height:222px;flex-direction:column;align-items:stretch;justify-content:space-between;gap:22px;overflow:hidden;padding:21px 22px;border:1px solid #e5ebe2;border-radius:20px;background:linear-gradient(145deg,#fff 42%,var(--impact-tint));box-shadow:0 7px 20px rgba(37,67,40,.035);transition:transform .25s ease,border-color .25s ease,box-shadow .25s ease}
        .impact-card:before{position:absolute;z-index:-1;top:-59px;right:-47px;width:154px;height:154px;border:1px solid color-mix(in srgb,var(--impact-accent) 15%,transparent);border-radius:50%;box-shadow:0 0 0 17px color-mix(in srgb,var(--impact-accent) 5%,transparent),0 0 0 36px color-mix(in srgb,var(--impact-accent) 3%,transparent);content:"";transition:transform .35s ease}
        .impact-savings{--impact-accent:#d18a34;--impact-tint:#fbf3e7}
        .impact-purpose{--impact-accent:#43865a;--impact-tint:#edf6ed}
        .impact-planet{--impact-accent:#378779;--impact-tint:#eaf5f1}
        .impact-top{display:flex;align-items:center;justify-content:space-between;gap:10px}
        .impact-card .impact-icon{width:50px;height:50px;border:1px solid color-mix(in srgb,var(--impact-accent) 12%,transparent);border-radius:16px;background:color-mix(in srgb,var(--impact-accent) 10%,white);font-size:23px;transition:transform .25s ease}
        .impact-number{color:var(--impact-accent);font-size:9px;font-weight:800;letter-spacing:.12em}
        .impact-copy strong{font-size:17px;letter-spacing:-.45px}
        .impact-copy span{max-width:235px;margin-top:7px;color:#777f74;font-size:11px;line-height:1.6}
        .impact-link{display:flex;align-items:center;justify-content:space-between;gap:10px;padding-top:12px;border-top:1px solid rgba(38,75,43,.1);color:var(--impact-accent);font-size:10px;font-weight:800}
        .impact-link span{margin:0;color:inherit;font-size:17px;line-height:1;transition:transform .2s ease}
        .impact-card:hover,.impact-card:focus-visible{transform:translateY(-5px);border-color:color-mix(in srgb,var(--impact-accent) 30%,white);box-shadow:0 18px 36px rgba(37,67,40,.11)}
        .impact-card:focus-visible{outline:3px solid color-mix(in srgb,var(--impact-accent) 35%,white);outline-offset:3px}
        .impact-card:hover:before,.impact-card:focus-visible:before{transform:scale(1.12) rotate(12deg)}
        .impact-card:hover .impact-icon,.impact-card:focus-visible .impact-icon{transform:rotate(-7deg) scale(1.06)}
        .impact-card:hover .impact-link span,.impact-card:focus-visible .impact-link span{transform:translateX(4px)}
        @media(max-width:850px){.impact-card{min-height:218px;padding:18px}}
        @media(max-width:600px){.impact-row{gap:11px;margin:13px 0 43px}.impact-card{min-height:0;gap:14px;padding:17px 18px;border-radius:17px}.impact-card .impact-icon{width:44px;height:44px;border-radius:14px}.impact-copy strong{font-size:16px}.impact-copy span{max-width:290px;font-size:11px}.impact-link{padding-top:10px}}
    </style>
</head>
<body>
<header class="topbar">
    <div class="shell nav">
        <a class="brand" href="{{ route('home') }}" aria-label="FastBites beranda"><span class="brand-mark">🥬</span><span>fastbites<em>.</em></span></a>
        <nav class="nav-links" aria-label="Navigasi utama">
            <a href="#produk">Jelajahi makanan</a>
            <a href="#cara-kerja">Cara kerja</a>
            <a href="#mitra">Untuk usaha</a>
        </nav>
        <div class="nav-actions">
            @auth
                <a class="button light small" href="{{ route('dashboard') }}">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}">@csrf<button class="button small" type="submit">Keluar</button></form>
            @else
                <a class="button light small" href="{{ route('login') }}">Masuk</a>
                <a class="button small" href="{{ route('register') }}">Daftar gratis</a>
            @endauth
        </div>
    </div>
</header>

<main>
    <section class="shell hero-wrap">
        <div class="hero">
            <div class="hero-copy">
                <p class="eyebrow">✨ Makanan berlebih bukan berarti terbuang</p>
                <h1>Hemat tiap hari,<br><span>nikmati lebih berarti.</span></h1>
                <p>Flash sale makanan surplus yang masih layak dinikmati—lebih hemat, tetap berkualitas, dan bantu kurangi food waste.</p>
                <div class="hero-actions">
                    <a class="button" href="#produk">Jelajahi makanan <span aria-hidden="true">→</span></a>
                    <a class="button outline" href="#cara-kerja">Cara kerjanya</a>
                </div>
            </div>
            <div class="hero-art" aria-hidden="true">
                <div class="food-orbit">
                    <div class="food-main">🥗</div>
                    <div class="floating-note top"><span>🥡</span> Masih segar, siap dinikmati</div>
                    <div class="floating-note bottom"><span>🌱</span> Lebih baik untuk bumi</div>
                </div>
            </div>
        </div>
    </section>

    <section class="shell impact-row" id="cara-kerja" aria-label="Keuntungan FastBites">
        <a class="impact impact-card impact-savings" href="#produk">
            <span class="impact-top"><span class="impact-icon" aria-hidden="true">💸</span><span class="impact-number">01 / LEBIH HEMAT</span></span>
            <span class="impact-copy"><strong>Harga lebih hemat</strong><span>Nikmati makanan favorit dengan harga spesial, tanpa bikin kantong berat.</span></span>
            <span class="impact-link">Temukan promo <span aria-hidden="true">→</span></span>
        </a>
        <a class="impact impact-card impact-purpose" href="#produk">
            <span class="impact-top"><span class="impact-icon" aria-hidden="true">🍽️</span><span class="impact-number">02 / PILIH BIJAK</span></span>
            <span class="impact-copy"><strong>Makanan tetap berarti</strong><span>Pilih surplus yang masih layak dinikmati dan bantu makanan tak terbuang.</span></span>
            <span class="impact-link">Pilih makanan <span aria-hidden="true">→</span></span>
        </a>
        <a class="impact impact-card impact-planet" href="#produk">
            <span class="impact-top"><span class="impact-icon" aria-hidden="true">🌍</span><span class="impact-number">03 / DAMPAK BAIK</span></span>
            <span class="impact-copy"><strong>Kurangi food waste</strong><span>Langkah kecil dari pilihanmu hari ini, dampak baik untuk bumi.</span></span>
            <span class="impact-link">Mulai berdampak <span aria-hidden="true">→</span></span>
        </a>
    </section>

    <section class="shell section" id="produk">
        <div class="section-heading">
            <div><h2>Enak hari ini <span aria-hidden="true">🍴</span></h2><p>Temukan makanan surplus pilihan dengan harga spesial sebelum habis.</p></div>
            <a href="{{ route('register') }}">Gabung FastBites <span aria-hidden="true">→</span></a>
        </div>
        <div class="browse-tools">
            <label class="search"><span aria-hidden="true">⌕</span><input id="product-search" type="search" placeholder="Cari makanan, toko, atau kategori..." aria-label="Cari makanan"></label>
            <div class="chips" aria-label="Filter kategori">
                <button class="chip active" type="button" data-category="Semua" aria-pressed="true">🍽️ Semua</button>
                <button class="chip" type="button" data-category="Makanan berat" aria-pressed="false">🍱 Makanan berat</button>
                <button class="chip" type="button" data-category="Roti & pastry" aria-pressed="false">🥐 Roti & pastry</button>
                <button class="chip" type="button" data-category="Makanan sehat" aria-pressed="false">🥗 Makanan sehat</button>
                <button class="chip" type="button" data-category="Minuman" aria-pressed="false">🥤 Minuman</button>
            </div>
        </div>
        <div class="product-grid" id="product-grid">
            @foreach($products as $product)
                @php($discount = (int) round((1 - $product['price'] / $product['original']) * 100))
                <article class="product-card" data-product data-category="{{ $product['category'] }}" data-search="{{ strtolower($product['name'].' '.$product['shop'].' '.$product['category']) }}">
                    <div class="product-art tone-{{ $product['tone'] }}">
                        <span class="discount">-{{ $discount }}%</span>
                        <span class="product-emoji" aria-hidden="true">{{ $product['emoji'] }}</span>
                        <span class="fresh-badge">✓ Masih layak dinikmati</span>
                    </div>
                    <div class="product-details">
                        <div class="shop-name"><span class="verified" aria-hidden="true">●</span>{{ $product['shop'] }}<span class="verified" aria-label="Toko terverifikasi">✓</span></div>
                        <h3 class="product-title">{{ $product['name'] }}</h3>
                        <div class="product-meta"><span>⏱ {{ $product['expiry'] }}</span><span>{{ $product['category'] }}</span></div>
                        <div class="price-row"><span class="price">Rp{{ number_format($product['price'], 0, ',', '.') }}</span><span class="old-price">Rp{{ number_format($product['original'], 0, ',', '.') }}</span></div>
                        <div class="card-footer">
                            <span class="stock">Tersisa {{ $product['stock'] }} porsi</span>
                            <a class="product-link" href="{{ auth()->check() ? route('dashboard') : route('login') }}">Masuk untuk pesan</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <p class="empty-state" id="no-products" hidden>Tidak ada makanan yang cocok. Coba kata kunci atau kategori lain.</p>
    </section>

    <section class="shell seller-banner" id="mitra">
        <div><h2>Punya usaha kuliner? Yuk, jadi mitra! 🏪</h2><p>Tawarkan makanan surplusmu dengan mudah dan bantu kurangi makanan terbuang.</p></div>
        <a class="button" href="{{ auth()->check() ? route('dashboard') : route('register') }}">Daftar sebagai mitra <span aria-hidden="true">→</span></a>
    </section>
</main>

<footer class="footer">
    <div class="shell footer-inner">
        <div class="footer-main">
            <section class="footer-brand" aria-label="Tentang FastBites">
                <a class="brand" href="{{ route('home') }}"><span class="brand-mark">🥬</span><span>fastbites<em>.</em></span></a>
                <p>Makanan berlebih bukan berarti terbuang. Temukan makanan enak dengan harga hemat sambil membantu mengurangi food waste.</p>
                <div class="footer-social" aria-label="Media sosial">
                    <a href="#" aria-label="Instagram">IG</a>
                    <a href="#" aria-label="TikTok">TK</a>
                    <a href="#" aria-label="Facebook">FB</a>
                </div>
            </section>
            <section>
                <h2 class="footer-title">Layanan pelanggan</h2>
                <nav class="footer-links" aria-label="Layanan pelanggan">
                    <a href="{{ route('login') }}">Pusat bantuan</a>
                    <a href="{{ route('login') }}">Cara berbelanja</a>
                    <a href="{{ route('login') }}">Cara melakukan pemesanan</a>
                    <a href="{{ route('login') }}">Hubungi kami</a>
                </nav>
            </section>
            <section>
                <h2 class="footer-title">Jelajahi FastBites</h2>
                <nav class="footer-links" aria-label="Jelajahi FastBites">
                    <a href="#produk">Makanan pilihan hari ini</a>
                    <a href="#cara-kerja">Cara kerja FastBites</a>
                    <a href="#mitra">Jadi mitra usaha</a>
                    <a href="{{ route('register') }}">Buat akun</a>
                </nav>
            </section>
            <section>
                <h2 class="footer-title">Tentang kami</h2>
                <nav class="footer-links" aria-label="Tentang FastBites">
                    <a href="#mitra">Tentang FastBites</a>
                    <a href="#cara-kerja">Misi kami</a>
                    <a href="#mitra">Karier</a>
                    <a href="#mitra">Kebijakan privasi</a>
                </nav>
            </section>
        </div>
        <div class="footer-info">
            <div class="footer-info-group">
                <strong>Metode pembayaran</strong>
                <span class="footer-tag">Transfer bank</span><span class="footer-tag">Kartu debit/kredit</span><span class="footer-tag">E-wallet</span><span class="footer-tag">Bayar di tempat</span>
            </div>
            <div class="footer-info-group">
                <strong>Layanan pengambilan</strong>
                <span class="footer-tag">Ambil di toko</span><span class="footer-tag">Antar ke lokasi</span><span class="footer-tag">Pesanan terjadwal</span>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© {{ date('Y') }} <strong>FastBites</strong>. Semua hak dilindungi.</span>
            <span>Contoh teks footer — silakan sesuaikan dengan informasi tokomu.</span>
        </div>
    </div>
</footer>
<script>
    const searchInput = document.querySelector('#product-search');
    const productCards = [...document.querySelectorAll('[data-product]')];
    const categoryButtons = [...document.querySelectorAll('[data-category]')];
    const emptyState = document.querySelector('#no-products');
    let activeCategory = 'Semua';

    function filterProducts() {
        const query = searchInput.value.trim().toLocaleLowerCase();
        let visibleCount = 0;

        productCards.forEach((card) => {
            const matchesCategory = activeCategory === 'Semua' || card.dataset.category === activeCategory;
            const matchesSearch = card.dataset.search.includes(query);
            card.hidden = !matchesCategory || !matchesSearch;
            visibleCount += card.hidden ? 0 : 1;
        });

        emptyState.hidden = visibleCount > 0;
    }

    searchInput.addEventListener('input', filterProducts);
    categoryButtons.forEach((button) => {
        button.addEventListener('click', () => {
            activeCategory = button.dataset.category;
            categoryButtons.forEach((item) => {
                const isActive = item === button;
                item.classList.toggle('active', isActive);
                item.setAttribute('aria-pressed', String(isActive));
            });
            filterProducts();
        });
    });
</script>
</body>
</html>
