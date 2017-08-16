<?php
$pageTitle = "Basic Pdo page,ajax with pagination Practice";
include_once 'common_pages/head.php';
include_once 'common_pages/navBar.php';
include_once 'class.Database01.php';
$clsOptions['0'] = "Select Class";
try {
    $conn = Database01::getConnection();
    $classAll = $conn->prepare("SELECT c.cls_id, c.cls_name from p1_class as c");
    $classAll->execute();
    while ($class = $classAll->fetch()) {
        $clsOptions[$class['cls_id']] = $class['cls_name'];
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<div class="container-fluid">
    <?php include_once '../common_pages/leftNavBar.php'; ?>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1>Basic Pdo page02</h1>
        <Div class="text-info h3">Basic PDO testing page.Using Ajax</div>

        <h2 class="sub-header">Student Create/Read/Update Delete example page</h2>

        <div class="table-responsive">
            <table class="table table-striped" id="tblStudent">
                <thead>
                    <tr>
                        <th>index No</th>
                        <th>Roll</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                <button class='btn btn-default plus' onclick = 'addStudent()'>
                    <span class='glyphicon glyphicon-plus'></span> Add Student
                </button><span id="noticeArea"></span>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!--add modal for item start-->
<div class="modal fade" id="modalAddStudent" tabindex="-1" role="dialog" aria-labelledby="addStudent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="addItem">Add Student</h4>
            </div>
            <div class="modal-body">
                <form  method="post" action="#" class="smsentry" id="addStudentFrm">
                    <input type="hidden" value="addStudent" name="action">
                    <ul class="flw100 form-list">
                        <li class="flw100">
                            <div class="form-group">
                                <label for="roll">Roll</label>
                                <input type="number" min="1" max="100" class="form-control" id="addRoll" name="roll">
                            </div>
                        </li>
                        <li class="flw100">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="fName" name="fname">
                            </div>
                        </li>
                        <li class="flw100">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lName" name="lname">
                            </div>
                        </li>
                        <li class="flw100">
                            <div class="form-group">
                                <label for="cls_id">Class</label>
                                <select class="form-control" id="clsId" name="cls_id">
                                    <?= $classes ?>
                                </select>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                        <li class="">
                            <div class="form-group">
                                <input  type="submit" id="addItemSubmitbtn" class="btn btn-default" name="submit" value="Save"/>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>    
</div>
<!--add modal for item end-->
<!--edit modal for item start-->
<div class="modal fade" id="modalEditStudent" tabindex="-1" role="dialog" aria-labelledby="editStudent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="addItem">Edit Student</h4>
            </div>
            <div class="modal-body">
                <form  method="post" action="#" class="smsentry" id="editStudentFrm">
                    <input type="hidden" value="editStudent" name="action">
                    <input type="hidden" id="editStdId"  name="edit_std_id">
                    <ul class="flw100 form-list">
                        <li class="flw100">
                            <div class="form-group">
                                <label for="roll">Roll</label>
                                <input type="number" min="1" max="100" class="form-control" id="editRoll" name="edit_roll">
                            </div>
                        </li>
                        <li class="flw100">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" id="editFName" name="edit_fname">
                            </div>
                        </li>
                        <li class="flw100">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" id="editLName" name="edit_lname">
                            </div>
                        </li>
                        <li class="flw100">
                            <div class="form-group">
                                <label for="cls_id">Class</label>
                                <select class="form-control" id="editClsId" name="edit_cls_id"></select>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                        <li class="">
                            <div class="form-group">
                                <input  type="submit" id="addItemSubmitbtn" class="btn btn-default" name="edit_submit" value="Save"/>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>    
</div>
<!--edit modal for item end-->
<!--delete modal for item start-->
<div id="deleteStudentModal" title="Student deletion Confirmation">
    <span class="ui-icon ui-icon-alert" ></span>Are you sure to Delete the <br>Student ?
</div>
<!--delete modal for item end-->
<?php include_once 'common_pages/commonScript01.php'; ?>
<script>
    $(document).ready(function () {
        $("#deleteStudentModal").dialog({
            autoOpen: false,
            modal: true
        });
        $("#addStudentFrm").validate({
            errorElement: "span",
            rules: {
                roll: {
                    required: true
                },
                fname: {
                    required: true
                },
                lname: {
                    required: true
                },
                cls_id: {
                    required: true
                },
            },
            submitHandler: function (f) {
                $('.loading').show();
                $.ajax({
                    type: "POST",
                    url: "http://<?= $_SERVER['SERVER_NAME'] ?>/proj02/basic03_actions.php",
                    data: $('#addStudentFrm').serialize(),
                    success: function (result)
                    {
                        var updatedrow = $.parseJSON(result);
                        $('.loading').hide();
                        if ('error' in updatedrow) {
                            $("#noticeArea").html("<div class='danger alert-danger fade in alert-dismissable'>"
                                    + "<strong>Error!</strong>"
                                    + updatedrow['error']
                                    + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                    + " title='close'>x</a></div>");
                        } else {
                            $("#noticeArea").html("<div class='alert alert-info fade in alert-dismissable'>"
                                    + "<strong>Success!</strong> Student Just been added."
                                    + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                    + " title='close'>x</a></div>");
                            reWriteTableBody(updatedrow);
                        }
                        $("#modalAddStudent").modal("hide");
                        $('.loading').hide();
                    }
                });
            }
        });
        $("#editStudentFrm").validate({
            errorElement: "span",
            rules: {
                edit_roll: {
                    required: true
                },
                edit_fname: {
                    required: true
                },
                edit_lname: {
                    required: true
                },
                edit_cls_id: {
                    required: true
                },
            },
            submitHandler: function (f1) {
                $('.loading').show();
                $.ajax({
                    type: "POST",
                    url: "http://<?= $_SERVER['SERVER_NAME'] ?>/proj02/basic03_actions.php",
                    data: $('#editStudentFrm').serialize(),
                    success: function (result)
                    {
                        var updatedrow = $.parseJSON(result);
                        $('.loading').hide();
                        if ('error' in updatedrow) {
                            $("#noticeArea").html("<div class='danger alert-danger fade in alert-dismissable'>"
                                    + "<strong>Error!</strong>"
                                    + updatedrow['error']
                                    + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                    + " title='close'>x</a></div>");
                        } else {
                            $("#noticeArea").html("<div class='alert alert-info fade in alert-dismissable'>"
                                    + "<strong>Success!</strong> Student Just been edited."
                                    + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                    + " title='close'>x</a></div>");
                            reWriteTableBody(updatedrow);
                        }
                        $("#modalEditStudent").modal("hide");
                        $('.loading').hide();
                    }
                });
            }
        });
        $.ajax({
            type: "POST",
            url: "http://<?= $_SERVER['SERVER_NAME'] ?>/proj02/basic03_actions.php",
            data: {'action': 'getAllStudent',"page":1},
            success: function (result) {
                var currentRows = $.parseJSON(result);
                reWriteTableBody(currentRows);
            }
        });
    });
    function addStudent() {
        populateClass("#clsId", 0);
        $("#modalAddStudent").modal("show");
    }
    function editStudent(std_id) {
        $.ajax({
            type: "POST",
            url: "http://<?= $_SERVER['SERVER_NAME'] ?>/proj02/basic03_actions.php",
            data: {'std_id': std_id, 'action': 'getStudent'},
            success: function (studentJson)
            {
                var student = $.parseJSON(studentJson);
                populateClass("#editClsId", student['cls_id']);
                $("#editRoll").val(student["roll"]);
                $("#editFName").val(student["fname"]);
                $("#editLName").val(student["lname"]);
                $("#editStdId").val(student["std_id"]);
                $("#modalEditStudent").modal("show");
            }
        });
    }
    function deleteStudent(std_id) {
        $("#deleteStudentModal").dialog("open");
        $("#deleteStudentModal").dialog({
            buttons: {
                "Confirm": function () {
                    $.ajax({
                        type: "POST",
                        url: "http://<?= $_SERVER['SERVER_NAME'] ?>/proj02/basic03_actions.php",
                        data: {'std_id': std_id, 'action': 'delStudent'},
                        success: function (result) {
                            var updatedRow = $.parseJSON(result);
                            if ('error' in updatedRow) {
                                $("#noticeArea").html("<div class='alert alert-danger fade in alert-dismissable'>"
                                        + "<strong>Error!</strong>"
                                        + updatedRow['error']
                                        + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                        + " title='close'>x</a></div>");
                            } else {
                                $("#noticeArea").html("<div class='alert alert-info fade in alert-dismissable'>"
                                        + "<strong>Success!</strong> Stdent Just been deleted."
                                        + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                        + " title='close'>x</a></div>");
                                reWriteTableBody(updatedRow);
                            }
                            $("#deleteStudentModal").dialog("close");
                        }
                    });
                },
                "Cancel": function () {
                    $("#deleteStudentModal").dialog("close");
                    $("#addStudentFrm")[0].reset();
                    $("#editStudentFrm")[0].reset();
                }
            }
        });
    }
    $(".btn-close").on("click", function (event) {
        $(".flw100>.form-group>.error").html("");
        $("#addStudentFrm")[0].reset();
        $("#editStudentFrm")[0].reset();
    });
    function addStudent() {
        populateClass("#clsId", 0);
        $("#modalAddStudent").modal("show");
    }
    function editStudent(std_id) {
        $.ajax({
            type: "POST",
            url: "http://<?= $_SERVER['SERVER_NAME'] ?>/proj02/basic03_actions.php",
            data: {'std_id': std_id, 'action': 'getStudent'},
            success: function (studentJson)
            {
                var student = $.parseJSON(studentJson);
                populateClass("#editClsId", student['cls_id']);
                $("#editRoll").val(student["roll"]);
                $("#editFName").val(student["fname"]);
                $("#editLName").val(student["lname"]);
                $("#editStdId").val(student["std_id"]);
                $("#modalEditStudent").modal("show");
            }
        });
    }
    function deleteStudent(std_id) {
        $("#deleteStudentModal").dialog("open");
        $("#deleteStudentModal").dialog({
            buttons: {
                "Confirm": function () {
                    $.ajax({
                        type: "POST",
                        url: "http://<?= $_SERVER['SERVER_NAME'] ?>/proj02/basic03_actions.php",
                        data: {'std_id': std_id, 'action': 'delStudent'},
                        success: function (result) {
                            var updatedRow = $.parseJSON(result);
                            if ('error' in updatedRow) {
                                $("#noticeArea").html("<div class='alert alert-danger fade in alert-dismissable'>"
                                        + "<strong>Error!</strong>"
                                        + updatedRow['error']
                                        + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                        + " title='close'>x</a></div>");
                            } else {
                                $("#noticeArea").html("<div class='alert alert-info fade in alert-dismissable'>"
                                        + "<strong>Success!</strong> Stdent Just been deleted."
                                        + "<a href='#' class='close' data-dismiss='alert' aria-label='close'"
                                        + " title='close'>x</a></div>");
                                reWriteTableBody(updatedRow);
                            }
                            $("#deleteStudentModal").dialog("close");
                        }
                    });
                },
                "Cancel": function () {
                    $("#deleteStudentModal").dialog("close");
                    $("#addStudentFrm")[0].reset();
                    $("#editStudentFrm")[0].reset();
                }
            }
        });
    }
    function populateClass(selectId, clsId) {
        var classAll = $.parseJSON('<?= json_encode($clsOptions, JSON_FORCE_OBJECT) ?>');
        var options = "";
        $.each(classAll, function (key, value) {
            options += "<option value= " + key;
            if (clsId == key) {
                options += " selected='selected' "
            }
            options += " >" + value + "</options>";
        });
        $(selectId).html(options);
    }
    function reWriteTableBody(updatedRow) {
        $("#tblStudent").find('tbody').html("");
        var counter = 0;
        $.each(updatedRow, function (key, student) {
            counter += 1;
            var linkStart = "<a href='#' class='' onclick='editStudent(\"" + student['std_id'] + "\")'>";
            var linkEnd = "</a>";
            $('#tblStudent').find('tbody').append(
                    "<tr><td>" + counter + "</td>"
                    + "<td>" + linkStart + student['roll'] + linkEnd + "</td>"
                    + "<td>" + linkStart + student['fname'] + linkEnd + "</td>"
                    + "<td>" + linkStart + student['lname'] + linkEnd + "</td>"
                    + "<td>" + student['cls_name'] + "</td>"
                    + "<td> <button class='btn btn-default cross' onclick = 'deleteStudent(\"" + student['std_id'] + "\")'>"
                    + "<span class='glyphicon glyphicon-remove'></span></button> </td>"
                    + "</tr>"
                    );
        });
        if (counter == 0) {
            $('#idItemTbl').find('tbody').append("<tr><td colspan='7'>No Item Present</td></tr>");
        }
    }
</script>