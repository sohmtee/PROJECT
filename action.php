
 <?php
   require "includes/database.php";
//create database

    $db ->db_connect("project");

//sql to create table
$sql= "CREATE TABLE lga(
state_id INT(20) AUTO_INCREMENT PRIMARY KEY,
lga_id INT(20) NOT NULL,
lga_name VARCHAR(50) NOT NULL)";
if($db->query($sql) === TRUE){
    echo "table lga created successfully";
}else {
    echo "Error creating table: " . 
        $db->error;
}
$sql = "CREATE TABLE state(
state_id INT(20) AUTO_INCREMENT PRIMARY KEY,
state_code INT(20) NOT NULL,
state_name VARCHAR(50) NOT NULL)";
if ($db->query($sql) === TRUE){
    echo "table state created successfully";
}else{
    echo "Error creating table: ". $db->error;
}
$sql= "CREATE TABLE ward(
lga_id INT(20) AUTO_INCREMENT PRIMARY KEY,
ward_id INT(20) NOT NULL,
ward_name VARCHAR(50) NOT NULL)";
if ($db->query($sql) === TRUE){
    echo "table ward created successfully";
}else{
    echo "Error creating table: ". $db->error;
}
$sql = "CREATE TABLE pollingunit(
ward_id INT(20) AUTO_INCREMENT PRIMARY KEY,
polling_unit_code INT(20) NOT NULL,
polling_unit_name VARCHAR(50) NOT NULL)";
if ($db->query($sql) === TRUE){
    echo "table pollingunit created successfully";
}else{
    echo "Error creating table: ". $db->error;
}

    ?>