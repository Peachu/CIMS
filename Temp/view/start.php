<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Framework</title>

    <!-- Style -->
    <link href="temp/assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="temp/assets/simplesidebar/css/simplesidebar.css" rel="stylesheet">
    <link href="temp/assets/custom/css/global.css" rel="stylesheet">
    <link href="temp/assets/contentslide/css/contentslide.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-app="xms">

  <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Menü
                    </a>
                </li>
                <li>
                    <a href="#/Start">Startseite</a>
                </li>
                <li>
                    <a href="#/Register">Anmeldung</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

         <a href="#menu-toggle" class="btn btn-danger" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>

    </div>
    <!-- /#wrapper -->

    <div class="rows">
        <div class="col-md-5"></div>

        <div class="col-md-2">
            <img width="200" src="temp/assets/custom/img/flyff/logo.png" alt="">
        </div>

        <div class="col-md-5"></div>
    </div>
    
    <div class="clear"></div>

    <div class="rows">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            
        
            <div class="panel panel-default">
            <div class="panel-body">
                
              <ng-view></ng-view>

            </div>
            </div>

        <div class="col-md-2">
        </div>
    </div>

    <!-- JScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="temp/assets/bootstrap/js/bootstrap.js"></script>

    <script src="temp/assets/contentslide/js/contentslide.js"></script>

    <script src="temp/assets/angular/js/angular.js"></script>
    <script src="temp/assets/angular/js/angular-route.js"></script>

    <script src="temp/assets/system/js/global/application.js"></script>
    <script src="temp/assets/system/js/global/routing.js"></script>

     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

  </body>
</html>