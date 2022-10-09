<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competicion</title>
</head>
<body>
    <?php
    require_once 'Competicion.php';

        echo "Introduzco mas de 5 carreras y una carrera que dura menos de 5seg: <br> ";
        echo "<br>";

        $participante1 = new Corredor("Jon",754123895);
        $participante1->anadirCarrera(7);
        $participante1->anadirCarrera(9);
        $participante1->anadirCarrera(3);
        $participante1->anadirCarrera(30);
        $participante1->anadirCarrera(20);
        $participante1->anadirCarrera(12);
        $participante1->anadirCarrera(12);

        $participante2 = new Corredor("Ivan",454123895);
        $participante2->anadirCarrera(6);
        $participante2->anadirCarrera(30);
        $participante2->anadirCarrera(20);
        $participante2->anadirCarrera(12);

        $participante3 = new Corredor("Imanol",554123895);
        $participante3->anadirCarrera(10);
        $participante3->anadirCarrera(10);
        $participante3->anadirCarrera(33);
        $participante3->anadirCarrera(11);

        $competicion1 = new Competicion();
        $competicion1->anadirCorredor($participante1);
        $competicion1->anadirCorredor($participante2);
        $competicion1->anadirCorredor($participante3);


        echo "<br><br>";
        echo "Muestro las carreras del primer participante: <br> ";
        echo "<br>";
        $participante1->imprimirCarreras();


        echo "<br><br><br>";
        echo "Muestro los nombres y los codigos de los participantes en la primera competicion: <br> ";
        $competicion1->mostrarCorredores();


        echo "<br><br>";
        echo "Muestro la media de la primera carrera: ".$competicion1->tiempMedPriCar();


        echo "<br><br>";
        echo "Muestro la carrera mas rapida: ".$competicion1->carMasRap() ;


        echo "<br><br>";
        
?>
</body>
</html>