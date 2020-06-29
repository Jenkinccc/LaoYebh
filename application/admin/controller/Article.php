<?php

namespace app\admin\controller;

use app\common\controller\Adminbase;
use think\Db;
use think\Request;

/**
 * 文章
 */
class Article extends Adminbase {

    /**
     * 文章列表
     */
    public function index() {
        $data = Db::name('article')->where('del=0')->order('create_time desc')->paginate(10);
        $this->assign('data', $data);
        return $this->fetch();
    }

    //附带时间限制新增文章
    public function add_art() {
        if (Request::instance()->post()) {
            if (session('user')['username'] == 'admin') {
                $data['title'] = trim(input('post.title'));
                $data['abstract'] = trim(input('post.abstract'));
                $data['content'] = trim(input('post.content'));
                $data['create_time'] = date("Y-m-d H:i:s", time());
                $data['author'] = session('user')['username'];
                $result = Db::name('article')->insert($data);
                if ($result) {
                    $this->success('添加成功', 'Admin/Article/index');
                } else {
                    $this->error('添加失败');
                }
                exit;
            } else {
                $user = session('user')['username'];
                $map = array(
                    'author' => $user,
                    'del' => 0,
                );
                $datas = Db::name('article')->where($map)->order('create_time desc')->find();
                $lastadd = strtotime($datas['create_time']);
                if ((time() - $lastadd) <= 60) {
                    echo "<script> alert('一分钟内禁止重复发布信息');location.href='../Article/index';</script>";
                } else {
                    $data['title'] = trim(input('post.title'));
                    $data['abstract'] = trim(input('post.abstract'));
                    $data['content'] = trim(input('post.content'));
                    $data['create_time'] = date("Y-m-d H:i:s", time());
                    $data['author'] = $user;
                    $result = Db::name('article')->insert($data);
                    if ($result) {
                        $this->success('添加成功', 'Admin/Article/index');
                    } else {
                        $this->error('添加失败');
                    }
                    exit;
                }
            }
        }
        return $this->fetch();
    }

    // //没有时间限制新增文章
    // public function add_art(){
    // 	if(Request::instance()->post()){
    // 		// echo "<script> alert('一分钟内禁止重复发布信息');location.href='../Article/index';</script>";
    // 		$data['title']  =  trim(input('post.title'));
    //         $data['abstract']  =  trim(input('post.abstract'));
    //         $data['content']  =  trim(input('post.content'));
    //         $data['create_time']=date("Y-m-d H:i:s",time());
    //         $data['author']=session('user')['username'];
    //         $result=Db::name('article')->add($data);
    //         if ($result) {
    //          $this->success('添加成功','Admin/Article/index');
    //      }else{
    //          $this->error('添加失败');
    //      }
    //      exit;
    // 	}
    // 	return $this->fetch();
    // }
    //删除文章
    public function del_art($id) {
        $map = array(
            'id' => $id
        );
        $result = Db::name('article')->where($map)->update(array('del' => 1));
        if ($result) {
            $this->success('删除成功', 'Admin/Article/index');
        } else {
            $this->error('删除失败');
        }
    }

    //文章编辑
    public function edi_art($id) {
        if (Request::instance()->post()) {
            $data['title'] = trim(input('post.title'));
            $data['abstract'] = trim(input('post.abstract'));
            $data['content'] = trim(input('post.content'));
            $data['create_time'] = date("Y-m-d H:i:s", time());
            // 组合where数组条件
            $map['id'] = trim(input('post.id'));
            trace($map);
            $result = Db::name('article')->where($map)->update($data);
            if ($result) {
                // 操作成功
                $this->success('编辑成功', 'Admin/Article/index');
            } else {

                $this->error("编辑失败");
            }
        } else {
            // 获取用户数据
            $data = Db::name('article')->find($id);
            trace($data);
            $this->assign('data', $data);
            return $this->fetch();
        }
    }

}
