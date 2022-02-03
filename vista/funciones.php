<?php
function conectar(){
  $conexion=new mysqli("localhost","root","","series");
  $conexion->set_charset("utf8");
  return $conexion;
}
function imprimirMenu(){
    $archivo_actual=basename($_SERVER['PHP_SELF']);
    if($archivo_actual=='index.php'){
      $menu="<nav class='navbar navbar-expand-lg navbar-dark bg-dark '>
              <div class='container-fluid '>
                <a class='navbar-brand' href='./index.php'><img src='./assets/logo.png' width='30%'></a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                </button>
                <div class='collapse navbar-collapse d-flex justify-content-around' id='navbarNav'>
                  <ul class='navbar-nav'>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu' aria-current='page' href='#'>Inicio</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu' href='#'>Series</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu' href='#'>Plataformas</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu' href='#'>Acceder</a>
                    </li>
                  </ul>
                  <form class='d-flex'>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-light' type='submit'>Buscar</button>
                  </form>
                </div>
              </div>
            </nav>";
    }else{
      $menu="<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
              <div class='container-fluid'>
                <a class='navbar-brand' href='../vista/php/index.php'><img src='../assets/logo.png'></a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                </button>
                <div class='collapse navbar-collapse' id='navbarNav'>
                  <ul class='navbar-nav'>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu ' aria-current='page' href='#'>Inicio</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu' href='#'>Series</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu' href='#'>Plataformas</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link boton-menu' href='#'>Acceder</a>
                    </li>
                  </ul>
                  <form class='d-flex'>
                    <input class='form-control me-2' type='search' placeholder='Search' aria-label='Search'>
                    <button class='btn btn-outline-success' type='submit'>Search</button>
                  </form>
                </div>
              </div>
            </nav>";    
    }
    return $menu;
}  
?>