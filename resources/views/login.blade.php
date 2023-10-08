
@if(session('success'))
    <div class="alert alert-warning">
        {{ session('success') }}
    </div>
@endif

<link href="{{asset('back/')}}/assets/css/login.css" rel="stylesheet">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<form method="post" action="{{route('giris')}}">
    @csrf
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{asset('back/')}}/assets/img/2Do.jpeg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Giriş">
            </form>
            <div class="fadeIn fourth">
                <a href="{{route('login.create')}}" ><button type="button" class="btn btn-warning" >Kaydol</button></a>
            </div>
            <br>
        </div>
    </div>
</form>
