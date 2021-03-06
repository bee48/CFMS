<?php
/**
 * Admin LTE asset bundle
 * @author Chanaka Karunarathne <hello@chanakalk.com>
 * @var $this \yii\web\View
 * @var $content string
 */

use app\assets\AdminLteAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use app\components\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$bundle = AdminLteAsset::register( $this );
?>

<?php
$navigationMenu = [];
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode( $this->title ) ?></title>
	<?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
<!--            <li class="nav-item d-none d-sm-inline-block">-->
<!--                <a href="index3.html" class="nav-link">Home</a>-->
<!--            </li>-->
<!--            <li class="nav-item d-none d-sm-inline-block">-->
<!--                <a href="#" class="nav-link">Contact</a>-->
<!--            </li>-->
        </ul>

        <!-- SEARCH FORM -->
        <!--<form class="form-inline ml-3">
            <div class="input-group input-group-md">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>-->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="custom-badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="custom-badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= Yii::$app->homeUrl ?>" class="brand-link custom-brand-logo">
			<?= Html::img( $bundle->baseUrl . '/img/AdminLTELogo.png', [
				'alt'   => 'AdminLTE Logo',
				'class' => 'brand-image img-circle elevation-3',
			] ) ?>
            <!--            <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
					<?= Html::img( $bundle->baseUrl . '/img/user2-160x160.jpg', [
						'alt'   => 'User Image',
						'class' => 'img-circle elevation-2',
                        'style' => 'width: 2.1em;'
					] ) ?>
                </div>
                <div class="info">
                    <a href="#" class="d-block layout-username">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
			<?php
			NavBar::begin( [
				'options' => [
					'class' => 'mt-2',
				],
			] );
			echo Nav::widget( [
				'encodeLabels' => false,
				'options' => [
					'class'          => "nav nav-pills nav-sidebar flex-column",
					'data-widget'    => "treeview",
					'role'           => "menu",
					'data-accordion' => "false"
				],
				'items'   => [
					[
						'label'   => '<i class="glyphicon glyphicon-home"></i>&nbsp;&nbsp;Home',
						'url'     => [ '/site/index' ],
						'options' => [ 'class' => 'nav-item' ],
                        'linkOptions' => ['class' => 'nav-link']
					],
					[
						'label'   => '<i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;About',
						'url'     => [ '/site/about' ],
						'options' => [ 'class' => 'nav-item' ],
						'linkOptions' => ['class' => 'nav-link']
					],
					[
						'label'   => '<i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;Contact',
						'url'     => [ '/site/contact' ],
						'options' => [ 'class' => 'nav-item' ],
						'linkOptions' => ['class' => 'nav-link']
					],
					Yii::$app->user->isGuest ? (
					[
						'label'   => '<i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Login',
						'url'     => [ '/site/login' ],
						'options' => [ 'class' => 'nav-item' ],
						'linkOptions' => ['class' => 'nav-link']
					]
					) : (
						'<li>'
						. Html::beginForm( [ '/site/logout' ], 'post' )
						. Html::submitButton(
							'<i class="glyphicon glyphicon-log-out"></i>&nbsp;&nbsp; Logout (' . Yii::$app->user->identity->username . ')',
							[ 'class' => 'btn btn-link logout' ]
						)
						. Html::endForm()
						. '</li>'
					)
				],
			] );
			NavBar::end();
			?>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding-left: 20px; padding-right: 20px">

		<?= Alert::widget() ?>

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?= $this->title ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
							<?= Breadcrumbs::widget( [
								'links'              => isset( $this->params['breadcrumbs'] ) ? $this->params['breadcrumbs'] : [],
								'itemTemplate'       => '<li class="breadcrumb-item">{link}</li>',
								// template for all links
								'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
								// template for active item
							] ) ?>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
		<?= $content ?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
