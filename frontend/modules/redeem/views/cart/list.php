<!DOCTYPE html>
<html>
<head>
    <title>【兑换】东芝U盘16G 速闪USB3.0 迷你防水创意车载优盘</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <meta name="full-screen" content="yes">
    <meta name="x5-fullscreen" content="true">
    <meta name="browsermode" content="application">
    <meta name="x5-page-mode" content="app">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/gouwuche.css">
    <script src="/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.back').click(function(){
                history.back();
            });
            $('.box').click(function(){
                $(this).toggleClass('active');
            });
        });
        <!-- 增加数量 -->
        function numAdd(thi) {
            var num_root = $(thi).parents('.count').find('input');
            var num_add = parseInt(num_root.val())+1;
            num_root.val(num_add);

            // var total = parseFloat($("#price").text())*parseInt(num_root.val());
            // $("#totalPrice").html(total.toFixed(2));
        }
        <!-- 减少数量 -->
        function numDec(thi) {
            var num_root = $(thi).parents('.count').find('input');
            var num_dec = parseInt(num_root.val())-1;
            var num_name = num_root.attr('name');

            if((num_name=='2' && num_dec<3) || (num_name=='4' && num_dec<1) || num_dec<1){
                return false;
            }else{
                num_root.val(num_dec);
                // var total = parseFloat($("#price").text())*parseInt(num_root.val());
                // $("#totalPrice").html(total.toFixed(2));
            }
        }
    </script>
</head>
<body>
<div class="body-All">
    <header>
        <div class="back"><a><img src="/images/back.png"></a></div>
        购物车
        <div class="home"><a href="index.html"><img src="/images/home.png"></a></div>
    </header>
    <div class="box-container">
        <div class="box">
            <div class="pic"><img src="/images/pic.png"></div>
            <div class="text">
                <div class="title">【兑换】东芝U盘16G 速闪USB3.0 迷你防水创意车载优盘</div>
                <div>
                    <div class="integral">积分&nbsp;&nbsp;<span>999</span></div>
                    <div class="count">
                        <img src="/images/+.png" onclick="numAdd(this)">
                        <input type="text" name="number" value="1" />
                        <img src="/images/-.png" onclick="numDec(this)">
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="pic"><img src="/images/pic.png"></div>
            <div class="text">
                <div class="title">【兑换】东芝U盘16G 速闪USB3.0 迷你防水创意车载优盘</div>
                <div>
                    <div class="integral">积分&nbsp;&nbsp;<span>999</span></div>
                    <div class="count">
                        <img src="/images/+.png" onclick="numAdd(this)">
                        <input type="text" name="number" value="1" />
                        <img src="/images/-.png" onclick="numDec(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="exchange">
        <div class="needIntegral">共&nbsp;<span>1998</span>&nbsp;积分</div>
        <div class="button"><a href="/order/add" class="btn">立即兑换</a></div>
    </div>
</div>
</body>
</html>