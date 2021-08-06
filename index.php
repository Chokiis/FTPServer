<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inicio de sesión</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/indeX.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/style_sheet.css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">      
          <div class="fadeIn first">
            <img src="https://i.imgur.com/1RRDwTM.png" id="icon" alt="Servidor FTP">
          </div>
          <form method="POST" action="indexT.php">
            <input type="text" id="server" class="fadeIn second" name="server" placeholder="IP servidor...">
            <input type="text" id="user" class="fadeIn second" name="user" placeholder="Usuario...">
            <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña...">
            <a href= "funcionesFTP.php?ip=server&user=user&pass=login">
              <input type='submit' class='fadeIn fourth' value='Ingresar' name='btnSub'>
            </a>
          </form>      
        </div>
      </div>
</body>
</html>