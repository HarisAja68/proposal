@extends('layouts.app')
@section('title', 'LPJ Page')

@section('content')
<h1>ini halaman LPJ</h1>
<a href="{{ route('lpj.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
@endsection
