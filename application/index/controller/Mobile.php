<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
class Mobile extends Controller

{
     /* 
     public function index()
    {
       return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    */

    /**
     * app列表
     */
    public function biquge() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 1')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }

    public function m163music() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 2')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }

    public function douyin() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 3')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    
    public function zjzsp() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 4')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }

    public function moo() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 5')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function ngvideo() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 6')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function wbshare() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 7')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function tingxia() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 8')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function bilibili() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 9')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function vsco() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 10')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
    public function wifikey() 
    {
        $result = Db::name('index_mobile')
        ->where('id = 11')
        ->select();
        $this->assign('result', $result);

        $data = Db::name('article')->where('del=0')->paginate(5);
        $this->assign('data',$data);

        $friend = Db::name('index_friend')->where('del=0')->select();
        $this->assign('friend', $friend);

        return $this->fetch();
    }
}