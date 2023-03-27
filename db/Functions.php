<?php
if(isset($_POST['submit'])){
    if (isset($_POST['usr'])) {
        include_once('ClassPoo.php');
        $usuario=$_POST['usr'];
        $contrasena=$_POST['pss'];
        $login=new loguin();
        $login->EntrarDatos($usuario,$contrasena);
        $login->loguear();
        $response=$login->loguear();
        
 
        if ($response==="true") {
            header("Location: ../Home.php");
        }else{
            echo '<script language="javascript">alert("Error en datos");</script>';
        } 

    }
}
?>