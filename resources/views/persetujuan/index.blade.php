@extends('layouts.app')
@section('title', 'Persetujuan Page')

@section('content')
<h1>ini halaman persetujuan</h1>
<a href="{{ route('persetujuan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
@endsection
