<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lembaga Pemberdayaan Masyarakat (LPM) </title>
    <link href="{{ asset('img/logo_LPM.png') }}" rel="icon">
</head>
<body>
<x-sidebar></x-sidebar>
    {{$slot}}
</body>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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