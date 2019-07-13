<?php
/**
 * Team:没有蛀牙
 * Coding by yangyuzhe 1711396,20190712
 * This is the main backond layout
 */
/**
 * @var string $content
 * @var \yii\web\View $this
 */
use backend\assets\AppAsset;
use yii\helpers\Html;use yiister\gentelella\assets\Asset;

$bundle = yiister\gentelella\assets\Asset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
<div class="hidden">
<?php $menuItems[] =
    Html::beginForm(['/site/logout'], 'post',['id'=>'login-form'])
    . Html::submitButton(
        'Logout ',
        ['class' => 'btn btn-link logout','id'=>'logoutbutton']
    )
    . Html::endForm();
echo implode($menuItems);
?>
</div>
<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="http://placehold.it/128x128" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2> <?php echo Yii::$app->user->identity->username ?></h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => [
                                    ["label" => "Home", "url" => ['/site/index'], "icon" => "home"],
                                    ["label" => "UserMember",
                                        "icon" => "user-circle",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "user-member", "url" => ["/pedia-user-member/index"],"icon" => "user-circle-o"],
                                            ["label" => "user-medal", "url" => ["/pedia-user-medal/index"],"icon" => "grav"],
                                            ["label" => "user-adorn", "url" => ["/pedia-user-adorn/index"],"icon" => "lock"],
                                        ],
                                    ],
                                    [
                                        "label" => "UserGroup",
                                        "icon" => "address-book",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "user-group", "url" => ["/pedia-user-group/index"],"icon" => "users"],
                                            ["label" => "user-perm", "url" => ["/pedia-user-perm/index"],"icon" => "key"],
                                        ],
                                    ],
                                    [
                                        "label" => "Entry",
                                        "url" => "#",
                                        "icon" => "book",
                                        "items" => [
                                            [
                                                "label" => "BasicInformation",
                                                "url" => ["/pedia-entry-basicinfo/index"],
                                                "icon" => "info",
                                                /**"badge" => "123",*/
                                            ],
                                            [
                                                "label" => "HistoryVersion",
                                                "url" => ["/pedia-entry-historyversion/index"],
                                                "icon" => "history",
                                                /**"badge" => "new",
                                                "badgeOptions" => ["class" => "label-success"],*/
                                            ],
                                            [
                                                "label" => "Report",
                                                "url" => ["/pedia-entry-report/index"],
                                                "icon" => "bell",
                                                /**"badge" => "!",
                                                "badgeOptions" => ["class" => "label-danger"],*/
                                            ],
                                            [
                                                "label" => "RelatedLinks",
                                                "url" => ["/pedia-entry-relatedlinks/index"],
                                                "icon" => "clone",
                                                /**"badge" => "!",
                                                "badgeOptions" => ["class" => "label-danger"],*/
                                            ],
                                        ],
                                    ],
                                    [
                                        "label" => "Category",
                                        "icon" => "navicon",
                                        "url" => "#",
                                        "items" => [
                                            ["label" => "category", "url" => ["/pedia-entry-category/index"],"icon" => "folder-o"],
                                            ["label" => "classification", "url" => ["/pedia-entry-classification/index"],"icon" => "search"],
                                        ],
                                    ],
                                    ["label" => "AboutUs", "url" => ['/pedia-user-aboutus'], "icon" => "phone-square"],
                                ],
                            ]
                        )
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->

                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="http://placehold.it/128x128" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
<!--                                <li><a href="javascript:;">  Profile</a>-->
<!--                                </li>-->
                                <li>
                                    <a href="javascript:;">
<!--                                        <span class="badge bg-red pull-right">50%</span>-->
                                        <span>Settings</span>
                                    </a>
                                </li>
<!--                                <li>-->
<!--                                    <a href="javascript:;">Help</a>-->
<!--                                </li>-->
                                <li>
                                    <a href="javascript:void(0);" id="logouthref"><i class="fa fa-sign-out pull-right"></i>Log Out</a>
                                </li>
                                <?php AppAsset::addScript($this,'@web/js/logout.js')?>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image" />
                                    </span>
                                        <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                        <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a href="/">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>

            <?= $content ?>
        </div>
        <!-- /page content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>
<!-- /footer content -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
