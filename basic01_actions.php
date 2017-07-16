<?php

include_once 'class.Database01.php';
$tblStudent = "p1_student";
$tblClass = "p1_class";
$conn = NULL;
try {
    $conn = Database01::getConnection();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'getStudent':
            try {
                $query = $conn->prepare("select * from {$tblStudent} where std_id = :stdId");
                $query->execute([":stdId" => $_POST['std_id']]);
                $student = $query->fetch();
                echo json_encode($student);
            } catch (PDOException $ex) {
                echo json_encode(['error'=>$ex->getMessage()]);
            }
        break;
        case 'delStudent':
            try {
                $query = $conn->prepare("delete from {$tblStudent} where std_id = :stdId");
                $query->execute([":stdId" => $_POST['std_id']]);
                getCurrentStudents();
            } catch (PDOException $ex) {
                echo json_encode(['error'=>$ex->getMessage()]);
            }
        break;
        case "addStudent":
            try {
                $query = $conn->prepare("insert into {$tblStudent}(fname,lname,roll,cls_id) values(:fname,:lname,:roll,:clsId)");
                $query->execute([":fname" => $_POST['fname'], ':lname' => $_POST['lname'],
                    ':roll' => $_POST['roll'], ':clsId' => $_POST['cls_id']]);
                getCurrentStudents();
            } catch (PDOException $ex) {
                echo json_encode(['error'=>$ex->getMessage()]);
            }
        break;
        case "editStudent":
            try {
                $query = $conn->prepare("update {$tblStudent} set roll=:roll,fname=:fname,lname=:lname,cls_id=:clsId where std_id=:stdId");
                $query->execute([":fname" => $_POST['edit_fname'], ':lname' => $_POST['edit_lname'],
                    ':roll' => $_POST['edit_roll'], ':clsId' => $_POST['edit_cls_id'],":stdId" => $_POST['edit_std_id']]);
                getCurrentStudents();
            } catch (PDOException $ex) {
                echo json_encode(['error'=>$ex->getMessage()]);
            }
        break;
    }
} else {
    echo json_encode(['error' => "no actions called.error"]);
}

function getCurrentStudents() {
    global $conn, $tblStudent, $tblClass;
    $students = $conn->prepare("SELECT s.std_id,s.roll, s.fname, s.lname, c.cls_name "
            . "FROM p1_student AS s JOIN p1_class AS c ON s.cls_id = c.cls_id");
    $students->execute();
    $studentAll = $students->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($studentAll);
}

?>
