<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:39:"../html_template/index/index\index.html";i:1493730844;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="vip-admin|管理后台|管理系统|后台管理|后台模板">
    <meta name="description" content="简单快捷的管理后台">
    <meta name="baidu-site-verification" content="NZykz75RaO" />
    <title>vip-admin 管理系统</title>
    <link rel="stylesheet" type="text/css" href="__STATIC__/__AF__/layui/css/layui.css" /><link rel="stylesheet" type="text/css" href="__STATIC__/__IC__/style.css" />
    <link rel="icon" href="__STATIC__/__AI__/code.png">
</head>
<body class="site-home" style="background-color: #eee;">

    <div class="layui-header header header-index">
        <div class="layui-main">
            <a class="logo" href="<?php echo url('/'); ?>"><img src="__STATIC__/__II__/logo.png" alt="logo"></a>
            <ul class="layui-nav">
                <li class="layui-nav-item">
                    <a href="<?php echo url('admin/login/index'); ?>" target="_blank">前往后台</a>
                </li>
                <li class="layui-nav-item">
                    <a href="http://vip-admin.com/blog/" target="_blank">社区</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="site-banner">
        <div class="site-banner-bg"
             style="background-image: url('__STATIC__/__AI__/bg.png');">
        </div>
        <div class="site-banner-main">
            <div class="layui-anim site-desc site-desc-anim">vip-admin 管理系统</div>
            <div class="site-download">
                <a href="#gather" class="layui-inline site-down"><cite class="layui-icon">&#xe628;</cite>授权申请</a>
            </div>
            <div class="site-version">
                <span>当前版本：<cite class="site-showv"><?php echo $version; ?></cite></span>
                <span>众筹量：<em class="site-showdowns"><?php echo count($gather); ?></em></span>
            </div>
        </div>
    </div>

    <div class="layui-main">
        <!-- describe -->
        <blockquote class="layui-elem-quote">
            <h1>vip-admin 管理系统</h1>
            <p>该系统使用 <a href="http://vip-admin.com/" target="_blank">vip-admin Html v1.6.0</a> 后台模板HTML</p>
            <p>该系统基于layui1.0.9+thinkphp5.0.6开发而成</p>
            <p>该系统作用于二次开发，轻松高效的开发一款属于你自己的管理系统</p>
            <p>该系统集成了系统配置、权限管理、用户管理、日志记录、数据库备份等基础功能。</p>
            <p>该系统集成了安装引导程序，拿到源码直接安装，省去麻烦的创建数据库导入sql等步骤</p>
        </blockquote>
        <!-- gather -->
        <div class="layui-collapse">
            <div class="layui-colla-item">
                <h2 class="layui-colla-title" id="gather">众筹开源</h2>
                <div class="layui-colla-content layui-show">
                    <p>规则:</p>
                    <p>1.添加QQ:<em>1145457389</em>或扫描下方QQ二维码添加,账号名称:【随丶】</p>
                    <p>2.扫描下方二维码提供<em class="money">29~50</em>元(RMB)支持作者,即可获得 【vip-admin管理系统v1.0.5】 源码。</p>
                    <p>3.获得权限的用户即可终身免费升级该系统。</p>
                    <p>4.当该系统达到众筹金额目标时,该系统自动转为开源系统,免费提供下载源码。</p>
                    <p>5.如果想预览该系统功能请点击右上角【管理系统】即可进行系统预览。</p>
                    <p>6.账号:root 密码:123456 注:该账号并不是超级管理员并不能代表所有功能</p>
                    <div class="pay-box">
                        <div>
                            <img src="__STATIC__/__II__/qq.png" title="QQ" alt="QQ" />
                            <p>QQ</p>
                        </div>
                        <div>
                            <img src="__STATIC__/__II__/zfb.png" title="支付宝" alt="支付宝" />
                            <p>支付宝</p>
                        </div>
                        <div>
                            <img src="__STATIC__/__II__/wx.png" title="微信" alt="微信"/>
                            <p>微信</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">进度</h2>
                <div class="layui-colla-content layui-show">
                    <!-- target -->
                    <p class="target"><span>现在拥有:<em class="money"><?php echo $nowTotal; ?></em>元</span><span>开源目标:<em class="money"><?php echo $total; ?></em>元</span></p>
                    <!-- progress -->
                    <div class="layui-progress layui-progress-big layui-progress-gather" lay-showPercent="true">
                        <div class="layui-progress-bar layui-bg-red" lay-percent="<?php echo $percentage; ?>%"></div>
                    </div>
                </div>
            </div>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">众筹墙</h2>
                <div class="layui-colla-content layui-show">
                    <!-- gather -->
                    <table class="layui-table">
                        <tr>
                            <th>昵称</th>
                            <th>金额</th>
                            <th>时间</th>
                        </tr>
                        <?php if($gather != null): foreach($gather as $list): ?>
                        <tr>
                            <td><?php echo $list['name']; ?></td>
                            <td><?php echo $list['money']; ?></td>
                            <td><?php echo $list['time']; ?></td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr><td colspan="3">暂无数据</td></tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- version -->
        <div class="layui-collapse" lay-accordion>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">版本:v1.1.0</h2>
                <div class="layui-colla-content layui-show">
                    <p>vip-admin 管理系统v1.1.0 更新时间:2017-03-21</p>
                    <p>更新日志:</p>
                    <p>1.更新后台模板为vip-admin Html v1.5.1版本。</p>
                    <p>2.修复已知BUG。</p>
                    <div class="show-img-box">
                        <img src="__STATIC__/__II__/1.1.0-1.png" alt="show">
                        <img src="__STATIC__/__II__/1.1.0-2.png" alt="show">
                        <img src="__STATIC__/__II__/1.1.0-3.png" alt="show">
                    </div>
                </div>
            </div>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">版本:v1.0.5</h2>
                <div class="layui-colla-content">
                    <p>vip-admin 管理系统v1.0.5 更新时间:2017-03-18</p>
                    <p>更新日志:</p>
                    <p>1.程序安装引导程序，拿到源码直接安装，省去麻烦的创建数据库导入sql等步骤。</p>
                    <p>2.代码语法整合更加直观，更加容易理解。</p>
                    <p>3.修复已知BUG。</p>
                    <div class="show-img-box">
                        <img src="__STATIC__/__II__/install-1.png" alt="show">
                        <img src="__STATIC__/__II__/install-2.png" alt="show">
                        <img src="__STATIC__/__II__/install-3.png" alt="show">
                    </div>
                </div>
            </div>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">版本:v1.0.0</h2>
                <div class="layui-colla-content">
                    <p>vip-admin 管理系统v1.0.0 更新时间:2017-03-16</p>
                    <p>更新日志:</p>
                    <p>1.该系统基于vip-admin Html v1.1.0 模板。</p>
                    <p>2.该系统使用layui1.0.9+thinkphp5.0.6开发而成。</p>
                    <p>3.该系统作用于二次开发，轻松高效的开发一款属于你自己的管理系统。</p>
                    <p>4.该系统集成了系统配置、权限管理、用户管理、日志记录、数据库备份等基础功能。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="layui-footer footer footer-index">
        <div class="layui-main">
            <p>2017 © <a href="http://www.vip-admin.com/">vip-admin.com</a> </p>
            <p>
                <a href="javascript:;" target="_blank">示例</a>
                <a href="javascript:;" target="_blank">捐赠</a>
                <a href="mailto:xianxin@layui.com">联系</a>
                <a href="javascript:;" target="_blank">蜀ICP备17005881号</a>
            </p>
        </div>
    </div>

<script type="text/javascript" src="__STATIC__/__AF__/layui/layui.js"></script>
<script>
    layui.use(['element', 'layer'], function () {
        var $ = layui.jquery, element = layui.element, layer = layui.layer;

    });
</script>
</body>
</html>