<?php
require_once('database.php');
$db=new Database();
$id = $_GET['id'];

$db->delete('supplier',"id=$id");
$res = $db->getResult();
  if($res){
    header('Location: /laundry2/index.php?module=supplier');
   }else{
    echo "Upss Something wrong..";
   }
  
?>