<?php include "Server/retrieve.php";?>

<style>
    #chat{
        margin-top: -70px;
    }
</style>
<div class="actual_bike_container_Djoumessi">
    <?php
        foreach ($article as $data){
            $prod_id = $data['no_article'];
            $img = $data['prod_img'];
            $prix = $data['no_prix'];
            $price = $db->query("SELECT * from prix where no_prix = $prix limit 1")->fetchAll();
            foreach($price as $prix){
                $prix = $prix['valeur'];
                ?>
                <div class="actaul_img_Djoumessi" >
                    <div class="img_box">
                        <img src="uploads/<?php echo $img; ?>" alt="">
                    </div>
                    <h5><a href="viewProduct.php?prod_id=<?php echo $prod_id ?>"><?php echo $data['nom_art'];?></a></h5>
                    <h6><a href="viewProduct.php?prod_id=<?php echo $prod_id ?>" style="font-size:16px; color:black;">Prix  <?php echo $prix;?> £uro</a> </h6>
                    <!-- <div class="rdc_Djoumessi">
                        reduce
                    </div> -->
                    <div class="B_btns">
                        <div class="btnbuy" id="btn">
                            <a href="viewProduct.php?prod_id=<?php echo $prod_id ?>">buy</a>
                        </div>
                        <div class="btnadd" id="btn">
                            <a href="card.php?prod_id=<?php echo $prod_id ?>">Card</a>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
    ?>
</div>