<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    @foreach($data as $row)
    <div class="card" style="width: 21rem;">
        <video id="myvideo" width="320" height="240" controls>
            <source src="{{asset('upload')}}/{{$row['video']}}" type="video/mp4">
        </video>
        <script>
           var vid = document.getElementById("myVideo");

           function myFunction() { 
            alert(vid.paused);
            } 
</script> 
        <div class="card-body">
            <h5 class="card-title">like button,</h5>
            <p class="card-text">caption</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</body>

</html>