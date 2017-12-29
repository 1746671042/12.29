<?php 
/**
 * 管理员管理的操作类
 */
class User extends common{
    
    public function index(){
         //引用index.tpl  admin.class->common.class->template.class;
        $this->template->template_display("user/UserList");
    }
    
    
    public function login(){
        $this->template->template_display("User/userList");
    }

    public function updata(){
        $fenghaoId = isset($_GET["deleteId"])?$_GET["deleteId"]:"";
        $status = isset($_GET["status"])?$_GET["status"]:""; 
        if($status ==1){
            $sql = "update user set is_show =2 where id={$fenghaoId}";
        }else{
            $sql = "update user set is_show =1 where id={$fenghaoId}";
        }
        $result = $this->link->update($sql);
        if($result){
             $this->show(200, "修改成功", $result);
        }else{
            $this->show(100, "修改失败", "");
        }
       
    }
    

    public function userList(){
        $sql = "select * from user";
        $list = $this->link->queryAll($sql);
        $this->template->template_assign("userList",$list);
        $this->template->template_display("User/Userlist");
    }
}
