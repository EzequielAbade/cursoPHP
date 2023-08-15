<?php 
    namespace sistema\Nucleo;

class utils{
    /** */
    public static function limparNumeros(string $numero){
        return preg_replace("/[^0-9]/", "", $numero);
        
    }
    /** */
    public static function validarCpf (string $cpf) {
        $cpf = self::limparNumeros($cpf);
        if (mb_strlen($cpf) != 11 or preg_match('/(\d)\1(10)/', $cpf)) {
            return false;
        }
        for ($t = 9; $t < 11; $t++){
            for ($d = 0, $c = 0; $c < $t; $c++){
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d){
                return false;
                echo "CPF INVÁLIDO";
            }
        }
        return true;
    }

    /** */
    public static function Slug(string $titulo){

        $valor1['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?¨|;:.,\\\'<>°ºª  ';
        $valor2['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
        $alterado = strtr(mb_convert_encoding($titulo, 'ISO-8859-1', 'UTF-8'), mb_convert_encoding($valor1['a'], 'ISO-8859-1', 'UTF-8'), $valor2['b']);
        $alterado = strip_tags(trim($alterado));
        $alterado = str_replace(" ", '_', $alterado);
        $alterado = str_replace(['_____', '____', '___', '__'], '_', $alterado);
        return strtolower(mb_convert_encoding($alterado, 'ISO-8859-1', 'UTF-8'));
    }

    /** */
    public static function dataAtual(){
        $numeroMes = date('d');
        $diaDaSemana = date('w');
        $mes = date('n');
        $anos = date('Y');

        $nomesDiasDaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira'];
        $nomeDosMeses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', "Maio", 'Junho', "Julho", 'Agosto', 'Setembro', "Outubro", 'Novembro', 'Dezembro'];
        $dataFormatada = $nomesDiasDaSemana[$diaDaSemana] . " " . $numeroMes . ' de ' . $nomeDosMeses[$mes] . ' de ' . $anos;
        return $dataFormatada;
    }

    /** */
    public static function url(string $url = null){
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

        if(str_starts_with($url, '/')){
            return $ambiente . $url;
        }

        return $ambiente . '/' . $url;  
    }

    /** */
    public static function localhost(){
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

        if($servidor == 'localhost'){
            return true;
        }
        return false;
    }

    /**
     * 
     * 
     * 
     */
    public static function validarURL(string $url){
        if (mb_strlen($url) < 10){
            return false;
        } 
        if (!str_contains($url, ".")){
            return false;
        }
        if (str_contains($url, "http://") or str_contains($url, "https://")){
        return true;
        }
    }

    /** */ 
    public static function validarEmail (string $email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /** */
    public static function formatarValor(float $valor){
    return number_format(($valor ? $valor: 0), 2, ',','.'); 
    // if ternario ($valor ? $valor : 0) singifica: Se a variavel valor existir, pega o valor da variavel, se não, pega o valor por padrão 0
    }

    public static function formataNumero(string $numero){
        return number_format(($numero ? $numero: 0), 0, '.', '.');
    }
    
    /**
     * função de contar tempo
     * @param date $agora pega o valor da data atual
     * @param date $tempo pega a data do cliente
     * @param string $diferenca faz a diferença de tempo entre a variavel $agora e a $tempo
     * 
     */
    public static function contarTempo (string $data){
        $agora = strtotime(date("Y-m-d H:i:s"));
        $tempo = strtotime($data);
        echo "<hr>";
        $diferenca = $agora - $tempo;

        $segundos = $diferenca;
        $minutos = round($diferenca / 60);
        $horas = round($diferenca / 3600);
        $dias = round($diferenca / 86400);
        $semanas = round($diferenca / 604800);
        $meses = round($diferenca / 2419200);
        $anos = round($diferenca / 29030400);

        if ($segundos <= 60){
            return 'agora';
        } elseif ($minutos <= 60){
            return $minutos == 1 ? "há 1 minuto" : "há " . $minutos . " minutos";
        } elseif ($horas <= 24){
            return $horas == 1 ? "há 1 hora" : "há " . $horas . " horas";
        } elseif ($dias <= 7) {
            return $dias == 1 ? "há 1 dias" : "há " . $dias . " dias";
        } elseif ($semanas <= 4) {
            return $semanas == 1 ? "há 1 semanas" : "há " . $semanas . " semanas";
        } elseif ($meses <= 12) {
            return $meses == 1 ? "há 1 meses" : "há " . $meses . " meses";
        } else {
            return $anos == 1 ? "há 1 anos" : "há " . $anos . " anos";
        }
    }
    
    /**
    * função de saudação
    * @param date $hora hora do sistema
    *
    */
    public static function saudacao(){
        
        $hora = date("H");
        
        if ($hora >= 6 && $hora < 12){
            echo "Bom dia!";
        } elseif ($hora >= 12 && $hora < 18) {
            echo "Boa tarde!";  
        } elseif ($hora >= 18 && $hora < 23 ){
            echo "Boa noite!";
        } else {
            echo "Boa madrugada!";
        }
        return;
    }

    /**
     * função de resumir texto
     * @param string $texto texto a ser resumido
     * @param int $limite quantidade de caracteres
     * @param string $continue opcional o que deve ser exibido no final como resumo
     * @return string $resumirTexto retorna o texto resumido
     */

    public static function resumirTexto(string $texto, int $limite, string $continue = "...") {
        $textoLimpo = trim(strip_tags($texto));
        if(mb_strlen($textoLimpo) <= $limite){
            return $textoLimpo;
        }
        $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));
        return $resumirTexto . $continue;
    }
}
    

?>