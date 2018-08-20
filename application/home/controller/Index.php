<?php
namespace app\home\controller;
use think\Controller;

use Doctrine\Common\Cache\RedisCache;
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
	public function test()
	{
		 $cacheDriver = new RedisCache();
        // // 创建 redis 实例
        // $redis = new \Redis();
        // $redisconfig=  config('redis');$redis->connect($redisconfig['host'],$redisconfig['port']);  $redis->auth($redisconfig['password']);
        // $cacheDriver->setRedis($redis); 
		 var_dump($cacheDriver);
	}
}