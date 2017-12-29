<?php
/* Smarty version 3.1.30, created on 2017-12-29 17:34:51
  from "D:\phpStudy\WWW\php\Admin\template\hero\heroList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a460c3b85ba63_10667200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a672757314b407b7e6df5e5afc4d1c20e923623' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\Admin\\template\\hero\\heroList.tpl',
      1 => 1514540088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a460c3b85ba63_10667200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_216945a460c3b7e4a89_99626101', 'title');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105275a460c3b845810_44487512', 'content');
?>

 
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93245a460c3b857927_80850564', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_216945a460c3b7e4a89_99626101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    英雄管理
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_105275a460c3b845810_44487512 extends Smarty_Internal_Block
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
    
    
    

    
     <div  id="selectSummone" style="display: none;width:100%;height:100%;background:rgba(0,0,0,.5);position: absolute;top: 0px;left:0px; z-index:999;">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div  class="modal">
				<div class="modal-header">
					<button class="close" type="button" onclick="$('#selectSummone').hide()"></button>
					<h3 id="herojineng" style="color:red;">选择召唤师技能(两个)</h3>
				</div>
				<div class="modal-body">
					<form  class="form-horizontal" id="skillForm">
                                            <input type="hidden" name="id" value=""/>
                                                
                                            <div class="control-group" >
                                                        
                                                        <div class="controls" style="margin-left:0px !important;line-height: 70px;font-size:14px;">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['summoneList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                                                    <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="summone" style="margin: 0px 3px;"/><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                        </div>
                                                        <label class="control-label" style="width:100%;text-align:center;color:red;display: none;" id="helps">选择的技能只能为两个</label>
                                                </div>
                                            <div class="form-actions" style="text-align: center;padding-left:0px;background-color:white;">
                                                    <span class="help-block" style="color:red; display: none;" id="help"></span>
                                                    <button type="button" class="btn blue save" id="savaSkill"><i class="icon-ok"></i> 确认</button>
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
                                                                            <a href="index.php?class=Hero&action=add"
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
											<th>英雄名称名称</th>
											<th>英雄头像</th>
											<th>导航介绍图</th>
											<th>英雄职业</th>
                                                                                        <th>是否为本周免费</th>
                                                                                        <th>新手推荐</th>
                                                                                        <th>生存能力</th>
											<th>攻击伤害</th>
											<th>技能效果</th>
											<th>上手难度</th>
											<th>英雄故事</th>
                                                                                        <th>历史上的他</th>
                                                                                        <th>主升/副升</th>
                                                                                        <th>召唤师技能</th>
                                                                                        <th>操作</th>
										</tr>
									</thead>
									<tbody>
                                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
										<tr class="">
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['photo'];?>
"/></td>
                                                                                        <td style="text-align: center;line-height: 117px;"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"/></td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['vocation_id'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php if ($_smarty_tpl->tpl_vars['v']->value['free_week'] == 1) {?>是<?php } else { ?>否<?php }?></td>
                                                                                        <td style="text-align: center;line-height: 117px;"><?php if ($_smarty_tpl->tpl_vars['v']->value['new_recommend'] == 1) {?>是<?php } else { ?>否<?php }?></td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['live'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['hurt'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['effect'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['difficulty'];?>
</td>
                                                                                        <td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['story'];?>
</td>
											<td style="text-align: center;line-height: 117px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['history'];?>
</td>
											<td style="text-align: center;line-height: 117px;" class="skill" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-sm="<?php echo $_smarty_tpl->tpl_vars['v']->value['zhu_skill_id'];?>
" data-ss="<?php echo $_smarty_tpl->tpl_vars['v']->value['fu_skill_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sm_name'];?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['ss_name'];?>
</td>
											<td style="text-align: center;line-height: 117px;" class='summone' data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-sk-one="<?php echo $_smarty_tpl->tpl_vars['v']->value['summoner_skill_one'];?>
" data-sk-two="<?php echo $_smarty_tpl->tpl_vars['v']->value['summoner_skill_two'];?>
">
                                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['s_name'], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
                                                                                            <?php echo $_smarty_tpl->tpl_vars['v1']->value['name'];?>
/
                                                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                                                        </td>
                                                                                        <td style="text-align: center;line-height: 117px;"><a href="index.php?class=Hero&action=updata&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
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
class Block_93245a460c3b857927_80850564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
     <?php echo '<script'; ?>
>
         
          $(".skill").click(function(){          
              var id = $(this).attr("data-id");
              var sm = $(this).attr("data-sm");
              
              var ss = $(this).attr("data-ss");
              $.get("index.php?class=hero&action=getSkillById&id="+id,function(data){
                  data = $.parseJSON(data);
                  var list = data.data;
                  var sm_str="";
                  var ss_str="";
                  for(var i=0;i<list.length;i++){
                      //主升
                      if(list[i]["id"] ==sm){
                          sm_str=sm_str+"<option value='"+list[i]["id"]+"'selected>"+list[i]["name"]+"</option>";
                      }else{
                          sm_str=sm_str+"<option value='"+list[i]["id"]+"'>"+list[i]["name"]+"</option>";
                      }
                      
                      //副升
                       if(list[i]["id"] ==ss){
                          ss_str=ss_str+"<option value='"+list[i]["id"]+"'selected>"+list[i]["name"]+"</option>";
                      }else{
                          ss_str=ss_str+"<option value='"+list[i]["id"]+"'>"+list[i]["name"]+"</option>";
                      }
                  }
                  $("#selectSkill select[name='zhu_skill_id']").html(sm_str);
                  $("#selectSkill select[name='fu_skill_id']").html(ss_str);
                  $("#selectSkill input[name='id']").val(id);
                  $("#selectSkill").show();
                  
             })  
             
                $.get("index.php?class=hero&action=getSkilljineng&id="+id,function(data){
                    data = $.parseJSON(data);
                    var list = data.data;
                    str = list["name"]; 
                    
                    $("#herojineng").html("选择"+str+"技能");
                
            })
          })
        
        
        
        
        //召唤师技能选择
        $(".summone").click(function(){
            $("#selectSummone").show();
            var id=$(this).attr("data-id");
            $("#selectSummone input[name='id']").val(id);
            var one = $(this).attr("data-sk-one");
            var two = $(this).attr("data-sk-two");
            $("#selectSummone input[name=summone]").each(function(){
                var val = $(this).val();
                if(val==one || val==two){
                    $(this).attr("checked",true);
                }
            })
            $("#selectSummone .save").click(function(){
                var SummoneId="";
                var num=0;
                $("#selectSummone input:checked").each(function(){
                    SummoneId = SummoneId+$(this).val()+",";
                    num++;
                })
                if(num !=2){
                    $("#helps").show();
                }else{
                        console.log(SummoneId);
                        var id = $("#selectSummone input[name='id']").val();
                         console.log(id);
                          $.ajax({
                                type:"post",
                                url:"index.php?class=Hero&action=saveSummone",
                                data:{id:id,s_id:SummoneId},
                                success:function(data){
                                    data = $.parseJSON(data);
                                      if(data.code ==100){
                                          alert(data.message);
                                      }else{
                                           history.go(0);
                                      }
                            }
                        })
                }
                 
            })
        })
        
     //主升副升
        $("#savaSkill").click(function(){
            $.ajax({
                type:"post",
                url:"index.php?class=Hero&action=saveSkill",
                data:$("#skillForm").serializeArray(),
                success:function(data){
                    data = $.parseJSON(data);
                      if(data.code ==100){
                          alert(data.message);
                      }else{
                         history.go(0); 
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
