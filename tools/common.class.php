<?php
//require './mysqlDB.class.php';
class common{
//    @param int $code 错误码
//    @param string $message 提示信息
//    @param string $返回json处理结果
//    @param array $data 返回数据   
    protected  $link;
    protected  $template;
    public function __construct() {
       $this->link = mysqlDB::getIntance("wangzherongyao");
       $this->template = new template();
       
       $actionName = array("login","checkLogin");
       if(!in_array(ACTION, $actionName)){
           $this->checkLoginInfo();
       }
       
   }
    public function  json($code,$message,$data){
        $code = (int)$code;
        $message = (string)$message;
        $data =(array)$data;
        $result = array(
            "code"=>$code,
            "message"=>$message,
            "data"=>$data
        );
        return json_encode($result);
    }
    
    
    
    public function show($code,$message,$data){
        echo $this->json($code, $message, $data);
        exit();
    }
    /**
     * @param string $name:接收数据
     * @param string $value 默认值
     * @return 返回值
     */
    //封装获取值get
    public function  get($name,$value=""){
        return isset($_GET[$name])?$_GET[$name]:$value;
    }
    /**post
     * @param string $name:接收数据
     * @param string $value 默认值
     * @return 返回值
     */
    public function  post($name,$value=""){
        return isset($_POST[$name])?$_POST[$name]:$value;
    }
    
    
    
    public function checkLoginInfo(){
        
        if(!isset($_COOKIE["admin_id"])){
            $this->tiaozhuan("index.php?class=Admin&action=login");
        }else{
            $id = $_COOKIE["admin_id"];
            $sql = "select * from admin where admin_id={$id} and admin_status=1";
            if($this->link->query($sql) ==null){
                //跳转登录
            $this->tiaozhuan("index.php?class=Admin&action=login");
 
            }
        }
    }
    
    
    public function tiaozhuan($url,$msg=""){
        if($msg==""){
            echo "<script>window.location.href='{$url}';</script>";
        }else{
           echo "<script>alert('{$mag}');window.location.href='{$url}';</script>"; 
        }
    }
}
