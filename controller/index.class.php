<?php
class Index extends common{
    public function shouye(){
        $this->checkLoginInfo();
        $this->template->template_display("Index/index");
    }
    
    public function upload(){
     /**
     * 上传头像
     */
            //获取相关的值
            if(!isset($_FILES["myfile"])){
                $this->show(100,"数据不完整", "");
            }
            $file = $_FILES["myfile"];
    //        var_dump($file);
            if($file["error"] != 0  ){
                $this->show(100, "头像上传失败", "");
            }

            //上传操作
            $name = $file["name"];
            $extpos = strrpos($name,'.');//返回字符串filename中'.'号最后一次出现的数字位置
            $ext = substr($name,$extpos);
            $newName = time().rand(1000,9999).$ext;

            $upload = "upload/".$newName;

            if(move_uploaded_file($file["tmp_name"], $upload)){
                $this->show(200,"头像上传成功", $upload);
            }else{
                $this->show("100", "视频上传失败1","");
            }
        }
        
        
         public function uploads(){
     /**
     * 上传大图
     */
            //获取相关的值
            if(!isset($_FILES["myfiles"])){
                $this->show(100,"数据不完整", "");
            }
            $file = $_FILES["myfiles"];
    //        var_dump($file);
            if($file["error"] != 0  ){
                $this->show(100, "头像上传失败", "");
            }

            //上传操作
            $name = $file["name"];
            $extpos = strrpos($name,'.');//返回字符串filename中'.'号最后一次出现的数字位置
            $ext = substr($name,$extpos);
            $newName = time().rand(1000,9999)."big".$ext;

            $upload = "upload/".$newName;

            if(move_uploaded_file($file["tmp_name"], $upload)){
                $this->show(200,"头像上传成功", $upload);
            }else{
                $this->show("100", "大图上传失败","");
            }
        }
        
        
}
