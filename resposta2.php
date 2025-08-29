<?php
class Torcedor
{
    public $nome;
    public $time;
    public $idade;

    // Construtor para inicializar o objeto
    public function __construct($nome, $time, $idade)
    {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $idade;
    }

    // Método para exibir informações
    public function exibir()
    {
        echo "Torcedor: {$this->nome}, {$this->idade}, torce para o {$this->time}<br>";
    }
}

// Criando objetos (instâncias)
$torcedor1 = new Torcedor("Fernando", "Cruzeiro", "35 anos");
$torcedor2 = new Torcedor("Márcio", "Palmeiras", "27 anos");
$torcedor3 = new Torcedor("Bia", "Flamengo", "33 anos");


// Usando métodos
$torcedor1->exibir();
$torcedor2->exibir();
$torcedor3->exibir();
?>