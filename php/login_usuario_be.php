<?php 
    //inicia la sesion
    session_start();
    
    include './conexion_be.php';

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'
    and password='$password'");
    
    if(mysqli_num_rows($validar_login) > 0){
        //por seguridad para que no inicie con la url si la tiene 
        $_SESSION['usuario'] = $usuario;
         header("Location: ./prueba.php"); //../For28-main/index.html -- ./prueba.php
         exit();
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../login.html";
            </script>
        ';
        exit();
    }
?>
