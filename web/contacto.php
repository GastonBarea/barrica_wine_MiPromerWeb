<?php 
$seccion = 'Contacto';
include_once('../barrica_wine/web/config/config.php');
include_once(DIR_BASE.'header.php');
require_once(DIR_BASE.'web/business/contactBusiness.php');

if(!empty($_POST['email'])){
    var_dump($_POST);
    sendMail($_POST);
}
?>



<section class="vinos">
    
    <h1 class="col-sm-12 text-center titpaginasvarias">Barrica Wine</h1>

    <div class="container conten-center">
 
  
    <form action="" method="POST">
           <input class="form" type="text" name="nombre" placeholder="*Nombre" required>
            <br>
            <input class="form" type="text" name="apellido" placeholder="*Apellido" required>
            <br>
            <input class="form" type="email" name="email" placeholder="*Email" required>
            <br>
            <textarea class="form formm" name="mensaje" cols="30" rows="8" placeholder="*Dejanos tu consulta:..."></textarea>
            <p class="conten-center cont">*Todos los campos son oblicatoros</p>


            <input class="btn btn-success" type="submit" name="submitCom" value="Enviar">
    </form> 

        
 </div>
</section>

<?php 

var_dump($_POST);

include_once(DIR_BASE.'include/footer.php')?>