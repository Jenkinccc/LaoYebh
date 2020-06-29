<?php
namespace app\admin\controller;
use app\common\controller\Adminbase;
use think\Db;
class Index extends Adminbase
{
    public function index()
    {
        $version = Db::query('SELECT VERSION() AS ver');
        $config  = [
            'url'             => $_SERVER['HTTP_HOST'],
            'document_root'   => $_SERVER['DOCUMENT_ROOT'],
            'server_os'       => PHP_OS,
            'server_port'     => $_SERVER['SERVER_PORT'],
            'server_soft'     => $_SERVER['SERVER_SOFTWARE'],
            'php_version'     => PHP_VERSION,
            // 'mysql_version'   => $version[0]['ver'],
            'max_upload_size' => ini_get('upload_max_filesize')
        ];
 
		$this->assign('config',$config);
		return $this->fetch();
    }


    /**
     * 退出
     */
    // http://127.0.0.1/public/admin/index/logout
    public function logout(){
        session('user',null);
        $this->success('退出成功、前往登录页面','Home/Index/index');
    }
}
