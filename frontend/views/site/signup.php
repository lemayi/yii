<?php
use yii\helpers\Html;

$this->title = '会员注册';
$this->cssFiles = ['site.css', 'account.css'];
?>

<div class="container">
    <div class="container-box cc">
        <div class="container-left">
            <h1>做一个有身份的金球迷</h1>
            <form method="post">
            <div class="account-form">
                <div class="row">
                    <label for="username">用户名</label>
                    <input name="username" type="text">
                    <div class="error">测试一下</div>
                </div>
                <div class="row">
                    <label for="password">密码</label>
                    <input name="password" type="password">
                    <div class="error">测试一下</div>
                </div>
                <div class="row">
                    <label for="repassword">确认密码</label>
                    <input name="repassword" type="text">
                    <div class="error">测试一下</div>
                </div>
                <div class="row">
                    <button type="button">同意服务条款并注册</button>
                </div>
                <div class="account-tips">
                    <a href="">服务条款</a>
                </div>
            </div>
            </form>
        </div>
        <div class="container-right">
            <div class="account-box">
                <span>已经注册？</span>
                <a class="btn" href="/site/login">立即登录</a>
            </div>
        </div>
    </div>
</div>