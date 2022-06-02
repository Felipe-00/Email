<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>

    <h1>Nos contate por Email</h1>
    
<form action="" method="post">
    Nome <br><input type="text" name="name"><br>
    Email <br><input type="text" name="email"><br>
    Assunto <br><input type="text" name="subject"><br>
    Menssagem<br><textarea rows="5" name="message" cols="41"></textarea><br>
    <input type="submit" name="submit" value="Enviar">
</form>


<?php
if(isset($_POST['submit'])){
    $destinatario = "felipe-mdlima@educar.rs.gov.br"; 
    $remetente = $_POST['email']; 
    $nome = $_POST['name'];
    $assunto = $_POST['subject'];
    $mensagem = $nome . " " . " Escreveu a seguinte mensagem:" . "\n\n" . $_POST['message'];
    $header="From: " . $remetente;
    
  
    if(mail($destinatario,$assunto,$mensagem,$header)){
        echo "Email enviado, obrigado " . $nome . ", iremos te contactar em breve.";}
    else
        echo "Email não enviado, tente novamente.";
    }
?>
</body>
</html>