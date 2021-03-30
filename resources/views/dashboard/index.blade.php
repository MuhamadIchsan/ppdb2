@extends('layouts.index')

@section('content')
<div class="container">
<div class="jumbotron text-center">
            <h1 class="display-4">PPDB SMK WIKRAMA</h1>
            <p class="lead">Selamat datang dan selamat bergabung!</p>
            <hr class="my-4">
            <p>Mari bergabung bersama SMK Wikrama dan Persiapkan masa depanmu</p>
            <a class="btn btn-primary btn-lg" href="{{ route('siswa.create') }}" role="button">Daftar</a>
          </div>
</div>
@endsection