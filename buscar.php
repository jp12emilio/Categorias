<?php
    include 'buscador.php';
    // require_once("class/class.php");
    $bus = new Buscador();
    $buscame = $bus->buscar();
    $busca = $bus->buscarVacio();

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
        //COMPROBAMOS SI HAY REGISTROS EN LA BUSQUEDA, SI NO LOS HAY, MOSATRAMOS UN MENSAJE DICIENDO QUE NO HAY RESULTADOS, EN OTRO CASO, MOSTRAMOS LOS RESULTADOS
        if(count($busca)==0 || count($buscame)>0)
        {
            for($i=0;$i<sizeof($buscame);$i++)
            {
                ?>
                <div><a class="btn" href="readgame.php?id=<?php echo $buscame[$i]['idjuego'] ?>">
                        <?php echo $buscame[$i]["nombre"] ?>
                        <?php echo $buscame[$i]["precio"] ?>
                        <?php echo $buscame[$i]["descripcion"] ?>
                        <?php echo $buscame[$i]["imagen"] ?>
                </a></div>
                <?php   
            }

        }else{
            echo "<p>No se ha encontrado resultados</p>";
        }
        echo '<br>';
        for($i=0;$i<sizeof($mostrarCategoria);$i++)
            {
                ?>
                <div><a class="btn" href="readgame.php?id=<?php echo $buscame[$i]['idjuego'] ?>">
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