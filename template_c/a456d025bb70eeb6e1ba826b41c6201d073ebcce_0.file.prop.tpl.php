<?php
/* Smarty version 3.1.30, created on 2017-12-25 16:39:27
  from "D:\phpStudy\WWW\php\Admin\template\Prop\prop.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a40b93f32be41_18329571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a456d025bb70eeb6e1ba826b41c6201d073ebcce' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\Prop\\prop.tpl',
      1 => 1514191072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a40b93f32be41_18329571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129085a40b93f2d2847_88115980', 'title');
?>
 
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41495a40b93f31d433_65805037', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155625a40b93f329df5_45751155', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_129085a40b93f2d2847_88115980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    道具管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_41495a40b93f31d433_65805037 extends Smarty_Internal_Block
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

								<a href="#">道具管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">道具列表</a></li>

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
                                                                            <a href="index.php?class=Prop&action=add"
										<button id="sample_editable_1_new" class="btn green" >
										添加 <i class="icon-plus"></i>
										</button>
                                                                             </a>
									</div>
								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>
										<tr>
											<th>id</th>
											<th>名称</th>
											<th>图片</th>
											<th>类型</th>
                                                                                        <th>售价</th>
                                                                                        <th>总价</th>
                                                                                        <th>属性</th>
                                                                                        <th>描述</th>    
                                                                                        <th>操作</th>    
										</tr>
									</thead>
									<tbody>
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="hero_list" >
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><image src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"</td>
                                                                                        <td style="text-align: center;line-height: 117px;"><?php if ($_smarty_tpl->tpl_vars['v']->value['type'] == 0) {?>全部<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 1) {?>攻击<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 2) {?>法术<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 3) {?>防御<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 4) {?>移动<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['type'] == 5) {?>打野<?php } else { ?>辅助<?php }?></td>
                                                                                        <td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
                                                                                        <td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['total'];?>
</td>
                                                                                        <td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['attribute'];?>
</td>
                                                                                        <td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['decribe'];?>
</td>
                                                                                        <td style="text-align: center;line-height: 117px;"><a href="index.php?class=Prop&action=updata&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><button  class="updata">修改</button></a> | <button id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="color: red;" class="delete">删除</button></td>
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
class Block_155625a40b93f329df5_45751155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
         
            $(".delete").click(function(){
                var id = $(this).attr("id");
                if(confirm("确定要删除吗！")){
                    $.ajax({
                      type:"get",
                      url:"index.php?class=Prop&action=delete&deleteId="+id,
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
                }
                  

           })

         

          
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}
