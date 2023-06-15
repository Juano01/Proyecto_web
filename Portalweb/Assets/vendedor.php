<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bissnes </title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<style>
@media screen and (min-width:992px){
    .navbar .container-fluid, .navbar-expand-lg .navbar-collapse, .navbar-expand-lg .navbar-nav{
        flex-direction: column;
        align-items: flex-start;
    }
    .navbar{
        width: 25%;
        height: 100vh;
        align-items: flex-start;
    }
    .navbar-brand{
        margin-left: .5rem;
        font-size: 1.5em;
        font-weight: bold;

    }
}




</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Perfil Bissnes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Clases/update.php">Actualizar Informacion
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Clases/logout.php">Cerrar sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../Clases/password_reset.php">Actualizar Contraseña</a></li>
            <li><a class="dropdown-item" href="">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>











<div class="blockcode">        
    <footer class="shadow">
      <div
        class="d-flex justify-content-between align-items-center mx-auto py-4 flex-wrap"
        style="width: 80%">
        <a href="https://www.instagram.com/" class="d-flex align-items-center p-0 text-dark">
          <img alt="logo" src="../Img/icons8-favicon.gif" width="30px" />
          <span class="ms-4 h5 font-weight-bold">Bissnes</span>
        </a>
        <small>&copy; Bissnes, 2023. All rights reserved.</small>
        <div>
          <button class="btn btn-secondary btn-flat p-2">
            <a href="https://web.facebook.com/"> <img src="../Img/icons8-facebook.gif" alt=""> <i class="fa fa-facebook"></i>
          <button class="btn btn-dark btn-flat p-2">
            <a href="https://www.instagram.com/"> <img src="../Img/icons8-instagram.gif" alt=""> <i class="fa fa-facebook"></i>
          </button>
          <button class="btn btn-secondary btn-flat p-2">
            <a href="https://www.twitter.com/"> <img src="../Img/icons8-twitter.gif" alt=""> <i class="fa fa-facebook"></i>
          </button>
          <button class="btn btn-dark btn-flat p-2">
            <a href="https://web.whatsapp.com/"> <img src="../Img/icons8-whatsapp.gif" alt=""> <i class="fa fa-facebook"></i>
          </button>
        </div>
      </div>
    </footer>
  </div>
  </body>
  </html>