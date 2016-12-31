<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<?php
ob_start();
session_start();
if (isset($_SESSION['user']) != "") {
    header("Location: login.php");
}
include'connection.php';

$erreur = false;

$nom = "";
$pass = "";
$role = "";
$erreurNom = "";
$userError = "";
$passError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomNative = trim($_POST['nom']);
    $nomNative = strip_tags($nomNative);
    $nomNative = htmlspecialchars($nomNative);

    $prenomNative = trim($_POST['prenom']);
    $prenomNative = strip_tags($prenomNative);
    $prenomNative = htmlspecialchars($prenomNative);


    $nom = trim($_POST['user']);
    $nom = strip_tags($nom);
    $nom = htmlspecialchars($nom);

    $role = trim($_POST['role']);
    $role = strip_tags($role);
    $role = htmlspecialchars($role);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);


    if (empty($nom)) {
        $erreur = true;
        $erreurNom = "Veuillez entrer le nom d'utilisateur.";
    } else if (strlen($nom) < 3) {
        $erreur = true;
        $erreurNom = "Le nom d'utilisateur doit etre superieur à 3.";
    } else if (!preg_match("/^[a-zA-Z1-9]+$/", $nom)) {
        $erreur = true;
        $erreurNom = "Le nom d'utilisateur est un alphanumerique.";
    }
    // controle si le nom d'utilisateur existe déjà
    $query = "SELECT username FROM user WHERE username='$nom'";

//    var_dump($query) ; exit ;
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
    if ($count != 0) {
        $erreur = true;
        $userError = "Ce nom d'utilisateur est déjà utilisé.";
    }

    // password validation
    if (empty($pass)) {
        $erreur = true;
        $passError = "Entrer le mot de passe.";
    } else if (strlen($pass) < 6) {
        $erreur = true;
        $passError = "Le mot de passe doit atteint 6 caractères pour la sécurité.";
    }




// password encrypt using SHA256();
    $password = hash('sha256', $pass);

// if there's no error, continue to signup
    if (!$erreur) {

        $query = "insert into user ( username, password, roleuser, nom, prenom ) VALUES('$nom','$password','$role','$nomNative','$prenomNative')";
//    $query = "INSERT INTO user(nomuser,passuser,roleuser) VALUES('$nom','$role','$password')";
        $res = mysql_query($query);

//    var_dump($query) ; exit ;

        if ($res) {
            $errTyp = "success";
            ?>
            <div align ="center" style="margin-top: -70px" >
                <h2 class="">Utilisateur  enr&eacute;gistr&eacute;e avec succ&egrave;s </h2>

            </div>
            <?php
//            echo "<p class=\"texte_12_bleu\"> Utilisateur  enr&eacute;gistr&eacute;e avec succ&egrave;s !";
//            echo " <br>&nbsp;<br>
//        <a href=\"?id=3&el=11\"><br>&nbsp;<br>Aller &agrave la liste des utilisateurs </a>
//";
//            $errMSG = "Enregistrement effectué avec succès";
            unset($nom);
            unset($role);
            unset($pass);
        } else {
            ?>
            <div align ="center" style="margin-top: -70px" >
                <h2 class="" style="color: red">Echec d'enr&eacute;gistrement</h2>

            </div>
            <?php
            $errTyp = "danger";
            $errMSG = "Echec d'enregistrement";
        }
    }
} else {
    ?>



    <div align ="center" style="margin-top: -70px" >
        <h2 class="">Enr&eacute;gistrer un utilisateur</h2>

    </div>
    <?php
}
?>

<div class="form-group">
    <hr />
</div>
<a href="?id=3">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>


<div class="container">



    <?php
    if (isset($errMSG)) {
        ?>
        <div class="form-group">
            <div class="alert alert-<?php echo ($errTyp == "success") ? "success" : $errTyp; ?>">
                <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
            </div>
        </div>
        <?php
    }
    ?>



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

    <div align = "center">
        <div style = "width:500px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#0078f0; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

                <form action = "" method = "post">
                    <label>Nom   :   </label><input type = "text" name = "nom" class = "box"/><br /><br />
                    <label>Prenom   :   </label><input type = "text" name = "prenom" class = "box"/><br /><br />
                    <label>Nom d'utilisateur  :   </label><input type = "text" name = "user" class = "box"/><br /><br />
                    <label>Mot de passe :        </label><input type = "password" name = "pass" class = "box"/><br /><br />
                    <label>Role d'utilisateur  :   </label>

                    <select  class="texte_12_bleu" name="role">
                        <option value="1">USER</option>
                        <option value="2">ADMIN</option>
                        <option value="3">PERSONNEL</option>
                    </select>

                    <br/><br />
                    <input type = "submit" name="valider" value = "Enregistrer"/><br />
                </form>

                <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php
    if ($erreurNom != "") {
        echo $erreurNom;
    } if ($userError != "") {
        echo $userError;
    } if ($passError != "") {
        echo $passError;
    }
    ?></div>

            </div>

        </div>

    </div>


    <?php ob_end_flush(); ?>