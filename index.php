<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="_assets/_icons/time64.png">
        <title>Static Top Navbar Example for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="_assets/_styleSheet/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="_assets/_styleSheet/_custom01.css" rel="stylesheet">
    </head>
    <body>

        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Abons Page</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <!--li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li-->
                    </ul>
                    </li>
                    </ul>
                    <!--ul class="nav navbar-nav navbar-right">
                        <li><a href="../navbar/">Default</a></li>
                        <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
                        <li><a href="../navbar-fixed-top/">Fixed top</a></li>
                    </ul-->
                </div><!--/.nav-collapse -->
            </div>
        </nav>


        <div class="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <div class="col-md-12 text-right">Endurence Test time left :- <span id="clock"></span></div>
                <h1>Abons Practice page</h1>
                <Div class="text-info h3">this is my practice page where i tinker around what ever i can get my hand on. be it php,mysql,jquery,angular etc,anything[and they have to be free]</div>

            </div>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
        <script>window.jQuery || document.write('<script src="_assets/_javaScript/jquery.min.js"><\/script>')</script>
        <script src="_assets/_javaScript/bootstrap.min.js"></script>
        <script src="_assets/_javaScript/jquery.countdown.min.js"></script>
        <script type="text/javascript">
            var date = new Date("<?=date('Y-m-d H:i:s', strtotime('+2 years', strtotime("2017-06-12 10:00:00")));?>");
            $('#clock').countdown(date, function (event) {
                var year = event.offset.years -1;
                var month = event.offset.months - (year*12);
                var day = event.offset.days;
                var hour = event.offset.hours;
                var minute = event.offset.minutes;
                var second = event.offset.seconds;
                
                $(this).html(year +" year "+month+" month "+day+" day ,"+hour+" : "+minute+" : "+second+" hours");
            });
        </script>

    </body>
</html>
