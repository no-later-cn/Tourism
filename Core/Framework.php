<?php
namespace Core;
class Framework
{
    public $arr;
//    start： 启动获取url中的数组项目，按照数组进行对象实例化，调用处理方法
    public static function start(){
        $url = explode('/',explode("?",$_SERVER["REQUEST_URI"])[0]);
        if(empty($url[2])){
            $c='indexcontroller';
        }else{

            $c=$url[2].'controller';
        }
        $m = isset($url[3]) ? $url[3] :"index";
        $file = CONTROLLER.$c.'.php';
        if(file_exists($file)){
            require $file;
//            一定要先用命名空间，在判断类是否存在，否则类永远都不存在
            $class_file = "\\App\\controller\\".$c;
            if(class_exists($class_file) && method_exists($class_file,$m)){
                $con = new $class_file();
                $con->$m();
            }else{
                echo $file;
                include VIEW.'template/404.html';
            }
        }else{

            echo $file;
            include VIEW.'template/404.html';
        }
    }
//    display   分装include 函数，如果有数据要导入页面，就将数据展开传出
    function display($file){
        $file = VIEW.$file;
        if(file_exists($file)){
            if(!empty($this->arr)){
                extract($this->arr);
            }
            include $file;
        }else{
            include VIEW.'template/404.html';
        }
    }
//    redirect   变更请求头
    function redirect($url){
        header("Location:/index.php".$url);
    }
//    session   设置session
    function session($k,$v){
        session_start();
        $_SESSION[$k] = $v;
    }
//    assign  传入页面中要导入的数据 给 arr
    function assign($k,$v){
        $this->arr[$k] = $v;
    }
//    json 设置发起请求的格式   然后将转换好格式的数据 发回
    function json($value){
        header("Content-Type:text/json");
        echo json_encode($value);
    }
}