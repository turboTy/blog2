<?php
/* Smarty version 3.1.30, created on 2017-05-19 21:44:58
  from "C:\AppServ\www\github\blog\templates\test.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ef6da856120_80572946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1b8df474c41b3354e3bda1a4e625bc5e8ea8b3f' => 
    array (
      0 => 'C:\\AppServ\\www\\github\\blog\\templates\\test.html',
      1 => 1495201495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591ef6da856120_80572946 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>test file</title>
</head>
<body>
	<table border="1" cellpadding="0" cellspacing="0" width="600" height="400">
		<?php
$__section_s_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_s']) ? $_smarty_tpl->tpl_vars['__smarty_section_s'] : false;
$__section_s_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_s_0_total = $__section_s_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_s'] = new Smarty_Variable(array());
if ($__section_s_0_total != 0) {
for ($__section_s_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] = 0; $__section_s_0_iteration <= $__section_s_0_total; $__section_s_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']++){
?>
		<?php
$__section_p_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_p']) ? $_smarty_tpl->tpl_vars['__smarty_section_p'] : false;
$__section_p_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_p_1_total = $__section_p_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_1_total != 0) {
for ($__section_p_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_1_iteration <= $__section_p_1_total; $__section_p_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['title'];?>
</td>
			</tr>
		<?php
}
}
if ($__section_p_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_p'] = $__section_p_1_saved;
}
?>
		<?php
}
}
if ($__section_s_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_s'] = $__section_s_0_saved;
}
?>
	</table>
</body>
</html><?php }
}
