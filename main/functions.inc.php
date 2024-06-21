<?php

function emptyinputsignup($firstname, $lastname, $address, $email, $mobile, $gender, $username, $password) {
    if (empty($firstname) || empty($lastname) || empty($address) || empty($email) || empty($mobile) || empty($gender) || empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function invalidusername($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        return true;
    } else {
        return false;
    }
}

function usernameexists($conn, $username, $email) {
    $sql = "SELECT * FROM job_seeker WHERE js_username = ? OR js_email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultdata = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        return false;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname, $lastname, $address, $email, $mobile, $gender, $username, $password) {
    $sql = "INSERT INTO job_seeker(js_fName, js_lName, js_address, js_email, js_mobile, js_gender, js_username, js_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=stmtfailed");
        exit();
    }
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssss", $firstname, $lastname, $address, $email, $mobile, $gender, $username, $hashedpassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: login.php?success=true");
    exit();
}

function emptyinputlogin($username, $password) {
    if (empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function loginUser($conn, $username, $password) {
    $usernameExists = usernameexists($conn, $username, $username);
    if ($usernameExists === false) {
        header("Location: signup.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $usernameExists["js_password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        header("Location: signup.php?error=wrongpassword");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["js_id"] = $usernameExists["js_id"];
        $_SESSION["js_username"] = $usernameExists["js_id"];
        header("Location: home2.php");
        exit();
    }
}
?>
