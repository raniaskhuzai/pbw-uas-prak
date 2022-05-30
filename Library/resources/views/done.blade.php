<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</head>

<body>
    @extends('template')
    @section('konten')
        <br><br><br>
        <div class="text-center">
            <img src="https://www.ukrgate.com/eng/wp-content/uploads/2021/02/The-Ukrainian-Book-Institute-Purchases-380.9-Thousand-Books-for-Public-Libraries1.jpeg" class="card-img-top"
                style="height: 30rem; width: 95rem;" alt="...">
            <!-- @foreach ($synopsis as $synopsis) -->
                <br><br>
                <div class="card" style="width: 95rem; background-color: #f7e4ba;">
                    <div class="card-body">
                      <div class ="text" style = "border-bottom: 4px solid black;">
                        <h5 class="card-title">{{ $synopsis['title'] }}</h5>
                    </div>
                        <p class="card-text">{{ $sinopsis['synopsis'] }}</p>
                    <div class = "text-center">
                        <a href="/notesynopsis/edit/{{ $synopsis['title'] }}" class="card-link">Ubah</a>
                        <a href="/notesynopsis/hapus/{{ $synopsis['title'] }}" class="card-link">Delete</a>
                    </div>
                </div>
        </div>
            <!-- @endforeach -->
        </div>
        @foreach ($selectN as $lib)
            <br><br>
            <div class="card" style="width: 95rem; background-color: #e2dbcb;">
                <div class="card-body">
                  <!-- <div class ="text" style = "border-bottom: 6px solid red;"> -->
                <!-- <label for="exampleFormControlInput1" class="form-label"><h6>Nama</h6></label> -->
                </div>
                <div class ="text" style = "border-bottom: 4px solid black;">
                    <h5 class="card-title">{{ $lib['rating'] }}</h5>
                </div>
                    <h6 class="card-text">Author: {{ $lib['author'] }}</h6>
                    <h6 class="card-text">Publisher: {{ $lib['publisher'] }}</h6>
                    <h6 class="card-text">Comments: {{ $lib['comments'] }}</h6>
                    <div class="card-body">
                    <a href="/notelib/edit/{{ $lib['rating'] }}" class="card-link">Ubah</a>
                    <a href="/notelib/hapus/{{ $lib['rating'] }}" class="card-link">Delete</a>
                </div>
                </div>
            </div>
        @endforeach
    @endsection