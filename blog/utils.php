<?php

    function formatarValor(float $valor){
    return number_format(($valor ? $valor: 0), 2, ',','.');
    // if ternario ($valor ? $valor : 0) singifica: Se a variavel valor existir, pega o valor da variavel, se não, pega o valor por padrão 0
    }

    function formataNumero(string $numero){
        return number_format($numero ? $numero: 0, 0, '.', '.');
    }

    function contarTempo (string $data){
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
            return $minutos == 1 ? "há 1 minuto" : "há" . $minutos . "minutos";
        } elseif ($horas <= 24){
            return $horas == 1 ? "há 1 hora" : "há" . $horas . "horas";
        } elseif ($dias <= 7) {
            return $dias == 1 ? "há 1 dias" : "há" . $dias . "dias";
        } elseif ($semanas <= 4) {
            return $semanas == 1 ? "há 1 semanas" : "há" . $semanas . "semanas";
        } elseif ($meses <= 12) {
            return $meses == 1 ? "há 1 meses" : "há" . $meses . "meses";
        } elseif ($anos <= 1) {
            return $anos == 1 ? "há 1 anos" : "há" . $anos . "anos";
        }
    }
    
    /**
    * Função da saudacao
    * @param date $hora hora do sistema
    */
    function saudacao(){
        date_default_timezone_set("America/Manaus");
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

    function resumirTexto(string $texto, int $limite, string $continue = "...") {
        $textoLimpo = trim(strip_tags($texto));
        if(mb_strlen($textoLimpo) <= $limite){
            return $textoLimpo;
        }
        $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));
        return $resumirTexto . $continue;
    }

    
?>