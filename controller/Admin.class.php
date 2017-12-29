<?php
/**
 * 管理员管理的操作类
 */
class Admin extends common{
    
    public function index(){
         //引用index.tpl  admin.class->common.class->template.class;
        $this->template->template_display("Admin/index");
    }
    
    
    public function login(){
        $this->template->template_display("Admin/login");
    }
    
    
    
    
    //登录
    public function checkLogin(){
        $name = $this->get("name","");
        $pwd = $this->get("pwd","");
        if($name=="" ||$pwd ==""){
            $this->show(101, "信息填写不完整", "");
            
        }
        $pwd= md5($pwd);
        $sql = "select * from admin where admin_name='{$name}' and admin_pwd='{$pwd}'";
        $result = $this->link->query($sql);
        if($result ==null){
            $this->show(102, "用户名或密码错误", "");
        }
        
        if($result["admin_status"]==2){
            $this->show(103, "管理账号禁止登录", "");
        }
        setcookie("admin_id", $result["admin_id"],time()+60*60*24,"/");
        setcookie("admin_name", $result["admin_name"],time()+60*60*24,"/");
        $this->show(200, "登陆成功", $result);
    }
    
    
    
    
    
    
    //添加管理员
    public function add(){
        $name = $this->post("name","");
        $pwd = $this->post("pwd","");
        if($name=="" ||$pwd ==""){
            $this->show(100, "用户名或密码不能为空", "");
        }
        
        $sql = "select count(*) as num from admin where admin_name='{$name}'";
        $num = $this->link->query($sql);
        if($num["num"] > 0){
            $this->show(101, "用户名已存在", $num);
        }
        
        
        $pwd= md5($pwd);
        $sql = "insert into admin (admin_name,admin_pwd,admin_time,admin_status)value('$name','$pwd','".time()."',1);";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200, "添加成功", $result);
        }
        else{
            $this->show(102, "添加失败", "");
        }
        
        
    }
    public function reset(){
        $resetid = isset($_GET["resetid"])?$_GET["resetid"]:0;
        $pwd=123456;
        $pwds = md5($pwd);
        $sql = "update admin set admin_pwd='{$pwds}' where admin_id={$resetid}";
        $result = $this->link->update($sql);
        if($result){
            $this->show(200, "修改成功", "");
        }else{
            $this->show(100, "修改失败", "");
        }
    }
    
    
    
    public function delete(){
        $adminid = isset($_GET["adminid"])?$_GET["adminid"]:"";
        $sql = "delete from admin where admin_id={$adminid}";
        $result = $this->link->delete($sql);
        if($result){
            $this->show(200, "删除成功", $result);
        }else{
            $this->show(100, "删除失败", "");
        }
    }
    public function openorclose(){
        $opcl = isset($_GET["opclid"])?$_GET["opclid"]:"";
        $len = strlen($opcl);
        $admin_id = substr($opcl, 0,$len-1);
        $admin_status = substr($opcl,$len-1,1);
        if($admin_status ==1){
           $sql = "update admin set admin_status='2' where admin_id={$admin_id}"; 
        }else{
            $sql = "update admin set admin_status='1' where admin_id={$admin_id}"; 
        }
        $result = $this->link->update($sql);
        if($result){
             $this->show(200, "修改成功", $result);
        }else{
            $this->show(100, "修改失败", "");
        }
       
    }
    
    
    
    public function update(){
        
    }
    public function adminList(){
        $sql = "select * from admin";
        $list = $this->link->queryAll($sql);
        $this->template->template_assign("adminList",$list);
        $this->template->template_display("Admin/adminList");
    }
}
