<?php
  	if (isset($_POST['g-recaptcha-response'])){

  		/*echo $_POST['g-recaptcha-response'];*/
  		$secreta ="6LdfGicUAAAAACBgCt87_jyB2mi178CSMze8ed7k";
  		$ip = $_SERVER['REMOTE_ADDR'];
  		$captcha = $_POST['g-recaptcha-response'];

  		$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secreta."&response=".$captcha."&remoteip=".$ip);

  		$json = json_decode($respuesta,true);

  		if($json['success']){
  			$From = $_POST['femail'];
	    	$Subject = 'CONTACTO';
			$body0 = "<h2>Mensaje de Contacto --- cursodeactualizacionmedica.com ---</h2>";
		  	$body0 .= "NOMBRE: <br/><strong>". $_POST['fname']."</strong><br/><br/>";
		  	$body0 .= "E-MAIL: <br/><strong>". $_POST['femail']."</strong><br/><br/>";
      		$body0 .= "TELEFONO: <br/><strong>". $_POST['ftel'] ."</strong><br/><br/>";
      		$body0 .= "CIUDAD: <br/><strong>". $_POST['fciu'] ."</strong><br/><br/>";
		  	// $body0 .= "MENSAJE: <br/><strong>". $_POST['fmensaje']."</strong><br/><br/>";
			$body0 =  str_replace(array("<br/>","<br>","</p>","</tr>","</TR>","</td>","</TD>"), array("<br/>\n","<br>\n","</p>\n","</tr>\n","</TR>\n","</td>\n","</TD>\n"), $body0);
			
			$Body = utf8_decode(utf8_encode($body0));
			
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
			$cabeceras .= 'To: <info@cursodeactualizacionmedica.com,ssandoval@cid.mx>'. "\r\n";
			$cabeceras .= 'From: <'. $_POST['femail'] .'>'. "\r\n";
			$Email = 'info@cursodeactualizacionmedica.com,ssandoval@cid.mx'; 
	    if(mail($Email, $Subject, $Body, $cabeceras)){
	       header('Location: enviook.html');
	    } else {
	       print '<p class="resaltado5"><font color="red">Hubo un error, por favor revise sus datos.</font></p><p><a href="/">Regresar</a></p>';
	    }
  		}else{
  			print '<p class="resaltado5"><font color="red">Hubo un error, por favor llene el ReCaptcha.</font></p><p><a href="/">Regresar</a></p>';
  		}
	}
	else{
		print '<p class="resaltado5"><font color="red">Hubo un error, por favor llene el ReCaptcha.</font></p><p><a href="/">Regresar</a></p>';
	}
?>