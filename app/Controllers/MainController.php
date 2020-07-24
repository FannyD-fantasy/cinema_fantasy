
<?php

class MainController {

    public function home()
    {
    
        $this->show('index',
        [
            'title'                     =>'welcome',
            'currentNavLink'            =>'index'
        ]
        );
    }
    public function error404()
    {
        // On modifie le status code de la réponse HTTP
        http_response_code(404);
        // header('HTTP/1.1 404 Not Found'); // équivalent

        $this->show('error404', 
        [
            'title' => 'Not found',
            // On invalide le NavLink
            'currentNavLink' => null,
        ]);
    }
    public function show($viewName, $viewVars = [])
    {
        // url absolu vers le dossier public
        $absoluteUrl = $_SERVER['BASE_URI'];
        extract($viewVars); 

        require_once __DIR__.'/../views/head.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}