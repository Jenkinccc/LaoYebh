<?php
namespace app\admin\controller;
use app\common\controller\Adminbase;
use think\Db;
use think\Request;
/**
 * 
 * 后台权限管理
 */
class Rule extends AdminBase{

//******************权限***********************

    /*权限列表*/
    public function rule_list(){
        $data=Db::name('auth_rule')->getTreeData('tree','id','title');
        $assign=array(
            'data'=>$data
            );
        $this->assign($assign);
        return $this->fetch();
    }

    /**
     * 添加权限
     */
    public function add(){
        $data=input('post.');
        unset($data['id']);
        $result=Db::name('auth_rule')->insert($data);
        if ($result) {
            $this->success('添加成功','Admin/Rule/rule_list');
        }else{
            $this->error('添加失败');
        }
    }

    /**
     * 修改权限
     */
    public function edit(){
        $data=input('post.'); 
        $info=['title'=>$data['title'],'name'=>$data['name']];
        $result=Db::name('auth_rule')->where(["id"=>$data['id']])->update($info);
        // $result=\app\admin\model\Admin::change(["id"=>$data['id']],$info);
        if ($result) {
            $this->success('修改成功','Admin/Rule/rule_list');
        }else{
            $this->error('您没有做任何修改');
        }
    }

    /**
     * 删除权限
     */
    public function delete($id){
        $map=array(
            'id'=>$id
            );
        $result=Db::name('auth_rule')->delete($map);
        if($result){
            $this->success('删除成功','Admin/Rule/rule_list');
        }else{
            $this->error('请先删除子权限');
        }

    }

    /**
     * 角色列表
     */
    public function rule_group(){
        $data=Db::name('auth_group')->select();
        $assign=array(
            'data'=>$data
            );
        $this->assign($assign);
        return $this->fetch();
    }


     /**
     * 添加角色
     */
    public function add_group(){
        $data=input('post.');
        unset($data['id']);
        $result=Db::name('auth_group')->insert($data);
        if ($result) {
            $this->success('添加成功','Admin/Rule/rule_group');
        }else{
            $this->error('添加失败');
        }
    }

    /**
     * 修改角色
     */
    public function edit_group(){
        $data=input('post.');
        $result=Db::name('auth_group')->where(["id"=>$data['id']])->update(['title'=>$data['title']]);
        // $result=Db::name('auth_group')->editData($map,$data);
        if ($result) {
            $this->success('修改成功','Admin/Rule/rule_group');
        }else{
            $this->error('您没有做任何修改');
        }
    }

    /**
     * 删除角色
     */
    public function delete_group($id){
        if ($id==1) {
            $this->error('该分组不能被删除');
        }
        $map=array(
            'id'=>$id
            );
        $result=Db::name('auth_group')->where($map)->delete();
        if ($result) {
            $this->success('删除成功','Admin/Rule/rule_group');
        }else{
            $this->error('删除失败');
        }
    }


    /**
     * 分配权限
     */
    public function rule_distribution($id){
        if(Request::instance()->post()){
            $data=input('post.');
            $datas['rules']=implode(',', $data['rule_ids']);
            $result=Db::name('auth_group')->where(['id'=>$data['id']])->update($datas);
            // $result=Db::name('auth_group')->editData($map,$data);
            if ($result) {
                $this->success('操作成功','Admin/Rule/rule_group');
            }else{
                $this->error('操作失败');
            }
        }else{
            $group_data=Db::name('auth_group')->where(array('id'=>$id))->find();
            $group_data['rules']=explode(',', $group_data['rules']);
            // 获取规则数据
            $rule_data=Db::name('auth_rule')->getTreeData('level','id','title');
            $assign=array(
                'group_data'=>$group_data,
                'rule_data'=>$rule_data
                );
            // dump($group_data);
            $this->assign($assign);
            return $this->fetch();
        }
    }

}
