<?php
if (isset($_POST) && !empty($_POST)) {
    
    require ("db.php");
    $data = [
        ':age' => $_POST["age"],
        ':gender' => $_POST["gender"],
        ':height' => $_POST["height"],
        ':current_weight' => $_POST["current_weight"],
        ':targeted_weight' => $_POST["targeted_weight"],
        ':id' =>$_SESSION['user_id'],
        ':updated_at' => date('Y-m-d H:i:s'),
    ];
    $sql = "UPDATE user SET age=:age, gender=:gender, height=:height , current_weight=:current_weight , targeted_weight=:targeted_weight , updated_at=:updated_at
     WHERE id=:id";
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);
    $_SESSION['current_weight'] = $_POST['current_weight'];
    $_SESSION['targeted_weight'] = $_POST['targeted_weight'];
    if ( $_POST["current_weight"] >= $_POST["targeted_weight"]){
        header('Location: weight-loss.php');
    }else{
        header('Location: weight-gain.php');
    }   

}
?>