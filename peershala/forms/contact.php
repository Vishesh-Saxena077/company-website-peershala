<?php
require_once 'db_con.php';
if(isset($_POST["contact_us"])){
    $insert_data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'msg' => $_POST['msg']
    ];
    $keys = implode(",",array_keys($insert_data));
    $val = implode("','",array_values($insert_data));

    $sql = "INSERT INTO contact_us($keys) VALUES ('$val')";
    #echo $sql;
    $insert = $connection->query($sql);
    
    if($insert)
    {
        echo "Successfully done";
        header("Refresh:3,url=/peershala/contact.html");
    }
    else{
        echo"Not done";
    }
}
?>