<?php
$pageTitle = "Abons Pages";
include_once 'common_pages/head.php';
include_once 'common_pages/navBar.php';
?>
<div class="container">
    <?php include_once 'common_pages/leftNavBar.php';?>
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="col-md-12 text-right">Endurence Test time left :- <span id="clock"></span></div>
        <h1>Abons Practice page</h1>
        <Div class="text-info h3">this is my practice page where i tinker around what ever i can get my hand on. be it php,mysql,jquery,angular etc,anything[and they have to be free]</div>
    </div>
</div> <!-- /container -->

<?php include_once 'common_pages/footer01.php'; ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<script>window.jQuery || document.write('<script src="_assets/_javaScript/jquery.min.js"><\/script>')</script>
<script src="_assets/_javaScript/bootstrap.min.js"></script>
<script src="_assets/_javaScript/jquery.countdown.min.js"></script>
<script type="text/javascript">
    var date = new Date("<?= date('Y-m-d H:i:s', strtotime('+2 years', strtotime("2017-06-12 10:00:00"))); ?>");
    $('#clock').countdown(date, function (event) {
        var year = event.offset.years - 1;
        var month = event.offset.months - (year * 12);
        var day = event.offset.days;
        var hour = event.offset.hours;
        var minute = event.offset.minutes;
        var second = event.offset.seconds;
        $(this).html(year + " year " + month + " month " + day + " day ," + hour + " : " + minute + " : " + second + " hours");
    });
</script>
</body>
</html>
