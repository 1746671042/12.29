{extends file='layout.tpl'}
{block name=title}
    英雄管理-修改
{/block} 

{block name=content}

<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

<div id="portlet-config" class="modal hide">

        <div class="modal-header">

                <button data-dismiss="modal" class="close" type="button"></button>

                <h3>portlet Settings</h3>

        </div>

        <div class="modal-body">

                <p>Here will be a configuration form</p>

        </div>

</div>

<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

<!-- BEGIN PAGE CONTAINER-->

<div class="container-fluid">

        <!-- BEGIN PAGE HEADER-->   

        <div class="row-fluid">

                <div class="span12">

                        <!-- BEGIN STYLE CUSTOMIZER -->

                        <div class="color-panel hidden-phone">

                                <div class="color-mode-icons icon-color"></div>

                                <div class="color-mode-icons icon-color-close"></div>

                                <div class="color-mode">

                                        <p>THEME COLOR</p>

                                        <ul class="inline">

                                                <li class="color-black current color-default" data-style="default"></li>

                                                <li class="color-blue" data-style="blue"></li>

                                                <li class="color-brown" data-style="brown"></li>

                                                <li class="color-purple" data-style="purple"></li>

                                                <li class="color-grey" data-style="grey"></li>

                                                <li class="color-white color-light" data-style="light"></li>

                                        </ul>

                                        <label>

                                                <span>Layout</span>

                                                <select class="layout-option m-wrap small">

                                                        <option value="fluid" selected>Fluid</option>

                                                        <option value="boxed">Boxed</option>

                                                </select>

                                        </label>

                                        <label>

                                                <span>Header</span>

                                                <select class="header-option m-wrap small">

                                                        <option value="fixed" selected>Fixed</option>

                                                        <option value="default">Default</option>

                                                </select>

                                        </label>

                                        <label>

                                                <span>Sidebar</span>

                                                <select class="sidebar-option m-wrap small">

                                                        <option value="fixed">Fixed</option>

                                                        <option value="default" selected>Default</option>

                                                </select>

                                        </label>

                                        <label>

                                                <span>Footer</span>

                                                <select class="footer-option m-wrap small">

                                                        <option value="fixed">Fixed</option>

                                                        <option value="default" selected>Default</option>

                                                </select>

                                        </label>

                                </div>

                        </div>

                        <!-- END BEGIN STYLE CUSTOMIZER -->  

                        <h3 class="page-title">
                                英雄
                                 <small>英雄职业添加</small>

                        </h3>

                        <ul class="breadcrumb">

                                <li>

                                        <i class="icon-home"></i>

                                        <a href="index.html">后台管理</a> 

                                        <span class="icon-angle-right"></span>

                                </li>

                                <li>

                                        <a href="#">英雄管理</a>

                                        <span class="icon-angle-right"></span>

                                </li>

                                <li><a href="#">英雄管理列表</a></li>

                        </ul>

                </div>

        </div>

        <!-- END PAGE HEADER-->

        <!-- BEGIN PAGE CONTENT-->

        <div class="row-fluid">

                <div class="span12">

                        <!-- BEGIN SAMPLE FORM PORTLET-->   

                        <div class="portlet box blue tabbable">

                                <div class="portlet-title">

                                        <div class="caption">

                                                <i class="icon-reorder"></i>

                                                <span class="hidden-480">General Layouts</span>

                                        </div>

                                </div>

                                <div class="portlet-body form">

                                        <div class="tabbable portlet-tabs">

                                                <ul class="nav nav-tabs">
                                                        <li><a href="#portlet_tab3" data-toggle="tab">Inline</a></li>
                                                </ul>
                                                <div class="tab-content">

                                                        <div class="tab-pane active" id="portlet_tab1">
                                                                <!-- BEGIN FORM-->
                                                                <form action="#" class="form-horizontal">
                                                                       <input type="hidden" value="{$info.id}" name="id"/>

                                                                      <div class="control-group">
                                                                                <label class="control-label">名称：</label>
                                                                                <div class="controls">
                                                                                        <input type="text" placeholder="请输入名称" class="m-wrap small"  name="name" value="{$info.name}"/>
                                                                                </div>
                                                                        </div>
                                                                    <div class="control-group">
                                                                                <label class="control-label">职业：</label>
                                                                                <div class="controls">
                                                                                     <select name="vocation_id">
                                                                                        {foreach from=$zhiye key= k item=v}
                                                                                            <option value="{$k}" {if $info.vocation_id==$k}selected{/if}>{$v}</option>
                                                                                        {/foreach}
                                                                                    </select>
                                                                                </div>
                                                                        </div>
                                                                    <div class="control-group">
                                                                                <label class="control-label">是否本周免费：</label>
                                                                                <div class="controls" name="free_week">
                                                                                    <input type="radio" name="free_week" value="1"checked=true/>是
                                                                                     <input type="radio" name="free_week" value="2"/>否
                                                                                </div>
                                                                        </div>
                                                                   <div class="control-group">
                                                                           <label class="control-label">是否新手推荐：</label>
                                                                           <div class="controls" name="new_recommend">
                                                                               <input type="radio" name="new_recommend" value="1" checked=true/>是
                                                                               <input type="radio" name="new_recommend" value="2"/>否
                                                                           </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                                <label class="control-label">英雄头像：</label>
                                                                                <div class="controls" >
                                                                                    <img src="{$info.photo}" width="100" id="upload_img"/>
                                                                                    <button type="button" id="upload" style="display:none;">上传头像</button>
                                                                                    <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                    <input type="hidden" value="{$info.photo}" id="upload_url" name="url"/>
                                                                                </div>
                                                                        </div>

                                                                         {*导航介绍大图*}
                                                                           <div class="control-group  big_img">
                                                                                    <label class="control-label">上传图片：</label>
                                                                                    <div class="controls" >
                                                                                        <img src="{$info.image}" width="100" " id="upload_imgs"/>
                                                                                        <button type="button" id="uploads" style="display: none;">上传导航介绍大图</button>
                                                                                        <input type="file" value="" name="myfiles" class="m-wrap small" style="display:none;"/>
                                                                                        <input type="hidden" value="{$info.image}" id="upload_urls" name="urls"/>
                                                                                    </div>
                                                                            </div>

                                                                           <div class="control-group">
                                                                                <label class="control-label">生存能力：</label>
                                                                                <div class="controls">
                                                                                     <input type="text" placeholder="请输入生存能力" class="m-wrap small"  name="live"   value="{$info.live}"/>
                                                                                </div>
                                                                        </div>
                                                                         <div class="control-group">
                                                                                <label class="control-label">伤害能力：</label>
                                                                                <div class="controls">
                                                                                     <input type="text" placeholder="请输入伤害能力" class="m-wrap small"  name="hurt" value="{$info.hurt}"/>
                                                                                </div>
                                                                        </div>
                                                                         <div class="control-group">
                                                                                <label class="control-label">技能效果：</label>
                                                                                <div class="controls">
                                                                                     <input type="text" placeholder="请输入技能效果" class="m-wrap small"  name="effect" value="{$info.effect}"/>
                                                                                </div>
                                                                        </div>
                                                                         <div class="control-group">
                                                                                <label class="control-label">上手难度：</label>
                                                                                <div class="controls">
                                                                                     <input type="text" placeholder="请输入上手难度" class="m-wrap small"  name="difficulty" value="{$info.difficulty}"/>
                                                                                </div>
                                                                        </div>

                                                                         <div class="control-group">
                                                                                <label class="control-label">英雄故事：</label>
                                                                                <div class="controls">
                                                                                    <textarea placeholder="请输入英雄故事" class="m-wrap small"  name="store" style="width:300px !important;height:100px !important;">{$info.story}</textarea>
                                                                                </div>
                                                                        </div>
                                                                         <div class="control-group">
                                                                                <label class="control-label">历史上的他：</label>
                                                                                <div class="controls">
                                                                                    <textarea placeholder="请输入英雄故事" class="m-wrap small"  name="history" style="width:300px !important;height:100px !important;">{$info.history}</textarea>
                                                                                </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                                <label class="control-label">主升：</label>
                                                                                <div class="controls">
                                                                                     <input type="text" placeholder="请输入主升英雄" class="m-wrap small"  name="zhu_skill_id" value="{$info.zhu_skill_id}"/>
                                                                                </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                                <label class="control-label">副升：</label>
                                                                                <div class="controls">
                                                                                     <input type="text" placeholder="请输入副升英雄" class="m-wrap small"  name="fu_skill_id" value="{$info.fu_skill_id}"/>
                                                                                </div>
                                                                        </div>
                                                                        <div class="control-group">
                                                                                <label class="control-label">召唤师技能：</label>
                                                                                <div class="controls">
                                                                                     <input type="text" placeholder="请输入英雄技能" class="m-wrap small"  name="summoner_skill" value="{$info.summoner_skill}"/>
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-actions">
                                                                                <button type="button" class="btn blue" id="form_submit"><i class="icon-ok"></i> 添加</button>

                                                                        </div>

                                                                </form>

                                                                <!-- END FORM-->  

                                                        </div>


                                                </div>

                                        </div>

                                </div>

                        </div>

                        <!-- END SAMPLE FORM PORTLET-->

                </div>
           
        </div>

        <!-- END PAGE CONTENT-->         

</div>

<!-- END PAGE CONTAINER-->
 {/block}
 
 
 {block name=js}
     
     <script>
        {literal}
        $("#upload").click(function(){
            $("input[type='file']").click();
        })
        $("#upload_img").click(function(){
            $("input[type='file']").click();
        })
        
        $("input[type='file']").change(function(){
            var fd = new FormData();
            fd.append("myfile",$("input[type='file']").get(0).files[0]);
            $.ajax({
                type:"post",
                url:"index.php?class=index&action=upload",
                data:fd,
                processData:false,
                contentType:false,
                success:function(e){
                    
                    e=$.parseJSON(e);
                    if(e.code ==100){
                        alert("上传失败");
                    }else{
                        $("#upload_img").attr("src",e.data);
                        $("#upload_url").val(e.data);
                        $("#upload").hide();
                        $("#upload_img").show();
                    }
                }
            })
        })
        
        
        
            
        //导航英雄介绍图
        
        $("#uploads").click(function(){
            $(".big_img input[type='file']").click();
        })
        $("#upload_imgs").click(function(){
            $(".big_img input[type='file']").click();
        })
        
        $(".big_img input[type='file']").change(function(){
            var fd = new FormData();
            fd.append("myfiles",$(".big_img input[type='file']").get(0).files[0]);
            $.ajax({
                type:"post",
                url:"index.php?class=index&action=uploads",
                data:fd,
                processData:false,
                contentType:false,
                success:function(e){
                    
                    e=$.parseJSON(e);
                    if(e.code ==100){
                        alert("上传失败");
                    }else{
                        $(".big_img #upload_imgs").attr("src",e.data);
                        $(".big_img #upload_urls").val(e.data);
                        $(".big_img #uploads").hide();
                        $(".big_img #upload_imgs").show();
                    }
                }
            })
        })
        
        
        
        $("#form_submit").click(function(){
            
            $.ajax({
                type:"post",
                url:"index.php?class=Hero&action=updatas",
                data:$("form").serializeArray(),
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                       window.location.href="index.php?class=hero&action=heroList"
                   }else{
                       alert(data.message);
                   }
                }
            })
        })
        
         
        {/literal}
     </script>
 
 {/block}