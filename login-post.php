<?php
if (isset($_POST) && !empty($_POST)) {
    
    require ("db.php");
    $data = [
        ':password' => md5($_POST['password']),
        ':email' => $_POST["email"],
    ];
    $stmt = $conn->prepare("SELECT * FROM user WHERE password=:password and email = :email");
    $stmt->execute($data); 
    $user = $stmt->fetch();

    if(!empty($user)){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['current_weight'] = $user['current_weight'];
        $_SESSION['targeted_weight'] = $user['targeted_weight'];
        header('Location: index.php');
    }
    else{
        header('Location: login.php');
    }
}
?>