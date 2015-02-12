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
    <link href="<?= Yii::getAlias('@asset') ?>/css/site.css" type="text/css" rel="stylesheet">
    <link href="<?= Yii::getAlias('@asset') ?>/css/account.css" type="text/css" rel="stylesheet">
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
                <li><a href="/site/signup">注册</a></li>
                <li><a href="/site/login">登录</a></li>
            </ul>
        </div>
    </div>
    <div class="container cc">
        <div class="container-left pad20">
            <div class="sort">
                <a class="btn" href="#">热门</a>
                <a href="#">最新</a>
                <a href="#">24小时</a>
                <a href="#">一周热门</a>
                <a class="btn right" href="#">+ 我要投稿</a>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://img1.gtimg.com/sports/pics/hv1/202/209/1790/116448247.jpg">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">德甲狼堡红星遭罚款1万5千欧元 因骂球童X你X</a>
                    </div>
                    <div class="info">
                        据《图片报》披露，当时他冲这名球童大喊：“给我球，X你X。”
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1250</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/ac9a/78b6/86022_normal.png?m=1422938510">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">德甲狼堡红星遭罚款1万5千欧元 因骂球童X你X</a>
                    </div>
                    <div class="info">
                        据《图片报》披露，当时他冲这名球童大喊：“给我球，X你X。”
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/f3ca/68c3/72538_normal.png?m=1417079603">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">查干湖冬捕——生产与旅游相得益彰的渔猎文化</a>
                    </div>
                    <div class="info">
                        每到冬季，查干湖就热闹起来，庞大的捕鱼队伍数九寒天走上冰面凿冰捕鱼，一时间人欢马叫，捕鱼号子此起彼伏，几十万公斤鲜鱼破冰而出，其情景十分壮观。
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/34cb/c815/88268_normal.png?m=1419476326">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">大年初3去女朋友家拜年，第一次去，农村家庭，对方有父母和念书的弟弟，请问带什么礼物去，她爸爸不抽烟不喝酒，她妈妈不清楚.</a>
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/b6f7/9519/43627_normal.png?m=1377589874">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">这样的水龙头，会不会帅过头！ (@神奇的美帝)</a>
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/5de1/8baa/81173_normal.png?m=1417498503">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">深夜里这么个东西走在大街上你怕不怕？ 因骂球童X你X</a>
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="click">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/0594/6285/57853_normal.png?m=1421136805">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">【网曝章子怡家人大闹求婚现场 经纪人否认】今日不断有网友爆料汪峰求婚子怡当晚，章子怡哥嫂大闹求婚现场，并有一条自称是章子怡哥哥章子男大骂汪峰淫荡自私的朋友圈文章在微博热转。对此，章子怡嫂子殷旭的工作人员回应：“瞎扯淡”，汪峰的工作人员也表示是不实传闻。而殷旭今早也刚祝福过两人。 因骂球童X你X</a>
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/f892/f4ec/46941_normal.png?m=1383659281">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">【号外，号外】漫威影业与索尼影业今日联合宣布，蜘蛛侠将首先出现在漫威电影宇宙（Marvel's Cinematic Universe）新片中，然后下一部《蜘蛛侠》电影将获得漫威全力支持，由漫威影业主席凯文-费吉及其团队联合制作。双方也计划让漫威电影宇宙中的角色于《蜘蛛侠》系列现身。</a>
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/f757/3738/22440_normal.png?m=1358906822">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">德甲狼堡红星遭罚款1万5千欧元 因骂球童X你X</a>
                    </div>
                    <div class="info">
                        据《图片报》披露，当时他冲这名球童大喊：“给我球，X你X。”
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="item cc">
                <div class="pic">
                    <a href="#">
                        <img src="http://cdn.v2ex.com/avatar/dbe7/dd2a/62537_normal.png?m=1423050259">
                    </a>
                </div>
                <div class="news">
                    <div class="title">
                        <a href="#">德甲狼堡红星遭罚款1万5千欧元 因骂球童X你X</a>
                    </div>
                    <div class="info">
                        据《图片报》披露，当时他冲这名球童大喊：“给我球，X你X。”
                    </div>
                    <div class="option cc">
                        <a href="javascript:void(0)"><span class="click">顶 1</span></a>
                        <a href="javascript:void(0)"><span class="">踩 2</span></a>
                        <a href="javascript:void(0)">评论 1680</a>
                        <a href="javascript:void(0)">收藏</a>
                        <a href="javascript:void(0)">华阳撸管冠军</a>
                        <span class="tags">
                            <a href="#">阿森纳</a>
                            <a href="#">拉姆塞</a>
                            <a href="#">沃尔科特</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="pages">
                <a href="#">首页</a>
                <a href="#">上一页</a>
                <a href="#">1</a>
                <a class="current" href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">下一页</a>
                <a href="#">末页</a>
            </div>
        </div>
        <div class="container-right">
            <a href="#"><img src="http://www.daqianduan.com/wp-content/uploads/2014/11/ad-qiuji.jpg" /></a>
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