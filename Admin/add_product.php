<!-- <link rel="stylesheet" href="style.css"> -->
<?php include "navbar.php"; include "../Server/insertDB.php"; include "../Server/retrieve.php"; 

?>

<style>

</style>
    
    <!-- im going to put a message block here -->
    <div class="admiAddForm">
        <div class="messageContainer">
            <?php 
            if($msg){
                ?> <div class="Bmessage"> <?php echo '<h1>'.$msg.'</h1>'; ?> </div> <?php
            }elseif($gmsg){
                ?> <div class="Gmessage"> <?php echo '<h1>'.$gmsg.'</h1>';?> </div> <?php
            }
            ?>
        </div>
        <h2>Add Product</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="short_Djoumessi">
                <input type="file" name="p_image" id="" placeholder="select product file">
                <select name="vandeur" id="vandeur">
                    <?php
                        foreach ($vandeur as $vand_name){
                            ?><option $vand_name="<?php echo $vand_name['no_vandeur']; ?>"><?php echo $vand_name['nom_vandeur']; ?> is the vendor name</option><?php
                        }
                    ?>
                </select>
            </div>
            <div class="input_Djoumessi">
                <input type="text" name="p_name" id="" placeholder="Product name">
            </div>
            <div class="short_Djoumessi">
                <input type="text" name="p_poid" id="" placeholder="Poids net example: 36,9 kg">
                <input type="text" name="p_vitesse" id="" placeholder="vitesse: 25 km/h">
            </div>
            <div class="short_Djoumessi">
                <input type="text" name="p_siege" id="" placeholder="Siege">
                <input type="text" name="p_amort" id="" placeholder="amortisseur">
            </div>
            <div class="short_Djoumessi">
                <input type="text" name="p_chargeur" id="" placeholder="chargeur">
                <input type="text" name="p_taille" id="" placeholder="taille">
            </div>
            <div class="short_Djoumessi">
                <select name="p_catego" id="">
                    <?php
                        foreach ($p_cat as $cat){
                            ?><option value="<?php echo $cat['no_cat']; ?>"><?php echo $cat['nom_categorie']; ?></option><?php
                        }
                    ?>
                </select>
                <select name="p_price" id="p_price">
                    <?php
                        foreach ($prix as $valuer){
                            ?><option value="<?php echo $valuer['no_prix']; ?>"><?php echo $valuer['valeur']; ?> Euro</option><?php
                        }
                    ?>
                </select>
            </div>
            <div class="input_Djoumessi">
                <label for="">Product Description</label>
                <textarea name="p_desc" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="short_Djoumessi_btn">
                <a href="">view Products</a>
                <button name="submit_p" >register</button>
                <input type="submit" name="p_submit" value="register">
            </div>
        </form>
    </div>




