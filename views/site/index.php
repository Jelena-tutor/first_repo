<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

//$this->title = 'Задачи по программированию';
$this->registerCssFile('/web/css/index.css');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php $this->title = 'Задачи по программированию'; ?></title>
    </head>
<body>

<div id="container">

    <div id="header">
        <h2>Войдите в систему - и решайте задачи!</h2>
        <h4>Если Вы здесь впервые, зарегистрируйтесь</h4>
    </div>


        <div id="content">
            <h3></h3>


        </div>

<div id="footer">
    <h2>три уровня сложности:</h2>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <div class="bulletsBlock">

        <div class="bullet-item">
            <span class="iconBullet fa fa-cog"></span>
            <p class="titleBullet">Легкий</p>
            <p class="hideText">Это easy!<br></p>
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
<?php $style= <<< CSS
    body {

    background-image: url("/web/images/0019.png")!important;

    background-size: cover;
    /*background-size:1000px 700px;*/

    }

    .bulletsBlock:after {
    content: "";
    display: table;
    clear: both;
    }


    #header {
    width: 100%;
    height: 75px;
    }

    #container {
    margin: auto auto;

    text-align: center;
    width: 80%;
    height: 400px;
    }
#sidebar {
    float: left;
    width: 20%;
    height: 280px;
}

#content {
    float: right;
    padding-top: 10%;
    width: 100%;
    height: 180px;
}

#clear {
    clear: both;
}

#footer {
    padding: auto;
    width: 100%;
    height: 40px;
}


.bulletsBlock > div {
    width: 30%;
    float:left;
    background: rgba(30,80,100,0.3);
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
    background: #0F335E;
    z-index: 10;
}

.hideText {
    line-height: 1.3em;
    font-size: 1.25em;
    padding: 1em 0;
    background:#144680;
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
    background:#1B5EAB;
}
CSS;
$this->registerCss($style);
?>

   <!-- <div class="image-wrap image-align text-center ">

        <div class="site-index">

        <? //echo Html::img('@web/images/0019.png',['alt'=>'Картинка','height'=>'250px','width'=>'400px','class'=>'img-rounded'])?>

            <h1>Programming tasks easy!</h1>
    </div>
        <P> <?php /*if(Yii::$app->user->can('teacher')){
                echo('Привет,учитель');
            }else{
                echo('Привет,гость!');
            }?>
        </P>
        <p class="lead">На этом сайте Вы можете решать задачи по программированию</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h4>Войдите в систему - и решайте задачи!</h4>

                <p> </p>

               </div>

            <div class="col-lg-4">
                <h4>Если Вы здесь впервые, зарегистрируйтесь</h4>


                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Связь с администрацией сайта &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
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
    /*background-size:1000px 700px;

}*/
