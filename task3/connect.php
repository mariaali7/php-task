<?php 

try{
  $connection = new PDO("mysql:host=localhost;port=4306;dbname=admin_system", "root", "");
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "database error".$e->getMessage();
};

$data = $connection->query('SELECT id , email as EMAIL, password as PASSWORD from Users')->fetchAll();

echo $data;