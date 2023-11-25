
<?php include "Server/ConnectDB.php"; include "Server/retrieve.php";
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

// client infos
$email = "";
$adresse_client = "";
$country = "";
$tel = "";
$cl_id = "";
foreach($client as $info){
    $cl_id = $info['no_client'];
    $email = $info['email_client'];
    $adresse_client = $info['adresse_client'];
    $country = $info['country'];
    $tel = $info['tel_client'];
}
$panier = $_GET['panier'];
?>

<link rel="stylesheet" href="styles.css">
<!-- <link rel="stylesheet" href="sty.css"> -->
<style>
    .LogImg_Djoumessi{
        border-bottom: 0px;
    }
    #LformDivL{
        background-color: white;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid gray;
    }
    .payForm_Djoumessi{
        margin-top: 10%;
    }
    @media only screen and (min-width:200px) and (max-width:768px){
        .payFormContainer_Djoumessi{
            display: flex;
            flex-wrap: wrap;
        }
        .RightForm_Djoumessi{
            width: 100%;
        }
        .LeftForm_Djoumessi{
            width: 100%;
        }
    }

</style>

<div class="payFormContainer_Djoumessi">

    <div class="RightForm_Djoumessi">
        <div class="LogForm_Djoumessi">
            <!-- top logo taggng for form -->
            <div class="LogImg_Djoumessi">
                <img src="images/logo.png" id="logP" alt="">
                <h6>panier > information > livraison > paiement</h6>
            </div>
            <!-- starting the form tagging -->
            <div class="payForm_Djoumessi">
                <form action="Server/insertDB.php?prod=<?php echo $id?>&panier=<?php echo $panier ?>" method="post">
                    <div class="formDivL" id="LformDivL">

                        <table>
                            <tr>
                                <td>Contact</td><td><?php echo $email ?></td><td><a href="payementForm.php">modifier</a></td>
                            </tr>
                            <tr>
                                <td>Expédier à</td><td><?php echo $adresse_client,' ', $country ?></td><td><a href="payementForm.php">modifier</a></td>
                            </tr>
                        </table>
                        
                    </div>

                    <h2>Mode d'expédition</h2>
                    <div class="formDivL" id="LformDivL" style="background-color: #f2d9b1;border: 1px solid red;">
                        <table>
                            <tr>
                                <td>Type de Livraison</td><td style="padding-left:19%;"><strong>Gratuit</strong></td>
                            </tr>
                        </table>
                    </div>

                    <div class="formDivS" id="end">
                        <a href="payementForm.php">< Revenir aux informations</a>
                        
                    </div>
                    <div class="formDivS" id="end">
                        <a href="payementForm.php?prod_id=<?php echo $id?>"> < retour au panier</a>
                        <input type="submit" value="Valider la Commande" id="submit" name="f_submit">
                    </div>
                </form>
            </div>

        </div>

    </div>

    <div class="LeftForm_Djoumessi">
        <table>
            <tr>
                <td style="width:13%"><img src="uploads/<?php echo $p_img ?>" alt=""></td>
                <td><?php echo $p_nom ?></td>
                <td style="width:30%; text-align:right;;"><?php echo $val_art?> £uro</td>
            </tr>
        </table>
        <div class="FinalPay_Djoumessi">
            <input type="text"> <button>Validate</button>
        </div>
        <table style="margin-top:20px;">
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
