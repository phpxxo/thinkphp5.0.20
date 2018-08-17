<?php
namespace app\home\controller;
use think\Controller;
class Index extends Controller{
	private $redis = null;
	public function setval()
	{

		$this->redis->set('name','cch');

	}
	public function getval()
	{
		var_dump($this->redis->get('name'));
	}

	public function _initialize()
	{
		$this->redis = new \Redis;
		$this->redis->connect('127.0.0.1','6379');
	}
	
}