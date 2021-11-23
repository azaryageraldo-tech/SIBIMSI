@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Riwayat Bimbingan</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('bimbingan.riwayat-bimbingan') }}">Bimbingan Skripsi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Riwayat Bimbingan</li>
    </ol>
</div>

@forelse ($items as $item)
<div class="card mb-4">
    <div class="card-body">
        <h5>Nama Dosen : {{ $item->dosen->nama }}</h5>
        <h5>Tanggal Kirim : {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</h5>
        <h5>Topik Pembahasan : {{ $item->bab_pembahasan }}</h5>
        <h5>Status : <span class="text-primary">{{ $item->status }}</span></h5>
    </div>
</div>
@empty
<div class="card">
    <div class="card-body">
        <h3>Belum melakukan bimbingan</h3>
    </div>
</div>
@endforelse
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('uraian_konsultasi');
</script>
@endpush
