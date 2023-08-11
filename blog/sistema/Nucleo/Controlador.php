<?php 
    namespace sistema\Nucleo;

    use sistema\Suporte\Template;

    class controlador{

    protected Template $template;

    public function __construct(string $diretorio){
        $this->template = new Template($diretorio);
    }
}
?>