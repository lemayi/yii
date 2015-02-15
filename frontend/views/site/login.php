<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
$this->cssFiles = ['site.css', 'account.css'];
?>


<div class="container">
    <div class="container-box cc">
        <div class="container-left">
            <h1>经常登录的同志是好同志</h1>
            <form method="post">
            <div class="account-form">
                <div class="row">
                    <label for="username">用户名</label>
                    <input name="username" type="text">
                    <div class="error">测试一下</div>
                </div>
                <div class="row">
                    <label for="password">密码</label>
                    <input name="password" type="text">
                    <div class="error">测试一下</div>
                </div>
                <div class="row">
                    <button type="button">登录</button>
                </div>
                <div class="account-tips">
                    <a href="">忘记密码？</a>
                </div>
            </div>
            </form>
        </div>
        <div class="container-right">
            <div class="account-box">
                <span>还没有注册？</span>
                <a class="btn" href="/site/signup">立即注册</a>
            </div>
        </div>
    </div>
</div>