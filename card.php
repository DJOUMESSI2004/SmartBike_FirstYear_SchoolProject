<?php include "navbar.php"; include "Server/ConnectDB.php";

if(isset($_GET['prod_id']) && $_GET['prod_id'] != NULL){
    $id = $_GET['prod_id'];
    $S_Article = $db->query("SELECT * from articles where no_article = $id limit 1")->fetchAll();
    $prod_img = "";$artname = "";
    // this is the foreign key no_prix
    $no_prix = "";

    foreach($S_Article as $data){
        $artname = $data['nom_art'];$prod_img = $data['prod_img'];$no_prix = $data['no_prix'];
    }

    // dealing with the foreign key no_prix in article table
    $prix = $db->query("SELECT * from prix where no_prix = $no_prix limit 1")->fetchAll();
    $valeur = "";
    foreach($prix as $price){
        $valeur = $price['valeur'];
    }
}

?>

<style>
    body{
        background-color: rgb(234, 231, 236);
    }
    .container_Djoumessi{
        height: 150px;
    }
    #chat{
        top: 70px;
    }
</style>

<div class="container_Djoumessi">
    <div class="wrapperBanner_Djoumessi">
        <img src="https://cdn.shopify.com/s/files/1/0566/7363/2417/files/lQDPJxCJi-D3_VbNAibNB4CwSttnPJYTC7EEKG-R10AyAA_1920_550_c017b144-7b6f-4d17-89a0-0ff112427743.jpg" alt="">
    </div>
</div>

<div class="cardTitle_Djoumessi">
    <h2>Panier</h2>
    <a href="index.php">Retour au magasinage</a>
</div>

<?php if($_GET['prod_id'] != NULL){
    ?>
    
    <div class="displayerCard_Djpoumessi">
        <div class="cartArts_Djoumessi">
            <div class="cardImg_djoumessi">
                <img src="uploads/<?php echo $prod_img ?>" alt="">
            </div>
            <div class="cardArtdesc">
                <h2><?php echo $artname; ?></h2>
                <h4><strong>Colleur:</strong> Gris</h4>
                <div class="cartQuantity">
                    <button>-</button> <span>3</span> <button>+</button>
                </div>
            </div>
        </div>
        <div class="Totalcard_Djoumessi">
            <div class="Tprice_Djoumessi">
                <label id="lib">Sous-Total</label><label id="val"><?php echo $valeur; ?></label>
            </div>
            <div class="procedePaymt_Djoumessi">
                <a href="payementForm.php?prod_id=<?php echo $id?>">PROCEDER AU PAIEMENT</a>
            </div>
            <div class="promCodeMsg_Djoumessi">
                Les codes promo, les frais d'envoi et les taxes seront ajoutés à la caisse.
            </div>
        </div>
    </div>
        
    <?php
            
} ?>


<br>
<div class="PayCardlog_Djoumessi">
    <img src="https://cdn.shopify.com/s/files/1/0566/7363/2417/files/1_12f558bf-037b-49db-aff3-7e158af0a028.png" alt="">
</div>
<br>
<br>
<br>
<br>
<hr>

<?php include "mostSales.php" ?>
<?php include "footer.php";?>
