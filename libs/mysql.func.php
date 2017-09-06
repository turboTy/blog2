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




































?>