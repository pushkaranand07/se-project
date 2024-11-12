<?php

   $db_name = 'mysql:host=localhost;dbname=codehabibi';
   $db_user_name = 'root';
   $db_user_pass = 'Pushkar@1';

   try {
       $pdo = new PDO($db_name, $db_user_name, $db_user_pass);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connection successful!";
   } catch (PDOException $e) {
       echo "Connection failed: " . $e->getMessage();
   }

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 20; $i++) {
          $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

?>
