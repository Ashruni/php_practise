 <!-- HIS IS COMPLETING ROUTING WHY DONT WE MOVE TO A DEDICATED FILE NAMED ROUTER  -->
 <?php
$heading = "welcome back to Home";
// require 'functions.php';
// PARSING OF URI
$uri= parse_url($_SERVER['REQUEST_URI'])['path'];
// dd($uri);

// DECLARATION OF ROUTES
 $routes=[
    '/'=>'controllers/index.php',
    '/about'=>'controllers/about.php',
    '/contact'=>'controllers/contact.php',
 ];

// what if you need a different error to show in the browser 
// like 500 ou can use the below code
// function abort($code){
//     http_response_code($code);
//     require 'views/{$code}.php';
//     if you need to do something to call like this in the u will require $code.php page
//     die();
// }


//  if(array_key_exists($uri,$routes)){
//     require $routes[$uri];
//  }
//  else{
    
//     // instead of the below code ou can place a function abort() and call it 
//     // http_response_code(404);
//     // require 'views/404.html';
//     // die();
//     abort();
//  }
// FUNCTION TO ROUTE TO URI
function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
     }
     else{
        
        abort();
     }   
}
routeToController($uri,$routes);
// ABORTING 
function abort(){
    http_response_code(404);
    require 'views/404.php';
    die();
}
