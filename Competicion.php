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
require 'Corredor.php';
class Competicion{

    private $corredor;

    public function __construct(){
        $this->corredor = [];
    }

    public function anadirCorredor($cor){
        $this->corredor += [$cor->getCodigo() => $cor];
    }
    
    public function mostrarCorredores(){
        foreach ($this->corredor as $key => $value) {
            echo "<br>". $key . " --> " . $value->getNombre();
        }
    }

    public function aniadirCarreraACorredor($codigo,$segundos){
        $this->corredor[$codigo]->anadirCarrera($segundos);
     }

    public function tiempMedPriCar(){
        $media = 0;
        foreach ($this->corredor as $codigo => $cor) {
             $media = $media + $cor->getTiempoCar()[0];
        }
        return $media / count($this->corredor);
     }

    public function carMasRap(){
        $carMasRap = [];
        $aux;
        foreach ($this->corredor as $codigo => $cor) {
           $aux = $cor->getTiempoCar();
           for ($i=0; $i < count($aux); $i++) { 
                array_push($carMasRap,$aux[$i]);
           }
        }
        return max($carMasRap);
    } 
}  
?>
</body>
</html>