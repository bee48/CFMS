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
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
<div class="login-box">
    <?= $content ?>
</div>
<!-- /.login-box -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
