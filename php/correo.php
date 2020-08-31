<?php
$telefono=isset($_POST['telefono']);
$correo=isset($_POST['correo']);
$comentario=isset($_POST['comentario']);
$nombre= isset($_POST['nombre']);
//Recipiente
$to = 'juan.3395@hotmail.com';

//remitente del correo
$from = 'envio@mnegocios.com';
$fromName = 'BaulPHP';

//Asunto del email
$subject = 'Prueba para JASD'; 

//Ruta del archivo adjunto
//$file = "IKÉ TE CUIDA MASTER.pdf";

//Contenido del Email
$htmlContent = 'mombre : '.$nombre.'correo : '.$correo.'telefono : '.$telefono.'comentario : '.$comentario;

//Encabezado para información del remitente
$headers = "De: $fromName"." <".$from.">";

//Limite Email
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//Encabezados para archivo adjunto 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//límite multiparte
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparación de archivo
// if(!empty($file) > 0){
//     if(is_file($file)){
//         $message .= "--{$mime_boundary}\n";
//         $fp =    @fopen($file,"rb");
//         $data =  @fread($fp,filesize($file));

//         @fclose($fp);
//         $data = chunk_split(base64_encode($data));
//         $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
//         "Content-Description: ".basename($files[$i])."\n" .
//         "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
//         "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
//     }
// }
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//Enviar EMail
$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//Estado de envío de correo electrónico
//echo $mail?"<h1>Correo enviado.</h1>":"<h1>El envío de correo falló.</h1>";

echo "<script>location.href = '../index.php';</script>";