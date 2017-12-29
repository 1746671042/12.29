

{extends file='layout.tpl'}
{block name=title}
    技能管理-添加
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

                                            <a href="#">道具管理</a>

                                            <span class="icon-angle-right"></span>

                                    </li>

                                    <li><a href="#">英雄道具管理列表</a></li>

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

                                                                            <div class="control-group">
                                                                                    <label class="control-label">名称：</label>
                                                                                    <div class="controls">
                                                                                        <select name="name" >
                                                                                            <option value="惩击">惩击</option>
                                                                                            <option value="终结">终结</option>
                                                                                            <option value="疾跑">疾跑</option>
                                                                                            <option value="狂暴">狂暴</option>
                                                                                            <option value="治疗术">治疗术</option>
                                                                                            <option value="干扰">干扰</option>
                                                                                            <option value="眩晕">眩晕</option> 
                                                                                            <option value="净化">净化</option>
                                                                                            <option value="弱化">弱化</option>
                                                                                            <option value="闪现">闪现</option> 
                                                                                        </select>

                                                                                    </div>
                                                                            </div>
                                                                          <div class="control-group">
                                                                                    <label class="control-label">描述：</label>
                                                                                    <div class="controls">
                                                                                            <input type="text" placeholder="请输入描述" class="m-wrap small"  name="decribe"/>
                                                                                    </div>
                                                                            </div>
                                                                        <div class="control-group">
                                                                                    <label class="control-label">技能解锁：</label>
                                                                                    <div class="controls">
                                                                                            <input type="text" placeholder="请输入等级" class="m-wrap small"  name="unlock_level"/>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="control-group">
                                                                                    <label class="control-label">上传图片：</label>
                                                                                    <div class="controls" >
                                                                                        <img src="" width="100" style="display:none" id="upload_img"/>
                                                                                        <button type="button" id="upload">上传图片</button>
                                                                                        <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                        <input type="hidden" value="" id="upload_url" name="url"/>
                                                                                    </div>
                                                                            </div>
                                                                            
{*                                                                           大图*}
                                                                           <div class="control-group  big_img">
                                                                                    <label class="control-label">上传图片：</label>
                                                                                    <div class="controls" >
                                                                                        <img src="" width="100" style="display:none" id="upload_imgs"/>
                                                                                        <button type="button" id="uploads">上传大图</button>
                                                                                        <input type="file" value="" name="myfiles" class="m-wrap small" style="display:none;"/>
                                                                                        <input type="hidden" value="" id="upload_urls" name="urls"/>
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
        
        
        
        //添加大图
        
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
            var name = $("select[name='name']").val();
            var decribe = $("input[name='decribe']").val();
            var unlock_level = $("input[name = 'unlock_level']").val();
            var url = $("input[name='url']").val();
            var big_image = $("input[name='urls']").val();
            console.log(big_image);
            $.ajax({
                type:"post",
                url:"index.php?class=jineng&action=insert",
                data:{name:name,decribe:decribe,unlock_level:unlock_level,url:url,big_image:big_image},
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                       window.location.href="index.php?class=jineng&action=jinengList"
                   }else{
                       alert(data.message);
                   }
                }
            })
        })
        
         
        {/literal}
     </script>
 
 {/block}