<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <style>
    .card {
       margin:auto;
       width: 100%;
       padding: 10px;
      }

    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #FF7D05EB;">
        <a class="navbar-brand" href="#">Foot Tech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <span class="navbar-text">
            <ul class="navbar-nav "> 
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Scout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Message</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LogOut</a>
                </li>
            </ul>
            </span>

        </div>
    </nav>
    
    <div class="w-4/5 m-auto text-center">
        <div class="">
            <h1>
                Trial events
            </h1>
        </div>
    </div>
    
    <div class="sm:grid grid-cols-2">
    <style>
        .container {
           display: flex;
           align-items: center;
           justify-content: center
        }
        img {
           max-width: 100%
        }
        .image {
           flex-basis: 40%
        }
        .text {
           font-size: 20px;
           padding-left: 20px;
        }
    </style>
        <div class="container">
            <div class="image">
            <img src="https://cdn.pixabay.com/photo/2021/12/06/06/10/soccer-6849344_1280.jpg" alt="">
        </div>
        <div class="text">
            <h2>
                First event
            </h2>
            <span>
                
            </span>
            <p>
               this is the very first event of this year's season can't wait to see all of you players on the field 
            </p>
            <a href="">
                keep reading
            </a>
        </div>
    </div>
    </div>
 @include('footer')
</body>
</html>
