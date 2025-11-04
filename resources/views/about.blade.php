@extends('layouts.app')

@section('title','About')

{{-- Judul besar di top layout --}}
@section('headline','Halaman ini dibuat oleh: 301010021 - IMAM RISMAWANn')
@section('subtitle','Profil Penulis Project Laravel')

@section('content')

<style>
  /* Layout grid responsif: 2 kolom di desktop, 1 kolom di mobile */
  .about-grid{
    display:grid; gap:28px; margin:24px 0 6px;
    grid-template-columns: repeat(2, minmax(320px, 1fr));
  }
  @media (max-width: 900px){
    .about-grid{ grid-template-columns: 1fr; }
  }

  /* Card besar bergaya glass + gradient biru */
  .profile-card{
    background: linear-gradient(180deg, rgba(14,94,180,.55), rgba(6,41,95,.55));
    border:1px solid rgba(255,255,255,.18);
    border-radius:24px;
    box-shadow:0 16px 36px rgba(0,0,0,.35);
    backdrop-filter: blur(6px);
    padding:36px 28px;
    display:flex; flex-direction:column; align-items:center;
    min-height: 460px; /* samakan tinggi */
    position: relative;
    overflow: hidden;
  }

  /* Avatar dengan ring & glow */
  .avatar{
    width:160px; height:160px; border-radius:50%;
    object-fit:cover; display:block;
    border:4px solid rgba(255,255,255,.65);
    box-shadow:0 10px 24px rgba(0,0,0,.45), 0 0 0 8px rgba(255,255,255,.08) inset;
  }

  .name{ margin:14px 0 2px; font-weight:800; font-size:1.45rem; letter-spacing:.5px; text-transform:uppercase; text-align:center; }
  .nim{ color:#cbd5e1; font-size:.95rem; margin-bottom:16px; text-align:center; }

  /* Panel BIO bergaya glass, konsisten lebar */
  .bio{
    margin-top:auto; /* dorong ke bawah agar proporsional */
    width: min(640px, 100%);
    background: rgba(13,16,28,.45);
    border:1px solid rgba(255,255,255,.18);
    padding:16px 18px; border-radius:16px; color:#e9eefc;
    backdrop-filter: blur(6px);
    line-height:1.55;
  }
  .bio .label{
    display:inline-block; font-weight:800; margin-bottom:6px; letter-spacing:.4px;
  }
</style>

<div class="about-grid">

  {{-- Profile Mahasiswa A --}}
  <div class="profile-card">
    <img src="{{ asset('images/profile1.jpg') }}" alt="profile1" class="avatar">
    <div class="name">ADI SAPUTRA</div>
    <div class="nim">2301010016</div>

    <div class="bio">
      <div class="label">BIO</div>
      Seorang mahasiswa Ilmu Komputer yang fokus pada pengembangan aplikasi web
      dan IoT, dengan ketertarikan pada cloud computing dan administrasi jaringan/Linux.
    </div>
  </div>

  {{-- Profile Mahasiswa B --}}
  <div class="profile-card">
    <img src="{{ asset('images/profile2.jpg') }}" alt="profile2" class="avatar">
    <div class="name">IMAM RISMAWAN</div>
    <div class="nim">2301010021</div>

    <div class="bio">
      <div class="label">BIO</div>
      Tertarik pada desain UI/UX, front-end development, serta pengembangan sistem
      berbasis Laravel dengan perhatian pada konsistensi desain dan aksesibilitas.
    </div>
  </div>

</div>

@endsection
