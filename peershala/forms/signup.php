<?php
require_once 'db_con.php';
if(isset($_POST["subscribe"])){
    $insert_data = [
        'email' => $_POST['email'],
        'name' => $_POST['name'],
        'tel' => $_POST['tel']
    ];
    $keys = implode(",",array_keys($insert_data));
    $val = implode("','",array_values($insert_data));

    $sql = "INSERT INTO sign_up($keys) VALUES ('$val')";
    $insert = $connection->query($sql);
    
    if($insert )
    {
        echo "Successfully done";
        header("Refresh:3,url=/peershala/");
    }
    else{
        echo"Not done";
    }
}

?>