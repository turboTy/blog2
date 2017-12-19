<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<div style="width: 240px; height: 160px;">
		<ul>
			<?php
if (!empty($_obj['arr'])){
if (!is_array($_obj['arr']))
$_obj['arr']=array(array('arr'=>$_obj['arr']));
$_tmp_arr_keys=array_keys($_obj['arr']);
if ($_tmp_arr_keys[0]!='0')
$_obj['arr']=array(0=>$_obj['arr']);
$_stack[$_stack_cnt++]=$_obj;
foreach ($_obj['arr'] as $rowcnt=>$arr) {
$arr['ROWCNT']=$rowcnt;
$arr['ALTROW']=$rowcnt%2;
$arr['ROWBIT']=$rowcnt%2;
$_obj=&$arr;
?>
			<li><<?php
echo $_obj['a'];
?>
></li>
			<?php
}
$_obj=$_stack[--$_stack_cnt];}
?>
		</ul>
	</div>
</body>
</html>