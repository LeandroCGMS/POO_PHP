<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="loja.css">
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Aula 12</title>
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
    require_once 'Reptil.php';
    require_once 'Mamifero.php';
    require_once 'Peixe.php';
    require_once 'Ave.php';
    require_once 'Ave.php';
    require_once 'Canguru.php';
    require_once 'Cachorro.php';
    require_once 'Cobra.php';
    require_once 'Arara.php';
    require_once 'Goldfish.php';
    require_once 'Tartaruga.php';
    $a = new Ave();
    $m = new Mamifero();
    $p = new Peixe();
    $r = new Reptil();
    $c = new Canguru();
    $k = new Cachorro();
    $t = new Tartaruga();
    
    $m->emitirSom();
    $k->emitirSom();
    $c->emitirSom();
    
//    $m->locomover();
//    $c->locomover();
//    $k->locomover();
//    $t->locomover();
    
    
    
//    $m->locomover();
//    $a->locomover();
//    $r->locomover();


//$r->emitirSom();
    
 ?>
</pre>
</html>


