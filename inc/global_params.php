<?php
/*  Copyright Shenzhen Hanma Software Technology Co.,Ltd
 * Author : Mao Xiangqian
 * Create time: 2007-01-06
//get���ع���
$getfilter = "\\<.+javascript:window\\[.{1}\\\\x|<.*=(&#\\d+?;?)+?>|<.*(data|src)=data:text\\/html.*>|\\b(alert\\(|confirm\\(|expression\\(|prompt\\(|benchmark\s*?\(.*\)|sleep\s*?\(.*\)|load_file\s*?\\()|<[a-z]+?\\b[^>]*?\\bon([a-z]{4,})\s*?=|^\\+\\/v(8|9)|\\b(and|or)\\b\\s*?([\\(\\)'\"\\d]+?=[\\(\\)'\"\\d]+?|[\\(\\)'\"a-zA-Z]+?=[\\(\\)'\"a-zA-Z]+?|>|<|\s+?[\\w]+?\\s+?\\bin\\b\\s*?\(|\\blike\\b\\s+?[\"'])|\\/\\*.*\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT(\\(.+\\)|\\s+?.+?)|UPDATE(\\(.+\\)|\\s+?.+?)SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE)(\\(.+\\)|\\s+?.+?\\s+?)FROM(\\(.+\\)|\\s+?.+?)|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
//post���ع���
$postfilter = "<.*=(&#\\d+?;?)+?>|<.*data=data:text\\/html.*>|\\b(alert\\(|confirm\\(|expression\\(|prompt\\(|benchmark\s*?\(.*\)|sleep\s*?\(.*\)|load_file\s*?\\()|<[^>]*?\\b(onerror|onmousemove|onload|onclick|onmouseover)\\b|\\b(and|or)\\b\\s*?([\\(\\)'\"\\d]+?=[\\(\\)'\"\\d]+?|[\\(\\)'\"a-zA-Z]+?=[\\(\\)'\"a-zA-Z]+?|>|<|\s+?[\\w]+?\\s+?\\bin\\b\\s*?\(|\\blike\\b\\s+?[\"'])|\\/\\*.*\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT(\\(.+\\)|\\s+?.+?)|UPDATE(\\(.+\\)|\\s+?.+?)SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE)(\\(.+\\)|\\s+?.+?\\s+?)FROM(\\(.+\\)|\\s+?.+?)|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";
//cookie���ع���
$cookiefilter = "benchmark\s*?\(.*\)|sleep\s*?\(.*\)|load_file\s*?\\(|\\b(and|or)\\b\\s*?([\\(\\)'\"\\d]+?=[\\(\\)'\"\\d]+?|[\\(\\)'\"a-zA-Z]+?=[\\(\\)'\"a-zA-Z]+?|>|<|\s+?[\\w]+?\\s+?\\bin\\b\\s*?\(|\\blike\\b\\s+?[\"'])|\\/\\*.*\\*\\/|<\\s*script\\b|\\bEXEC\\b|UNION.+?SELECT(\\(.+\\)|\\s+?.+?)|UPDATE(\\(.+\\)|\\s+?.+?)SET|INSERT\\s+INTO.+?VALUES|(SELECT|DELETE)(\\(.+\\)|\\s+?.+?\\s+?)FROM(\\(.+\\)|\\s+?.+?)|(CREATE|ALTER|DROP|TRUNCATE)\\s+(TABLE|DATABASE)";


 * Update history:
 * 2012-08-02:
   ��Ӷ������Ͳ����Ĺ���.  ���ֲ�����Ĳ�����,��ֹSQLע�빥��. xxid , ��ÿ��ϵͳ��ͬ.
   base_id,  class_id,  major_id,  dep_id,  content_id,ids..  add by James Mao.
 *2015-02-06��
 *��Ӷ�js��script���Ĺ��� add by Tom, ��ֹ XSS����;
 *[[ δ���;
   �ο�  360_safe3.php
    XSS����վ�ű���Cross-site scripting��
    CSRF����վ����α�죨Cross-site request forgery��
  2015/04/25,   
    
 */
if (!get_magic_quotes_gpc())
{
	define("_hanma_server_not_add_slash_",1);
}

//����js,��ֹ XSS����;
 
while((list($gKey,$gValue)=each($_REQUEST)))
{	
	if(is_array($gValue))
	{
		foreach($gValue as $kk=>$vv)
		{
			//����script
			$vv = preg_replace("/<(script.*?)>(.*?)<(\/script.*?)>/si", '', $vv);
			//����scriptδ���
			$vv = preg_replace("/<(script.*?)>/si", '', $vv);
			//����iframe
			$vv = preg_replace("/<(iframe.*?)>(.*?)<(\/iframe.*?)>/si", '', $vv);
			//����meta
			$vv = preg_replace("/<(meta.*?)\/?>/si", '', $vv);
			
			$_REQUEST["$gKey"]["$kk"] = $vv;
		}
	}
	else
	{
		//����script
		$gValue = preg_replace("/<(script.*?)>(.*?)<(\/script.*?)>/si", '', $gValue);
		//����scriptδ���
		$gValue = preg_replace("/<(script.*?)>/si", '', $gValue);
		//����iframe
		$gValue = preg_replace("/<(iframe.*?)>(.*?)<(\/iframe.*?)>/si", '', $gValue);
		//����meta
		$gValue = preg_replace("/<(meta.*?)\/?>/si", '', $gValue);
		
		
		$_REQUEST["$gKey"] = $gValue;
	}
}

//�����ָ�����õ���ʼλ��
reset($_REQUEST);

while((list($gKey,$gValue)=each($_REQUEST)))
{
	global $gKey;
	global $$gKey;

	if(isset($$gKey))
	{
		continue;
	}
	
	$$gKey=$gValue;
	if(is_array($$gKey))
	{
		$tar_hanmasoftparames_58F8445F5159 = array();
		foreach ($$gKey as $kkey=>$vvalue)
		{
		    $tar_hanmasoftparames_58F8445F5159[$kkey] = $vvalue;
		    //if (!get_magic_quotes_gpc())
		    if (defined("_hanma_server_not_add_slash_"))
		    {
		        $tar_hanmasoftparames_58F8445F5159[$kkey] = addslashes($tar_hanmasoftparames_58F8445F5159[$kkey]);
		    }
		    $tar_hanmasoftparames_58F8445F5159[$kkey]=  strip_tags($tar_hanmasoftparames_58F8445F5159[$kkey]);
		    
		    
			//1. ����.
			//$tar_hanmasoftparames_58F8445F5159[$kkey] = preg_replace("/\W*(and|or|select|insert|delete|update|from|union|into|load_file|outfile|table|database)\s/i",'',$vvalue);
			//$tar_hanmasoftparames_58F8445F5159[$kkey] = preg_replace("/\W+(and|or|xor|select|delete|update|from|union|into|load_file|outfile|database|benchmark|sleep|set|execute)\W+/i",'',$vvalue);
		   //$tar_hanmasoftparames_58F8445F5159[$kkey] = preg_replace("/\W+(and|or|xor|select|delete|update|from|union|into|load_file|outfile|database|benchmark|sleep|set|execute|where|hex|substr|where|having|information_schema)\W+/i",'',$tar_hanmasoftparames_58F8445F5159[$kkey]);
		    $tar_hanmasoftparames_58F8445F5159[$kkey] = preg_replace("/[\W+|\d+](and|or|xor|select|delete|update|from|union|into|load_file|outfile|database|benchmark|sleep|set|execute|where|hex|substr|where|having|information_schema|\|\||&&)\W+/i",'',$tar_hanmasoftparames_58F8445F5159[$kkey]);
		    
			// 2. ��������ж�,2012/08/02,JAMES MAO
			if(in_array(strtolower($gKey),array("comregid","base_id","class_id","major_id","dep_id","id","studentid","file_id","student_id","content_id","page_id","vote_id","province_id","option_id","gradyear")))
			//if(strlen($gKey)>=2 && strtolower(substr($gKey,-2))=="id")
			//if(	strlen($gKey)>=2 && strtolower(substr($gKey,-2))=="id"&&(!in_array($gKey,array("menu_guid","menu_pguid","sel_id"))))
			{
				$tar_hanmasoftparames_58F8445F5159[$kkey] = intval($tar_hanmasoftparames_58F8445F5159[$kkey]);
			}
			//else if(strlen($gKey)>=3 && strtolower(substr($gKey,-3))=="ids")
			//{
			//	$tar_hanmasoftparames_58F8445F5159[$kkey] = intval($tar_hanmasoftparames_58F8445F5159[$kkey]);
			//}
		
		}
		
		$$gKey = $tar_hanmasoftparames_58F8445F5159;
	}
	else 
	{
	    if (defined("_hanma_server_not_add_slash_"))
	    {
	        $$gKey = addslashes($$gKey);
	    }
	    
	    $$gKey = strip_tags($$gKey);
	    
		//$$gKey = preg_replace("/\W*(and|or|select|insert|delete|update|from|union|into|load_file|outfile|table|database)\s/i",'',$gValue);
		//$$gKey = preg_replace("/\W+(and|or|xor|select|delete|update|from|union|into|load_file|outfile|database|benchmark|sleep|set|execute|where|hex|substr|where|having|information_schema)\W+/i",'',$$gKey);
	    $$gKey = preg_replace("/[\W+|\d+](and|or|xor|select|delete|update|from|union|into|load_file|outfile|database|benchmark|sleep|set|execute|where|hex|substr|where|having|information_schema|\|\||&&)\W+/i",'',$$gKey);
	     
		
		// ��������ж�,2012/08/02,JAMES MAO
		if(in_array(strtolower($gKey),array("comregid","base_id","class_id","major_id","dep_id","id","studentid","file_id","student_id","comregid","content_id","page_id","vote_id","province_id","option_id","gradyear")
		           )	 
		  )  
		//if(strlen($gKey)>=2 && strtolower(substr($gKey,-2))=="id"&&(!in_array($gKey,array("menu_guid","menu_pguid","sel_id")))
		  
		{
			$$gKey = intval($$gKey);
		}
	}
}


/*
while((list($gKey,$gValue)=each($_SESSION)))
{
	global $gKey;
	global $$gKey;
	
	$$gKey=$gValue;
}
*/	

?>