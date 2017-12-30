<?php
/* Smarty version 3.1.30, created on 2017-12-30 09:29:34
  from "C:\wamp\www\github\blog2\admin\admin\template\admin-list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a46ebfe7b4276_21715044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '483f174f22d518941f80cbe8139698b65602d727' => 
    array (
      0 => 'C:\\wamp\\www\\github\\blog2\\admin\\admin\\template\\admin-list.html',
      1 => 1514597253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a46ebfe7b4276_21715044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="../../favicon.ico" >
<link rel="Shortcut Icon" href="../../favicon.ico" />
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
<![endif]-->
<title>管理员列表<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" id="refresh_btn" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 
	<form name="form_admin" id="form_admin" method="post" action="">
		加入时间范围：<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" onblur="getMinDate(this.value);" id="datemin" class="input-text Wdate" style="width:120px;" value="<?php echo $_smarty_tpl->tpl_vars['mindate']->value;?>
">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" onblur="getMaxDate(this.value);" id="datemax" class="input-text Wdate" style="width:120px;"  value="<?php echo $_smarty_tpl->tpl_vars['maxdate']->value;?>
">
		<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="adminNameFind" name="adminNameFind" value="<?php echo $_smarty_tpl->tpl_vars['adminNameFind']->value;?>
">
		<input type="hidden" name="mindate" value="<?php echo $_smarty_tpl->tpl_vars['mindate']->value;?>
">
		<input type="hidden" name="maxdate" value="<?php echo $_smarty_tpl->tpl_vars['maxdate']->value;?>
">
		<!-- <input type="hidden" name="actionCode" value="<?php echo $_smarty_tpl->tpl_vars['actionCode']->value;?>
"> -->
		<button type="button" class="btn btn-success" id="adminSearchBtn" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		<button type="button" class="btn btn-danger" id="adminClearBtn" name="">清空条件</button>
	</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加管理员','admin-add.php','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员3</a></span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['totalNum']->value;?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">管理员列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">登录名</th>
				<th width="90">手机</th>
				<th width="150">邮箱</th>
				<th>角色</th>
				<th width="130">加入时间</th>
				<th width="100">是否已启用</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if (isset($_smarty_tpl->tpl_vars['ASList']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ASList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="adminUserId"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_role'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['reg_time'];?>
</td>
					
					<?php if ($_smarty_tpl->tpl_vars['v']->value['is_banned'] == "0") {?>
					<td class="td-status"><span class="label label-success radius">已启用</span></td>
					<?php } else { ?>
					<td class="td-status"><span class="label radius">已停用</span></td>
					<?php }?>
					
					<td class="td-manage">
					
						<?php if ($_smarty_tpl->tpl_vars['v']->value['is_banned'] == "0") {?>
						<a id="" style="text-decoration:none" onClick="admin_stop(this,'<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
						<?php } else { ?>
						<a id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="text-decoration:none" onClick="admin_start(this,'<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> 
						<?php }?>
						
						<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','admin-add.php?actionCode=editUser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
						<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php } else { ?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminArr']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="adminUserId"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_role'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value['reg_time'];?>
</td>
					
					<?php if ($_smarty_tpl->tpl_vars['v']->value['is_banned'] == "0") {?>
					<td class="td-status"><span class="label label-success radius">已启用</span></td>
					<?php } else { ?>
					<td class="td-status"><span class="label radius">已停用</span></td>
					<?php }?>
					
					<td class="td-manage">
					
						<?php if ($_smarty_tpl->tpl_vars['v']->value['is_banned'] == "0") {?>
						<a id="" style="text-decoration:none" onClick="admin_stop(this,'<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a> 
						<?php } else { ?>
						<a id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="text-decoration:none" onClick="admin_start(this,'<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> 
						<?php }?>
						
						<a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','admin-add.php?actionCode=editUser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 
						<a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
			<!-- <tr class="text-c">
				<td><input type="checkbox" value="2" name=""></td>
				<td>2</td>
				<td>zhangsan</td>
				<td>13000000000</td>
				<td>admin@mail.com</td>
				<td>栏目编辑</td>
				<td>2014-6-11 11:11:42</td>
				<td class="td-status"><span class="label radius">已停用</span></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,'10001')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','admin-add.html','2','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr> -->
		</tbody>
	</table>
</div>

<!--_footer 作为公共模版分离出去-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
lib/layer/2.4/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
/static/h-ui/js/H-ui.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
static/h-ui.admin/js/H-ui.admin.js"><?php echo '</script'; ?>
> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
lib/My97DatePicker/4.8/WdatePicker.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
function getMinDate(date){
	$("input[name='mindate']").val(date);
}

function getMaxDate(date){
	$("input[name='maxdate']").val(date);
}


/*批量删除*/
function datadel(){
	var object = $("input[name='adminUserId']");
	var ids = " ";
	for (var i = 0; i < object.length; i++){
		if(object[i].checked){
			//alert($("input[name='adminUserId']:eq("+i+")").val());
			ids = ids + $("input[name='adminUserId']:eq("+i+")").val()+",";
		}
	}
	var str = ids.substr(0,ids.length-1);
	$.ajax({
		type: "post",
		dataType: "json",
		url: "admin-list.php",
		data: {
			"ids": str,
			"actionCode": "deleteUsers",
		},
		success: function(data){
			if(data.stat){
				layer.msg(data.text,{icon:1,time: 2000});
				location.reload();
			}else{
				layer.msg(data.text,{icon:1,time: 2000});
				return false;
			}
		},
		error: function(XmlHttpRequest, textStatus, errorThrown){
			layer.msg('error!',{icon:1,time:1000});
		},
	})
} 

/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: 'admin-list.php',
			dataType: 'json',
			data: {
				"actionCode": "deleteUser",
				"id": id,
			},
			success: function(data){
				if(data.stat){
					$(obj).parents("tr").remove();
					layer.msg(data.text,{
						icon:1,time:1000
						});
				}else{
					layer.msg(data.text,{icon:1,time:2000});
					return false;
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
	
}
//*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
			type: "post",
			dataType: "json",
			url: "admin-list.php",
			data : {
				"actionCode":"stopUser",
				"is_banned":"1",
				"id": id,
			},
			success: function(data){
				if(!data.stat){
					layer.msg(data.text,{icon:0,time:2000});
					return false;
				}else{
					$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
					$(obj).remove();
					layer.msg('已停用!',{
						icon: 5,time:1000
						});
					location.reload();
				}
			},
			error: function(XmlHttpRequest, textStatus, errorThrown){
				layer.msg('error!',{icon:1,time:1000});
			},
		})
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
			type: "post",
			dataType: "json",
			url: "admin-list.php",
			data: {
				"id": id,
				"actionCode": "startUser",
				"is_banned": "0",
			},
			success: function(data){
				if(data.stat){
					$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
					$(obj).remove();
					layer.msg('已启用!', {
						icon: 6,time:1000
						});
					location.reload();
				}else{
					layer.msg(data.text,{icon:1,time:2000});
					return false;
				}
			},
			error: function(XmlHttpRequest, textStatus, errorThrown){
				layer.msg('error!',{icon:1,time:1000});
			},
		})	
	});
}


//查询
$("#adminSearchBtn").click(function(){
	var datemin = $("input[name='mindate']").val();
	var datemax = $("input[name='maxdate']").val();
	var namefind = $("#adminNameFind").val(); 
	/*$.ajax({
		type: "post",
		dataType: "json",
		url: "admin-list.php",
		data: {
			"datemin": datemin,
			"datemax": datemax,
			"namefind": namefind,
			"actionCode": "search",
		},
		success: function(data){
			if(data.ASStat == "0"){
				layer.msg(data.ASText,{icon:1,time:2000});
				return false;
			}
		},
		error: function(XmlHttpRequest, textStatus, errorThrown){
			layer.msg('error!',{icon:1,time:1000});
		},
	}); */
	//$("#form_admin").submit();
	window.location.href = "admin-list.php?actionCode=search&mindate="+datemin+"&maxdate="+datemax+"&adminNameFind="+namefind;
})

function clearForm(formId){
	$(':input',formId) 
	.not(':button, :submit, :reset, :hidden') 
	.val('') 
	.removeAttr('checked') 
	.removeAttr('selected');
	window.location.href="admin-list.php";
}

//清空查询条件
$("#adminClearBtn").click(function(){
	clearForm("#form_admin");
})


 

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
