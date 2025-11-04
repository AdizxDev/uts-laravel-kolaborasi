<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','Laravel NIM')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,600,700" rel="stylesheet" />
    <style>
      :root{--muted:#94a3b8;--pill:#38bdf81a;}
      *{box-sizing:border-box}
      body{
        margin:0;font-family:Inter,system-ui;color:#e5e7eb;
        background:
  linear-gradient(180deg,rgba(14,165,233,0.40) 0%, rgba(11,18,32,0.45) 100%),
  url('{{ asset('images/bckground.webp') }}') center/cover fixed;

      }
      a{color:inherit;text-decoration:none}
      .container{max-width:1180px;margin:0 auto;padding:0 24px}

      /* NAVBAR = SATU BARIS, 3 ZONA (kiri: menu, tengah: nim A, kanan: nim B) */
      .nav{
        position:sticky;top:0;z-index:50;background:rgba(15,23,42,.88);
        backdrop-filter:blur(8px);border-bottom:1px solid #ffffff1a
      }
      .nav .bar{
        display:grid;grid-template-columns:1fr auto 1fr;align-items:center;
        gap:12px; height:56px; /* tinggi bar */
      }
      .nav .left{display:flex;gap:14px;align-items:center;justify-self:start}
      .nav .left a{
        display:inline-flex;align-items:center;justify-content:center;
        height:40px;line-height:40px;padding:0 16px;border-radius:16px;font-weight:600
      }
      .nav .left a.active,.nav .left a:hover{background:var(--pill);border:1px solid #ffffff2b}

      .nav .center{justify-self:center;font-size:.84rem;color:#cbd5e1;white-space:nowrap}
      .nav .right{justify-self:end;font-size:.84rem;color:#cbd5e1;white-space:nowrap}

      /* HERO TITLE */
      .hero{padding:26px 24px 8px;text-align:center}
      .hero .title{margin:0;font-size:clamp(22px,3.2vw,34px);font-weight:800}
      .hero .subtitle{color:#cfe0f5;margin:.35rem 0 0}

      /* UTIL */
      .card{background:linear-gradient(180deg,#1f2937cc,#0f172acc);
        border:1px solid #ffffff1a;border-radius:18px;box-shadow:0 12px 32px #00000033;padding:20px}
      .grid{display:grid;gap:22px}
      .grid-3{grid-template-columns:repeat(3,minmax(0,1fr))}
      .muted{color:var(--muted)}
      footer{margin-top:36px;color:#cbd5e1;padding:0 24px}
    </style>
  </head>
  <body>

    {{-- NAVBAR: kiri = menu; tengah = NIM A; kanan = NIM B --}}
    <nav class="nav">
      <div class="container">
        <div class="bar">
          <div class="left">
            <a href="{{ route('home')  }}" class="{{ request()->routeIs('home')  ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
          </div>

          <div class="center">2301010016 — ADI SAPUTRA(GENAP)</div>
          <div class="right">2301010021 — IMAM RISMAWAN(GANJIL)</div>
        </div>
      </div>
    </nav>

    {{-- Judul besar --}}
    <header class="container hero">
      @hasSection('headline')
        <h1 class="title">@yield('headline')</h1>
        @hasSection('subtitle')
          <p class="subtitle">@yield('subtitle')</p>
        @endif
      @endif
    </header>

    <main class="container" style="padding:0 24px 24px">
      @yield('content')
    </main>

    <footer class="container">
      <div class="muted">© {{ date('Y') }} — ADI SAPUTRA (2301010016) & IMAM RISMAWAN (2301010021)</div>
    </footer>
  </body>
</html>
