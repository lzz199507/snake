<?php
# @Date:   2018/03/21
# @Email:  runstp@163.com
# @Project: 阿正
# @Filename: common.php
# @Last modified time: 2018/03/28
# @License: MIT



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
 * 统一返回信息
 * @param $code
 * @param $data
 * @param $msge
 */
function msg($code, $data, $msg)
{
    return compact('code', 'data', 'msg');
}
