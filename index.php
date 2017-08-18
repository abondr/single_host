<?php
$pageTitle = "Abons Pages";
include_once 'common_pages/head.php';
include_once 'common_pages/navBar.php';
?>
<div class="container-fluid">
    <?php include_once 'common_pages/leftNavBar.php';?>
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="col-md-12 text-right">Endurance Test time left :- <span id="clock"></span></div>
        <div class="col-md-12 text-right">Total Time spent :- <span id="spent"></span></div>
        <h1>Abons Practice page</h1>
        <Div class="text-info h3">this is my practice page where i tinker around what ever i can get my hand on. be it php,mysql,jquery,angular etc,anything[and they have to be free]</div>
    </div>
</div> <!-- /container -->

<?php include_once 'common_pages/footer01.php'; 
    $joinDate = "2017-06-12 10:00:00";
    $dateJoining = new DateTime($joinDate);
    $dateEnd = $dateJoining->add(new DateInterval("P2Y"));
    echo strtotime($joinDate,time());
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="_assets/_javaScript/jquery.min.js"></script>
<script src="_assets/_javaScript/bootstrap.min.js"></script>
<script src="_assets/_javaScript/jquery.countdown.min.js"></script>
<script type="text/javascript">
    var countDownDate = new Date("<?= $dateEnd->format("Y-m-d H:I:s"); ?>").getTime();  
    var startDate;
    $(document).ready(function () {
        
        
        //;
    });
    

window.setInterval(function(){
    var startDate = new Date("2017-06-12 10:00:00");
        var currentDate = new Date();
        var year1 = currentDate.getFullYear()-startDate.getFullYear();
        var month1 = currentDate.getMonth() - startDate.getMonth();
        var day1 = currentDate.getDate() - startDate.getDate();
        var hour1 = currentDate.getHours() - startDate.getHours();
        var minute1 = currentDate.getMinutes() - startDate.getMinutes();
        var second1 = currentDate.getSeconds() - startDate.getSeconds();
        $('#spent').html(year1+" year "+month1+" month "+day1+" days "+hour1+":"+minute1+":"+second1);
}, 1000);


    $('#clock').countdown(countDownDate, function (event) {
        var dateTxt = "";
        var year = event.offset.years - 1;
        var month = event.offset.months - (year * 12);    
        var day = event.offset.daysToMonth;
        if(year > 0){       dateTxt += year+" year ";        }
        if(month > 0){      dateTxt += month+" month ";      }
        if(day > 0){        dateTxt += day+" days ";         }
        $(this).html(dateTxt+event.strftime('%-H : %-M : %-S Hours'));
    });
</script>
</body>
</html>
