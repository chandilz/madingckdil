@extends('adminlte::page')

@section('content_header')
    <h3>Pengaturan Video</h3>
@stop

@section('content')
    <form action="{{ Route('video.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="video" accept="video/*" required>
        <button type="submit">Upload Video</button>
    </form>
@stop