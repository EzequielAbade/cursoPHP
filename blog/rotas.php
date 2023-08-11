<?php 
    use Peece\SimpleRouter\SimpleRouter;
    SimpleRouter::setDefaultNamespace('sistema\Controlador');
    SimpleRouter::get('blog/', 'siteControlador@index');
    SimpleRouter::start();

?>