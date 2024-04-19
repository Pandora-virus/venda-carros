<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
    <!-- Incluir o Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Se você deseja estilos personalizados, adicione-os após o Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../scss/bootstrap.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Carros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=marca-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=marca-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
       
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Modelo
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="?page=modelo-listar">Listar</a></li>
          <li><a class="dropdown-item" href="?page=modelo-cadastar">Cadastrar</a></li>
        </ul>
       </li>   
      </ul> 
       
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-3">
  <div class="row">
    <div class="col">
       <?php
          switch (@$_REQUEST['page']) {
            //marcas
            case 'marca-listar.php':
              include('marca-listar.php');
              break;
            case 'marca-cadastrar.php':
              include('marca-cadastrar.php');
              break;
            case 'marca-editar.php':
              include('marca-editar.php');
              break;
            case 'marca-salvar.php':
              include('marca-salvar.php');
              break;       
                
           //modelos
           case 'modelo-listar.php':
            include('modelo-listar.php');
            break;
          case 'modelo-cadastrar.php':
            include('modelo-cadastrar.php');
            break;
          case 'modelo-editar.php':
            include('modelo-editar.php');
            break;
          case 'modelo-salvar.php':
            include('modelo-salvar.php');
            break;       

          default:
            print "<h1>Seja Bem vindo</h1>";    
     }
       ?>
    </div>
  </div>
</div>
    
    <!-- Scripts do Bootstrap (opcional, necessário para alguns componentes do Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
