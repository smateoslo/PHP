<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioPHP</title>
</head>
<body>
    <?php

class Corredor{

    private $nombre;
    private $codigo;
    private $tiempoCar;

    function __construct($nombre,$codigo){
        $this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->tiempoCar = [];
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function getTiempoCar(){
        return $this->tiempoCar;
    }

    public function anadirCarrera($segundos){
     try{
        if(count($this->tiempoCar) >= 5){
            throw new Exception ("Has introducido mas de 5 carreras <br>");
        }else if ($segundos < 5) {
            throw new Exception ("Has introducido una carrerar que dura menos de 5 segundos <br>");
        }else{
            array_push($this->tiempoCar, $segundos);
        }
     }catch(Exception $e){
        echo $e->getMessage();
     }   
   }
  
    public function imprimirCarreras(){
            print_r($this->tiempoCar);     
   }

}

/*
$obj1 = new Corredor("Jon","754123895V");
$obj2 = new Corredor("Ivan","454123895V");
$obj3 = new Corredor("Imanol","554123895V");

$obj1->anadirCarrera(50);
$obj1->anadirCarrera(10);
$obj1->anadirCarrera(4);
$obj1->anadirCarrera(3);
$obj1->anadirCarrera(10);
$obj1->anadirCarrera(10);
$obj1->anadirCarrera(10);
$obj1->anadirCarrera(10);

$obj2->anadirCarrera(3);
$obj2->anadirCarrera(10);
$obj2->anadirCarrera(10);

$obj3->anadirCarrera(3);
$obj3->anadirCarrera(10);
$obj3->anadirCarrera(10);

$obj1->imprimirCarreras();
$obj2->imprimirCarreras();
$obj3->imprimirCarreras();
*/
?>
</body>
</html>