<?php

namespace App\Controllers;

class BaseController {
    
    private $router;

    function __construct($router)
    {
        $this->router = $router;
    }
    
    protected function show($viewName, $viewVars = array())
    {

        $router = $this->router;//J'ai besoin du routeur pour mes templates
        
        //$footerBrands = \App\Models\Brand::findFooterBrands();

        // $viewVars est disponible dans chaque fichier de vue
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}