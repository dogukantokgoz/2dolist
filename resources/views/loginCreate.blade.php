
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

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Login Form -->
            <br>
            <form method="post" action="{{route('login.post')}}">
                @csrf
                <input type="text" class="fadeIn second" name="name" placeholder="name">
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Kaydol">
            </form>
    </div>

