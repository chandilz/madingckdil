@extends('adminlte::page')

@section('content_header')
    <h3>Pengaturan Running Teks</h3>
@stop
    
@section('content')
<p>edit/tambah untuk running teks</p>
    <form method="post" action="/save-text">
        @csrf
        <div class="form-group">
            <label for="content">Tambahkan Teks:</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop