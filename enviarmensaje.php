<body><link rel="stylesheet" href="enviar.css">
<?php

 $mensaje=$_POST["mensaje"];

$conectar=mysqli_connect("localhost","root","","mensaje");
$mensaje=mysqli_real_escape_string($conectar,$mensaje);

$resultado=mysqli_query($conectar,'INSERT INTO mensaje(mensaje) VALUES ("'.$mensaje.'")');

echo("<center><h1>Mensaje enviado</h1> <br> <button class='btn'>Volver</button></center>");

?>

<script>
var btn=document.querySelector(".btn");
btn.addEventListener("click",()=>{
    
    location.href="http://localhost/friendszone/index.php"
});
</script>
</body>