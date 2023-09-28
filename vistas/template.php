<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celaque</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<!-- <nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#" aria-current="page">Sistema <span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">Home</a>
        <a class="nav-item nav-link" href="?controlador=calculocuotas&accion=calcularCuotas">Calculo de Intereses</a>
    </div>
</nav> -->
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
   
    <a class="navbar-brand" href="https://www.celaque.net/" target="_blank">
    <img src="//images.squarespace-cdn.com/content/v1/584f6704725e254d6b052b4d/54d8be96-6dc5-42fa-ac3e-a329f7e410c2/celaqueweb.jpg?format=1500w" alt="" width="300" height="100" class="d-inline-block align-text-top">
   
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="?controlador=paginas&accion=inicio">Home</a>
        <a class="nav-item nav-link" href="?controlador=calculocuotas&accion=calcularCuotas">Calculo de Intereses</a>
       
      </div>
    </div>
  </div>
</nav>
<br>
</div>



    <div class="container">
    <div class="row">
                <div class="col-12">
                  <?php include_once("ruteador.php")?>
                </div>

            </div>

    </div>
   
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>