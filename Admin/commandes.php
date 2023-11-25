
<link rel="stylesheet" href="style.css">
<?php include "navbar.php"; include "../Server/retrieve.php";


?>
<div class="commandes_Djoumessi">
    <table>
        <tr id="head">
            <td>commande id</td>
            <td>name</td>
            <td>email</td>
            <td>adresse</td>
            <td>phone number</td>
            <td>Product id</td>
            <td>product</td>
            <td>Quantity</td>
            <td>livraison</td>
            <td>date</td>
            <td colspan="2" >total price</td>
        </tr>
        <?php

        foreach($commande as $cmde){

            $panier = $cmde['no_panier'];
            $art_id = $db->query("SELECT * from panier_articles where no_panier = $panier limit 1")->fetchAll();
            foreach($art_id as $artid){
                $art_id = $artid['no_article'];
                $pan_id = $artid['no_panier'];

                $art_info = $db->query("SELECT * from articles where no_article = $art_id limit 1")->fetchAll();
                $art_no = "";
                $art_pic = "";
                foreach($art_info as $info){
                    $art_no = $info['no_article'];
                    $art_pic = $info['prod_img'];

                    // dealing with card to get the clients names
                    $pan_client = $db->query("SELECT * from panier where no_panier = $pan_id")->fetchAll();
                    foreach($pan_client as $p_c){
                        $client_id = $p_c['no_client'];
                        $cl_info = $db->query("SELECT * from client where no_client = $client_id limit 1")->fetchAll();
                        foreach($cl_info as $info){

                        ?>
                        <tr>
                            <td><?php echo $cmde['no_cmde'] ?></td>
                            <td><?php echo $info['nom_client'] ?></td>
                            <td><?php echo $info['email_client'] ?></td>
                            <td><?php echo $info['adresse_client'] ?></td>
                            <td><?php echo $info['tel_client'] ?></td>
                            <td><?php echo $art_no ?></td>
                            <td><img src="../uploads/<?php echo $art_pic ?>" alt=""></td>
                            <td><?php echo $cmde['quantite'] ?></td>
                            <td><?php echo $cmde['livraison'] ?></td>
                            <td><?php echo $cmde['prix_total'] ?></td>
                            <td><?php echo $cmde['date_cmde'] ?></td>
                            <td><button>send</button></td>
                        </tr>
                        <?php
                            
                        }
                    }
                    
                }


            }
        }
        ?>
    </table>
</div>