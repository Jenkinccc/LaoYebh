<?php
namespace app\admin\model;
use think\Db;
class Admin extends \think\Model
{
    /*登录验证*/
    public static function change($id,$data)
    {
        $changedata=Db::name('auth_rule')->where($id)->update($data);
        if ($changedata) {
            return true;
        }else{
            return false;
        }
    }

} 
