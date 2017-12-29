
{extends file='layout.tpl'}
{block name=title}
    英雄技能管理-修改
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

                                        <a href="#">英雄技能管理</a>

                                        <span class="icon-angle-right"></span>

                                </li>

                                <li><a href="#">英雄技能修改列表</a></li>

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
                                                                                        <label class="control-label">冷却值：</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" placeholder="请输入冷却值" class="m-wrap small"  name="lengque" value="{$info.lengque}"/>
                                                                                        </div>
                                                                                </div>
                                                                             <div class="control-group">
                                                                                        <label class="control-label">消耗值：</label>
                                                                                        <div class="controls">
                                                                                                <input type="text" placeholder="请输入消耗值" class="m-wrap small"  name="xiaohao" value="{$info.xiaohao}"/>
                                                                                        </div>
                                                                                </div>
                                                                              <div class="control-group">
                                                                                        <label class="control-label">描述：</label>
                                                                                        <div class="controls">
                                                                                            <textarea placeholder="请输入描述" class="m-wrap small"  name="miaosu" value="{$info.miaosu}" style="width:250px !important;height: 100px;">{$info.miaosu}</textarea>
                                                                                        </div>
                                                                                </div>
                                                                            <div class="control-group">
                                                                                <label class="control-label">英雄：</label>
                                                                                <div class="controls">
                                                                                    <select name="hero_id">
                                                                                        {foreach from= $heroList key=k item=v}
                                                                                        <option value="{$v.id}" {if $info.hero_id == $v.id}selected{/if}>
                                                                                            {$v.name}
                                                                                        </option>
                                                                                        {/foreach}
                                                                                    </select>
{*                                                                                     <input type="text" placeholder="请输入英雄id" class="m-wrap small"  name="heroid"/>*}
                                                                                </div>
                                                                        </div>
                                                                         <div class="control-group">
                                                                                <label class="control-label">技能顺序：</label>
                                                                                <div class="controls">
                                                                                    <select name="num">
                                                                                        {foreach from= $num key=k item=v}
                                                                                        <option value="{$k}" {if $k == $info.num}selected{/if}>
                                                                                            {$v}
                                                                                        </option>
                                                                                        {/foreach}
                                                                                    </select>
{*                                                                                     <input type="text" placeholder="请输入英雄id" class="m-wrap small"  name="heroid"/>*}
                                                                                </div>
                                                                        </div>
                                                                            <div class="control-group">
                                                                                        <label class="control-label">备注：</label>
                                                                                        <div class="controls">
                                                                                             <textarea placeholder="请输入备注" class="m-wrap small"  name="beizhu" value="{$info.beizhu}" style="width:250px !important;height: 100px;">{$info.beizhu}</textarea>												
                                                                                        </div>
                                                                                </div>
                                                                                <div class="control-group">
                                                                                        <label class="control-label">上传图片：</label>
                                                                                        <div class="controls" >
                                                                                            <img src="{$info.image}" width="100" id="upload_img"/>
                                                                                            <button type="button" id="upload" style="display: none;">上传图片</button>
                                                                                            <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                            <input type="hidden" value="{$info.image}" id="upload_url" name="url"/>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="form-actions">
                                                                                        <button type="button" class="btn blue" id="form_submit"><i class="icon-ok"></i> 修改</button>

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
        
        
        //修改
        $("#form_submit").click(function(){
            var name = $("input[name='name']").val();
            var lengque = $("input[name='lengque']").val();
            var xiaohao = $("input[name='xiaohao']").val();
            var miaosu = $("textarea[name='miaosu']").val();
            var heroid =  $("select[name='hero_id']").val();
            //排序
            var num = $("select[name='num']").val();
            var beizhu = $("textarea[name='beizhu']").val();
            var url = $("input[name='url']").val();
            var id = $("input[name='id']").val();
            $.ajax({
                type:"post",
                url:"index.php?class=herojineng&action=updatas",
                data:{id:id,name:name,miaosu:miaosu,url:url,lengque:lengque,beizhu:beizhu,xiaohao:xiaohao,heroid:heroid,num:num},
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                      alert(data.message);
                      window.location.href="index.php?class=herojineng&action=herojinengList";
                   }else{
                       alert(data.message);
                   }
                }
            })
        })
        
         
        {/literal}
     </script>
 
 {/block}
