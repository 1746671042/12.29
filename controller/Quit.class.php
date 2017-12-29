<?php
class Quit extends common{
    public function exits(){
         setcookie("admin_id","",time()-1,"/");
         setcookie("admin_name","",time()-1,"/");
         echo "<script>self.location=document.referrer;</script>";
    }    
}