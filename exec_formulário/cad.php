<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>resultado</title>
</head>
<body>
    <head><h1>resultado do processamento</h1></head>
    <main>
        <?php
            //declaração de var superglobal do get(pega todos as respostas do questionário)
            //var_dump($_GET);
           
             //declaração de var superglobal do post(pega todos as respostas do questionário)
            //var_dump($_POST); .

             //declaração de var superglobal para post ou get (pega todos as respostas do questionário)
            //var_dump($_REQUEST); 

            $nome = $_GET["nome"]; 
            print "\n é um prazer ter conhecer $nome"

        ?>
    </main>

</body>
</html>
