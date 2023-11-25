
<?php include "Server/ConnectDB.php";
if(isset($_GET['prod_id']) && $_GET['prod_id'] != NULL){

    $prod_id = $_GET['prod_id'];
    $buy_p = $db->query("SELECT * from articles where no_article = $prod_id limit 1")->fetchAll();
    $p_img = "";
    $id = "";
    $p_nom = "";
    $p_prix = "";
    foreach($buy_p as $data){
        $id = $data['no_article'];
        $p_img = $data['prod_img'];
        $p_nom = $data['nom_art'];
        $p_prix = $data['no_prix'];
    }
    $sprix = $db->query("SELECT * from prix where no_prix = $p_prix limit 1")->fetchAll();
    $val_art = "";
    foreach($sprix as $valeur){
        $val_art = $valeur['valeur'];
    }

    // inserting file
    include "Server/insertDB.php";
    }

?>

<link rel="stylesheet" href="styles.css">
<!-- <link rel="stylesheet" href="sty.css"> -->


<div class="payFormContainer_Djoumessi">

    <div class="RightForm_Djoumessi">
        <div class="LogForm_Djoumessi">
            <!-- top logo taggng for form -->
            <div class="LogImg_Djoumessi">
                <img src="images/logo.png" id="logP" alt="">
                <h6>panier > information > livraison > paiement</h6>
                <h5>Payement Express</h5>
                <div class="paypal_Djoumessi">
                     <img id="paypal" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAxcHgiIGhlaWdodD0iMzIiIHZpZXdCb3g9IjAgMCAxMDEgMzIiIHByZXNlcnZlQXNwZWN0UmF0aW89InhNaW5ZTWluIG1lZXQiIHhtbG5zPSJodHRwOiYjeDJGOyYjeDJGO3d3dy53My5vcmcmI3gyRjsyMDAwJiN4MkY7c3ZnIj48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDEyLjIzNyAyLjggTCA0LjQzNyAyLjggQyAzLjkzNyAyLjggMy40MzcgMy4yIDMuMzM3IDMuNyBMIDAuMjM3IDIzLjcgQyAwLjEzNyAyNC4xIDAuNDM3IDI0LjQgMC44MzcgMjQuNCBMIDQuNTM3IDI0LjQgQyA1LjAzNyAyNC40IDUuNTM3IDI0IDUuNjM3IDIzLjUgTCA2LjQzNyAxOC4xIEMgNi41MzcgMTcuNiA2LjkzNyAxNy4yIDcuNTM3IDE3LjIgTCAxMC4wMzcgMTcuMiBDIDE1LjEzNyAxNy4yIDE4LjEzNyAxNC43IDE4LjkzNyA5LjggQyAxOS4yMzcgNy43IDE4LjkzNyA2IDE3LjkzNyA0LjggQyAxNi44MzcgMy41IDE0LjgzNyAyLjggMTIuMjM3IDIuOCBaIE0gMTMuMTM3IDEwLjEgQyAxMi43MzcgMTIuOSAxMC41MzcgMTIuOSA4LjUzNyAxMi45IEwgNy4zMzcgMTIuOSBMIDguMTM3IDcuNyBDIDguMTM3IDcuNCA4LjQzNyA3LjIgOC43MzcgNy4yIEwgOS4yMzcgNy4yIEMgMTAuNjM3IDcuMiAxMS45MzcgNy4yIDEyLjYzNyA4IEMgMTMuMTM3IDguNCAxMy4zMzcgOS4xIDEzLjEzNyAxMC4xIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDAzMDg3IiBkPSJNIDM1LjQzNyAxMCBMIDMxLjczNyAxMCBDIDMxLjQzNyAxMCAzMS4xMzcgMTAuMiAzMS4xMzcgMTAuNSBMIDMwLjkzNyAxMS41IEwgMzAuNjM3IDExLjEgQyAyOS44MzcgOS45IDI4LjAzNyA5LjUgMjYuMjM3IDkuNSBDIDIyLjEzNyA5LjUgMTguNjM3IDEyLjYgMTcuOTM3IDE3IEMgMTcuNTM3IDE5LjIgMTguMDM3IDIxLjMgMTkuMzM3IDIyLjcgQyAyMC40MzcgMjQgMjIuMTM3IDI0LjYgMjQuMDM3IDI0LjYgQyAyNy4zMzcgMjQuNiAyOS4yMzcgMjIuNSAyOS4yMzcgMjIuNSBMIDI5LjAzNyAyMy41IEMgMjguOTM3IDIzLjkgMjkuMjM3IDI0LjMgMjkuNjM3IDI0LjMgTCAzMy4wMzcgMjQuMyBDIDMzLjUzNyAyNC4zIDM0LjAzNyAyMy45IDM0LjEzNyAyMy40IEwgMzYuMTM3IDEwLjYgQyAzNi4yMzcgMTAuNCAzNS44MzcgMTAgMzUuNDM3IDEwIFogTSAzMC4zMzcgMTcuMiBDIDI5LjkzNyAxOS4zIDI4LjMzNyAyMC44IDI2LjEzNyAyMC44IEMgMjUuMDM3IDIwLjggMjQuMjM3IDIwLjUgMjMuNjM3IDE5LjggQyAyMy4wMzcgMTkuMSAyMi44MzcgMTguMiAyMy4wMzcgMTcuMiBDIDIzLjMzNyAxNS4xIDI1LjEzNyAxMy42IDI3LjIzNyAxMy42IEMgMjguMzM3IDEzLjYgMjkuMTM3IDE0IDI5LjczNyAxNC42IEMgMzAuMjM3IDE1LjMgMzAuNDM3IDE2LjIgMzAuMzM3IDE3LjIgWiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMwMDMwODciIGQ9Ik0gNTUuMzM3IDEwIEwgNTEuNjM3IDEwIEMgNTEuMjM3IDEwIDUwLjkzNyAxMC4yIDUwLjczNyAxMC41IEwgNDUuNTM3IDE4LjEgTCA0My4zMzcgMTAuOCBDIDQzLjIzNyAxMC4zIDQyLjczNyAxMCA0Mi4zMzcgMTAgTCAzOC42MzcgMTAgQyAzOC4yMzcgMTAgMzcuODM3IDEwLjQgMzguMDM3IDEwLjkgTCA0Mi4xMzcgMjMgTCAzOC4yMzcgMjguNCBDIDM3LjkzNyAyOC44IDM4LjIzNyAyOS40IDM4LjczNyAyOS40IEwgNDIuNDM3IDI5LjQgQyA0Mi44MzcgMjkuNCA0My4xMzcgMjkuMiA0My4zMzcgMjguOSBMIDU1LjgzNyAxMC45IEMgNTYuMTM3IDEwLjYgNTUuODM3IDEwIDU1LjMzNyAxMCBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA2Ny43MzcgMi44IEwgNTkuOTM3IDIuOCBDIDU5LjQzNyAyLjggNTguOTM3IDMuMiA1OC44MzcgMy43IEwgNTUuNzM3IDIzLjYgQyA1NS42MzcgMjQgNTUuOTM3IDI0LjMgNTYuMzM3IDI0LjMgTCA2MC4zMzcgMjQuMyBDIDYwLjczNyAyNC4zIDYxLjAzNyAyNCA2MS4wMzcgMjMuNyBMIDYxLjkzNyAxOCBDIDYyLjAzNyAxNy41IDYyLjQzNyAxNy4xIDYzLjAzNyAxNy4xIEwgNjUuNTM3IDE3LjEgQyA3MC42MzcgMTcuMSA3My42MzcgMTQuNiA3NC40MzcgOS43IEMgNzQuNzM3IDcuNiA3NC40MzcgNS45IDczLjQzNyA0LjcgQyA3Mi4yMzcgMy41IDcwLjMzNyAyLjggNjcuNzM3IDIuOCBaIE0gNjguNjM3IDEwLjEgQyA2OC4yMzcgMTIuOSA2Ni4wMzcgMTIuOSA2NC4wMzcgMTIuOSBMIDYyLjgzNyAxMi45IEwgNjMuNjM3IDcuNyBDIDYzLjYzNyA3LjQgNjMuOTM3IDcuMiA2NC4yMzcgNy4yIEwgNjQuNzM3IDcuMiBDIDY2LjEzNyA3LjIgNjcuNDM3IDcuMiA2OC4xMzcgOCBDIDY4LjYzNyA4LjQgNjguNzM3IDkuMSA2OC42MzcgMTAuMSBaIj48L3BhdGg+PHBhdGggZmlsbD0iIzAwOWNkZSIgZD0iTSA5MC45MzcgMTAgTCA4Ny4yMzcgMTAgQyA4Ni45MzcgMTAgODYuNjM3IDEwLjIgODYuNjM3IDEwLjUgTCA4Ni40MzcgMTEuNSBMIDg2LjEzNyAxMS4xIEMgODUuMzM3IDkuOSA4My41MzcgOS41IDgxLjczNyA5LjUgQyA3Ny42MzcgOS41IDc0LjEzNyAxMi42IDczLjQzNyAxNyBDIDczLjAzNyAxOS4yIDczLjUzNyAyMS4zIDc0LjgzNyAyMi43IEMgNzUuOTM3IDI0IDc3LjYzNyAyNC42IDc5LjUzNyAyNC42IEMgODIuODM3IDI0LjYgODQuNzM3IDIyLjUgODQuNzM3IDIyLjUgTCA4NC41MzcgMjMuNSBDIDg0LjQzNyAyMy45IDg0LjczNyAyNC4zIDg1LjEzNyAyNC4zIEwgODguNTM3IDI0LjMgQyA4OS4wMzcgMjQuMyA4OS41MzcgMjMuOSA4OS42MzcgMjMuNCBMIDkxLjYzNyAxMC42IEMgOTEuNjM3IDEwLjQgOTEuMzM3IDEwIDkwLjkzNyAxMCBaIE0gODUuNzM3IDE3LjIgQyA4NS4zMzcgMTkuMyA4My43MzcgMjAuOCA4MS41MzcgMjAuOCBDIDgwLjQzNyAyMC44IDc5LjYzNyAyMC41IDc5LjAzNyAxOS44IEMgNzguNDM3IDE5LjEgNzguMjM3IDE4LjIgNzguNDM3IDE3LjIgQyA3OC43MzcgMTUuMSA4MC41MzcgMTMuNiA4Mi42MzcgMTMuNiBDIDgzLjczNyAxMy42IDg0LjUzNyAxNCA4NS4xMzcgMTQuNiBDIDg1LjczNyAxNS4zIDg1LjkzNyAxNi4yIDg1LjczNyAxNy4yIFoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMDA5Y2RlIiBkPSJNIDk1LjMzNyAzLjMgTCA5Mi4xMzcgMjMuNiBDIDkyLjAzNyAyNCA5Mi4zMzcgMjQuMyA5Mi43MzcgMjQuMyBMIDk1LjkzNyAyNC4zIEMgOTYuNDM3IDI0LjMgOTYuOTM3IDIzLjkgOTcuMDM3IDIzLjQgTCAxMDAuMjM3IDMuNSBDIDEwMC4zMzcgMy4xIDEwMC4wMzcgMi44IDk5LjYzNyAyLjggTCA5Ni4wMzcgMi44IEMgOTUuNjM3IDIuOCA5NS40MzcgMyA5NS4zMzcgMy4zIFoiPjwvcGF0aD48L3N2Zz4" alt="">
                </div>
                <h3>OU</h3>
            </div>
            <div class="meansPayment_Djoumessi">
                <img src="https://checkout.conversionbear.com/images/payment-badges/visa_1_card.svg" alt="">
                <img src="https://checkout.conversionbear.com/images/payment-badges/mastercard_card.svg" alt="">
                <img src="https://checkout.conversionbear.com/images/payment-badges/klarna_card.svg" alt="">
            </div>
            <!-- starting the form tagging -->
            <div class="payForm_Djoumessi">
                <form action="" method="post">
                    <div class="formDivL">
                        <h3>Contact</h3>
                        <input type="email" name="email" placeholder="Adresse e-mail" id="LPForm">
                        <input type="checkbox" id="check"><label for="check">  Envoyez-moi les nouvelles et les offres par e-mail</label>
                    </div>
                    <div class="formDivL">
                        <h3>Adresse d’expédition</h3>
                        <select name="country" id="LPForm" placeholder="Select your country">
                            <option>France</option>
                            <option>Germany</option>
                            <option>Britain</option>
                            <option>Suise</option>
                            <option>Finland</option>
                            <option>Grace</option>
                            <option>Italy</option>
                            <option>Russia</option>
                            <option>Belguim</option>
                            <option>Ice-land</option>
                        </select>
                    </div>
                    <div class="formDivS">
                        <input type="text" placeholder="Nom" name="nom">
                        <input type="text" placeholder="Prenom" name="prenom">
                    </div>
                    <div class="formDivL">
                        <input type="text" name="adresse" placeholder="Adresse" id="LPForm">
                    </div>
                    <div class="formDivL">
                        <input type="text" name="appartement" placeholder="Appartement, suites, etc (optionnel) " id="LPForm">
                    </div>
                    <div class="formDivS">
                        <input type="text" placeholder="Code postal" name="codep">
                        <input type="text" placeholder="Ville" name="ville">
                    </div>
                    <div class="formDivL">
                        <input type="telephone" name="telephone" placeholder="telephone" id="LPForm">
                    </div>
                    <div class="formDivL">
                        <input type="checkbox" id="chec"><label for="chec"> Sauvegarder mes coordonnées pour la prochaine fois</label>
                    </div>
                    <div class="formDivL">
                        <input type="checkbox" id="chek"><label for="chek"> Envoyez-moi les nouvelles et les offres par SMS</label>
                    </div>
                    <div class="formDivS" id="end">
                        <a href="card.php?prod_id=<?php echo $id?>"> < retour au panier</a>
                        <input type="submit" value="Contineur ver lexpedition" id="submit" name="submit_c">
                    </div>
                </form>
            </div>

        </div>

    </div>

    <div class="LeftForm_Djoumessi">
    <div class="LeftForm_Djoumessi">
        <table>
            <tr>
                <td style="width:13%"><img src="uploads/<?php echo $p_img ?>" alt=""></td>
                <td><?php echo $p_nom ?></td>
                <td style="width:30%; text-align:right;;"><?php echo $val_art ?> £uro</td>
            </tr>
        </table>
        <div class="FinalPay_Djoumessi">
            <input type="text" placeholder="Code Promo"> <button>Validate</button>
        </div>
        <table style="margin-top:20px;">
            <tr>
                <td colspan="2" >Sous-Total</td>
                <td style="width:30%; text-align:right;;"><?php echo $val_art ?> £uro</td>
            </tr>
            <tr>
                <td colspan="2" >Sous-Total</td>
                <td style="width:30%; text-align:right;;"><?php echo $val_art ?> £uro</td>
            </tr>
            <tr>
                <td colspan="2" ><h3>Total</h3></td>
                <td style="width:35%; text-align:right;;"><h3><?php echo $val_art ?> £uro</h3> </td>
            </tr>
        </table>
    </div>
    </div>

</div>