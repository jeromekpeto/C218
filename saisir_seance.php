
<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <h2 class="">Saisir les d&eacute;tails de la s&eacute;ance </h2>

</div>

<div class="form-group">
    <hr />
</div>
<a href="?id=7">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>

<?php $filmID = $_GET['el'] ; ?>

<form action="?id=7&el=999&f=<?php echo $filmID ?>" method="post">
    <table width="100%" border="0">
        <tr width="100%">
            <td width="25%" ><p class="texte_12_bleu" style="text-align: right">Salle :</p></td>
            <td width="25%" >
                <select  class="texte_12_bleu" name="salle">
                    <option value="1">SALLE 1</option>
                    <option value="2">SALLE 2</option>
                    <option value="3">SALLE 3</option>
                    <option value="4">SALLE 4</option>
                    <option value="5">SALLE 5</option>
                    <option value="6">SALLE 6</option>
                    <option value="7">SALLE 7</option>
                    <option value="8">SALLE 8</option>
                    <option value="9">SALLE 9</option>
                    <option value="10">SALLE 10</option>
                </select>
            </td>
              

        </tr>
        <tr width="100%">
            <td><p class="texte_12_bleu" style="text-align: right" >Date Seance: </p> </td>
            <td><input class="texte_12_bleu" type="text" name="dateseance" size="50" /></td>
         

        </tr>
        <tr width="100%">
            <td><p class="texte_12_bleu" style="text-align: right" >Heure-Minutes-Secondes : </p> </td>
            <td>
                <span class="texte_12_bleu" style="text-align: right">Heure :</span> 
                <select  class="texte_12_bleu" name="heure">
                    <option value="1">	1  </option>
                    <option value="2">	2  </option>
                    <option value="3">	3  </option>
                    <option value="4">	4  </option>
                    <option value="5">	5  </option>
                    <option value="6">	6  </option>
                    <option value="7">	7  </option>
                    <option value="8">	8  </option>
                    <option value="9">	9  </option>
                    <option value="10">	10 </option>
                    <option value="11">	11 </option>
                    <option value="12">	12 </option>
                    <option value="13">	13 </option>
                    <option value="14">	14 </option>
                    <option value="15">	15 </option>
                    <option value="16">	16 </option>
                    <option value="17">	17 </option>
                    <option value="18">	18 </option>
                    <option value="19">	19 </option>
                    <option value="20">	20 </option>
                    <option value="21">	21 </option>
                    <option value="22">	22 </option>
                    <option value="23">	23 </option>
                    <option value="24">	24 </option>
                </select>
                <span class="texte_12_bleu" style="text-align: right">Minutes : </span>
                <select  class="texte_12_bleu" name="minute">
                    <option value="1">  1  </option>
                    <option value="2">  2  </option>
                    <option value="3">  3  </option>
                    <option value="4">  4  </option>
                    <option value="5">  5  </option>
                    <option value="6">  6  </option>
                    <option value="7">  7  </option>
                    <option value="8">  8  </option>
                    <option value="9">  9  </option>
                    <option value="10"> 10 </option>
                    <option value="11"> 11 </option>
                    <option value="12"> 12 </option>
                    <option value="13"> 13 </option>
                    <option value="14"> 14 </option>
                    <option value="15"> 15 </option>
                    <option value="16"> 16 </option>
                    <option value="17"> 17 </option>
                    <option value="18"> 18 </option>
                    <option value="19"> 19 </option>
                    <option value="20"> 20 </option>
                    <option value="21"> 21 </option>
                    <option value="22"> 22 </option>
                    <option value="23"> 23 </option>
                    <option value="24"> 24 </option>
                    <option value="25"> 25 </option>
                    <option value="26"> 26 </option>
                    <option value="27"> 27 </option>
                    <option value="28"> 28 </option>
                    <option value="29"> 29 </option>
                    <option value="30"> 30 </option>
                    <option value="31"> 31 </option>
                    <option value="32"> 32 </option>
                    <option value="33"> 33 </option>
                    <option value="34"> 34 </option>
                    <option value="35"> 35 </option>
                    <option value="36"> 36 </option>
                    <option value="37"> 37 </option>
                    <option value="38"> 38 </option>
                    <option value="39"> 39 </option>
                    <option value="40"> 40 </option>
                    <option value="41"> 41 </option>
                    <option value="42"> 42 </option>
                    <option value="43"> 43 </option>
                    <option value="44"> 44 </option>
                    <option value="45"> 45 </option>
                    <option value="46"> 46 </option>
                    <option value="47"> 47 </option>
                    <option value="48"> 48 </option>
                    <option value="49"> 49 </option>
                    <option value="50"> 50 </option>
                    <option value="51"> 51 </option>
                    <option value="52"> 52 </option>
                    <option value="53"> 53 </option>
                    <option value="54"> 54 </option>
                    <option value="55"> 55 </option>
                    <option value="56"> 56 </option>
                    <option value="57"> 57 </option>
                    <option value="58"> 58 </option>
                    <option value="59"> 59 </option>


                </select>
                <span class="texte_12_bleu" style="text-align: right">Secondes : </span>
                <select  class="texte_12_bleu" name="seconde">
                    <option value="1">  1  </option>
                    <option value="2">  2  </option>
                    <option value="3">  3  </option>
                    <option value="4">  4  </option>
                    <option value="5">  5  </option>
                    <option value="6">  6  </option>
                    <option value="7">  7  </option>
                    <option value="8">  8  </option>
                    <option value="9">  9  </option>
                    <option value="10"> 10 </option>
                    <option value="11"> 11 </option>
                    <option value="12"> 12 </option>
                    <option value="13"> 13 </option>
                    <option value="14"> 14 </option>
                    <option value="15"> 15 </option>
                    <option value="16"> 16 </option>
                    <option value="17"> 17 </option>
                    <option value="18"> 18 </option>
                    <option value="19"> 19 </option>
                    <option value="20"> 20 </option>
                    <option value="21"> 21 </option>
                    <option value="22"> 22 </option>
                    <option value="23"> 23 </option>
                    <option value="24"> 24 </option>
                    <option value="25"> 25 </option>
                    <option value="26"> 26 </option>
                    <option value="27"> 27 </option>
                    <option value="28"> 28 </option>
                    <option value="29"> 29 </option>
                    <option value="30"> 30 </option>
                    <option value="31"> 31 </option>
                    <option value="32"> 32 </option>
                    <option value="33"> 33 </option>
                    <option value="34"> 34 </option>
                    <option value="35"> 35 </option>
                    <option value="36"> 36 </option>
                    <option value="37"> 37 </option>
                    <option value="38"> 38 </option>
                    <option value="39"> 39 </option>
                    <option value="40"> 40 </option>
                    <option value="41"> 41 </option>
                    <option value="42"> 42 </option>
                    <option value="43"> 43 </option>
                    <option value="44"> 44 </option>
                    <option value="45"> 45 </option>
                    <option value="46"> 46 </option>
                    <option value="47"> 47 </option>
                    <option value="48"> 48 </option>
                    <option value="49"> 49 </option>
                    <option value="50"> 50 </option>
                    <option value="51"> 51 </option>
                    <option value="52"> 52 </option>
                    <option value="53"> 53 </option>
                    <option value="54"> 54 </option>
                    <option value="55"> 55 </option>
                    <option value="56"> 56 </option>
                    <option value="57"> 57 </option>
                    <option value="58"> 58 </option>
                    <option value="59"> 59 </option>


                </select>   
            </td>

        </tr>

        <tr width="100%">
            <td colspan="2" align="center">
                <input type="submit" value="Enregistrer" class="texte_12_bleu" name="enregistrer">
            </td>
        </tr>
    </table>
</form>