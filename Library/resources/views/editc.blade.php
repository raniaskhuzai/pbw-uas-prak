@extends('template')
@section('konten')
    <form action="/notelib/update" method="post">
        {{ csrf_field() }}
        @foreach ($chara as $chara )
        <label for="frating">Rating</label><br>
        <input type="text" id="frating" name="rating" required="required" value="{{ $lib['rating'] }}" readonly><br>
        <label for="fauthor">Author</label><br>
        <input type="text" id="fauthor" name="author" required="required" value="{{ $lib['author'] }}"><br>
        <label for="fpublisher">Publisher</label><br>
        <input type="text" id="fpublisher" name="publisher" required="required" value="{{ $lib['publisher'] }}"><br>
        <label for="fcomments">comments</label><br>
        <textarea class="form-control" id="fcomments" name="comments" required="required" style="width: 50rem;">{{ $lib['comments'] }}</textarea><br>
        @endforeach
        <input type="submit" value="Submit">
    </form>
@endsection