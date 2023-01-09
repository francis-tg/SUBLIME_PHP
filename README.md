# MINI FRAMEWORK SUBLIME PHP

```
<?php
require_once "./vendor/autoload.php";

use Cisco\Sublime\Router;
use Cisco\Sublime\Page;
use Cisco\Sublime\Template;
$router = new Router();

$router->get("/:id:",function(){
    $page = new Page();
    $user = ["name"=>"cisco dev"];
    Template::view("index", $user);
});

$router->post("/user/add/",function($request){
    var_dump($request);
});

$router->put("/user/edit/:id:",function($request){
    var_dump($request);
});
$router->delete("/user/:id:",function($request){
    var_dump($request);
});

$router->run();
```