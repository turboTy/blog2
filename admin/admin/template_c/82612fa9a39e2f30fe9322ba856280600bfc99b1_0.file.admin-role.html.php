<?php
/* Smarty version 3.1.30, created on 2018-01-16 22:25:33
  from "C:\wamp\www\github\blog2\admin\admin\template\admin-role.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5e0b5d808761_08886583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82612fa9a39e2f30fe9322ba856280600bfc99b1' => 
    array (
      0 => 'C:\\wamp\\www\\github\\blog2\\admin\\admin\\template\\admin-role.html',
      1 => 1516112730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e0b5d808761_08886583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<title>角色管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 角色管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="javascript:;" onclick="admin_role_add('添加角色','admin-role-add.php','800')"><i class="Hui-iconfont">&#xe600;</i> 添加角色</a> </span> <span class="r">共有数据：<strong><?php echo $_smarty_tpl->tpl_vars['totalNum']->value;?>
</strong> 条</span> </div>
	<table class="table table-border table-bordered table-hover table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="6">角色管理2</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" value="" name=""></th>
				<th width="40">ID</th>
				<th width="200">角色名</th>
				<th>用户列表</th>
				<th width="300">描述</th>
				<th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminType_lists']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr class="text-c tr-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
				<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" name="adminTypeId"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['nameLists'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_BZ'];?>
</td>
				<td class="f-14"><!-- <a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.php',<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> --> <a title="删除" href="javascript:;" onclick="admin_role_del(this,<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
			<!-- <tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td>2</td>
				<td>总编</td>
				<td><a href="#">张三</a></td>
				<td>具有添加、审核、发布、删除内容的权限</td>
				<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','2')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td>3</td>
				<td>栏目主辑</td>
				<td><a href="#">李四</a>，<a href="#">王五</a></td>
				<td>只对所在栏目具有添加、审核、发布、删除内容的权限</td>
				<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','3')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<tr class="text-c">
				<td><input type="checkbox" value="" name=""></td>
				<td>4</td>
				<td>栏目编辑</td>
				<td><a href="#">赵六</a>，<a href="#">钱七</a></td>
				<td>只对所在栏目具有添加、删除草稿等权利。</td>
				<td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','admin-role-add.html','4')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_role_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
static/h-ui/js/H-ui.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
static/h-ui.admin/js/H-ui.admin.js"><?php echo '</script'; ?>
> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['css_path']->value;?>
lib/datatables/1.10.0/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
/*管理员-角色-添加*/
function admin_role_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-编辑*/
function admin_role_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-角色-删除*/
function admin_role_del(obj,id){
	layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: 'admin-role.php',
			dataType: 'json',
			data: {
				"actionCode": "delete",
				"id": id,
			},
			success: function(data){
				if(data.delStat){
					$(obj).parents("tr").remove();
					layer.msg(data.delText,{icon:1,time:1000});
				}else{
					layer.msg(data.delText,{icon:0,time:1000});
					return false;
				}
			},
			error: function(XmlHttpRequest, textStatus, errorThrown){
				layer.msg('error!',{icon:1,time:1000});
			},
		});		
	});
}

/* 批量删除 */
function datadel(){
	var obj = $("input[name='adminTypeId']");
	var ids = "";
	for(var i = 0; i < obj.length; i++ ){
		if(obj[i].checked){
			ids += obj[i].value + ",";
		}
	}
	str = ids.substr(0 ,ids.length - 1);
	//alert(str);
	
	if(ids == ""){
		layer.msg("请选择要删除的条目",{icon: 2,time: 2000});
		return false;
	}
	
	$.ajax({
		type: "post",
		url: "admin-role.php",
		dataType: "json",
		data: {
			"ids": str,
			"actionCode": "deleteMore",
		},
		success: function(data){
			if(data.delMStat){
				var arr = str.split(",");
				for(var j = 0; j < arr.length; j++)
				{
					$(".tr-"+arr[j]).remove();
				}
				$(".bk-gray > .r strong").html(data.delMCount);
				//$(obj).parents("tr").remove();
				layer.msg(data.delMText,{icon:1,time:1000});
			}else{
				layer.msg(data.delMText,{icon:0,time:1000});
				return false;
			}
		},
		error: function(XmlHttpRequest, textStatus, errorThrown){
			layer.msg('error!',{icon:1,time:2000});
		},
	});
	
}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
