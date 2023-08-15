<?php 
    namespace sistema\Nucleo;

    use sistema\Suporte\Template;
    try {
        class controlador{
    
            protected Template $template;
        
            public function __construct(string $diretorio){
                $this->template = new Template($diretorio);
            }
        }
    } catch (\Throwable $erro) {
        echo $erro->getMessage();
    }
    
?>