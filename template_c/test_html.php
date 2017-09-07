<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<table width="500" height="40" border="1" cellpadding="0" cellspacing="0">
		<?php
if (!empty($_obj['array'])){
if (!is_array($_obj['array']))
$_obj['array']=array(array('array'=>$_obj['array']));
$_tmp_arr_keys=array_keys($_obj['array']);
if ($_tmp_arr_keys[0]!='0')
$_obj['array']=array(0=>$_obj['array']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['array'] as $rowcnt=>$array) {
$array['ROWCNT']=$rowcnt;
$array['ALTROW']=$rowcnt%2;
$array['ROWBIT']=$rowcnt%2;
$_obj=&$array;
?>
		<tr>
			<td><?php
echo $_obj['id'];
?>
</td>
			<td><?php
echo $_obj['user_name'];
?>
</td>
			<td><?php
echo $_obj['user_id'];
?>
</td>
			<td><?php
echo $_obj['reg_time'];
?>
</td>
			<td><?php
echo $_obj['telephone'];
?>
</td>
			<td><?php
echo $_obj['bron_time'];
?>
</td>
		</tr>
		<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
	</table>

	<div class="select" style="width:600;height:400;border:1px dashed #ccc;">
		<select name="user_select">
			<?php
echo $_obj['users'];
?>

		</select>
	</div>
</body>
</html>