<?php
$connect = new PDO("mysql:host=localhost;dbname=vueapp","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

$request_data = json_decode(file_get_contents("php://input"));

if ($request_data != null) {

    $data=array();
    if ($request_data->action=="insert") {
        $data=array(":name"=>$request_data->name,":lname"=>$request_data->lname);
        $query = "insert into users (name,lname) values(:name,:lname)";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array("message"=>"Insert Backend Complete");
        echo json_encode($output);
    }
    if ($request_data->action=="GetAll") {
        $query = "select * from users";
        $statement = $connect->prepare($query);
        $statement->execute();
        while($row=$statement->fetch(PDO::FETCH_ASSOC)){
            $data[]=$row;
        }
        echo json_encode($data);
    }
}

?>