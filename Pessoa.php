<?php 
	class Pessoa{
		private $idade;
		private $nome;
		private $sobrenome;
	
	public function setIdade($newval){
		$this->idade = $newval;
	}
	public function setNome($newval){
		$this->nome = $newval;
	}
	public function setSobreNome($newval){
		$this->sobrenome = $newval;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getSobreNome(){
		return $this->sobrenome;
	}
		public function __construct($idade, $nome, $sobrenome){
			//echo "A classe ".__CLASS__." foi instanciada ";
			$this->idade = $idade;
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
		}
		public function __toString(){
			$resultado =
			"Idade: ".$this->idade."<br>".
			"Nome: ".$this->nome."<br>".
			"sobrenome: ".$this->sobrenome."<br>";
			return $resultado; 
		}
}
?>