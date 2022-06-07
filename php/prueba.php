<?php

    session_start();
    
    if(!isset($_SESSION['usuario'])){
        // echo '
        //     <script>
        //         alert("Por favor debes iniciar sesion");
        //          window.location = "./login.php";
        //     </script>
        // ';
        header("location: ./login.php");
        session_destroy();
        die();
        
    }

    //session_destroy();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
    </head>

    <body>
        <h1>welcome to my world</h1>
    </body>

    </html>