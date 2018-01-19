<?php
/**
 * $Id:index.php 93 2010-09-07 15:35:32Z lingter $
 * 
 * @author : Lingter
 * @support : http://meiupic.meiu.cn
 * @copyright : (c)2011 meiu.cn lingter@gmail.com
 */
error_reporting(E_ALL & ~E_NOTICE);
define('CHECK_UPDATE_URL','http://meiupic.meiu.cn/check_update.php');		//检测更新地址

@ini_set('memory_limit', '128M');							//进程最大内存占用

define('FCPATH',__FILE__);
define('ROOTDIR',dirname(FCPATH).DIRECTORY_SEPARATOR);
define('COREDIR',ROOTDIR.'core'.DIRECTORY_SEPARATOR);
define('LIBDIR',COREDIR.'libs'.DIRECTORY_SEPARATOR);
define('INCDIR',COREDIR.'include'.DIRECTORY_SEPARATOR);
define('CTLDIR',COREDIR.'ctls'.DIRECTORY_SEPARATOR);
define('MODELDIR',COREDIR.'models'.DIRECTORY_SEPARATOR);
define('DATADIR',ROOTDIR.'data'.DIRECTORY_SEPARATOR);
define('PLUGINDIR',ROOTDIR.'plugins'.DIRECTORY_SEPARATOR);
define('MAGIC_GPC',get_magic_quotes_gpc());

if(!file_exists(ROOTDIR.'conf'.DIRECTORY_SEPARATOR.'config.php')){	//配置文件不存在
    header('Location: ./install/');									//引导至安装目录
    exit;
}

require_once(INCDIR.'bootstrap.inc.php');									//引用入口函数
meiu_bootstrap();															//进入入口