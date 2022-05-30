@extends('template')
@section('konten')
    <form action="/notesynopsis/update" method="post">
        {{ csrf_field() }}
        <label for="ftitle">Title</label><br>
        <input type="text" id="ftitle" name="title" required="required" value="{{ $title }}" readonly><br>
        <label for="fsynopsis">Sinopsis</label><br>
        @foreach ( $notesynopsis as $notesynopsis )
        <textarea class="form-control"  id="fsynopsis" name="synopsis" required="required" style="width: 50rem;">{{ $notesynopsis['synopsis'] }}</textarea>
        <br>
        @endforeach
        <input type="submit" value="Submit">
    </form>
@endsection