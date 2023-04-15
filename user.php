<?php
if (isset($_POST) && !empty($_POST)) {
    require ("db.php");
    // echo "<pre>",print_r($_POST); die();
    if($_POST['password'] != $_POST['confirm_password'])
    {
        header('Location: signup.php?e=password');
    }else{

        
    $data = [
        ':email' => $_POST["email"],
    ];
    $stmt = $conn->prepare("SELECT * FROM user WHERE  email = :email");
    $stmt->execute($data); 
    $user = $stmt->fetch();

    if(empty($user)){
    $data = [
        ':title' => $_POST["title"],
        ':first_name' => $_POST["first_name"],
        ':last_name' => $_POST["last_name"],
        ':password' => md5($_POST['password']),
        ':email' => $_POST["email"],
        ':phone_no' => $_POST["phone_no"],
        ':created_at' => date('Y-m-d H:i:s'),
    ];
    $sql = "INSERT INTO user 
        (title ,first_name,last_name, email , phone_no , created_at , password ) 
    VALUES (:title, :first_name, :last_name, :email ,:phone_no , :created_at , :password )";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $insert_id = $conn->lastInsertId();
    header('Location: login.php');
    }else{
        header('Location: signup.php?e=email');
    }
}
}
?>