<?php
use yii\helpers\Html;
$this->title = 'Задачи по программированию';

//$this->registerCssFile('css/hello2.css');
?>
/**
 * Date: 19.11.2018
 */
<!DOCTYPE html>
<html>
<head>
    <title>Блочная вёрстка</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
    <div id="header">
        <h2>header (шапка сайта)</h2>
    </div>

    <div id="navigation">
        <h2>Блок навигации</h2>
    </div>

    <div id="sidebar">
        <h2>Левая панель</h2>
    </div>

    <div id="content">
        <h2>Основной контент страницы</h2>
    </div>

    <div id="clear">

    </div>

    <div id="footer">
        <h2>Уровни сложности</h2>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <div class="bulletsBlock">
            <div class="bullet-item">
                <span class="iconBullet fa fa-cog"></span>
                <p class="titleBullet">Легкий</p>
                <p class="hideText">Каждый сможет!<br></p>
            </div>

            <div class="bullet-item">
                <span class="iconBullet fa fa-cog"></span>
                <p class="titleBullet">Средний</p>
                <p class="hideText">Ты сможешь!<br></p>
            </div>

            <div class="bullet-item">
                <span class="iconBullet fa fa-cog"></span>
                <p class="titleBullet">Мастер</p>
                <p class="hideText">Попробуй!<br></p>
            </div>
        </div>

    </div>
</div>
</body>
</html>

<?php
$css=<<< CSS
h1{
font-family:Lobster,cursive;
}
h2{
font-family:Lobster,cursive;
}
h3{
font-family:Lobster,cursive;
}

h4{
font-family:Lobster,cursive;
}

body {

background-image: url("/web/images/0019.png")!important;

background-size: cover;
/*background-size:1000px 700px;*/

}


#footer {
width: 100%;
height: 40px;
}


.bulletsBlock > div {
width: 30%;
float: left;
background: rgba(0,0,0,0.3);
margin-left:5%;
text-align: center;
position: relative;
padding-bottom: 31.7%;
cursor: pointer;
-webkit-transition:all 0.35s linear;
transition:all 0.35s linear;
}

.bulletsBlock > div:first-child {
margin-left:0;
}

/*Тень снизу у блока при наведении*/
.bulletsBlock > div:hover {
-webkit-box-shadow: 0 35px 35px -35px #000000;
-moz-box-shadow: 0 35px 35px -35px #000000;
box-shadow: 0 35px 35px -35px #000000;
}

.bullet-item span{
line-height: 1.5em;
font-size: 12.5em;
color:#fff;
position: absolute;
top:0;
left:0;
display: block;
width: 100%;
-webkit-transition:all 0.35s ease;
transition:all 0.35s ease;
}

/*Анимация иконки при наведении - уменьшение и сдвиг вверх*/
.bulletsBlock > div:hover span.iconBullet{
line-height: 1.35em;
font-size: 10.625em;
top:-2.7%;
}

.titleBullet, .hideText {
position: absolute;
left:0;
bottom:0;
text-align: center;
width: 100%;
margin: 0;
color: #fff;
-webkit-transition:all 0.35s ease;
transition:all 0.35s ease;
}

.titleBullet {
line-height: 2.5em;
font-size: 2.1875em;
background:#3B3B3B;
z-index: 10;
}

.hideText {
line-height: 1.3em;
font-size: 1.25em;
padding: 1em 0;
background:#3B3B3B;
font-weight: 300;
z-index: 8;
height: 50px;
-webkit-transition:all 0.35s linear 0.2s;
transition:all 0.35s linear 0.2s;
}

/*Анимация при наведении видимого текстового блока*/
.bulletsBlock > div:hover p.titleBullet{
bottom:80px;
}

/*Анимация при наведении скрытого текстового блока*/
.bulletsBlock > div:hover p.hideText{
background:#454545;
}
CSS;
$this->registerCss($css,["type"=>"text/css"],"myStyles");
?>