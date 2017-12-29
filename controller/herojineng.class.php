<?php

/**
 * 道具管理
 */
class herojineng extends common{
    
    public $num = array(
        1=>"被动",
        2=>"第一技能",
        3=>"第二技能",
        4=>"终极技能"
    );
    
    /**
     * 职业管理列表
     */
    public function herojinengList(){
        $list = $this->link->queryAll("select * from jineng");
        foreach($list as $k=>$v){
            $sql = "select * from hero where id={$v["hero_id"]}";
            $result = $this->link->query($sql);
            $list[$k]["hero_name"]=$result["name"];
        }
     
        
        $this->template->template_assign("num",$this->num);
        $this->template->template_assign("list",$list);
        $this->template->template_display("Herojineng/herojineng");
    }
    
       
    public function add(){
        //查询所有英雄
        $heroList = $this->link->queryAll("select id,name from hero");
        //将所有的英雄传到添加页面
        $this->template->template_assign("heroList",$heroList);
        $this->template->template_assign("num",$this->num);
        $this->template->template_display("herojineng/add");
    }
    //删除数据
    public function delete(){
        $deleteid = $this->get("deleteId","");
        if($deleteid ==""){
            $this->show(100,"数据不能为空","");
            
        }else{
            $sql = "delete from jineng where id = {$deleteid}";
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

         //查询所有英雄
        $heroList = $this->link->queryAll("select id,name from hero");
        //将所有的英雄传到添加页面
        $this->template->template_assign("heroList",$heroList);
        
        $sql = "select * from jineng where id={$id}";
        $result = $this->link->query($sql);
//        var_dump($result["num"]);
//        exit();
        $this->template->template_assign("info",$result);
        $this->template->template_assign("num",$this->num);
        $this->template->template_display("Herojineng/update");


        
        
    }
    
    //修改数据
    public function updatas(){
        $name = $this->post("name","");
        $lengque = $this->post("lengque","");
        $xiaohao = $this->post("xiaohao","");
        $miaosu = $this->post("miaosu","");
        $beizhu = $this->post("beizhu","");
        //技能顺序
        $num = $this->post("num","");
        $heroid = $this->post("heroid","");
        $img = $this->post("url","");
        $id=$this->post("id",0);
        if($name=="" || $lengque=="" || $img=="" || $xiaohao ==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "update jineng set name='{$name}',image='{$img}',lengque='{$lengque}',xiaohao='{$xiaohao}',miaosu='{$miaosu}',beizhu='{$beizhu}',hero_id='{$heroid}',num='{$num}' where id = {$id}";
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
        $lengque = $this->post("lengque","");
        $xiaohao = $this->post("xiaohao","");
        $miaosu = $this->post("miaosu","");
        $beizhu = $this->post("beizhu","");
        //技能顺序
        $num = $this->post("num","");
        $heroid = $this->post("heroid","");
        $img = $this->post("url","");
        if($name=="" || $lengque=="" || $img=="" || $xiaohao ==""){
            $this->show(100,"添加信息不完整","");
        }
        $sql = "insert into jineng (name,image,lengque,xiaohao,miaosu,hero_id,beizhu,num) values ('{$name}','{$img}','{$lengque}','{$xiaohao}','{$miaosu}','{$heroid}','{$beizhu}','{$num}');";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200,"添加成功","");
        }else{
            $this->show(100,"添加失败","");
        }
    }
}



