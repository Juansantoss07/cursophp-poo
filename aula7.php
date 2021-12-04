<?php 
//CLASSES ABSTRATAS - ABSTRAÇÃO

/*Classes abstratas são classes que servem como modelo para outras classes...
Por exemplo, quando criamos a classe Veiculos na aula passada e depois criamos a classe Carros usando extend (uma herança) da classe Veiculos. No caso, a classe Veiculos serviu como modelo para a classe Carros, portanto ela é uma class abstract.

Podemos declarar uma class como abstrata colocando a palavra Abstract antes de iniciar a classe, Porém, dessa forma ela vai servir somente como modelo e não podemos mais estanciar essa classe. veja o exemplo abaixo: 
*/

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }

   abstract protected function Sacar($s);

    abstract protected function Depositar($d);
}

class Itau extends Banco{
    
    public function Sacar($s){
        $this->saldo -= $s;
        echo " <br><hr> Sacou: ".$s;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "<br><hr> Depositou: ".$d;
    }
}

$itau = new Itau();
$itau->setSaldo(4312);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(249);
echo "<hr> Saldo Atual: ".$itau->getSaldo();
$itau->Depositar(300);
echo "<hr> Saldo Atual: ".$itau->getSaldo();
?>