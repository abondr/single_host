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

<?php include_once 'common_pages/footer01.php'; 
    $dateJoining = new DateTime("2017-06-12 10:00:00");
    $dateEnd = $dateJoining->add(new DateInterval("P2Y"));
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="_assets/_javaScript/jquery.min.js"><\/script>
<script src="_assets/_javaScript/bootstrap.min.js"></script>
<script src="_assets/_javaScript/jquery.countdown.min.js"></script>
<script type="text/javascript">
    var countDownDate = new Date("<?= $dateEnd->format("Y-m-d H:I:s"); ?>").getTime();
    $('#clock').countdown(countDownDate, function (event) {
        var year = event.offset.years - 1;
        var month = event.offset.months - (year * 12);                
        $(this).html(year+" year "+month+" month "+event.strftime(' %-d days %-H : %-M : %-S Hours'));
    });
</script>
</body>
</html>
