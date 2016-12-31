

<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <h2 class="">s&eacute;ance Publi&eacute; avec succ&egrave;s</h2>

</div>

<div class="form-group">
    <hr />
</div>

<a href="?id=8">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>


<br>

<table width="100%">
    <tr width="100%">
        <td align="center">
            <?php
            $eventID = $_GET['f'];

            $sql = "update p_event set e_etat_event = 2 where e_id =  '$eventID' ";

            mysql_query($sql);

            ?>
        </td>
    </tr>
</table>