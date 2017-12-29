<?php
/* Smarty version 3.1.30, created on 2017-12-25 15:43:04
  from "D:\phpStudy\WWW\php\Admin\template\Prop\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a40ac08500fb9_72495163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53fb8b8da7c6d877893e3c9c4382cf812c6415a2' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\Prop\\add.tpl',
      1 => 1514187772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a40ac08500fb9_72495163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214945a40ac084de3a5_84166720', 'title');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_255915a40ac084f37a5_56024657', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6125a40ac084fe475_12011076', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_214945a40ac084de3a5_84166720 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    道具管理-添加
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_255915a40ac084f37a5_56024657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
														<input type="text" placeholder="请输入名称" class="m-wrap small"  name="name"/>
													</div>
												</div>
                                                                                                <div class="control-group">
													<label class="control-label">类型：</label>
													<div class="controls">
                                                                                                            <select name="type">
                                                                                                                <option value="0">全部</option>
                                                                                                                <option value="1">攻击</option>
                                                                                                                <option value="2">法术</option>
                                                                                                                <option value="3">防御</option>
                                                                                                                <option value="4">移动</option>
                                                                                                                <option value="5">打野</option>
                                                                                                                <option value="6">辅助</option> 
                                                                                                            </select>
														
													</div>
												</div>
                                                                                              <div class="control-group">
													<label class="control-label">售价：</label>
													<div class="controls">
														<input type="text" placeholder="请输入售价" class="m-wrap small" name="price"/>
													</div>
												</div>
                                                                                              <div class="control-group">
													<label class="control-label">总价：</label>
													<div class="controls">
														<input type="text" placeholder="请输入总价" class="m-wrap small" name="total"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">属性：</label>
													<div class="controls">
														<input type="text" placeholder="请输入属性" class="m-wrap small" name="attribute"/>
													</div>
												</div>
                                                                                            <div class="control-group">
													<label class="control-label">描述：</label>
													<div class="controls">
                                                                                                            <textarea placeholder="请输入描述" class="m-wrap small" name="decribe" style="height:150px;width: 300px !important;"></textarea>
													</div>
												</div>
                                                                                                <div class="control-group">
													<label class="control-label">上传图片：</label>
													<div class="controls" >
                                                                                                            <img src="" width="100" style="display:none" id="upload_img"/>
                                                                                                            <button type="button" id="upload">上传头像</button>
												            <input type="file" value="" name="myfile" class="m-wrap small" style="display:none;"/>
                                                                                                            <input type="hidden" value="" id="upload_url" name="url"/>
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
 <?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_6125a40ac084fe475_12011076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
        
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
        
        $("#form_submit").click(function(){
            var name = $("input[name='name']").val();
            var type = $("select[name='type']").val();
            var price = $("input[name='price']").val();
            var total = $("input[name = 'total']").val();
            var attribute = $("input[name = 'attribute']").val();
            var decribe = $("textarea[name = 'decribe']").val();
            var url = $("input[name='url']").val();
            console.log(decribe);
            $.ajax({
                type:"post",
                url:"index.php?class=Prop&action=insert",
                data:{name:name,type:type,url:url,price:price,total:total,attribute:attribute,decribe:decribe},
                success:function(data){
                   data=$.parseJSON(data);
                   if(data.code==200){
                       window.location.href="index.php?class=Prop&action=propList"
                   }else{
                       alert(data.message);
                   }
                }
            })
        })
        
         
        
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}
