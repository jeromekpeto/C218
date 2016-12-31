

<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <h2 class="">Film Publi&eacute; avec succ&egrave;s</h2>

</div>

<div class="form-group">
    <hr />
</div>

<a href="?id=5">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>


<br>

<table width="100%">
    <tr width="100%">
        <td align="center">
            <?php
            $filmID = $_GET['f'];

            $sql = "update p_film set fl_etat_film = 2 where fl_id =  '$filmID' ";

            mysql_query($sql);


          
            ?>
        </td>
    </tr>
</table>