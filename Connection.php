<?php
$servername = "localhost";
$database = "rol";
$username = "root";
$password = "";
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$Usuario;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$Consulta="SELECT*FROM usuarios where Usuario='$Usuario' and Contraseña='$Contraseña'";
$resultado=mysqli_query($conn,$Consulta); 

$filas=mysqli_fetch_array($resultado);
if($filas['id_cargo']==1){//Administrador
    header("location:Admin.php");
}
else if($filas['id_cargo']==2){//Profesor
    header("location:Profesor.php");
}
else if($filas['id_cargo']==3){//Estudiante
            header("location:Estudiante.php");
}
else{
        ?>
        <?php
        include("index.php");
        ?>
        <h1 >Error en la autenticacion</h1>
        <?php
    }
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";  
    
mysqli_free_result($resultado);
mysqli_close($conn);

