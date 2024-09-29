<?php
include '../../../includes/conn.php';
ob_start();
session_start();

//check users
if (isset($_POST['submit']) || isset($_SESSION['update_success'])) {

    if (isset($_SESSION['update_success'])) {
        $username = $_SESSION['username'];
        unset($_SESSION['username']);
        $password = $_SESSION['password'];
        unset($_SESSION['password']);

        unset($_SESSION['email']);

    } else {

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    }

    $superadmin = mysqli_query($conn, "SELECT * FROM tbl_superadmin WHERE username = '$username'");
    $numrow_mk = mysqli_num_rows($superadmin);
    
    $registrar = mysqli_query($conn, "SELECT * FROM tbl_registrars WHERE username = '$username'");
    $numrow_reg = mysqli_num_rows($registrar);
    
    
    $teacher = mysqli_query($conn, "SELECT * FROM tbl_teachers WHERE username = '$username'");
    $numrow_teacher = mysqli_num_rows($teacher);
    
    $student = mysqli_query($conn, "SELECT * FROM tbl_students WHERE username = '$username'");
    $numrow_student = mysqli_num_rows($student);

    if ($numrow_mk > 0) {
        $row = mysqli_fetch_array($superadmin);
        $hashedpass = password_verify($password, $row['password']);

        if ($hashedpass == true) {
            $_SESSION['role'] = "Super Administrator";
            $_SESSION['id'] = $row['mk_id'];
            $_SESSION['name'] = $row['name'];

            header("location: ../../dashboard/index.php");

        } else {
            $_SESSION['password_incorrect'] = true;
            header("location: ../login.php");
        }
    } elseif ($numrow_reg > 0) {
        $row = mysqli_fetch_array($registrar);
        $hashedpass = password_verify($password, $row['password']);

        if ($hashedpass == true) {
            $_SESSION['role'] = "Registrar";
            $_SESSION['id'] = $row['reg_id'];
            $_SESSION['name'] = $row['reg_lname'] . ", " . $row['reg_fname'];

            header("location: ../../dashboard/index.php");

        } else {
            $_SESSION['password_incorrect'] = true;
            header("location: ../login.php");
        }

    
    } elseif ($numrow_teacher > 0) {
        $row = mysqli_fetch_array($teacher);
        $hashedpass = password_verify($password, $row['password']);

        if ($hashedpass == true) {
            $_SESSION['role'] = "Teacher";
            $_SESSION['id'] = $row['teacher_id'];
            $_SESSION['name'] = $row['teacher_lname'] . ", " . $row['teacher_fname'];

            header("location: ../../dashboard/index.php");

        } else {
            $_SESSION['password_incorrect'] = true;
            header("location: ../login.php");
        }

    } elseif ($numrow_student > 0) {
        $row = mysqli_fetch_array($student);
        $hashedpass = password_verify($password, $row['password']);

        if ($hashedpass == true) {
            $_SESSION['role'] = "Student";
            $_SESSION['id'] = $row['student_id'];
            $_SESSION['name'] = $row['student_lname'] . ", " . $row['student_fname'];

            header("location: ../../dashboard/index.php");

        } else {
            $_SESSION['password_incorrect'] = true;
            header("location: ../login.php");
        }

    } else {
        $_SESSION['username_incorrect'] = true;
        header("location: ../login.php");
    }
}
?>