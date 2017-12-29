<?php

/**
 * 道具管理
 */
class mingwen extends common{
    /**
     * 职业管理列表
     */
    public function mingwenList(){
        $list = $this->link->queryAll("select * from mingwen");
        $this->template->template_assign("list",$list);
        $this->template->template_display("mingwen/mingwenList");
    }
    
       
    public function add(){
        $this->template->template_display("mingwen/add");
    }
    //删除数据
    public function delete(){
        $deleteid = $this->get("deleteId","");
        if($deleteid ==""){
            $this->show(100,"数据不能为空","");
            
        }else{
            $sql = "delete from mingwen where id = {$deleteid}";
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
        $sql = "select * from mingwen where id={$id}";
        $result = $this->link->query($sql);
        $this->template->template_assign("info",$result);
        
        $this->template->template_display("mingwen/updata");
    }
    
    //修改数据
    public function updatas(){
        $name = $this->post("name","");
        $miaosu = $this->post("miaosu","");
        $img = $this->post("url","");
        $id=$this->post("id",0);
       if($name=="" || $miaosu=="" || $img==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "update mingwen set name='{$name}',image='{$img}',miaosu='{$miaosu}' where id = {$id}";
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
        $miaosu = $this->post("miaosu","");
        $img = $this->post("url","");
        if($name=="" || $miaosu=="" || $img==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "insert into mingwen (name,image,miaosu) values ('{$name}','{$img}','{$miaosu}');";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200,"添加成功","");
        }else{
            $this->show(100,"添加失败","");
        }
    }
}



