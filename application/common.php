<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * null转空字符串
 * [nulltostr description]
 * @author [YangChi] <[18210427950@qq.com]>
 * @DateTime [2018-09-19T09:47:48+0800]
 * @version  [version]
 * @param    [type]                     $arr [description]
 * @return   [type]                          [description]
 */
function nulltostr($arr)
{

    foreach ($arr as $k=>$v){
        if(is_null($v)) {
            $arr [$k] = '';
        }
        if(is_array($v)) {
            $arr [$k] = nulltostr($v);
        }
    }
    return $arr;
}