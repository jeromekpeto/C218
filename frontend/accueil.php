<table  style=" border: solid 1px ;   border-style: solid; background-color: #F9F9D0; " width="100%">
    <tr>
        <td width="2%" align="center">
        <!--<td width="5%" align="center">-->
            <br>&nbsp;<br>
            <a href="?id=1">

                <br>

<!--<img border="0" width="200" height="200" src="images/films.png"><br>&nbsp;<br>Films-->

            </a>
        </td>
        <td width="90%" >
            <h1 style="text-align: center;font: 35px verdana,  sans-serif, 'Times New Roman';">Vivez le meilleur du Cin&eacute;ma avec notre Agence !</h1>
            <a href="?id=2">
                <img border="0"  width="1000" height="300"  src="../images/bandeau_film.jpg"><br>&nbsp;<br>
            </a>


            <hr>

            <h2 style="text-align: left; font: 35px verdana,  sans-serif, 'Times New Roman';">Top du Moment ( Publi&eacute;s )</h2>
            <?php
//Lance la connexion avec la base donnes
            include "liste_films_affiche.php";
            ?>
            <hr>

            <h2 style="text-align: left; font: 35px verdana,  sans-serif, 'Times New Roman';">S&eacute;ances Publi&eacute;s ( Publi&eacute;s ) </h2>

            <?php
            include "liste_events_publies.php";
            ?>

           
        </td>
<!--        <td width="18%" align="center"  style=" border: solid 1px ; ">
            <br>&nbsp;<br>

            <br>&nbsp;<br>
            <div style="margin-top: -500px;">
                <?php // echo "<a href=\"?id=1\" ><br>&nbsp;<br>S'identifier </a>"; ?>
            </div>
            <br>&nbsp;<br>

        </td>-->

    </tr>
    <tr >

<!--        <td width="2%" align="center" >
            <br>&nbsp;<br>
            <a href="?id=3">

            </a>-->
<!--        <td width="80%" >
            <br>&nbsp;<br>
            <a href="?id=3">
                Partie Droite<br>

            </a>
        </td>-->
<!--        <td width="18%" align="center" >
            <br>&nbsp;<br>
            <a href="?id=3">
                Partie Droite<br>

            </a>
        </td>-->
    </tr>

</table>