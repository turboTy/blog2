<?php
/**自定义在数据库中获取一个值的方法
 * @param string $table
 * @param string $field
 * @param string $condition
 * @param unknown $value
 * @return $value
 */
function sql_select_getonevalue($table, $field, $condition, &$value)
{
    global $db;
    
    $sql = "select $field as Value2412794000 from $table where $condition limit 0,1";
    $result = $db->query($sql);
   
    if(!$result)
    {
       echo "Error:".$db->error; 
       exit;
    }
    elseif (!$result->num_rows)
    {
        echo "No Result(sql_select_getonevalue)";
        exit;
    }
    $row = $result->fetch_assoc();
    $value = $row['Value2412794000'];
    
    return $value;
}


/**自定义在数据库中获取两个值的方法
 * @param string $table
 * @param string $field1
 * @param string $field2
 * @param string $condition
 * @param unknown $value1
 * @param unknown $value2
 * @return $value1,$value2
 */
function sql_select_get2value($table, $field1, $field2, $condition, &$value1, &$value2)
{
    global $db;
    
    $sql = "select $field1 as Value24127940001,$field2 as Value24127940002 from $table where $condition limit 0,2";
    $result = $db->query($sql);
    
    if(!$result)
    {
        echo "Error:".$db->error;
        exit;
    }
    elseif (!$result->num_rows)
    {
        echo "No Result(sql_select_get2value)";
        exit;
    }
    
    $row = $result->fetch_assoc();
    $value1 = $row['Value24127940001'];
    $value2 = $row['Value24127940002'];
    
    return $value1;
    return $value2;  
}


/**通过左连接的方式获取一系列值
 * @param string $table1
 * @param string $table2
 * @param string $condition1
 * @param string $condition2
 * @param array $array
 * @return $array
 */
function sql_leftjoin_getonevalue($table1, $table2, $condition1, $condition2, &$array)
{
    global $db;
    
    $sql = "select * from $table1 left join $table2 on $condition1 where $condition2 limit 0,1";
    $result = $db->query($sql);

    if(!$result)
    {
        echo "Error:".$db->error;
        exit;
    }
    elseif (!$result->num_rows)
    {
        echo "No Result(sql_leftjoin_getonevalue)";
        exit;
    }
    
    $array = $result->fetch_assoc();
    
    return $array;
}


/**封装查询数据库生成下拉菜单的方法
 * @param unknown $id
 * @param unknown $name
 * @param unknown $table
 * @param unknown $condition
 * @param unknown $selected_id
 * @param unknown $value
 * @return string
 */
function add_option($id, $name, $table, $condition, $selected_id, &$value)
{
    global $db;
    
    $sql = "select $id as id,$name as name from $table where $condition ";
    $result = $db->query($sql);
    
    if(!$result)
    {
        echo "Error:".$db->error;
        exit;
    }
    elseif (!$result->num_rows)
    {
        echo "No Result(add_option)";
        exit;
    }
    
    $value = "<option value='-1'>请选择</option>";
    while($row = $result->fetch_object())
    {
        if($row->id != $selected_id)
        {
            $value .= "<option value='$row->id'>$row->name</option>";
        }
        else 
        {
            $value .= "<option value='$row->id' selected='selected'>$row->name</option>";
        }
    }
    
    return $value;
}



































?>