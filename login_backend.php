<?php
  include 'connection.php';
  session_start();
   $erreur = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $nomuser = mysql_real_escape_string($_POST['username']);
      $monpassclair = mysql_real_escape_string($_POST['password']); 
      $monpass = hash('sha256', $monpassclair);
      
      $sql = "SELECT iduser FROM user WHERE username = '$nomuser' and password = '$monpass'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      
      
      $count = mysql_num_rows($result);
      
     
		
      if($count == 1 && (!empty($nomuser) && (!empty($monpass)))) {
         header("location: index.php");
         
      }else {
         $erreur = "Le login ou le mot de passe est invalide";
      }
   }
?>
<html>
   
   <head>
      <title>Page d'authentification</title>

      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
       <div align ="center" style="margin-top: -20px;">
                <h2 class="">Connexion à l'interface d'administration <a href="http://localhost/appli-web-cinema/frontend">
                        <img border="0" src="images/login/entrer_site.jpg" style="margin-left: 820px;width: 200px;height: 80px;margin-bottom: -200px;"></a>&nbsp;</h2>
                
            </div>

            <div class="form-group">
                <hr />
             <b>   Vous êtes identifié avec l'adresse IP <?php echo $_SERVER['SERVER_ADDR'] ?><b/>
            </div>
      
       
        <br/><br/><br/>
       
        <div align = "center" style="margin-left: 300px">
         <div style = "width:300px; border: solid 1px #333333;   border-radius: 5px; ">
            <div style = "background-color:#0078f0; color:#FFFFFF; padding:3px;">
             
               <?php echo "<img src=\"images/login/key.png\" height=\"50px\" /> " ; ?>
                
                <b>Login</b></div>
				
            <div style = "margin:30px">
                   
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Valider "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $erreur; ?></div>
					
            </div>
				
         </div>
			
      </div>
        
         <br>  
         <br>  
         
         <div class="form-group">
             Vous pouvez accéder à l'interface d'administration avec les identifiants suivants  :    <b>   Nom d'utilisateur  : user  /  Mot de Passe  : user2016    <br>  </b>   
                  </center>  
         </div> 

   </body>
</html>