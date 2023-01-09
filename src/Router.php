<?php

namespace Cisco\Sublime;

class Router{

    private $request_uri;
    private $request_method;
    protected $params;
    private $handlers = [];
    public function __construct() {
        $this->request_uri = $_SERVER["REQUEST_URI"];
        $this->request_method=$_SERVER["REQUEST_METHOD"];
        $this->params = [];
        //var_dump($this->request_uri);
    }
    function get(string $url, mixed $handler){
        if ($this->request_uri===$url&&$this->request_method==="GET") {
            $this->handlers[$this->request_method.$url] = [
                "path"=>$this->request_uri,
                "method"=>$this->request_method,
                "rel-path"=>$url,
                "handler"=> $handler,
                "params" => $this->params,
                "query" =>$_GET,
                "body" =>$_POST
            ];
        }
        else{
            $expl_uri = explode("/",parse_url($this->request_uri)["path"]);
            $expl_path = explode("/",$url);
            $this->params = [];
            $patterns = [];

            //foreach ($expl_uri as $key => $value) {
                foreach($expl_path as $pKey => $pValue){
                    if (preg_match('/\:(.*?)\:/', $pValue)) {
                        # code...
                        $expl_path[$pKey] = $expl_uri[$pKey];
                        $this->params[explode(":",$pValue)[1]] = $expl_uri[$pKey];
                    }
                    
                }
                //var_dump($this->params);
               $newpath = implode("/",$expl_path);
               if ($newpath===$this->request_uri&&$this->request_method==="GET") {
                $this->handlers[$this->request_method.$newpath] = [
                    "path"=>$newpath,
                    "method"=>$this->request_method,
                    "rel-path"=>$url,
                    "handler"=> $handler,
                    "params" => $this->params,
                    "query" =>$_GET,
                    "body" =>$_POST
                ];
               }

            //}
            //var_dump($this->params);
            //var_dump(preg_replace('/\:(.*?)\:/',, $url));
        }

    }
    function post(string $url, mixed $handler){
        if ($this->request_uri ===$url&&$this->request_method==="POST") {
            $this->handlers[$this->request_method.$url] = [
                "path"=>$this->request_uri,
                "method"=>$this->request_method,
                "rel-path"=>$url,
                "handler"=> $handler,
                "params" => $this->params,
                "query" =>$_GET,
                "body" =>$_POST
            ];
        }
        else{
            $expl_uri = explode("/",parse_url($this->request_uri)["path"]);
            $expl_path = explode("/",$url);
            $this->params = [];
            $patterns = [];

            //foreach ($expl_uri as $key => $value) {
                foreach($expl_path as $pKey => $pValue){
                    if (preg_match('/\:(.*?)\:/', $pValue)) {
                        # code...
                        $expl_path[$pKey] = $expl_uri[$pKey];
                        $this->params[explode(":",$pValue)[1]] = $expl_uri[$pKey];
                    }
                    
                }
                //var_dump($this->params);
               $newpath = implode("/",$expl_path);
               if ($newpath===$this->request_uri&&$this->request_method==="POST") {
                $this->handlers[$this->request_method.$newpath] = [
                    "path"=>$newpath,
                    "method"=>$this->request_method,
                    "rel-path"=>$url,
                    "handler"=> $handler,
                    "params" => $this->params,
                    "query" =>$_GET,
                    "body" =>$_POST
                ];
               }

            //}
            //var_dump($this->params);
            //var_dump(preg_replace('/\:(.*?)\:/',, $url));
        }
    }
    function delete(string $url, mixed $handler){
        if ($this->request_uri ===$url&&$this->request_method==="DELETE") {
            $this->handlers[$this->request_method.$url] = [
                "path"=>$this->request_uri,
                "method"=>$this->request_method,
                "rel-path"=>$url,
                "handler"=> $handler,
                "params" => $this->params,
                "query" =>$_GET,
                "body" =>$_POST
            ];
        }
        else{
            $expl_uri = explode("/",parse_url($this->request_uri)["path"]);
            $expl_path = explode("/",$url);
            $this->params = [];
            $patterns = [];

            //foreach ($expl_uri as $key => $value) {
                foreach($expl_path as $pKey => $pValue){
                    if (preg_match('/\:(.*?)\:/', $pValue)) {
                        # code...
                        $expl_path[$pKey] = $expl_uri[$pKey];
                        $this->params[explode(":",$pValue)[1]] = $expl_uri[$pKey];
                    }
                    
                }
                //var_dump($this->params);
               $newpath = implode("/",$expl_path);
               if ($newpath===$this->request_uri&&$this->request_method==="DELETE") {
                $this->handlers[$this->request_method.$newpath] = [
                    "path"=>$newpath,
                    "method"=>$this->request_method,
                    "rel-path"=>$url,
                    "handler"=> $handler,
                    "params" => $this->params,
                    "query" =>$_GET,
                    "body" =>$_POST
                ];
               }

            //}
            //var_dump($this->params);
            //var_dump(preg_replace('/\:(.*?)\:/',, $url));
        }
    }
    function put(string $url, mixed $handler){
        if ($this->request_uri ===$url&&$this->request_method==="PUT") {
            # code...
            var_dump($this->request_uri);
        }
        else{
            $expl_uri = explode("/",parse_url($this->request_uri)["path"]);
            $expl_path = explode("/",$url);
            $this->params = [];
            $patterns = [];

            //foreach ($expl_uri as $key => $value) {
                foreach($expl_path as $pKey => $pValue){
                    if (preg_match('/\:(.*?)\:/', $pValue)) {
                        # code...
                        $expl_path[$pKey] = $expl_uri[$pKey];
                        $this->params[explode(":",$pValue)[1]] = $expl_uri[$pKey];
                    }
                    
                }
                //var_dump($this->params);
               
               $newpath = implode("/",$expl_path);
               if ($newpath===$this->request_uri&&$this->request_method==="PUT") {
                $body = [];
                $bodyKey = [];
                $bodyValue = [];
                $getbody = file_get_contents("php://input");
                $explode_body = explode("&",$getbody);
                foreach($explode_body as $key => $fields){
                    $field = explode("=",$fields);
                   $body[$field[0]]=$field[1];
                }
                
                $this->handlers[$this->request_method.$newpath] = [
                    "path"=>$newpath,
                    "method"=>$this->request_method,
                    "rel-path"=>$url,
                    "handler"=> $handler,
                    "params" => $this->params,
                    "query" =>$_GET,
                    "body" =>$body
                ];
               }

            //}
            //var_dump($this->params);
            //var_dump(preg_replace('/\:(.*?)\:/',, $url));
        }
    }
    function run(){
        $callback = null;
        $handler_cp = [];
        foreach ($this->handlers as $key => $value) {
            if ($value["path"]===$this->request_uri && $value["method"]===$this->request_method) {
                array_push($handler_cp, $value);
                $callback = $value["handler"];
            }else{
                $callback = null;
            }
        }

        if(!$callback){
            echo "page not found";
            return;
        }
        

        call_user_func_array($callback,[
            array_merge($handler_cp,$_POST)
        ]);
        
    }
}
