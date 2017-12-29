<?php
class Hero extends common{
    public function herolist (){
         //引用index.tpl  admin.class->common.class->template.class;
        $list = $this->link->queryAll("select * from hero");
        $vocationList = $this->link->queryAll("select * from vocation");
        $newArr = array();
        foreach($vocationList as $vk=>$vv){
            $newArr[$vv["id"]]=$vv["name"];
        }
        $list = $this->link->queryAll("select * from hero");
        foreach($list as $k=>$v){
            $sql = "select * from jineng where id in({$v["zhu_skill_id"]},{$v["fu_skill_id"]})";
            $data = $this->link->queryAll($sql);
            $list[$k]["ss_name"]="";
            $list[$k]["sm_name"]="";
            foreach($data as $k1=>$v1){
                if($v1["id"]==$v["zhu_skill_id"]){
                    $list[$k]["sm_name"] =$v1["name"];
                }
                 if($v1["id"]==$v["fu_skill_id"]){
                    $list[$k]["ss_name"] =$v1["name"];
                }
            }
            
            //获取召唤师技能
            $sql = "select * from summoner_skill where id in ({$v["summoner_skill"]})";
            $s_name = $this->link->queryAll($sql);
            $list[$k]["s_name"]=$s_name;
        
//            var_dump($list);
//            exit();
            if($v["summoner_skill"]!=""){
                $sk = explode(",", $v["summoner_skill"]);
                $list[$k]["summoner_skill_one"]=$sk[0];
                $list[$k]["summoner_skill_two"]=$sk[1];
            }else{
                $list[$k]["summoner_skill_one"]=0;
                $list[$k]["summoner_skill_two"]=0;
            }
       
            
        }
        
        $sql = "select * from summoner_skill";
        $result = $this->link->queryAll($sql);
        $this->template->template_assign("summoneList",$result);
       
        
       
        $sql = "select name from vocation";
        $result = $this->link->queryAll($sql);
        $this->template->template_assign("zhiye",$result);
        
        
        
        $this->template->template_assign("vocationList",$newArr);
        $this->template->template_assign("list",$list);
        $this->template->template_display("hero/heroList");
        
    }   
    public function add(){
        //查询英雄职业
        $vocationList = $this->link->queryAll("select * from vocation");
        $this->template->template_assign("vocationList",$vocationList);
        $this->template->template_display("hero/add");
    }
    
      //增加数据
    public function insert(){
        $name = $this->post("name","");
        $vocation_id = $this->post("vocation_id","");
        $free_week = $this->post("free_week","");
        $new_recommend = $this->post("new_recommend","");
        $live = $this->post("live","");
        $hurt = $this->post("hurt","");
        $effect = $this->post("effect","");
        $difficulty = $this->post("difficulty","");
        $store = $this->post("store","");
        $history = $this->post("history","");
        $zhu_skill_id = $this->post("zhu_skill_id","");
        $fu_skill_id = $this->post("fu_skill_id","");
        $summoner_skill = $this->post("summoner_skill","");
        $img = $this->post("url","");
        $image = $this->post("urls","");
        if($name=="" || $free_week=="" || $img=="" || $image==""){
            $this->show(100,"添加信息不完整","");
        }
        /* @var $name type */
        $sql = "insert into hero (name,photo,image,vocation_id,free_week,new_recommend,live,hurt,effect,difficulty,story,history,zhu_skill_id,fu_skill_id,summoner_skill) values ('{$name}','{$img}','{$image}','{$vocation_id}','{$free_week}','{$new_recommend}','{$live}','{$hurt}','{$effect}','{$difficulty}','{$store}','{$history}','{$zhu_skill_id}','{$fu_skill_id}','{$summoner_skill}');";
        $result = $this->link->add($sql);
        if($result){
            $this->show(200,"添加成功",$result);
        }else{
            $this->show(100,"添加失败","");
        }
    }
    
    
     //修改
    public function updata(){
        $id = $this->get("id","");
        $sql = "select * from hero where id={$id}";
        $result = $this->link->query($sql);
        $this->template->template_assign("info",$result);
        
        $sql = "select name from vocation";
        $result = $this->link->queryAll($sql);
//        var_dump($result[0]);
//        exit();
        $this->template->template_assign("zhiye",$result);
        
        
        
        $this->template->template_display("hero/update");
    }
    
    
    
     //修改数据
    public function updatas(){
        $name = $this->post("name","");
        $vocation_id = $this->post("vocation_id","");
        $free_week = $this->post("free_week","");
        $new_recommend = $this->post("new_recommend","");
        $live = $this->post("live","");
        $hurt = $this->post("hurt","");
        $effect = $this->post("effect","");
        $difficulty = $this->post("difficulty","");
        $store = $this->post("store","");
        $history = $this->post("history","");
        $zhu_skill_id = $this->post("zhu_skill_id","");
        $fu_skill_id = $this->post("fu_skill_id","");
        $summoner_skill = $this->post("summoner_skill","");
        $img = $this->post("url","");
        $image = $this->post("urls","");
        $id = $this->post("id","");
        if($name=="" || $free_week=="" || $img=="" || $image==""){
            $this->show(100,"添加信息不完整","");
        }
        /* @var $name type */
        $sql = "update hero set name='{$name}',photo='{$img}',image='{$image}',vocation_id='{$vocation_id}',free_week='{$free_week}',new_recommend='{$new_recommend}',live='{$live}',hurt='{$hurt}',effect='{$effect}',difficulty='{$difficulty}',story='{$store}',history='{$history}',zhu_skill_id='{$zhu_skill_id}',fu_skill_id='{$fu_skill_id}',summoner_skill='{$summoner_skill}' where id={$id};";
        $result = $this->link->update($sql);
        if($result){
            $this->show(200,"修改成功",$result);
        }else{
            $this->show(100,"修改失败","");
        }
    }
    
    
    /*
     * 获取制定英雄技能
     */
    public function getSkillById(){
        $id = $this->get("id",0);
        
        //获取英雄对应的技能
        $sql = "select * from jineng where hero_id={$id}";
        $list = $this->link->queryAll($sql);
        $this->show(200," 查询成功",$list);
    }
    
    //获取对应英雄
    public function getSkilljineng(){
        $id = $this->get("id",0);
        //获取英雄对应的技能
        $sql = "select * from hero where id={$id}";
        $list = $this->link->query($sql);
        $this->show(200," 查询成功",$list);
       
    }
    
    public function saveSkill(){
        $id = $this->post("id",0);
        $zhu = $this->post("zhu_skill_id",0);
        $fu =$this->post("fu_skill_id",0);
        $sql = "update hero set zhu_skill_id={$zhu},fu_skill_id={$fu} where id={$id}";
        if($this->link->update($sql)){
            $this->show(200, "修改成功", "");
        }else{
            $this->show(100, "修改失败", "");
        }
    }
    
    
    //保存召唤师技能
    public function saveSummone (){
        $id = $this->post("id",0);
        $summone = $this->post("s_id","");
        $summone = trim($summone,",");
        
        $sql = "update hero set summoner_skill='{$summone}' where id={$id}";
        $result = $this->link->update($sql);
        
        if($result){
            $this->show(200, "修改成功", "");
        }else{
            $this->show(100, "修改失败", "");
        }
    }
}
