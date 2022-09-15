<?php 

class Artigo{

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibeTodos(){

        $resultado = $this->mysql->query('SELECT * FROM artigos');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);
        
        return $artigos;
    }
}

?>