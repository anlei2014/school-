<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/main.css"/>
    <script type="text/javascript" src="/Public/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/jquery-2.1.4.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index/" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/admin/seller/seller">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>校园+</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>商铺管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/seller/seller"><i class="icon-font">&#xe008;</i>管理店铺信息</a></li>
                    </ul>

                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>商品种类管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/lan/addlan"><i class="icon-font">&#xe004;</i>添加种类</a></li>
                        <li><a href="/admin/lan/lan"><i class="icon-font">&#xe006;</i>管理商品种类</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>商品管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/goods/addgds"><i class="icon-font">&#xe005;</i>上传商品信息</a></li>
                        <li><a href="/admin/goods/design"><i class="icon-font">&#xe006;</i>管理商品信息</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>订单管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/ding/ding"><i class="icon-font">&#xe012;</i>管理订单信息</a></li>

                   </ul>

                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="/admin/seller/seller">首页</a><span class="crumb-step">&gt;</span>
                <a class="crumb-name" href="/admin/lan/lan">商品种类管理</a>
                <span class="crumb-step">&gt;</span><span>查看商品种类</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="/jscss/admin/design/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <div class="result-title">
                        <div class="result-list">
                            <a href="/admin/lan/addlan"><i class="icon-font"></i>新增商品种类</a>
                            <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        </div>
                    </div>
                    <div class="result-content">
                        <table class="result-tab" width="100%">
                            <tr>
                                <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                                <th>商品种类ID</th>
                                <th>商品种类名称</th>
                                <th>操作</th>
                            </tr>
                            <?php if(is_array($stype)): $i = 0; $__LIST__ = $stype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <td><?php echo ($vo["bs_tid"]); ?></td>
                                <td><?php echo ($vo["bs_tname"]); ?></td>
                                <td>
                                    <a class="link-update" href="/index.php/Admin/Lan/changelan/id/<?php echo ($vo["bs_tid"]); ?>">修改</a>
                                    <a class="delete" href="/index.php/Admin/Lan/delete/id/<?php echo ($vo["bs_tid"]); ?>" >删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                        <div class="list-page">
                            <?php echo ($pages); ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->


    <!--/main-->
</div>
</body>

<script type="text/javascript">
    $(document).ready(function(){
        console.log('jquery文件引入成功！');
        $(".delete").click(function(){
            var tag = confirm('真的要删除吗？');
            if(!tag){
                return false;
            }
        });
    });
</script>

</html>