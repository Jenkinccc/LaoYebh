<?php
namespace app\common\controller;
use app\common\controller\Base;
use think\Request;
/**
 * admin 基类控制器
 */
class AdminBase extends Base{ 
	/**
	 * 初始化方法
	 */
	public function _initialize(){
		parent::_initialize();
		$auth=new \think\Auth();
		$request = Request::instance();
		$m=$request->module();
		$c=$request->controller();
		$a=$request->action();
		$rule_name=$m.'/'.$c.'/'.$a;
		
		$result=$auth->check($rule_name,session('user')['id']);
		if(!$result){
			$this->error('您没有权限访问');
		}
	}




}

