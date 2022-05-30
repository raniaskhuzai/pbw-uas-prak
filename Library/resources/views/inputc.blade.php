@extends('template')
@section('konten')
<div class=text-center>
<form action="/notelib/store" method ="get">
        {{csrf_field()}}
        <label for="frating">Rating</label><br>
        <input type="text" id="f" name="rating" required="required"><br>
        <label for="fauthot">Author</label><br>
        <input type="text" id="fauthor" name="author" required="required"><br>
        <label for="fpubliser">Publisher</label><br>
        <input type="text" id="fpublisher" name="publisher" required="required"><br>
        <label for="fcomments">Comments</label><br>
        <!-- <input type="text" id="flatarbelakang" name="latarbelakang" required="required"><br> -->
        <div class = container>
        <textarea class="form-control" id="fcomments" name="comments" required="required" rows="3"></textarea>
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
@endsection