@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <p>Hello welcome to your profile page</p>

    {{-- Change Foto --}}

    <div class="container_profile">
        <div>
            <img id="img"
                src="https://imgs.search.brave.com/lnooywfhfpdsFYfSoz0RE8iY5XRKfQcoBP9gswnPEIw/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzAyLzE3Lzg4Lzcz/LzM2MF9GXzIxNzg4/NzM1MF9tRGZMdjJv/b3RRTmVmZldYVDU3/VlFyOE9YN0l2Wkt2/Qi5qcGc"
                width="150" height="150" class="rounded rounded-5">
        </div>

        <div class="mt-2">
            <input id="input" type="file">
        </div>


        <div class="mt-2">
            <button class="btn btn-primary" type="submit">Change</button>
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
