@extends('adminlte::page')

@section('content_header')
    <h1>Pengaturan Video</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A sunt debitis vero. Dolorem ducimus reprehenderit incidunt iusto pariatur aut ipsum ipsa ratione dignissimos, numquam aliquid quam fugit magni sed, similique quia unde, nostrum eaque accusantium debitis molestiae nesciunt tempora? Recusandae minus officia tempore! Asperiores rerum, numquam sit hic dolor similique?</p>
@stop

@section('content')
<h3>Upload File Video</h3>
<form action="{{ Route('video.upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="video" accept="video/*" required>
    <button type="submit">Upload Video</button>
</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@stop
