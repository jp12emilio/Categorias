<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Prueba</h3>
            </div>
            <nav class="navbar navbar-light bg-light">
              <form class="form-inline" action="buscar.php" method="get">
                <input class="form-control mr-sm-2" type="search" name="s" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
              <form class="form-inline" action="buscar.php" method="get">
                <input class="form-control mr-sm-2" type="search" name="categoria" placeholder="Categorias" aria-label="Categorias">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </nav>

    </div>
  </body>
</html>