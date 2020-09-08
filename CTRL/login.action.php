<?php
    include "../MODELE/person.class.php";
    include "../MODELE/employee.class.php";

    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
 
    $password = $_POST['password'];
    $login = $_POST['login'];
    
    $employee = Employee::logIn($login);
    


    if(isset($login) && isset($password)){
  
        if(empty($login))
        {    
             echo   "nologin";
        }
        //verification du login reçu avec celui stocké en bdd
       // Est-ce que le mot de passe spécifié est correct par rapport à celui stocké ?
        if($login == $employee['login'] && (password_verify($password, $employee['password']))){
 
            $_SESSION['employee'] = [];

            $_SESSION['employee']['id'] = $employee['id_employee'];
            $_SESSION['employee']['name'] = $employee['firstname'];
            $_SESSION['employee']['status'] = $employee['id_status'];
                
                    
            echo 'enter';

 
  
        }elseif(($login === $employee['login'] && (!password_verify($password, $employee['password']))) || ($login == !$employee['login'])){
            echo "error";

        }


}

?>