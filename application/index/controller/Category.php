<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
class Category extends Controller

{
     /* 
     public function index()
    {
       return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    */

    /**
     * 文章列表
     */
     public function newindex()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0');
        $this->assign('friend', $friend);

        $pc = Db::name('index_pc')->where('del=0')->paginate(5);
        $this->assign('pc',$pc);
        
        $mobile = Db::name('index_mobile')->where('del=0')->paginate(5);
        $this->assign('mobile',$mobile);
        return $this->fetch();

        
    }
    public function pc()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        $pc = Db::name('index_pc')->where('del=0')->paginate(10);
        $this->assign('pc',$pc);
        
        return $this->fetch();
    }
    public function mobile()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);
        
        $mobile = Db::name('index_mobile')->where('del=0')->paginate(10);
        $this->assign('mobile',$mobile);

        return $this->fetch();
    }
    public function othersys()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function sysdown()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function dmknowledge()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        $dmknowledge = Db::name('index_dmknowledge')->where('del=0')->select();
        $this->assign('dmknowledge',$dmknowledge);

        return $this->fetch();
    }
    public function lyjx()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function lybd()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function report()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function about()
    {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(5);
        $this->assign('data', $data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
}