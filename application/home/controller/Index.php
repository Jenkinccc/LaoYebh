<?php
namespace app\home\controller;
use app\common\controller\Homebase;
use think\Request;
use think\Db;
/**
 * Login Controller
 */
class Index extends Homebase{
	/**
	 * 首页
	 */
	public function index(){
        if(Request::instance()->isPost()){
            // 做一个简单的登录 组合where数组条件 
            $map=input('post.');
            // dump($map);
            // exit();
            $map['password']=md5($map['password']);
            $data=Db::name('users')->where($map)->find();
            if (empty($data)) {
                $this->error('账号或密码错误');
            }else{
                $sdata=[
	                'id'=>$data['id'],
	                'username'=>$data['username'],
	                'avatar'=>$data['avatar'],
	                'email'=>$data['email'],
	                'phone'=>$data['phone'],
                ];
                session('user',$sdata);

                $this->success('登录成功、前往管理后台','Admin/Index/index');
            }
        }else{
        return $this->fetch();
        }
	}

    /**
     * 退出
     */
    // http://127.0.0.1/public/home/index/logout
    public function logout(){
        session('user',null);
        $this->success('退出成功、前往登录页面','Home/Index/index');
    }



}

