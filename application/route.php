<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    

   

    'newindex/[:name]' => 'Index/Category/newindex',   
    'pc/[:name]' => 'Index/Category/pc',   
    'mobile/[:name]' => 'Index/Category/mobile',   
    'sysdown/[:name]' => 'Index/Category/sysdown',   
    'othersys/[:name]' => 'Index/Category/othersys',
    'dmknowledge/[:name]' => 'Index/Category/dmknowledge', 
    'lyjx/[:name]' => 'Index/Category/lyjx',
    'lybd/[:name]' => 'Index/Category/lybd',
    'report/[:name]' => 'Index/Category/report',
    'about/[:name]' => 'Index/Category/about', 
    'login/[:name]' => 'Index/Index/login',
    'regchk/[:name]' => 'Index/Index/regchk', 
    'error404/[:name]' => 'Index/Index/error404', 


   /* category */

   /*
   *PC
   */
    'qqinput/[:name]' => 'Index/pc/qqinput', 
    'FlashPlayer/[:name]' => 'Index/pc/FlashPlayer', 
    'x163music/[:name]' => 'Index/pc/x163music', 
    'todesk/[:name]' => 'Index/pc/todesk', 
    'yixun/[:name]' => 'Index/pc/yixun', 

    /*
   *mobile
   */
  'biquge/[:name]' => 'Index/mobile/biquge', 
  'm163music/[:name]' => 'Index/mobile/m163music', 
  'douyin/[:name]' => 'Index/mobile/douyin', 
  'zjzsp/[:name]' => 'Index/mobile/zjzsp', 
  'moo/[:name]' => 'Index/mobile/moo', 
  'ngvideo/[:name]' => 'Index/mobile/ngvideo', 
  'wbshare/[:name]' => 'Index/mobile/wbshare', 
  'tingxia/[:name]' => 'Index/mobile/tingxia', 
  'bilibili/[:name]' => 'Index/mobile/bilibili', 
  'vsco/[:name]' => 'Index/mobile/vsco', 
  'wifikey/[:name]' => 'Index/mobile/wifikey', 

  /*
   *dmknowledge
   */
  'bluetooth/[:name]' => 'Index/dmknowledge/bluetooth', 
  'sim/[:name]' => 'Index/dmknowledge/sim', 
  'cpu/[:name]' => 'Index/dmknowledge/cpu', 
  'wifi/[:name]' => 'Index/dmknowledge/wifi', 
  'internet/[:name]' => 'Index/dmknowledge/internet', 
  'broad/[:name]' => 'Index/dmknowledge/broad', 

    ];