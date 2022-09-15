<?php 
    
    $mysql = new mysqli('localhost', 'root', '', 'blog');
    $mysql->set_charset('utf8');

    // query do inglês significa consulta
    // $mysql->query('SELECT * FROM artigos');

    if($mysql == false){
      echo 'Falha na conexão';
    }

?>