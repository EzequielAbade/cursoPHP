<?php 
    namespace sistema\Suporte;
    use Twig\Lexer;
    use sistema\Nucleo\utils;


    class Template
    {
        private \Twig\Environment $twig;

        public function __construct(string $diretorio)
        {
            $loader = new \Twig\Loader\FilesystemLoader ($diretorio);
            $this->twig = new \Twig\Environment($loader);

            $lexer = new Lexer($this->twig, array($this->helpers()));
            $this->twig->setLexer($lexer);
        }
        public function renderizar(string $view, array $dados)
        {
            return $this->twig->render($view, $dados);
        }

        private function helpers()
        {
            array($this->twig->addFunction(new \Twig\TwigFunction('url', function (string $url = null){
                return utils::url($url);
            })),
                $this->twig->addFunction(new \Twig\TwigFunction('saudacao', function () {
                    return utils::saudacao();
                })),
                $this->twig->addFunction(new \Twig\TwigFunction('resumirTexto', function (string $texto, int $limite) {
                    return utils::resumirTexto($texto, $limite);
                }))
            );
        }
    }
?>