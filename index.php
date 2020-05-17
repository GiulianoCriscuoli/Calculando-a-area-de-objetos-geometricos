<?php




interface Forma {

	public function getTipo();
	public function getArea();
}

class Quadrado implements Forma {
	private float $largura;
	private float $altura;

	public function __construct($x, $y) {

		$this->largura = $x;
		$this->altura = $y;

	}

	public function getTipo() {

		return 'quadrado';
	}

	public function getArea() {

		return $this->largura * $this->altura;
	}

	


}

class Circulo implements Forma {

	private float $raio;


	public function __construct($r) {

		$this->raio = $r;
	}

	public function getTipo() {

		return 'circulo';
	}

	public function getArea() {

		return pi() * ($this->raio * $this->raio);
	}


}

$quadrado = new Quadrado(10,10.5);
$circulo = new Circulo(10);


$objetos =  [

	$quadrado,
	$circulo

];

foreach($objetos as $objeto) {

	echo "Tipo ".$objeto->getTipo().": ".$objeto->getArea()."<br/>";
}