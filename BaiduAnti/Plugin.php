<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 反百度，弹提示
 * 
 * @package BaiduAnti
 * @author zgcwkj
 * @version 1.0.0
 * @link http://blog.zgcwkj.top
 */
class BaiduAnti_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->footer = array('BaiduAnti_Plugin', 'header');       
        return '插件安装成功';
    }

    public static function deactivate(){}

    public static function config(Typecho_Widget_Helper_Form $form){}

    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
    * 往底部添加内容
    */
    public static function header(){
        echo '<script src="' . Helper::options()->pluginUrl . '/BaiduAnti/jquery.min.js"></script>';
        echo '<script src="' . Helper::options()->pluginUrl . '/BaiduAnti/jquery.bpopup.min.js"></script>';
        echo '<script src="' . Helper::options()->pluginUrl . '/BaiduAnti/baidu.anti.js"></script>';
    }
}