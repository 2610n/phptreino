<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
      <?php
      session_start();
        if(isset($_SESSION["Error"])){
           echo $_SESSION["Error"];
           session_unset();
        
        }
      
      ?>    
<br><br>
     <form action="logar.php" method="post">


         <label for="">Login</label>
         <input type="text" name="login">
         <label for="">senha</label>
          <input type="password" name="senha"> 
          <input type="submit" value="Botão" name="btn">       

     </form>

</body>
</html>