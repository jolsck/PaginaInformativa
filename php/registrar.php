<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<script>
            alert('Gracias por tu contacto! en breve nos estaremos comunicando!');
                    window.location="index.php"
                  </script>"
           <?php
	    } else {
	    	?> 
	    	<script>
            alert('¡Ups hay un error en tus datos');
                    window.location="index.php"
                  </script>"
           <?php
	    }
    }   else {
	    	?> 
	    	<script>
            alert('¡Hace falta alguno de tus datos!');
                    window.location="index.php"
                  </script>"
           <?php
    }
}

?>
