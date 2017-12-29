<?php
/**
 * 职业管理
 */
class Vocation extends common{
    /**
     * 职业管理列表
     */
    public function vocationList(){
        $list = $this->link->queryAll("select * from vocation");
        $this->template->template_assign("list",$list);
        $this->template->template_display("Vocation/vocationList");
    }
    
    public function add(){
        $this->template->template_display("Vocation/add");
    }
    
    //删除数据
    public function delete(){
        $deleteid = $this->get("deleteId","");
        if($deleteid ==""){
            $this->show(100,"数据不能为空","");
            
        }else{
            $sql = "delete from vocation where id = {$deleteid}";
            $result = $this->link->delete($sql);
            if($result){
                $this->show(200, "删除成功", "");
                
            }else{
                $this->show(100,"删除失败","");
            }
        }
    }
    
    //修改
    public function updata(){
        $id = $this->get("id","");
        $sql = "select * from vocation where id={$id}";
        $result = $this->link->query($sql);
        $this->template->template_assign("info",$result);
        
        $this->template->template_display("Vocation/updata");
    }
    
    //修改数据
    public function updatas(){
        $name = $this->post("name","");
        $engName = $this->post("eng_name","");
        $img = $this->post("url","");
        $id=$this->post("id",0);
        if($name=="" || $engName=="" || $img=="" ||$id<0){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "update vocation set name='{$name}',eng_name='{$engName}',image='{$img}' where id = {$id}";
        $result = $this->link->update($sql);
        if($result){
            $this->show(200,"修改成功","");
        }else{
            $this->show(100,"修改失败","");
        }
    } 

    
    
    //增加数据
    public function insert(){
        $name = $this->post("name","");
        $engName = $this->post("eng_name","");
        $img = $this->post("url","");
        if($name=="" || $engName=="" || $img==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "insert into vocation(name,eng_name,image) values ('{$name}','{$engName}','{$img}');";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200,"添加成功","");
        }else{
            $this->show(100,"添加失败","");
        }
    }
}

