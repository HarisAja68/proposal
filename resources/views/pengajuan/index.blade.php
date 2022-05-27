@extends('layouts.app')
@section('title', 'Pengajuan Page')

@section('content')
<h1>ini halaman Pengajuan</h1>
<a href="{{ route('pengajuan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
@endsection
