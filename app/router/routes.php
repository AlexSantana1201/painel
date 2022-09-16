<?php

namespace app\router;

class routes{
    
public function routes(){
    
    return $routes = [
    
        '/index' => 'HomeController@index',
        '/contact' => 'ContactController@Show'
    
    
    ];


}


}



    
    


