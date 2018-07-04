<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Aula 14</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 12 de HTML5");
            
            $g = new Gafanhoto("Jubileu", 22, 'M', "juba");
            $g1 = new Gafanhoto("Creuza", 12, 'F', "creuzita");
            
            $vi = new Visualizacao($g, $v[0]);
            $vi->avaliar();
            $vi->avaliarNota(9);
            $vi->avaliarPorcentagem(90);
            
            $vi2 = new Visualizacao($g1, $v[1]);
            $vi2->avaliar();
            $vi2->avaliarNota(10);
            $vi2->avaliarPorcentagem(100);
            
            /*print_r($v);
            print_r($g);
            print_r($g1);*/
            print_r($vi);
            print_r($vi2);
        ?>
        </pre>
    </body>
</html>
