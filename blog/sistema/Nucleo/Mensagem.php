<?php 
    namespace sistema\Nucleo\Mensagem;

    /** */
    class Mensagem 
    {
        private $texto;
        private $css;

        /** */
        public function sucesso(string $mensagem) {
            $this->css = 'alert alert-success';
            $this->texto = $this->filtrar($mensagem);
            return $this;
            
        }
        /** */
        public function erro(string $mensagem) {
            $this->css = 'alert alert-danger';
            $this->texto = $this->filtrar($mensagem);
            return $this;
            
        }
        /** */
        public function alerta(string $mensagem) {
            $this->css = 'alert alert-warning';
            $this->texto = $this->filtrar($mensagem);
            return $this;
            
        }
        /** */
        public function informa(string $mensagem) {
            $this->css = 'alert alert-info';
            $this->texto = $this->filtrar($mensagem);
            return $this;
            
        }
         
        /** */
        public function renderizar() {
            return "<div class='{$this->css}'>{$this->texto}</div>";
        }
        /** */
        private function filtrar(string $mensagem){
            return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
    }

?>