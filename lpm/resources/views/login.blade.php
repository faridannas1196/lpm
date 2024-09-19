<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/stylelogin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Lembaga Pemberdayaan Masyarakat (LPM) </title>
  <link href="{{ asset('img/logo_LPM.png') }}" rel="icon"></head>
<body>  
  <form action="{{ route('actionlogin') }}" method="post">
    @csrf
    <div class="login-page">
      <div class="form">
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif
          @if(session('message'))
        <div class="alert alert-success">
           {{session('message')}}
        </div>
        @endif
        <form class="login-form">
          <input type="text" placeholder="username" name="username"/>
          <input type="password" placeholder="password" name="password"/>
          <button type="submit">login</button>
        </form>
      </div>
    </div>
    <script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script type="text/javascript"> 
    function preventBack() { 
        window.history.forward();  
    } 
      
    setTimeout("preventBack()", 0); 
      
    window.onunload = function () { null }; 

    CKEDITOR.replace( 'content' );
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (tooltipNode) {
      new bootstrap.Tooltip(tooltipNode)
    })

    window.history.forward(); 
        function noBack() { 
            window.history.forward(); 
        } 
  </script>
</html>