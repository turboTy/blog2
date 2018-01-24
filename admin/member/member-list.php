<?php
require_once("../../smarty/libs/Smarty.class.php");
require_once ("../../configs/db_conn.php");
require_once ("../../inc/global_params.php");
require_once '../../libs/mysql.func.php';

class MemberList
{
  protected $db;
  
  public function __construct($db)
  {
    this->$db = $db;
  }
  
  public function member_list()
  {
     
  }
  
}


