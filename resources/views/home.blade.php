<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: black
        }
        .login{
            font-size: 20px;
            color:yellow;
            background: white;
            margin-bottom: 15px;
            padding: 5px;

        }
        .register{
            font-size: 20px;
            color:yellow;
            background: white;
            margin-bottom: 15px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container-fluid">
          <a class="navbar-brand text-white " href="#">ApnaBlog.com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
          
            </ul>
            
          </div>
        </div>
      </nav>


    <div class="container-fluid fixed-top p-4">

        <div class="col-12">
            <div class="d-flex justify-content-end text-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted ">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted login">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-muted register ">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 pt-5 px-5">
        <ul class="list-group">
            <li class="list-group-item text-center">ALL BLOG POST</li>
             @foreach ($posts as $post)
                 
           
            <li class="list-group-item list-group-item-primary text-center">{{$post->title}} <br>
            {{$post->body}}</li>
            <li class="list-group-item list-group-item-secondary"></li>
         
            @endforeach
          </ul>
    </div>
</body>
</html>
