<?php

namespace Cisco\Sublime;

class Page
{
    private $view_root = "../../views/";
    public function __construct() {
        
    }
    public function view(string $filename,array $data){
        $files = explode('.',$filename);
        if(count($files)>1){
            ob_start();
            extract($data);
            $dir_name =  __DIR__.$this->view_root.implode(DIRECTORY_SEPARATOR, $files).".sublime.php";
            include $dir_name;
            return ob_get_clean();
        }else{
            ob_start();
            extract($data);
            $dir_name =  __DIR__.$this->view_root.implode(DIRECTORY_SEPARATOR, $files).".sublime.php";
            include $dir_name;
            return ob_flush();
        }
    }
}