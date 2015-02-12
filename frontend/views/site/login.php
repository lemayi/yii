<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <title><?= Html::encode($this->title) ?></title>
    <link href="<?= Yii::getAlias('@asset') ?>/css/account.css" type="text/css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@asset') ?>/css/site.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header cc">
        <div class="nav cc">
            <div class="logo">
                <a href="<?= yii::$app->getHomeUrl() ?>">
                    <img src="<?= Yii::getAlias('@asset') ?>/images/logo.png" alt="" />
                </a>
            </div>
            <ul class="left cc">
                <li class="current"><a href="#">首页</a></li>
                <li><a href="#">英超</a></li>
                <li><a href="#">西甲</a></li>
                <li><a href="#">德甲</a></li>
                <li><a href="#">意甲</a></li>
                <li><a href="#">NBA</a></li>
            </ul>
            <ul class="right cc">
                <li><a href="#">注册</a></li>
                <li><a href="#">登录</a></li>
            </ul>
        </div>
    </div>
    <div class="sub-nav">
        <ul class="cc">
            <li><a href="#">曼联</a></li>
            <li><a href="#">曼联</a></li>
            <li><a href="#">曼联</a></li>
            <li><a href="#">曼联</a></li>
            <li><a href="#">曼联</a></li>
            <li><a href="#">曼联</a></li>
        </ul>
    </div>
    <div class="container cc">
        <div class="container-left pad20">
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
                <a class="btn" href="#">立即注册</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="links">
            <a href="#">关于我们</a>
            <a href="#">关于我们</a>
            <a href="#">关于我们</a>
            <a href="#">关于我们</a>
            <a href="#">关于我们</a>
            <a href="#">关于我们</a>
            <a href="#">关于我们</a>
        </div>
        <div class="copy">
            <span>Copyright ©2014, All Rights Reserved. 宝中旅游·四川新东方国际旅行社</span>
        </div>
    </div>
</body>
</html>