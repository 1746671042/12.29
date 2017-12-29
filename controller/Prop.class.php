<?php

/**
 * 道具管理
 */
class Prop extends common{
    /**
     * 职业管理列表
     */
    public function propList(){
        $list = $this->link->queryAll("select * from prop");
        $this->template->template_assign("list",$list);
        $this->template->template_display("Prop/prop");
    }
    
       
    public function add(){
        $this->template->template_display("Prop/add");
    }
    //删除数据
    public function delete(){
        $deleteid = $this->get("deleteId","");
        if($deleteid ==""){
            $this->show(100,"数据不能为空","");
            
        }else{
            $sql = "delete from prop where id = {$deleteid}";
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
        $sql = "select * from prop where id={$id}";
        $result = $this->link->query($sql);
        $this->template->template_assign("info",$result);
        
        $this->template->template_display("Prop/updata");
    }
    
    //修改数据
    public function updatas(){
        $name = $this->post("name","");
        $type = $this->post("type","");
        $price = $this->post("price","");
        $total = $this->post("total","");
        $attribute = $this->post("attribute","");
        $decribe = $this->post("decribe","");
        $img = $this->post("url","");
        $id=$this->post("id",0);
       if($name=="" || $type=="" || $img=="" ||$price =="" ||$total =="" || $attribute=="" || $decribe ==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "update prop set name='{$name}',type='{$type}',image='{$img}',price='{$price}',total='{$total}',attribute='{$attribute}',decribe='{$decribe}' where id = {$id}";
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
        $type = $this->post("type","");
        $price = $this->post("price","");
        $total = $this->post("total","");
        $attribute = $this->post("attribute","");
        $decribe = $this->post("decribe","");
        $img = $this->post("url","");
        if($name=="" || $type=="" || $img=="" ||$price =="" ||$total =="" || $attribute=="" || $decribe ==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "insert into prop(name,image,type,price,total,decribe,attribute) values ('{$name}','{$img}',{$type},{$price},{$total},'{$decribe}','{$attribute}');";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200,"添加成功","");
        }else{
            $this->show(100,"添加失败","");
        }
    }
}



