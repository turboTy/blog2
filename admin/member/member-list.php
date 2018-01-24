<?php
require_once ("../../configs/db_conn.php");
require_once ("../../inc/global_params.php");
require_once '../../libs/mysql.func.php';
require_once("../../smarty/libs/Smarty.class.php");

//实例化Smarty模版
$t = new Smarty();

$t->setTemplateDir("./template");
$t->setCompileDir("./template_c"); 
$t->setCacheDir("./smarty_cache");

$t->setLeftDelimiter("{{");
$t->setRightDelimiter("}}");

$t->assign("css_path","../");  


class MemberList
{
	//protected $db;
	public $namefind;

	public function __construct()
	{
		global $db;
		global $t;
		$this->db = $db;
		$this->t = $t;
	}

	public function member_list()
	{
		$sqlL = "select * from member_users order by id";
		$resultL = $this->db->query($sqlL);

		if(!$resultL)
		{
			echo '{"listStat":"0","listText":"查询失败"}';
			exit;
		}

		while ($rowL = $resultL->fetch_assoc()) 
		{
			$memberArr[] = $rowL;
		}
		$this->t->assign("memberArr",$memberArr);
	}

	public function member_search($namefind)
	{
		$sqlS = "select * from member_users where member_name = '$namefind' limit 1";
		$resultS = $this->db->query($sqlS);

		if(!$resultS)
		{
			echo '{"searchStat":"-1","searchText":"查询失败"}';
			exit;
		}

		if($resultS->num_rows < 1)
		{
			echo '{"searchStat":"0","searchText":"无此用户"}';
			//exit;
		}

		$rowS = $resultS->fetch_assoc();
		$this->t->assign("searchArr",$rowS);
	}

	
}

$Member = new MemberList();
$action_code = empty($action_code)?"list":$action_code;

switch ($action_code) 
{
	case 'list':
		$Member->member_list();
		break;

	case 'search':
		$Member->member_search($namefind);
		break;
	
	default:
		case 'list':
		break;
}

$t->display("member-list.html");

?>
