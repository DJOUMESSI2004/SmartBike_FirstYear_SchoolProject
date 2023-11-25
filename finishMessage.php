<?php
include "navbar.php";

$mail = $_GET['mail'];
$add = $_GET['addr'];
$tel = $_GET['tel'];
$p_nom = $_GET['p_nom'];
$prenom = $_GET['prenom'];

?>
<style>
   #chat{
    top: 80px;
   }
</style>
<div class="thanks_container">
    <div class="thanks">
        <h1> ✔ Commande Valider <?php echo $prenom ?>!!!</h1>
    </div>
    <div class="info_cmde">
        <div class="ad_su">
            Aux information suivantes:
        </div>
        <table>
            <!-- <tr>Nom: </tr><tr></tr><br> -->
            <tr>
                <td>📜 Email: </td>
                <td class="inf" style="color:darkblue; text-decoration: underline;cursor:pointer;" ><?php echo $mail ?></td>
            </tr>
            <tr>
                <td>⛪ Adresse: </td>
                <td class="inf" ><?php echo $add ?></td>
            </tr>
            <tr>
                <td>📞 Telephone: </td>
                <td class="inf"><?php echo $tel ?></td>
            </tr>
            
        </table>
    </div>
    <div class="back">
        <a href="index.php">OK</a>
    </div>
</div>