<?php 
    namespace sistema\Controlador;

    use sistema\Nucleo\Controlador;
   
    
    class siteControlador extends Controlador
    {
        public function __construct()
        {
            parent::__construct('templates/site/views/');
        }
        public function index(){
            echo $this->template->renderizar('index.html', [
                'titulo' => 'Teste de titulo index',
                'subtitulo' => 'teste de subtitulo index'
            ]);
        }

        public function sobre(){
            echo $this->template->renderizar('sobre.html', [
                'titulo' => 'Teste de titulo sobre',
                'subtitulo' => 'teste de sobre'
            ]);
        }
    }
?>