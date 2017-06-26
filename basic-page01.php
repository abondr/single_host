<?php
$pageTitle = "Basic Pdo page";
include_once 'common_pages/head.php';
include_once 'common_pages/navBar.php';
include_once 'class.Database01.php';
try {
    $conn = Database01::getConnection();
    $statement = $conn->query("SELECT s.roll, s.fname, s.lname, c.cls_name "
            . "FROM p1_student AS s "
            . "JOIN p1_class AS c ON s.cls_id = c.cls_id");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<div class="container-fluid">
        <?php include_once 'common_pages/leftNavBar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1>Basic Pdo page01</h1>
            <Div class="text-info h3">Basic PDO testing page.</div>

            <h2 class="sub-header">Section title</h2>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Roll</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($student = $statement->fetch()) {
                            echo "<tr><td>{$student['roll']}</td>" .
                            "<td>{$student['fname']}</td>" .
                            "<td>{$student['lname']}</td>" .
                            "<td>{$student['cls_name']}</td>" .
                            "</tr>";
                        }
                        ?>

                </table>

            </div>
        </div>
</div>
<?php include_once 'common_pages/footer01.php'; ?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
<script>window.jQuery || document.write('<script src="_assets/_javaScript/jquery.min.js"><\/script>')</script>
<script src="_assets/_javaScript/bootstrap.min.js"></script>
<script src="_assets/_javaScript/jquery.countdown.min.js"></script>
</body>
</html>
