<?php
session_start();
require_once('../model/databases.php');
if($_POST)
{
 $correo = isset( $_POST['correo']) ? $_POST['correo'] : '';
 $password = isset( $_POST['password']) ? $_POST['password'] : '';
 $user =get_user_acces($correo);
 if( $user['dt_password']==$password)
 {    
 	$_SESSION["id_ies"] = $user['id_ies'];
  ?>
				<script>
				<?php if($user['dt_tipo']==NULL) { ?>
					window.location="../"
				<?php } elseif($user['dt_tipo']==1) { ?>
					window.location="../"				
				<?php } elseif($user['dt_tipo']==2) { ?>
					window.location="../view/registro.php"				
				<?php } ?> 
				</script>
<?php
     //die();
 }else{
?>
				<script>
					window.location="../"
				</script>
			<?php
    
 }

} 
?>