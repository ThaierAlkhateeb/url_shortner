<?php
class Shortner{
	protected $db;

	public function __construct(){
		//connect db
		$this->db= new mysqli('localhost','root','','website');

	}
	public function generateCode($num){
		return base_convert($num,10,36);

	}
	public function makeCode($url){
		$url= trim($url);
		if(!filter_var($url,FILTER_VALIDATE_URL)){
			return '';
		}
		$url= $this->db->escape_string($url);
		$exists= $this->db->query("SELECT code from links where url = '{$url}' ");
		if($exists->num_rows){
			return 	$exists->fetch_object()->code;
		}else{
			//insert without code
			$insert= $this->db->query("insert into links (url , created )values('{$url}',NOW())");
			$code= $this->generateCode($this->db->insert_id);

			//update the table to insert the code
			$this->db->query("update links set code='{$code}' where url='{$url}'");
			return $code;
		}


	}
	public function getUrl($code){
		$code= trim($code);

		$result= $this->db->query("select url from links where code= '{$code}'");
		if($result->num_rows)
		$url= $result->fetch_object()->url;
		return $url;

	}
}