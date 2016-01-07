<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Прогноз-молния</title>

        <!-- link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link href="http://stuff.ludwigbistronovsky.ru/---/css/non-responsive.css" rel="stylesheet">
        <link href="http://stuff.ludwigbistronovsky.ru/---/css/common.css" rel="stylesheet">
        <link rel="stylesheet" href="http://ludwigbistronovsky.ru/theme/entries-2014/css/custom.css">
        <link rel="stylesheet" href="css/_exsps.css?<?php echo time();?>">
        <style>
          .row.header div {
              font-weight: bold;
          }
        </style>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div class="container">
          <div class="row homerun">
              <div class="col-xs-9">
                  <a class="homerun" href="/">
                      <span class="glyphicon glyphicon-tree-deciduous"></span>
                  </a>
                  <li class="menu index-1 first"><a href="/waves"  class='first'><span>Волны</span></a></li>
                  <li class="menu index-2 active"><a href="/lectures"><span>Лекции</span></a></li>
                  <li class="menu index-3"><a href="/books"><span>Библиотека</span></a></li>
                  <li class="menu index-4 last"><span class='parent'>Прогноз-молния</span></li>
              </div>
              <div class="col-xs-3"></div>
          </div>
        </div>

        <div class="container">
            <h1>Прогноз-молния</h1>
            <!-- <span>Планировщик расходов и доходов, не отправляющий никаких записей на сервера в интернете. Альфа-версия.</span> -->

            <div class="navi">
              <span class= "navitab"><mark class="nomark"><a href="about">Описание</a></mark></span>
              <span class= "navitab"><mark class="rand<?php echo rand(1, 5)?>">В действии</mark></span>
              <span class= "navitab"><mark class="nomark"><a href="versions">История</a></mark></span>
            </div>

            <span ng-controller="RootController"></span>
            <section data-ui-view on-scroll>
              <div ng-include="'modules/core/views/home.client.view.html'"></div>
            </section>

            <script src="vendor.min.js"></script>
            <script src="ui-bootstrap-tpls-0.11.2.min.js"></script>

            <script src="ru.js"></script>

            <!-- script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.7.0/underscore-min.js"></script -->
            <script src="js/libs/math/math.min.js"></script>
            <script src="js/libs/underscore/underscore-min.js"></script>

            <script src="config.js"></script>
            <script src="application.js"></script>

            <script src="modules/core/core.client.module.js"></script>

            <script src="modules/core/bootstrap/core.client.bootstrap.js"></script>
            <script src="modules/core/config/core.client.routes.js"></script>

            <script src="modules/core/models/day.js"></script>
            <script src="modules/core/models/week.js"></script>
            <script src="modules/core/models/weeks_provider.js"></script>
            <script src="modules/core/models/payment.js"></script>
            <script src="modules/core/controllers/modals/weekPrice.client.controller.js"></script>
            <script src="modules/core/controllers/modals/startValue.client.controller.js"></script>
            <script src="modules/core/controllers/modals/startDate.client.controller.js"></script>
            <script src="modules/core/controllers/modals/add.client.controller.js"></script>
            <script src="modules/core/controllers/notice.controller.js"></script>

            <script src="modules/core/controllers/root.client.controller.js"></script>
            <script src="modules/core/controllers/prefs.client.controller.js"></script>
            <script src="modules/core/controllers/home.client.controller.js"></script>

        </div>

        <div class="container">
          <div class="row footer">
              <hr />
              <div class="col-xs-4">
                  Эл. почта: <a href="mailto:ludwig@ludwigbistronovsky.ru">ludwig@ludwigbistronovsky.ru</a>
              </div>

              <div class="col-xs-4 socialite">

                  <div class="fb-like" data-href="http://ludwigbistronovsky.ru/tools/e/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>

              </div>


          </div>
        </div>

    </body>
</html>
