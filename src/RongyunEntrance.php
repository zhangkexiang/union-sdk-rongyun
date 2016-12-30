<?php
/**
 * Created by PhpStorm.
 * User: kexiangzhang
 * Date: 16/12/30
 * Time: 下午7:21
 */

namespace Union\Sdk\Rongyun;


class RongyunEntrance
{

    public static function init(){
        $conf = union_config('union.sdk.rongyun');

        $appKey = $conf['appKey'];
        $appSecret = $conf['appSecret'];
        return new RongCloud($appKey,$appSecret);
    }
}