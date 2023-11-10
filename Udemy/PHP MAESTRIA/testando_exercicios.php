<?php 

// Crie um arquivo PHP
// Teste a expressão "5"*12;
// Utilize a função gettype() com o resultado como parâmetro para checar o tipo resultante da operação

$valor = "5" * 12;
echo gettype($valor);
echo "<br>";
// Exercicio 17
// Verifique as seguintes operações com AND;
// 15 > 5 and "João" === "João"
// "teste" > 5 and 1
// 2 == 3 and 5 >= 3

if (15 > 5 and "João" === 'João'){
    echo "Teste 1 é true";
}
if ("teste" > 5 and 1){
    echo "Teste 2 é true";
}
if (2 == 3 and 5 >= 3){
    echo "Teste 3 é true";
}
echo "<br>";

// exercicio 20
// Atribua dois números a variáveis distintas
// faça uma comparação de menor ou igual com o operador ternário
// Imprima resultados para ambas as possibilidades
$a = 45;
$b = 50;

$c = $a > $b ? "a é maior que B" : "b é maior que a"; 
echo $c;
echo "<br>";

//Exercicio 26
// Crie uma variavel que recebe uma velocidade de um carro
// Depois crie uma estrutura if que verifica essa velocidade
// se a velocidade for menor que 40, imprima que o motorista está na velocidade correta.
// se igual a 40, imprima uma mensagem para o motorista tomar cuidado
// se for maior de 40, imprima uma mensagem de multa

$velocidade_Carro = 50;
if ($velocidade_Carro < 40){
    echo "Está na velocidade correta";
} else if ($velocidade_Carro == 40){
    echo "Tome cuidado com a velocidade!";
} else {
    echo "Foi multado por está andando acima da velocidade permitida";
}

/* 
Escreva uma função chamada compararNumeros que recebe dois números inteiros como parâmetros.

A função deve comparar os dois números e retornar uma string indicando qual número é maior ou se são iguais.

Considere as seguintes condições:

Se o primeiro número for maior que o segundo número, retorne a string "O primeiro número é maior."

Se o segundo número for maior que o primeiro número, retorne a string "O segundo número é maior."

Se os números forem iguais, retorne a string "Os números são iguais."
*/


function compararNumeros (int $valor1, int $valor2) {
  if ($valor1 > $valor2) {
    echo "O primeiro número é maior.";
  } else if ($valor1 < $valor2){
    echo "O segundo número é maior";  
  } 
  else {
    echo "Os números são iguais";
  }
}
 
echo compararNumeros(50, 50);
echo "<br>";

/*
Escreva uma função chamada verificarAcesso que recebe dois parâmetros: um número inteiro representando a idade de uma pessoa e um booleano indicando se a pessoa possui autorização de acesso.

A função deve retornar uma string indicando se a pessoa pode ou não ter acesso a um determinado local.

Considere as seguintes condições:

Se a idade for maior ou igual a 18 anos e a autorização for verdadeira, retorne a string "Acesso autorizado".

Se a idade for menor que 18 anos, retorne a string "Acesso negado. Idade mínima requerida: 18 anos".

Se a idade for maior ou igual a 18 anos, mas a autorização for falsa, retorne a string "Acesso negado. Autorização necessária".
*/

function verificarAcesso ( int $idade, $verificador) {
    if ($idade > 18 && $verificador == true) {
        echo "Acesso autorizado";
    } else if ($idade < 18) {
        echo "Acesso negado. Idade mínima requerida: 18 anos";
    } else if ($idade >= 18 && $verificador == false) {
        echo "Acesso negado. Autorização necessária.";
    }
}

verificarAcesso(18, false);
echo "<br>";
/*
Escreva uma função chamada calcularDesconto que recebe dois parâmetros: o valor de um produto e uma categoria.

A função deve retornar o valor do produto com o desconto aplicado, de acordo com a categoria.

Considere as seguintes categorias e seus respectivos descontos:

"eletrônicos": 10% de desconto.

"vestuário": 20% de desconto.

"alimentos": 5% de desconto.

Outras categorias: nenhum desconto.

Se a categoria for desconhecida ou não estiver listada acima, o desconto será zero.

O valor do produto e a categoria serão sempre fornecidos como argumentos da função.
*/

function calcularDesconto (int $value, string $category) {
    if ($category == "eletrônicos"){
        $resultado1 = $value * (10 / 100);
        $valorfinal1 = $value - $resultado1;
        echo "O valor do seu produto ficou $valorfinal1 com o desconto de: $resultado1 na categoria eletrônicos";
    } else if ($category == "vestuário") {
        $resultado2 = $value * (20 / 100);
        $valorfinal1 = $value - $resultado2;
        echo "O valor do seu produto ficou $valorfinal1 com o desconto de: $resultado2 na categoria vestuário";
    } else if ($category == "alimentos"){
        $resultado3 = $value * (5 / 100);
        $valorfinal1 = $value - $resultado3;
        echo $resultado3;
        echo "O valor do seu produto ficou $valorfinal1 com o desconto de: $resultado3 na categoria alimentos";
    }
}

echo calcularDesconto(100, "vestuário");
echo "<br>";

// crie um array com 10 valores de tipos de dados diferentes
// faça um loop while para exibir apenas os dados que são strings

$array = [15, 47, 58, 72, "Abade", "julia", "ezequiel", "antonio", 45, "terza"];
$contador1 = count($array);
$contador2 = 0;

while ($contador1 < $contador2){
   if (is_string($array[$contador2])) {
    echo $array[$contador2];
   }
   $contador2++;
}
// crie um loop que vai até o número 30
// o contador deve iniciar com 4
// faça incrementos de 2 em 2 no contador
// utilize o break para parar o loop quando chegar no numero 24

$quantidade = 30;
$contador = 4;

while ($contador < $quantidade){
    echo "A contagem está em: $contador" . "<br>";
    if ($contador == 24){
        echo "A contagem chegou a: $contador ";
        break;
    }
    $contador += 2;
}
/*
Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.

*/

function sumEvenNumbers(int $numero) {
        // Inicialize uma variável para acumular a soma
        $soma = 0;
    
        // Use um loop para percorrer os números de 1 até o número fornecido
        for ($i = 1; $i <= $numero; $i++) {
            // Verifique se o número atual é par
            if ($i % 2 === 0) {
                // Se for par, adicione-o à soma
                $soma += $i;
            }
        }
    
        // Retorne o resultado da soma
        return $soma;
    }
    
    // Exemplo de uso da função
    $numeroFornecido = 10; // Substitua pelo número desejado
    $resultado = sumEvenNumbers($numeroFornecido);
    echo "A soma dos números pares de 1 até $numeroFornecido é: $resultado";
    echo "<br>";
    $str = "O rato roeu a roupa do rei de Roma";
    for( $x = 0; $x < strlen($str); $x++){
        $contador = 0;
        if($str[$x] == "a"){ 
            $contador++;
            $aumentado = $str[$x];
            echo "$aumentado <br>";
            echo "$contador";
           
        }
        
    }
    echo "<br>";
    $frase = "Cadê o meu queijo? Ele estava aqui em cima, queijo?";
    $queijo = substr($frase, 12, 6);
    echo $queijo;
    echo "<br>";
    echo strrev($frase);
    echo "<br>";
    echo str_repeat($frase, 2);
    echo "<br>";
    $frasearray = explode(" ", $frase);
    print_r($frasearray);
    echo "<br>";
    $arrayparastring = implode(" ", $frasearray);
    echo $arrayparastring;
    echo "<br>";
    echo strpos($frase, "queijo");
    echo "<br>";
    echo strrpos($frase, "queijo");
    echo "<br>";
    echo strstr($frase, "queijo");
    echo "<br>";
    $url = "https://www.google.com.br";
    $arrayurl = parse_url($url);
    print_r($arrayurl);
    echo "<br>";
    $url1 = "http://www.horadecodar.com.br/?busca=php";
    $arrayurl1 = parse_url($url1);
    print_r($arrayurl1);
    echo "<br>";
    $url2 = "http://www.horadecodar.com.br/usuarios/ezequielabade?id=24&nome=Ezequiel";
    $arrayurl2 = parse_url($url2);
    print_r($arrayurl2);
    echo "<br>";

    //Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, teto solar, automático;
    // chame este array de carro
    // crie variáveis com base neste array
    $carro = ["jaguar", 3.0, "azul", 18, "Teto Solar", "automático"];
    list($modelo, $forcamotor, $cor, $aro, $teto, $cambio) = $carro;
    echo $forcamotor . "<br>";
    echo $cor . "<br>";
    echo $aro . "<br>";
    echo $teto . "<br>";
    echo $cambio . "<br>";

    foreach ($carro as $itens) {
        echo "$itens" . "<br>";
    }
    foreach ($carro as $modelo => $value){
        echo "$modelo" . "<br>";
    }

    class Pessoa{
        public $nome = "Abade";
        public $idade = "23";
        function andar (){
            echo " estou andando.";
        }
    }

    $ezequiel = new Pessoa;
    $ezequiel->nome;
    $ezequiel->idade = 24;
    echo "o nome dele é $ezequiel->nome e a idade é: $ezequiel->idade, e" ;
    $ezequiel->andar() ;
    echo "<br>";
    class Calculadora{
        function somar($a, $b){
            $soma = $a + $b;
            return $soma;
        }
        function subtrair($a, $b){
            $subtrai = $a - $b;
            return $subtrai;
        } 
        function multiplicar($a, $b){
            $multiplica = $a * $b;
            return $multiplica;
        } 
        function dividir($a, $b){
            $divide = $a / $b;
            return $divide;
        }
        
    }

    $calculo = new Calculadora;
    echo $calculo->somar(5,5);
    echo $calculo->subtrair(5,5);
    echo $calculo->multiplicar(5,5);
    echo $calculo->dividir(5,5);

/*Crie uma classe chamada Task que represente uma tarefa.

A classe Task deve ter os seguintes atributos:

title: título da tarefa.

description: descrição da tarefa.

completed: indica se a tarefa está concluída ou não.

A classe Task deve ter os seguintes métodos:

markAsCompleted(): marca a tarefa como concluída.

markAsIncomplete(): marca a tarefa como não concluída.

getTitle(): retorna o título da tarefa.

getDescription(): retorna a descrição da tarefa.

isCompleted(): retorna um booleano indicando se a tarefa está concluída ou não.*/

class Task {
    private $title;
    private $description;
    private $completed;

    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    public function markAsCompleted() {
        $this->completed = true;
    }

    public function markAsIncomplete() {
        $this->completed = false;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function isCompleted() {
        return $this->completed;
    }
}

$minhaTarefa = new Task("Comprar mantimentos", "Ir ao supermercado e comprar itens essenciais.");
echo "Título: " . $minhaTarefa->getTitle() . "\n";
echo "Descrição: " . $minhaTarefa->getDescription() . "\n";
echo "Concluída: " . ($minhaTarefa->isCompleted() ? "Sim" : "Não") . "\n";

$minhaTarefa->markAsCompleted();
echo "Concluída: " . ($minhaTarefa->isCompleted() ? "Sim" : "Não") . "\n";

/*
Crie uma classe chamada Contact que represente um contato.

A classe Contact deve ter os seguintes atributos:

name: nome do contato.

email: endereço de e-mail do contato.

phone: número de telefone do contato.

A classe Contact deve ter os seguintes métodos:

getName(): retorna o nome do contato.

getEmail(): retorna o endereço de e-mail do contato.

getPhone(): retorna o número de telefone do contato.

setEmail($email): atualiza o endereço de e-mail do contato.

setPhone($phone): atualiza o número de telefone do contato.
*/
class Contact {
    private $name;
    private $email;
    private $phone;

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function setPhone($phone) {
      $this->phone = $phone;
    }
}

/*Crie uma classe chamada Passenger que represente um passageiro.

A classe Passenger deve ter os seguintes atributos:

name: nome do passageiro.

age: idade do passageiro.

seatNumber: número do assento do passageiro.

A classe Passenger deve ter os seguintes métodos:

getName(): retorna o nome do passageiro.

getAge(): retorna a idade do passageiro.

getSeatNumber(): retorna o número do assento do passageiro.

setSeatNumber($seatNumber): atualiza o número do assento do passageiro.*/
echo "<br>";
Class Passenger {
    public $name = "Maria";
    public $age = "30";
    public $seatNumber = "A12";

    function getName() {
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }
    
    function getSeatNumber(){
        return $this->seatNumber;
    }

    function setSeatNumber($seatNumber){
        $this->$seatNumber = $seatNumber;
    }
}
$assento = new Passenger;
$assento->setSeatNumber("B5");
?>


   
    
    



