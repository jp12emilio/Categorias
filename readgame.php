<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: basket.html");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM juegos where idjuego = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Vista Juego</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                        <div class="control-group">
                        <label class="control-label">ID</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['idjuego'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Nombre</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nombre'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Precio</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['precio'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Categoria</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['categoria'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Imagen</label>
                        <div class="controls">
                            <label class="checkbox">
                                <img src="<?php echo $data['imagen'];?>">


                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Descripcion</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['descripcion'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Clave</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['clavejuego'];?>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="juegos.php">Atras</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>