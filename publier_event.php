
<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <h2 class="">Confirmer la publication de la s&eacute;ance </h2>

</div>

<div class="form-group">
    <hr />
</div>

<a href="?id=6">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>


<?php $filmID = $_GET['el'] ; ?>

<form action="?id=9&el=999&f=<?php echo $filmID ?>" method="post">
    <table width="100%" border="0">
       
        <tr width="100%">
            <td colspan="2" align="center">
                <input type="submit" value="Publier Evenement" class="texte_12_bleu" name="enregistrer">
                 <!--<input type="submit" value="Annuler" class="texte_12_bleu" name="annuler">-->
            </td>
          
        </tr>
    </table>
</form>