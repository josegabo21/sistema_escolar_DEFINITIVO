<?php
try{
$conn = new PDO('mysql:host=localhost; dbname=sistema-notasPrimaria', 'root', '');
} catch(PDOException $e){
   echo "Error: ". $e->getMessage();
   die();
}
?>