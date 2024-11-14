<?php
            if(isset($_POST["email"]) && isset($_POST["password"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
    
                if($email == 'admin123@gmail.com' && $password == 'admin') {
                    header('Location: ./../beranda.php');
                }
                    else {
                        header('Location: ./../wrong.php');
                    }
            

        }
   
 ?>