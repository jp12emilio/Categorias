<?php
    include_once 'Categoria.php';
    $categoria = new Categoria();
    $mostrarCategoria = $categoria->mostrar();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Resultado de la búsqueda</title>
    <style type="text/css">
        table{border:1px solid black; margin: 100px 0px 0px 160px}
        th{background-color:#0000FF; color:#fff;}
        td{background-color:#CCCCCC;}
    </style>
</head>
<body>
<?php
    for($i=0;$i<sizeof($mostrarCategoria);$i++) {
            ?>
            <div><a class="btn" href="readgame.php?id=<?php echo $mostrarCategoria[$i]['idjuego'] ?>">
                    <?php echo $mostrarCategoria[$i]["nombre"] ?>
                    <?php echo $mostrarCategoria[$i]["precio"] ?>
                    <?php echo $mostrarCategoria[$i]["descripcion"] ?>
                    <?php echo $mostrarCategoria[$i]["imagen"] ?>
            </a></div>
            <?php   
        }
?>
</body>
</html>