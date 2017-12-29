
{extends file='layout.tpl'}
{block name=title}
    英雄管理
{/block} 

{block name=content}
{*    英雄技能选择*}
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
    
    
    
{*    召唤师技能选择*}
    
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
                                                                {foreach from=$summoneList key=k item=v}
                                                                    <input type="checkbox" value="{$v.id}" name="summone" style="margin: 0px 3px;"/>{$v.name}
                                                                {/foreach}
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
                                                                            {foreach from=$list key=k item=v}
										<tr class="">
											<td style="text-align: center;line-height: 117px;">{$v.id}</td>
											<td style="text-align: center;line-height: 117px;">{$v.name}</td>
											<td style="text-align: center;line-height: 117px;"><img src="{$v.photo}"/></td>
                                                                                        <td style="text-align: center;line-height: 117px;"><img src="{$v.image}"/></td>
											<td style="text-align: center;line-height: 117px;">{$v.vocation_id}</td>
											<td style="text-align: center;line-height: 117px;">{if $v.free_week==1}是{else}否{/if}</td>
                                                                                        <td style="text-align: center;line-height: 117px;">{if $v.new_recommend ==1}是{else}否{/if}</td>
											<td style="text-align: center;line-height: 117px;">{$v.live}</td>
											<td style="text-align: center;line-height: 117px;">{$v.hurt}</td>
											<td style="text-align: center;line-height: 117px;">{$v.effect}</td>
											<td style="text-align: center;line-height: 117px;">{$v.difficulty}</td>
                                                                                        <td style="text-align: center;line-height: 117px;">{$v.story}</td>
											<td style="text-align: center;line-height: 117px;">{$v.history}</td>
											<td style="text-align: center;line-height: 117px;" class="skill" data-id="{$v.id}" data-sm="{$v.zhu_skill_id}" data-ss="{$v.fu_skill_id}">{$v.sm_name}/{$v.ss_name}</td>
											<td style="text-align: center;line-height: 117px;" class='summone' data-id="{$v.id}" data-sk-one="{$v.summoner_skill_one}" data-sk-two="{$v.summoner_skill_two}">
                                                                                        {foreach from=$v.s_name item=v1}
                                                                                            {$v1.name}/
                                                                                        {/foreach}
                                                                                        </td>
                                                                                        <td style="text-align: center;line-height: 117px;"><a href="index.php?class=Hero&action=updata&id={$v.id}" id="{$v.id}"><button  class="updata">修改</button></a> | <button id="{$v.id}" style="color: red;" class="delete">删除</button></td>
										</tr>
                                                                                {foreachelse}
                                                                                <tr>
                                                                                    <td>暂无数据</td>
                                                                                </tr>
                                                                            {/foreach}
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
 {/block}
 
 
 {block name=js}
     
     <script>
         {literal}
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
          {/literal}
     </script>
 
 {/block}