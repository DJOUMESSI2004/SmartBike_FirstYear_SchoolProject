<?php
include "navbar.php"; include "Server/ConnectDB.php";

$id = $_GET['prod_id'];
$S_Article = $db->query("SELECT * from articles where no_article = $id limit 1")->fetchAll();
$prod_img = "";$artname = "";$vitesse = "";$poid = "";
$seige = "";$chargeur = "";$armortisseur = "";$description = "";
// this is the foreign key no_prix
$no_prix = "";

foreach($S_Article as $data){
    $artname = $data['nom_art'];$prod_img = $data['prod_img'];$vitesse = $data['vitesse'];
    $poid = $data['poid'];$seige = $data['seige'];$chargeur = $data['chargeur'];
    $armortisseur = $data['armortisseur'];$description = $data['description'];$no_prix = $data['no_prix'];
}

// dealing with the foreign key no_prix in article table
$prix = $db->query("SELECT * from prix where no_prix = $no_prix limit 1")->fetchAll();
$valeur = "";
foreach($prix as $price){
    $valeur = $price['valeur'];
}
?>

<style>
    nav{
        background-color: white;
        border-top: 2px solid gray;
    }
    .actual_bike_container_Djoumessi{
        margin-top: 5%;
    }
    #chat{
        top: 70px;
    }

</style>


<div class="atcles_Container_Djoumessi" style="margin-top: 9%;">
    <div class="Leftartside_Djoumessi">
        <img src="uploads/<?php echo $prod_img ?>" alt="">
    </div>
    <div class="Rigthartside_Djoumessi">
        <div class="ArtName_Djoumessi">
            <h2>Lankeleisi MG600 Plus 1000W 26" Fat Bike VTT électrique avec 20Ah Samsung Batterie</h2>
            <h4><?php echo $valeur; ?> £uro</h4>
        </div>
        <div class="ctnCmd_Djoumessi">
            <div class="ctnBtn_Djoumessi" id="addCart_Djoumessi"><a href="card.php?prod_id=<?php echo $id?>">Add card</a></div>
            <div class="ctnBtn_Djoumessi" id="buyart_Djoumessi"><a href="payementForm.php?prod_id=<?php echo $id?>">Buy now</a></div>
        </div>
        <div class="payTpeLog_Djoumessi">
            <img src="https://cdn.shopify.com/s/files/1/0566/7363/2417/files/2_f415076c-b828-4570-a168-5dd0824a80e8.jpg?v=1681213302&width=700" alt="">
        </div>
        <div class="livrableArts_Djoumessi">
            <ul>
                <li><span>sp</span> Livraison gratuite</li>
                <li>AVIS : Le vélo orange est maintenant en prévente, délai d'expédition estimé : 25/4-30/4</li>
                <li>Le vélo gris est en stock et sera expédié dans les 3 jours ouvrables après le paiement.</li>
                <li>Arrivez dans les 7 à 10 jours ouvrables après l'expédition depuis l'UE.</li>
            </ul>
        </div>
        <div class="annexProduct_Djoumessi">
            <h4></h4>
        </div>
    </div>
</div>
<div class="Artcaracteristics">
    <h2>Caractéristiques</h2>
    <table border="1px">
        <tr>
            <td>Modèle</td><td>MG600 PLUS</td>
        </tr>
        <tr>
            <td>Poids net</td><td><?php echo $poid; ?> kg (y compris la batterie sans cadeaux)</td>
        </tr>
        <tr>
            <td>Vitesse maximum</td><td><?php echo $vitesse; ?>k/h (peut être déverrouillé)</td>
        </tr>
        <tr>
            <td>Puissance du moteur</td><td>48V 1000W</td>
        </tr>
        <tr>
            <td>Couple</td><td>70Nm</td>
        </tr>
        <tr>
            <td>Pente</td><td>35°</td>
        </tr>
        <tr>
            <td>Batterie</td><td id="alert">Batterie lithium Samsung 20Ah 21700</td>
        </tr>
        <tr>
            <td>Niveau d'étanchéité</td><td>IP54 (life waterproof, peut être utilisé sous la pluie)</td>
        </tr>
        <tr>
            <td>Kilométrage</td><td>Mode électrique 60 - 70KM Mode assistance 120 - 150KM</td>
        </tr>
        <tr>
            <td>Chargeur</td><td><?php echo $chargeur; ?></td>
        </tr>
        <tr>
            <td>Temps de charge</td><td>6-7h</td>
        </tr>
        <tr>
            <td>Taille du véhicule</td><td>198 cm * 45 cm * 100 cm</td>
        </tr>
        <tr>
            <td>Charge maximale</td><td>200 kg</td>
        </tr>
        <tr>
            <td>Hauteur convenable</td><td>160 - 190cm</td>
        </tr>
        <tr>
            <td>Frame</td><td>Cadre en alliage d'aluminium 6061</td>
        </tr>
        <tr>
            <td>Amortisseur</td><td id="alert"><?php echo $armortisseur; ?></td>
        </tr>
        <tr>
            <td>Moyeu de roue</td><td>Caoutchouc de gros pneu 26 * 4.0</td>
        </tr>
        <tr>
            <td>Guidon</td><td>Guidon forgé en alliage d'aluminium 31.8</td>
        </tr>
        <tr>
            <td>Manivelle</td><td>Pédalier en alliage d'aluminium 48T</td>
        </tr>
        <tr>
            <td>Siège</td><td><?php echo $seige; ?></td>
        </tr>
        <tr>
            <td>Vitesse variable</td><td>Cadran à doigt Shimano M315-7 et cadran M310/arrière</td>
        </tr>
        <tr>
            <td>Pignon arrière</td><td>Engrenage à 7 vitesses</td>
        </tr>
        <tr>
            <td>Chaîne</td><td>7s</td>
        </tr>
        <tr>
            <td>Système de contrôle</td><td>Contrôleur vectoriel 48V 20AH</td>
        </tr>
        <tr>
            <td>Mètre</td><td>Compteur LCD à écran couleur</td>
        </tr>
        <tr>
            <td>Frein</td><td>DYISLANDFreins à disque hydrauliques désexcités</td>
        </tr>

    </table>
</div>

<div class="mostSaleTitle">
    <h2>Vélos électriques les plus vendus</h2>
</div>

<?php include "mostSales.php"; ?>
<?php include "footer.php";?>