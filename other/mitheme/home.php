<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>miTheme</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://mao10.info/mi3/wp-content/themes/mi3/js/html5shiv.js"></script>
        <script src="http://mao10.info/mi3/wp-content/themes/mi3/js/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
</head>
<body style="">
<div class="container">
    <div class="row">
        <header class="hidden-xs">
            <div class="col-sm-3">
                <div id="logo">
                    <a href="http://mao10.info/mi3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="search-top" class="visible-sm"></div>
                <form id="search" role="form" method="get" action="http://mao10.info/mi3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="s">
                        <span class="help-block hidden-xs hidden-sm">
                            <a href="http://mao10.info/mi3/?s=小米手机3">小米手机3</a>
                            <a href="http://mao10.info/mi3/?s=小米电视">小米电视</a>
                            <a href="http://mao10.info/mi3/?s=变形金刚">变形金刚</a>
                            <a href="http://mao10.info/mi3/?s=百变后盖">百变后盖</a>
                            <a href="http://mao10.info/mi3/?s=优惠套装">优惠套装</a>
                        </span>
                        <a href="javascript:$('#search').submit();" class="sub">
                            <i class="icon-common icon-common-search iconsear" style="display: block;"></i>
                            <i class="icon-common icon-common-searchhover iconsearbg" style="display: none;"></i>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-sm-1 hidden-sm">
            </div>
            <div class="col-sm-5 col-md-4">
                <div id="head-right">
                    <p>
                        <a href="http://mao10.info/mi3/sign-in">注册 | 登陆</a>
                        <a id="cart" href="http://mao10.info/mi3/cart">
                            <i class="glyphicon glyphicon-shopping-cart"></i> 购物车 <span>0</span>
                        </a>
                    </p>
                    <p class="ann">
                        下轮开放购买：9月10日中午12点
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </header>
        <nav id="topnav" class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">
                        导航
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                </button>
                <a class="navbar-brand visible-xs" href="http://mao10.info/mi3">
                    米3              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="accessories-title" class="nav navbar-nav col-md-3 col-lg-2 hidden-xs hidden-sm">
                    <li>
                        <a href="javascript:;">
                            全部商品分类 <i class="glyphicon glyphicon-list pull-right"></i>
                        </a>
                    </li>
                    
    <div class="row " id="all-side">
        <div class="col-md-12 hidden-xs hidden-sm">
            <ul class="list-group" id="accessories">
                <li class="list-group-item">
                    <a href="#" class="pull-left">购买手机</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米手机 1
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米手机 2
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米手机 3
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">小米电视与盒子</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米电视
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米盒子
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    盒子配件
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">后盖与个性化配件</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    后盖
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    贴纸
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    挂饰
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    手机支架
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    手机绕线器
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">保护套与贴膜</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    保护套
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    贴膜
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    防尘塞
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">移动电源与电池</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米移动电源
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    手机移动电源
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    电池
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    充电器
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    线材
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">耳机与音箱</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米活塞耳机
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米耳机
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    蓝牙音箱
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">小米生活方式</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    米兔玩偶
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米T恤
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    背包
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    生活周边
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">存储与路由器</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    存储卡
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    读卡器
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米路由器
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a href="#" class="pull-left">手机优惠套装</a>
                    <span class="glyphicon glyphicon-chevron-right pull-right"></span>
                    <div class="clearfix"></div>
                    <div class="list-group">
                        <span class="tri">
                            <i></i>
                        </span>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米2S优惠套装
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    红米手机优惠套装
                                </a>
                            </div>
                        </div>
                        <div class="media list-group-item">
                            <a class="img" href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    小米1/1S优惠套装
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <span class="bg"></span>
            </ul>
        </div>
    </div>              </ul>
                <ul id="menu-%e4%b8%bb%e5%af%bc%e8%88%aa" class="nav navbar-nav col-md-9 col-lg-10"><li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-22"><a href="http://mao10.info/mi3/">首页</a></li>
<li id="menu-item-72" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-72 dropdown"><a href="http://mao10.info/mi3/category/all" class="dropdown-toggle" data-toggle="dropdown">全部产品</a>
<ul class="sub-menu dropdown-menu">
    <li id="menu-item-82" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-82"><a href="http://mao10.info/mi3/category/all/peijian">配件</a></li>
    <li id="menu-item-83" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-83"><a href="http://mao10.info/mi3/category/all/chongdian">充电器</a></li>
    <li id="menu-item-84" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-84"><a href="http://mao10.info/mi3/category/all/zhoubian">周边</a></li>
    <li id="menu-item-85" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-85"><a href="http://mao10.info/mi3/category/all/tiem">贴膜</a></li>
</ul>
</li>
<li id="menu-item-81" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81"><a href="http://mao10.info/mi3/news">全部测评</a></li>
</ul>           </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div><div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-2 hidden-xs hidden-sm"></div>
        <div class="col-md-9 col-lg-10">
            <div id="carousel-generic" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-generic" data-slide-to="0" class=""></li>
                                        <li data-target="#carousel-generic" data-slide-to="1" class=""></li>
                                                            <li data-target="#carousel-generic" data-slide-to="2" class=""></li>
                                                                            </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item">
                        <a href="http://www.mao01.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                    </div>
                                        <div class="item active left">
                        <a href="http://www.mao01.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                    </div>
                                                            <div class="item next left">
                        <a href="http://www.mao01.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                    </div>
                                                                            </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left">
                    </span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right">
                    </span>
                </a>
            </div>
            <div class="row visible-md" id="under-carousel">
                <div class="col-md-4">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                </div>
                <div class="col-md-4">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                </div>
                <div class="col-md-4">
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="home-main" class="hidden-xs hidden-sm">
            <div class="col-md-12 home-main-grid" id="home-main-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        新品上架
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                            <a href="http://mao10.info/mi3/20"><img class="big" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                <div class="row">
                                                                                                            <div class="col-md-6">
                                        <a href="http://mao10.info/mi3/41" class="last"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                    </div>
                                                                        <div class="col-md-6">
                                        <a href="http://mao10.info/mi3/27" class="last"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                    </div>
                                                                    </div>
                            </div>
                            <div class="col-md-3 col-lg-2">
                                                                                                                                <a href="http://mao10.info/mi3/25"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                                                <a href="http://mao10.info/mi3/23" class="last"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                            </div>
                            <div class="col-lg-2 visible-lg">
                                                                                                                                <a href="http://mao10.info/mi3/51" class="trim"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                                                <a href="http://mao10.info/mi3/49" class=""><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                                                <a href="http://mao10.info/mi3/46" class="trim"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                                                <a href="http://mao10.info/mi3/39" class="last"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                            </div>
                            <div class="col-lg-2 visible-lg">
                                                                                                                                <a href="http://mao10.info/mi3/37" class="trim"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                                                <a href="http://mao10.info/mi3/34" class=""><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                                                <a href="http://mao10.info/mi3/32" class="trim"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                                                <a href="http://mao10.info/mi3/30" class="last"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                            </div>
                            <div class="col-md-3 col-lg-2">
                                                                                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/51">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/51">fotopro手机自拍架</a>
        </h5>
        <p>58元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/51" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                              <ul class="list-group">
                                                                                                                                                <a href="http://mao10.info/mi3/news/beierjg" class="list-group-item">
                                        贝尔金送的网线好吗                                   </a>
                                                                                                            <a href="http://mao10.info/mi3/news/lanyayx" class="list-group-item">
                                        蓝牙音箱有什么功能                                   </a>
                                                                                                            <a href="http://mao10.info/mi3/news/mituhuanh" class="list-group-item">
                                        米兔如何换货                                  </a>
                                                                                                            <a href="http://mao10.info/mi3/news/rusgans" class="list-group-item">
                                        入手小米移动电源感受                                  </a>
                                                                                                            <a href="http://mao10.info/mi3/news/shiyonglepao" class="list-group-item">
                                        使用乐泡移动电源体验                                  </a>
                                                                                                            <a href="http://mao10.info/mi3/news/3dhougai" class="list-group-item visible-md">
                                        3D百变后盖测评                                    </a>
                                                                                                            <a href="http://mao10.info/mi3/news/sandisk" class="list-group-item visible-md">
                                        SanDisk(闪迪) MicroSDHC(TF) Class4 存储卡                                    </a>
                                                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
                        <div class="col-md-12 home-main-grid" id="home-main-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        热评商品
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4" id="home-main-center-one">
                                <a href="" class="thumbnail sticky">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
                                    <div class="caption">
                                        <h5>
                                            捷波朗酷丽升级版                                        </h5>
                                        <p class="visible-lg">
                                            适用于小米手机1 / 1S / 2 / 2A / 2S, 红米手机                                       </p>
                                    </div>
                                </a>
                                <div class="row">
                                                                                                            <div class="col-md-6 col-lg-6">
                                        <div class="thumbnail">
                                            <a href="http://mao10.info/mi3/39"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="SanDisk 8GB存储卡"></a>
                                        </div>
                                    </div>
                                                                        <div class="col-md-6 col-lg-6">
                                        <div class="thumbnail">
                                            <a href="http://mao10.info/mi3/49"><img class="small" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png" alt="emoi硅胶钥匙包"></a>
                                        </div>
                                    </div>
                                                                    </div>
                            </div>
                            <div class="col-md-3 col-lg-2">
                                                                                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/49">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/49">emoi硅胶钥匙包</a>
        </h5>
        <p>39元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/49" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                              <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/23">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/23">双材质亮彩保护套</a>
        </h5>
        <p>49元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/23" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                          </div>
                            <div class="col-md-3 col-lg-2">
                                                                                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/41">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/41">乐泡移动电源12000mAh</a>
        </h5>
        <p>339元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/41" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                              <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/39">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/39">SanDisk 8GB存储卡</a>
        </h5>
        <p>34.9元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/39" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                          </div>
                            <div class="col-lg-2 visible-lg">
                                                                                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/18">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/18">小蜜蜂手机支架</a>
        </h5>
        <p>19元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/18" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                              <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/46">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/46">趣味防尘塞</a>
        </h5>
        <p>3.9元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/46" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                          </div>
                            <div class="col-lg-2 visible-lg">
                                                                                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/37">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/37">简约收纳袋</a>
        </h5>
        <p>4.9元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/37" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                              <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/34">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/34">MI2/2S高透防眩光贴膜</a>
        </h5>
        <p>49元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/34" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                                                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 home-main-grid" id="home-main-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        特卖商品
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4" id="home-main-bottom-one">
                                <a href="" class="thumbnail">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
                                    <div class="caption">
                                        <p>小米方盒子蓝牙音箱</p>
                                    </div>
                                </a>
                            </div>
                                                                                                                <div class="col-md-3 col-lg-2">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-over"></span>    <a href="http://mao10.info/mi3/32">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/32">羊驼版米兔</a>
        </h5>
        <p>49元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/32" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                                                    <div class="col-md-3 col-lg-2">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-t"></span>   <a href="http://mao10.info/mi3/30">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/30">IVS吸盘蓝牙音箱</a>
        </h5>
        <p>99元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/30" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                                                    <div class="col-lg-2 visible-lg">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-new"></span> <a href="http://mao10.info/mi3/27">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/27">大脸猫 3D百变后盖</a>
        </h5>
        <p>79元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/27" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                                                    <div class="col-lg-2 visible-lg">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-9"></span>   <a href="http://mao10.info/mi3/25">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/25">贝尔金智能电源转换器</a>
        </h5>
        <p>169元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/25" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="home-main-sm" class="visible-xs visible-sm home-main-grid">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        新品上架
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8 visible-sm">
                                                                                                <a href="http://mao10.info/mi3/20"><img class="big" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                <div class="row">
                                                                                                            <div class="col-sm-6">
                                        <a href="http://mao10.info/mi3/41"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                    </div>
                                                                        <div class="col-sm-6">
                                        <a href="http://mao10.info/mi3/27"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                    </div>
                                                                    </div>
                            </div>
                            <div class="col-sm-4 visible-sm">
                                                                                                <a href="http://mao10.info/mi3/25"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                                <a href="http://mao10.info/mi3/23"><img class="middle" src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                                                            </div>
                                                                                    <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/51">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/51">fotopro手机自拍架</a>
        </h5>
        <p>58元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/51" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/49">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/49">emoi硅胶钥匙包</a>
        </h5>
        <p>39元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/49" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/46">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/46">趣味防尘塞</a>
        </h5>
        <p>3.9元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/46" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/41">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/41">乐泡移动电源12000mAh</a>
        </h5>
        <p>339元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/41" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                    </div>
                    </div>
                </div>
                                <div class="panel panel-default">
                    <div class="panel-heading">
                        热评商品
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                                                    <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/49">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/49">emoi硅胶钥匙包</a>
        </h5>
        <p>39元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/49" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/23">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/23">双材质亮彩保护套</a>
        </h5>
        <p>49元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/23" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/41">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/41">乐泡移动电源12000mAh</a>
        </h5>
        <p>339元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/41" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
        <a href="http://mao10.info/mi3/39">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/39">SanDisk 8GB存储卡</a>
        </h5>
        <p>34.9元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/39" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                    </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        特卖商品
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                                                    <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-over"></span>    <a href="http://mao10.info/mi3/32">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/32">羊驼版米兔</a>
        </h5>
        <p>49元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/32" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-t"></span>   <a href="http://mao10.info/mi3/30">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/30">IVS吸盘蓝牙音箱</a>
        </h5>
        <p>99元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/30" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-new"></span> <a href="http://mao10.info/mi3/27">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/27">大脸猫 3D百变后盖</a>
        </h5>
        <p>79元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/27" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                        <div class="col-xs-12 col-sm-6">
                                <div class="thumbnail pr home-loop">
    <span class="icon-saleoff icon-saleoff-9"></span>   <a href="http://mao10.info/mi3/25">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png">
    </a>
    <div class="caption">
        <h5>
            <a href="http://mao10.info/mi3/25">贝尔金智能电源转换器</a>
        </h5>
        <p>169元</p>
        <p class="last">
            <a rel="nofollow" href="http://mao10.info/mi3/25" class="last"><i class="glyphicon glyphicon-plus-sign"></i> 查看商品详情</a>
        </p>
    </div>
</div>                          </div>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <footer>
        <div class="panel panel-default visible-md visible-lg">
            <div class="panel-body">
                <div id="foot-1" class="row">
                    <div class="col-md-3">
                        <a href="#">
                            <span>7</span>
                            <strong><i>天</i>退货保障</strong>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <span>15</span>
                            <strong><i>天</i>换货承诺</strong>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <span>100</span>
                            <strong><i>元起</i>全场免运费</strong>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#">
                            <span>420</span>
                            <strong><i>余家</i>售后服务网点</strong>
                        </a>
                    </div>
                </div>
                <div id="foot-2" class="row">
                    <div class="col-md-9">
                        <div class="row">
                                    <div class="col-md-3">      <h5>近期文章</h5>       <ul>
                    <li>
                <a href="http://mao10.info/mi3/51" title="fotopro手机自拍架">fotopro手机自拍架</a>
                        </li>
                    <li>
                <a href="http://mao10.info/mi3/49" title="emoi硅胶钥匙包">emoi硅胶钥匙包</a>
                        </li>
                    <li>
                <a href="http://mao10.info/mi3/46" title="趣味防尘塞">趣味防尘塞</a>
                        </li>
                    <li>
                <a href="http://mao10.info/mi3/41" title="乐泡移动电源12000mAh">乐泡移动电源12000mAh</a>
                        </li>
                    <li>
                <a href="http://mao10.info/mi3/39" title="SanDisk 8GB存储卡">SanDisk 8GB存储卡</a>
                        </li>
                </ul>
        </div><div class="col-md-3"><h5>近期评论</h5><ul id="recentcomments"><li class="recentcomments">admin3r发表在《<a href="http://mao10.info/mi3/39#comment-8">SanDisk 8GB存储卡</a>》</li><li class="recentcomments">tesh发表在《<a href="http://mao10.info/mi3/49#comment-7">emoi硅胶钥匙包</a>》</li><li class="recentcomments">albeni发表在《<a href="http://mao10.info/mi3/23#comment-6">双材质亮彩保护套</a>》</li><li class="recentcomments">abv发表在《<a href="http://mao10.info/mi3/41#comment-5">乐泡移动电源12000mAh</a>》</li></ul></div><div class="col-md-3"><h5>文章归档</h5>        <ul>
            <li><a href="http://mao10.info/mi3/date/2013/09" title="2013年九月">2013年九月</a></li>
        </ul>
</div><div class="col-md-3"><h5>分类目录</h5>       <ul>
    <li class="cat-item cat-item-10"><a href="http://mao10.info/mi3/category/all/chongdian" title="查看充电器下的所有文章">充电器</a>
</li>
    <li class="cat-item cat-item-1"><a href="http://mao10.info/mi3/category/all" title="查看全部产品下的所有文章">全部产品</a>
</li>
    <li class="cat-item cat-item-12"><a href="http://mao10.info/mi3/category/all/zhoubian" title="查看周边下的所有文章">周边</a>
</li>
    <li class="cat-item cat-item-5"><a href="http://mao10.info/mi3/category/all/xm1" title="查看小米手机1下的所有文章">小米手机1</a>
</li>
    <li class="cat-item cat-item-6"><a href="http://mao10.info/mi3/category/all/xm2" title="查看小米手机2下的所有文章">小米手机2</a>
</li>
    <li class="cat-item cat-item-7"><a href="http://mao10.info/mi3/category/all/xm2s" title="查看小米手机2S下的所有文章">小米手机2S</a>
</li>
    <li class="cat-item cat-item-8"><a href="http://mao10.info/mi3/category/all/hm" title="查看红米手机下的所有文章">红米手机</a>
</li>
    <li class="cat-item cat-item-9"><a href="http://mao10.info/mi3/category/all/tiem" title="查看贴膜下的所有文章">贴膜</a>
</li>
    <li class="cat-item cat-item-11"><a href="http://mao10.info/mi3/category/all/peijian" title="查看配件下的所有文章">配件</a>
</li>
        </ul>
</div>                      </div>
                    </div>
                    <div class="col-md-3">
                        <div id="online">
                            <ul class="list-unstyled">
                                <li class="item1"><i class="glyphicon glyphicon-earphone"></i> 400-100-5678</li>
                                <li class="item2">仅收市话费，周一至周日8:00-18:00</li>
                                <li class="item3"><a class="btn btn-success btn-lg btn-block" href="#" target="_blank"><i class="glyphicon glyphicon-exclamation-sign"></i> 24小时在线客服</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="foot-bottom" class="text-center">
            <p>Copyright 2011-2013 www.xxx.com allright reserved. 网站设计 <a href="http://myresume.sinaapp.com/" title="wordpress建站">weishai</a></p>
            <p class="hidden-xs-hide" style="display:none;">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mitheme_picwrap.png"></a>
            </p>
        </div>
    </footer>
</div>
<!-- Load JS here for greater good =============================-->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/cat.js"></script>
</body>
</html>