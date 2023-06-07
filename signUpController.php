<?php 
if(!empty($_POST["buttonC"])){
   
    if(empty($_POST["email"]) and empty($_POST["password"]) and empty($_POST["username"])){
        echo"<script>alert('Campos vacios ');</script>";
    }else{
        $email=$_POST["email"];
        $clave=$_POST["password"];
        $name=$_POST["username"];
        $sql=$conexion->query(" INSERT INTO crearUsuario(name_user,email,password) values('$name','$email','$clave')");
            echo"<script>alert('Usuario creado');</script>";
            header("location:login.php");
       
    }
}
?>