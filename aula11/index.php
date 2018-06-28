<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="loja.css">
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Loja Virtual</title>
<link rel="stylesheet" type="text/css" href="loja.css">
<title>Seu Carrinho</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- jQuery library -->
<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

</body>
<pre>
 <?php
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    //$p1 = new Pessoa();
    /*$v1 = new Visitante();
    $v1->setNome("Juvenal");
    $v1->setIdade(33);
    $v1->setSexo("M");
    print_r($v1);*/
    $a1 = new Aluno();
    $a1->setNome("Pedro");
    $a1->setMatricula(1111);
    $a1->setIdade(16);
    $a1->setSexo("M");
    $a1->setCurso("Informática");
    $a1->pagarMensalidade();
    print_r($a1);
    
    $b1 = new Bolsista();
    $b1->setMatricula(1112);
    $b1->setNome("Jubileu");
    $b1->setBolsa(12.5);
    $b1->setCurso("Administração");
    $b1->setIdade(17);
    $b1->pagarMensalidade();
    print_r($b1);
 ?>
</pre>
</html>

