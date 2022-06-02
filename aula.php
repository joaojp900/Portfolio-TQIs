<?php



// encapsulamento ou modificador de acesso.(proteger a informaçao)

class Pessoa {

	public $nome = "suellen"; // todo mundo acessa. aparece em todas as partes do cod.
	protected $idade = 48; // so pode ser acessado por quem esta dentro da classe, classe extendida ou quem herda esssa classe
	private $senha = "1234"; // so pode ser acessado por quem esta dentro da classe. herderios nao conseguem acessar

	public function verDados(){ //metdo é pblico

 
  echo $this->nome . "<br/>";
  echo $this->idade ."<br/>";
  echo $this->senha."<br/>";        







	}
}



class programador extends Pessoa{ // heranca de pessoa




	public function verDados(){ //metdo é pblico mas esta em uma classe herdeira

  //echo get_class($this) . "<br/>";


  echo $this->nome . "<br/>";
  echo $this->idade ."<br/>";
  echo $this->senha ."<br/>";        

}


}

$mouse= new programador(); //instanciando

echo $mouse-> nome . "<br/>";



//echo $mouse-> nome . "<br/>";

$mouse-> verDados();

 ?>
