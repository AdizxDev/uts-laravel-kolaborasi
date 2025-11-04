@extends('layouts.app')

@section('title', 'Home')

{{-- Judul besar di header (pakai nama + NIM) --}}
@section('headline', 'Halaman ini dibuat oleh ' . $nim . ' - ADI SAPUTRA')

@section('content')
<div class="grid" style="display:grid; grid-template-columns:repeat(auto-fill,minmax(320px,1fr)); gap:24px;">
  @foreach($places as $p)
    <div style="
      position:relative; border-radius:18px; overflow:hidden; height:260px;
      box-shadow:0 12px 28px rgba(0,0,0,.28); background:#00000022;">
      <img src="{{ asset('images/' . $p['img']) }}"
           alt="{{ $p['name'] }}"
           style="width:100%; height:100%; object-fit:cover; display:block;">
      {{-- gradient overlay ala contoh soal --}}
      <div style="position:absolute; inset:0;
                  background:linear-gradient(180deg,rgba(0,0,0,0) 55%, rgba(0,0,0,.65) 100%);">
      </div>
      <div style="
        position:absolute; left:16px; right:16px; bottom:12px;
        color:#fff; font-weight:800; text-shadow:0 2px 6px rgba(0,0,0,.6);">
        {{ $p['name'] }}
      </div>
    </div>
  @endforeach
</div>
@endsection
