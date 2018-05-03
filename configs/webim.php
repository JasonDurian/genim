<?php
$config['server'] = array(
    //监听的HOST
    'host'   => '0.0.0.0',
    //监听的端口
    'port'   => '9501',
    //WebSocket的URL地址，供浏览器使用的
    'url'    => 'ws://im.server.localhost:9501',
    //用于Comet跨域，必须设置为html所在的URL
    'origin' => 'http://im.server.localhost:80',
);

$config['swoole'] = array(
    'log_file'        => ROOT_PATH . '/log/swoole.log',
    'worker_num'      => 1,
    //不要修改这里
    'max_request'     => 0,
    'task_worker_num' => 1,
    //是否要作为守护进程
    'daemonize'       => 0,
);

$config['webim'] = array(
    //聊天记录存储的目录
    'log_file' => ROOT_PATH . '/log/webim.log',
    'send_interval_limit' => 2, //只允许1秒发送一次
    'storage' => array(
        'history_num' => 10,
    )
);

$config['storage'] = array(
    'history_num' => 10,
);

return $config;