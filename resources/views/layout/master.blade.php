<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

 

<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
  <div class="container-fluid justify-content-center" >
    <a class="navbar-brand" href="@auth /home @else / @endauth">Amazing E-Book</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        @auth
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/logout">@lang('string.LogOut')</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/register">@lang('string.SignUp')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/login">@lang('string.LogIn')</a>
            </li>
        @endauth
        
      </ul>
    </div>
  </div>
</nav>

@yield('navbar')

<div class="container">
  @yield('content')
</div>


<footer class="bg-primary d-flex justify-content-center py-4" id="footer">
  <h4 style="position: absolute;">&#169; Amazing E-book 2022 </h4>
  <div class="contatiner d-flex justify-content-evenly" style="margin-left: 80%">
      <div>
          <a class ="text-decoration-none text-light me-5" href="/lang/id">Indonesia</a>
      </div>
      <div>
          <a class ="text-decoration-none text-light" href="/lang/en">English</a>
      </div>
  </div>
  </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>