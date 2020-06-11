<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="<?=Yii::$app->charset?>">
    <?php $this->registerCsrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>

    <!-- Custom fonts for this template-->
    <link href="/admin/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
    <!-- Custom styles for this template-->
    <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img/logo.png">
    <!-- Bootstrap core JavaScript-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="page-top">
<?php $this->beginBody()?>
<style>
html {
    font-size: 1em !important;
}
</style>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php if (!Yii::$app->user->isGuest) {?>
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/portfolio">
                <div class="sidebar-brand-text mx-3">Админ панель</div>
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"><br>
          
            <li class="nav-item">
              <a class="nav-link" href="/admin/services">
                <span>Услуги</span>
              </a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider my-0"><br>

            <li class="nav-item">
              <a class="nav-link" href="/admin/portfolio">
                <span>Портфолио</span>
              </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <?php }?>

         <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <?php if (!Yii::$app->user->isGuest) {?>
                <li class="nav-item dropdown no-arrow">
                    <?php $form = ActiveForm::begin(['action' => '/admin/site/logout', 'method' => 'post']);?>
                        <span class="nav-link dropdown-toggle" style="cursor: pointer;" onclick="Logout(event)">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout (<?=Yii::$app->user->identity->username?>)</span>
                        </span>
                        <button type="submit" id="submit" class="logout" style="display: none;"></button>
                    <?php ActiveForm::end();?>
                </li>
            <?php }?>
          </ul>

        </nav>
        <!-- End of Topbar -->
      <!-- Main Content -->
      <div id="content">
           <!-- Page Heading -->
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>                                                                   -->
        <?php if(Yii::$app->requestedRoute != 'site/login'): ?>
            <?=Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
        <?php endif; ?>
        <?=Alert::widget()?>
        <?=$content?>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; MAINT 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="/admin/vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/admin/js/sb-admin-2.min.js"></script>

  <script>
    function Logout(event){
        event.preventDefault();
        event.stopImmediatePropagation();
        $('#submit').click();
    }
  </script>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
