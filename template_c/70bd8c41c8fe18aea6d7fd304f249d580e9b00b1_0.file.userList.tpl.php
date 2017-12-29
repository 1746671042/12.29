<?php
/* Smarty version 3.1.30, created on 2017-12-22 11:34:22
  from "D:\phpStudy\WWW\php\Admin\template\User\userList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3c7d3ea900a3_06419648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70bd8c41c8fe18aea6d7fd304f249d580e9b00b1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\User\\userList.tpl',
      1 => 1513913658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a3c7d3ea900a3_06419648 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\phpStudy\\WWW\\php\\Admin\\tools\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_244585a3c7d3e92cb09_28534485', 'title');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271315a3c7d3ea85868_06158891', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189685a3c7d3ea8e6e4_31238697', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_244585a3c7d3e92cb09_28534485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    用户管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_271315a3c7d3ea85868_06158891 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  
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

								<a href="#">用户</a>

								<i class="icon-angle-right"></i>

							</li>

							<li><a href="#">用户列表</a></li>

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
class Block_189685a3c7d3ea8e6e4_31238697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
         
         $("#saveAdmin").click(function(){
                $.ajax({
                    type:"post",
                    url:"index.php?class=User&action=userList",
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
         
         
          
     <?php echo '</script'; ?>
>
 
 <?php
}
}
/* {/block 'js'} */
}
