<?php 

// require faz com que o programa exiga que o arquivo requerido esteja sendo acessado. Caso contrário ele não executa o programa.
// diferentemento do include, que inclui as linhas de código dos arquivos no qual ele é chamado, e não interrompe a execução do programa.
    require_once 'conexao.php';
    require_once 'Artigo.php';

    $artigo = new Artigo($mysql);
    $artigos = $artigo->exibeTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach($artigos as $artigo):
        ?>
        <h2>
            <a href="<?php echo $artigo['link']; ?>">
                <?php echo $artigo['titulo']; ?>
            </a>
        </h2>
        <p>
            <?php echo $artigo['conteudo']; ?>
        </p>
        <?php endforeach; ?>
    </div>
</body>
</html>