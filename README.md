#union-sdk-rongyun

调用示例:

```

use Union\Sdk\Rongyun\RongyunEntrance;

$RongCloud = RongyunEntrance::init();

echo ("\n***************** user **************\n");
// 获取 Token 方法
$result = $RongCloud->user()->getToken('userId1', 'username', 'http://www.rongcloud.cn/images/logo.png');
echo "getToken    ";
print_r($result);
echo "\n";

```