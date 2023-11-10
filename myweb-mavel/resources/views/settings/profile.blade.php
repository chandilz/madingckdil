@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <p>Hello welcome to your profile page</p>

    {{-- Change Foto --}}

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Profil Pengguna</h3>
                </div>
                <div class="card-body ">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="avatar">Foto Profil</label>
                            <br>
                            <img id="img" src="{{ asset('images/upload.jpg') }}" width="150" height="150"
                                class="rounded rounded-5">
                            <input type="file" name="avatar" id="input" class="form-control-file mt-3">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <style>

    </style>

@stop

@section('js')

    {{-- Fungsi Change Profile --}}
    <script>
        let img = document.getElementById('img');
        let input = document.getElementById('input');

        input.onchange = (e) => {
            if (input.files[0])
                img.src = URL.createObjectURL(input.files[0]);
        };
    </script>

    <script>
        console.log('Hi!');
    </script>
@stop
