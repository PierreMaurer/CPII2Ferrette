@extends('layout')

@section('content')
<form action="/admin/gallery" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    @csrf
    <button type="submit">Upload</button>
</form>

@endsection
