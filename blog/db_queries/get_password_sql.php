<?php
   $sql_password = "SELECT password_example FROM password_example";

   $stmt_password = $pdo -> prepare($sql_password);
   
   $stmt_password -> execute();
   
   $key= $stmt_password -> fetch(PDO::FETCH_ASSOC);

?>