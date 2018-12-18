<?php
	require 'database.php';
	ini_set('memory_limit', '1024M');
	class Buscador
	{
	    private $busqueda/*=array()*/;
	    public function buscar()
	    {
	        $busqueda = $_GET['s'];
	        
	        $pdo = Database::connect();
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $query = "SELECT * FROM juegos WHERE nombre like '%".$busqueda."%' OR descripcion like '%".$busqueda."%' GROUP BY nombre;";
	        $q = $pdo->prepare($query);
       		$q->execute();
	        while ($data = $q->fetch(PDO::FETCH_ASSOC))
	        {
	            $this->busqueda[] = $data;
	        }
	        return $this->busqueda;
	    }
	    public function buscarVacio()
	    {
	    	$busqueda = $_GET['s'];
	        
	        $pdo = Database::connect();
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $query = "SELECT * FROM juegos;";
	        $q = $pdo->prepare($query);
       		$q->execute();
	        while ($data = $q->fetch(PDO::FETCH_ASSOC))
	        {
	            $this->busqueda[] = $data;
	        }
	        return $this->busqueda;
	    }
	}
	class Categoria {
	    private $categoria;
	    public function mostrar() {
	        $categoria = $_GET['categoria'];
	        
	        $pdo = Database::connect();
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $query = "SELECT * FROM juegos WHERE categoria like '%".$categoria."%' OR descripcion like '%".$categoria."%' GROUP BY nombre;";
	        $q = $pdo->prepare($query);
       		$q->execute();
	        while ($data = $q->fetch(PDO::FETCH_ASSOC))
	        {
	            $this->categoria[] = $data;
	        }
	        return $this->categoria;
	    }
	}
?>