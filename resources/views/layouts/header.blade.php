<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mx-5" href="{{route('index')}}">2dolist</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-5">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('trashed')}}">Silinenler</a>
            </li>

        </ul>
    </div>
    <div class="d-flex justify-content-end">
        <div class="form-inline my-lg-2">
        <div class="text-bg-dark">
        <span>Welcome {{$user->name}}</span></div></div>
        <li class="form-inline my-5 mx-5 my-lg-0">
            <a class="btn btn-outline-light" href="{{route('logout')}}">Çıkış Yap</a>
        </li>
    </div>
</nav>

</body>
</head>
<br>

