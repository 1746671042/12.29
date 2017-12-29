<?php
/* Smarty version 3.1.30, created on 2017-12-29 11:37:14
  from "D:\phpStudy\WWW\php\Admin\template\Herojineng\herojineng.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a45b86a986cd3_17408180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0aed281641a2f405b94742aa338312135f644ea' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\Herojineng\\herojineng.tpl',
      1 => 1514518628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a45b86a986cd3_17408180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_294145a45b86a942f57_21810025', 'title');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123275a45b86a978c96_94969134', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48205a45b86a984fb3_40595254', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_294145a45b86a942f57_21810025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    英雄管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_123275a45b86a978c96_94969134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div  id="selectSkill" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#selectSkill').hide()"></button>
					<h3 id="herojineng" style="color:red;"></h3>
				</div>
				<div class="modal-body">
					<form  class="form-horizontal" id="skillForm">
                                            <input type="hidden" name="id" value=""/>
                                                <div class="control-group">
                                                        <label class="control-label">主升技能：</label>
                                                        <div class="controls">
                                                                 <select name="zhu_skill_id">
                                                                 
                                                                </select>
                                                        </div>
                                                </div>
                                                <div class="control-group">
                                                        <label class="control-label">副升技能：</label>
                                                        <div class="controls">
                                                                 <select name="fu_skill_id">
                                                                    
                                                                </select>
                                                        </div>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: none;" id="help"></span>
                                                    <button type="button" class="btn blue" id="savaSkill"><i class="icon-ok"></i> 确认</button>
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
								<a href="#">英雄管理</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">英雄列表</a></li>
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

									<div class="clearfix">
									<div class="btn-group">
                                                                            <a href="index.php?class=herojineng&action=add"
										<button id="sample_editable_1_new" class="btn green" >
										添加 <i class="icon-plus"></i>
										</button>
                                                                             </a>
									</div>
								</div>

									

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>
										<tr>
											<th>id</th>
											<th>技能名称</th>
											<th>技能图片</th>
											<th>冷却值</th>
                                                                                        <th>消耗值</th>
                                                                                        <th>描述</th>
                                                                                        <th>英雄id</th>
											<th>备注</th>
                                                                                        <th>技能顺序</th>
                                                                                        <th>操作</th>
										</tr>
									</thead>
									<tbody>
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="">
											<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
											<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
											<td style="text-align: center;"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"/></td>
											<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['lengque'];?>
</td>
											<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['xiaohao'];?>
</td>
                                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['miaosu'];?>
</td>
											<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['hero_name'];?>
</td>
                                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['v']->value['beizhu'];?>
</td>
                                                                                        <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->tpl_vars['v']->value['num']];?>
</td>
                                                                                        <td style="text-align: center;"><a href="index.php?class=herojineng&action=updata&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&num=<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
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
class Block_48205a45b86a984fb3_40595254 extends Smarty_Internal_Block
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
                      url:"index.php?class=herojineng&action=delete&deleteId="+id,
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
