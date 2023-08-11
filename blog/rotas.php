<?php 
    use Pecee\SimpleRouter\SimpleRouter;
    SimpleRouter::setDefaultNamespace('sistema\Controlador');
    SimpleRouter::get(URL_SITE . 'index', 'siteControlador@index');
    SimpleRouter::get(URL_SITE . 'sobre-nos', 'siteControlador@sobre');
    SimpleRouter::start();

?>