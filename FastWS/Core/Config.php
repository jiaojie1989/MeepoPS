<?php
/**
 * Created by lixuan868686@163.com
 * User: lane
 * Date: 16/3/23
 * Time: 下午2:15
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
namespace FastWS\Core;

//解析配置文件
$config = parse_ini_file(FAST_WS_ROOT_PATH . 'config.ini', true);

//时区设置
date_default_timezone_set($config['system']['date_default_timezone_set']);

//Debug true为开启Debug模式
define('FASTWS_DEBUG', $config['system']['debug']);

//结束正在运行的多个进程时,间隔时间,单位秒
define('FASTWS_KILL_INSTANCE_TIME_INTERVAL', $config['system']['stop_multi_instance_time_interval']);

//是否立即刷送输出.调用方若没有ob_系列函数则不需要修改此值
define('FASTWS_IMPLICIT_FLUSH', $config['system']['implicit_flush']);


//Log路径
define('FASTWS_LOG_PATH', $config['file']['log_filename_prefix'] . date('Y-m-d').'.log');

//标准输出路径
define('FASTWS_STDOUT_PATH', $config['file']['stdout_path_prefix'] . date('Y-m-d').'.stdout');

//Pid文件路径
define('FASTWS_MASTER_PID_PATH', $config['file']['master_pid_path']);

//统计信息存储文件路径
define('FASTWS_STATISTICS_PATH', $config['file']['statistics_path']);

//TCP链接中默认最大的待发送缓冲区
define('FASTWS_TCP_CONNECT_DEFAULT_MAX_SEND_BUFFER_SIZE', $config['connection']['tcp_default_max_send_buffer_size']);

//TCP链接中所能接收的最大的数据包
define('FASTWS_TCP_CONNECT_MAX_PACKET_SIZE', $config['connection']['tcp_max_max_packet_size']);

//事件轮询中的超时时间
define('EVENT_POLL_TIMEOUT', $config['event']['event_poll_timeout']);