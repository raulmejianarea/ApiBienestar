<!DOCTYPE html>
<html lang="es">
<head>
<title>Nueva contraseña</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilos.css" />

</head>
<body style="margin: 0; padding: 0;">
 
 <table border="1" cellpadding="0" cellspacing="0" width="100%">
 
    <tr>
 
        <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;">
 
            <img src="https://pngimage.net/wp-content/uploads/2018/05/bienestar-png-3.png" alt="Creating Email Magic" width="600" height="300" style="display: block;" />
            <h1 style="font-family:verdana;">APP BIENESTAR</h1>
        </td>
 
    </tr>

    <tr>
 
        <td align="center" bgcolor="#ffffff" style="padding: 40px 0 30px 0;">
  
        <p> <font size="4">Hola {{ $msg['name'] }}, tu contraseña nueva es: {{ $msg['new_password'] }} . No olvides cambiarla </font> </p>
  
        </td>
  
    </tr>

 
 </table>
 
</body>
</html>