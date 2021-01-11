<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title                   = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout         = 'login';
?>

<div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
</div>
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

		<?php $form = ActiveForm::begin( [
			'id'          => 'login-form',
			'layout'      => 'horizontal',
			'fieldConfig' => [
				'template' => "<div class=\"input-group mb-3\">
                                    {input}
                                    <div class=\"input-group-append\">
                    <div class=\"input-group-text\">
                        <span class=\"fas fa-envelope\"></span>
                    </div>
                               </div>
                               
                </div>
                               \n
                                <div class=\"col-lg-8\">{error}</div>",
			],
		] ); ?>

		<?= $form->field( $model, 'username' )->textInput( [
			'autofocus'   => true,
			'placeholder' => $model->getAttributeLabel( 'username' )
		] ) ?>

		<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => $model->getAttributeLabel( 'password' ) ] ) ?>

        <div class="row">   <!-- close this row div tag after submit button -->
            <div class="col-8">

				<?= $form->field( $model, 'rememberMe' )->checkbox( [
					'template' => '<div class="icheck-primary">{input} {label}</div><br/><div class=\"col-lg-8\">{error}</div>',
				] ) ?>
            </div>
            <div class="col-4">
				<?= Html::submitButton( 'Login', [
					'class' => 'btn btn-primary btn-block',
					'name'  => 'login-button'
				] ) ?>
            </div>
        </div>

		<?php ActiveForm::end(); ?>

        <!--<div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div>-->
        <!-- /.social-auth-links -->

        <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
        </p>
        <!--<p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
        </p>-->
    </div>
    <!-- /.login-card-body -->
</div>