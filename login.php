<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form method="post" action="">
        <h1 class="title">Iniciar sesion</h1>
        <?php include("conexion.php");
        include("loginController.php"); ?>
        <label>
        <i class="fa-solid fa-envelope"></i>
            <input placeholder="email" type="text"  name="email">
        </label>
        <label>
            <i class="fa-solid fa-lock"></i>
            <input placeholder="password" type="password"  name="password">
        </label>
       
        <a href="signUp.php" class="link">Registrarse</a>
        <a href="index.php" class="link">Regresar</a>
        <input id="button" type="submit" class="btn"name="buttonE"></button>
    </form>
    
</body>
</html>