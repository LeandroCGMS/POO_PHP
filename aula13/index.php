<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<h1>
        <?php
           require_once 'Mamifero.php'; 
           require_once 'Lobo.php'; 
           require_once 'Cachorro.php'; 
           $c = new Cachorro();
           $l = new Lobo();
           $m = new Mamifero();
           //$m->emitirSom();
           //$l->emitirSom();
           //$c->emitirSom();
           $c->reagirFrase("Olá");
           $c->reagirFrase("Vai apanhar");
           $c->reagirHora(11, 45);
           $c->reagirHora(21, 00);
           $c->reagirDono(true);
           $c->reagirDono(false);
           $c->reagirIdadePeso(2, 12.5);
           $c->reagirIdadePeso(17, 4.5);
           
        ?>
    </h1>
    </body>
</html>
