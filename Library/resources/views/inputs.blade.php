@extends('template')
@section('konten')
<div class=text-center>
<form action="/notesynopsis/store" method ="post">
        {{csrf_field()}}
        <label for="ftitle">Title</label><br>
        <input type="text" id="ftitle" name="title" required="required"><br>
        <label for="fsynopsis">Synopsis</label><br>
        <!-- <input type="text" id="fsinopsis" name="sinopsis" required="required"><br> -->
        <div class = container>
        <textarea class="form-control" id="fsynopsis" name="synopsis" required="required" rows="3"></textarea>
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
@endsection