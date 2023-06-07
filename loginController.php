<?php 
session_start();
if(!empty($_POST["buttonE"])){
   
    if(empty($_POST["email"]) and empty($_POST["password"])){
        echo"<script>alert('Campos vacios ');</script>";
    }else{
        $email=$_POST["email"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from crearUsuario where email='$email' and password='$clave'");
        if($datos=$sql->fetch_object()){
            session_start();
            $q="SELECT  name_user from crearUsuario where email='$email' and password='$clave'";
            $consulta=mysqli_query($conexion,$q);
            $mostrar=mysqli_fetch_array($consulta);
            $_SESSION['username']=$mostrar['name_user'];  
            header("location:areaTrabajo.php");
        }else{
            echo"<script>alert('usuario no existe');</script>";
        }
   
    }
}
?>