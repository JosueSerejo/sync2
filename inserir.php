<?php

include('protect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<main>

<h4>Bem vindo ao Painel  <?php echo $_SESSION['nome']; ?> . <h4>


    <section>

        <h1>PAINEL DE CONTROLE</h1>

        <p>textinho 1 aqui</p>
        <p>textinho 2 aqui</p>
        <p>textinho 3 aqui</p>
        <p>textinho 4 aqui</p>

    </section>



    <p>
        <a href="logout.php">Sair</a>
    </p>


</main>


    
</body>
</html>