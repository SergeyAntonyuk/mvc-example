<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Пример реализации MVC на примере простого сайта" />
        <meta name="keywords" content="MVC, шаблоны, паттерны" />
        <title>Магма Company Inc.</title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery-1.6.2.js" type="text/javascript"></script>
        <script type="text/javascript">
            // return a random integer between 0 and number
            function random(number) {

                    return Math.floor( Math.random()*(number+1) );
            };

            // show random quote
            $(document).ready(function() { 

                    var quotes = $('.quote');
                    quotes.hide();

                    var qlen = quotes.length; //document.write( random(qlen-1) );
                    $( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
            });
	</script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <a href="/mvc-example.loc/www/">Магма <span class="cms">Company Inc.</span></a>
                </div>
                <div id="menu">
                    <ul>
                        <li class="first active"><a href="/mvc-example.loc/www/">Главная</a></li>
                        <li><a href="/mvc-example.loc/www/services">Услуги</a></li>
                        <li><a href="/mvc-example.loc/www/portfolio">Портфолио</a></li>
                        <li class="last"><a href="/mvc-example.loc/www/contacts">Контакты</a></li>
                    </ul>
                    <br class="clearfix" />
                </div>
            </div>
            <div id="page">
                <div id="sidebar">
                    <div id="side-box">
                        <h3>Полезная информация</h3>
                        <p class="align quote">
                            «Диагностика минерала поднимает меандр. Замерзание,
                            скажем, за 100 тысяч лет, смещает голоцен.»
                        </p>
                        <p class="align quote">
                            «Альтернативное объяснение предполагает, что синеклиза
                            высвобождает слабоминерализованный анортит.»
                        </p>
                        <p class="align quote">
                            «Известняк горизонально занимает голоцен. Болотная руда обогащена.»
                        </p>
                        <p class="align quote">
                            «Другим примером региональной компенсации может служить
                            капиллярное поднятие комплексно.»
                        </p>
                        <p class="align quote">
                            «Притеррасная низменность горизонально покрывает оливин.
                            Капиллярное поднятие типично.»
                        </p>
                    </div>
                    <div class="side-box">
                        <h3>Основное меню</h3>
                        <ul class="list">
                            <li class="first"><a href="/mvc-example.loc/www/">Главная</a></li>
                            <li><a href="/mvc-example.loc/www/services">Услуги</a></li>
                            <li><a href="/mvc-example.loc/www/portfolio">Портфолио</a></li>
                            <li class="last"><a href="/mvc-example.loc/www/contacts">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div class="box">
                        <?php include 'application/views/' . $content_view; ?>
                        <!-- /.box -->
                    </div>
                    <br class="clearfix" />
                </div>
                <br class="clearfix" />
            </div>
            <div id="page-bottom">
                <div id="page-bottom-sidebar">
                    <h3>Наши контакты</h3>
                    <ul class="list">
                        <li class="first">icq: xxxxxxxxx</li>
                        <li>skypeID: xxxxxxxxx</li>
                        <li class="last">e-mail: mymail@example.com</li>
                    </ul>
                </div>
                <div id="page-bottom-content">
                    <h3>О компании</h3>
                    <p>
                        Текстура сингонально стягивает силл. Проникновение глубинных
                        магм, а также в преимущественно песчаных и песчано-глинистых
                        отложениях верхней и средней юры, локально имеет тенденцию
                        пелагический исток. Хвостохранилище унаследованно фоссилизирует
                        многолетнемерзлый анортит.
                    </p>
                </div>
                <br class="clearfix" />
            </div>
        </div>
        <div id="footer">
            <a hre="/">Магма Company Inc.</a> &copy; 2014
        </div>
    </body>
</html>