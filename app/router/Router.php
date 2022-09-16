<?php

namespace app\router;

use app\router\routes;

class router extends routes
{

    private $uri;
    private $method;

    public function __construct()
    {


        $this->getURI();
    }

    //Pegar os valores da URI e setar no metodo das rotas para comparar se e existente
    private function getURI()
    {
        $uri = $_SERVER['REQUEST_URI'];

        $uri = $this->uri = explode('/', $uri);

        $this->uri = implode('/', $uri);


        $this->rotas($this->uri);
    }


    // Pegar as rotas e verificar se são de acordo com a URI digitada caso seja chama o metodo para veriicar os controllers
    private function rotas($uri)
    {

        $routes = new routes();

        $routes = $routes->routes();

        

        $router = array_keys($routes); 

        $rota = array_values(array_filter($router));
        
        print_r($rota);
        
        for ($i = 0; $i < UNSET_URI_COUNT; $i++) {

            unset($uri[$i]);
          }

        



        if ($uri === $rota) {


              
              $indicearray = $routes[$rota];

              $indicearray = explode('@',$indicearray);
              
              $controller = $indicearray[0];
              $methodController = $indicearray[1];
            
              $this->VerifyControllers($controller,$methodController);

        } else {

            print "404";
        }
    }


    private function VerifyControllers($controller, $methodController)
    {

         echo  "Você chamaou o controller " . $controller ." é o metodo ". $methodController;
    }
}
