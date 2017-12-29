
{extends file='layout.tpl'}
{block name=title}
    管理员管理
{/block} 

{block name=content}
    
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
                                                                            {foreach from=$adminList item=v}
										<tr class="">
											<td>{$v.admin_id}</td>
											<td>{$v.admin_name}</td>
											<td>{$v.admin_pwd}</td>
											<td class="center">{$v.admin_time|date_format:'%Y-%m-%d %H:%M:%S'}</td>
                                                                                        <td><a class="edit" href="javascript:;">{if $v.admin_status ==1}<button class="openclose" id="{$v.admin_id}{$v.admin_status}" >开启</button>{else}<button class="openclose" id="{$v.admin_id}{$v.admin_status}">关闭</button>{/if}</a></td>
{*                                                                                        <a href="index.php?class=Admin&action=reset&resetid={$v.admin_id}">*}
                                                                                        <td><button class="reset" id="{$v.admin_id}">重置密码</button></td>
											<td><button class="delete" id="{$v.admin_id}">Delete</button></td>
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
          {/literal}
     </script>
 
 {/block}