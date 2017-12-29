<?php
/* Smarty version 3.1.30, created on 2017-12-21 18:44:03
  from "D:\phpStudy\WWW\php\Admin\template\Admin\adminList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3b9073bae409_85072401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a15e343bf9bd00dfba591ca5c81845a039a2539' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\Admin\\adminList.tpl',
      1 => 1513853037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a3b9073bae409_85072401 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\php\\Admin\\tools\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120825a3b9073b47c38_15902212', 'title');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11555a3b9073b9ca92_95602122', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15365a3b9073baa4b8_79319991', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_120825a3b9073b47c38_15902212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    管理员管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_11555a3b9073b9ca92_95602122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div  id="addAdmin" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div  class="modal">

				<div class="modal-header">

					<button class="close" type="button" onclick="$('#addAdmin').hide()"></button>

					<h3>添加管理员</h3>

				</div>

				<div class="modal-body">

					<form action="#" class="form-horizontal">
                                                <div class="control-group">

                                                        <label class="control-label">用户名：</label>

                                                        <div class="controls">
                                                                <input type="text" placeholder="请填写用户名称" class="m-wrap small" name="add_admin_name">
                                                        </div>
                                                </div>

                                                <div class="control-group">
                                                        <label class="control-label">密码：</label>
                                                        <div class="controls">
                                                                <input type="password" placeholder="请填写密码" class="m-wrap medium" name="add_admin_pwd">
                                                        </div>

                                                </div>
                                            
                                            
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: nonel;" id="help"></span>
                                                    <button type="button" class="btn blue" id="saveAdmin"><i class="icon-ok"></i> 添加</button>
                                            </div>
                                        </form>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    </div>
    
    
    
     <div class="page-container row-fluid">


		<!-- BEGIN PAGE -->
			
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

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">
							管理员列表
						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="index.html">后台管理</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">管理员</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">管理员列表</a></li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-edit"></i>Editable Table</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<button id="sample_editable_1_new" class="btn green" onclick="$('#addAdmin').show()">

										添加 <i class="icon-plus"></i>

										</button>

									</div>

									

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>
										<tr>
											<th>id</th>
											<th>管理员名称</th>
											<th>密码</th>
											<th>时间</th>
											<th>状态</th>
                                                                                        <th>修改</th>
                                                                                        <th>是否删除</th>
										</tr>
									</thead>
									<tbody>
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="">
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_name'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['v']->value['admin_pwd'];?>
</td>
											<td class="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['admin_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                                                                        <td><a class="edit" href="javascript:;"><?php if ($_smarty_tpl->tpl_vars['v']->value['admin_status'] == 1) {?><button class="openclose" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];
echo $_smarty_tpl->tpl_vars['v']->value['admin_status'];?>
" >开启</button><?php } else { ?><button class="openclose" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];
echo $_smarty_tpl->tpl_vars['v']->value['admin_status'];?>
">关闭</button><?php }?></a></td>

                                                                                        <td><button class="reset" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
">重置密码</button></td>
											<td><button class="delete" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['admin_id'];?>
">Delete</button></td>
										</tr>
                                                                            <?php
}
} else {
?>

                                                                                <tr>
                                                                                    <td>暂无数据</td>
                                                                                </tr>
                                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				<!-- END PAGE CONTENT -->

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->

	</div>
 <?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_15365a3b9073baa4b8_79319991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
         
         $("#saveAdmin").click(function(){
            var name = $("input[name='add_admin_name']").val();
            var pwd = $("input[name='add_admin_pwd']").val();
            
                $.ajax({
                    type:"post",
                    url:"index.php?class=Admin&action=add",
                    data:{name:name,pwd:pwd},
                    success:function(data){
                        data = $.parseJSON(data);
                        if(data.code ==200){
                            $("#help").html(data.msssage);
                            history.go(0);
                        }else{
                             $("#help").html(data.message);
                        }
                    }
                });
            
         })
         
         
          $(".reset").click(function(){
              var id = $(this).attr("id");
                $.ajax({
                    type:"get",
                    url:"index.php?class=Admin&action=reset&resetid="+id,
                    success:function(data){
                        console.log(data);
                        data = $.parseJSON(data);
                        if(data.code ==200){
                            alert(data.message);
                            history.go(0);
                        }else{
                            alert(data.message+"，请重试！");
                            history.go(0);
                        }
                    }
                });
            
         })
         
         
         $(".delete").click(function(){
             var id = $(this).attr("id");
             var status = $(this).attr("status");
             cnosole.log(status);
                $.ajax({
                    type:"get",
                    url:"index.php?class=Admin&action=delete&adminid="+id,
                    success:function(data){
                        console.log(data);
                        data = $.parseJSON(data);
                        if(data.code ==200){
                            alert(data.message);
                            history.go(0);
                        }else{
                             alert(data.message);
                             history.go(0);
                        }
                    }
                });
            
         })
         
         
          $(".openclose").click(function(){
             var id = $(this).attr("id");
                $.ajax({
                    type:"get",
                    url:"index.php?class=Admin&action=openorclose&opclid="+id,
                    success:function(data){
                        console.log(data);
                        data = $.parseJSON(data);
                        if(data.code ==200){
                            alert(data.message);
                            
                        }else{
                             alert(data.message);
                       
                        }
                    }
                });
            
         })
          
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}
