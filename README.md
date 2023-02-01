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
HTML
Copy
{% extends layout.html %}

{% block title %}{{ $title }}{% endblock %}

{% block content %}
<h1>Home</h1>
<p>Welcome to the home page, list of colors:</p>
<ul>
    {% foreach($colors as $color): %}
    <li>{{ $color }}</li>
    {% endforeach; %}
</ul>
{% endblock %}
What if we want to secure our output? Instead of:

{{ $output }}
Do:

{{{ $output }}}
This will escape the output using the htmlspecialchars function.

Extend blocks:

HTML
Copy
{% block content %}
@parent
<p>Extends content block!</p>
{% endblock %}
Include additional template files:

HTML
Copy
{% include forms.html %}
If we want to remove all the compiled files we can either delete all the files in the cache directory or execute the following code:

PHP
Copy
Template::clearCache();
