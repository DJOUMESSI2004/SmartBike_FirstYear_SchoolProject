
<?php include "navbar.php"; include "../Server/insertDB.php"; include "../Server/retrieve.php";?>

<div class="right_djoumessi">
    <div class="messageContainer">
        <?php 
        if($bmsg){
            ?> <div class="Bmessage"> <?php echo '<h1>'.$bmsg.'</h1>'; ?> </div> <?php
        }elseif($gmsgn){
            ?> <div class="Gmessage"> <?php echo '<h1>'.$gmsgn.'</h1>';?> </div> <?php
        }
        ?>
    </div>
    <div class="rightblock_Djoumessi">
        <h2>Add Rayon</h2>
        <form action="" method="post">
            <div class="input_Djoumessi">
                <input type="text" name="rayon" id="" placeholder="Add rayon name">
            </div>
            <div class="short_Djoumessi_btn">
                <input type="submit" name="velideR" id="btn">
            </div>
        </form>
    </div>

    <div class="rightblock_Djoumessi">
        <h2>Add category</h2>
        <form action="" method="post">
            <div class="input_Djoumessi">
                <input type="text" name="cat" id="" placeholder="Add category name">
            </div>
            <select name="rayon" id="rayon">
                <?php
                    foreach ($rayon as $data){
                        ?><option value="<?php echo $data['no_rayon']; ?>"> <?php echo $data['nom_rayon']; ?> </option><?php
                    }
                    ?>
            </select>
            <select name="modele" id="">
                    <?php
                        foreach ($modele as $mode){
                            ?><option value="<?php echo $mode['no_modele']; ?>"><?php echo $mode['nom_modele']; ?></option><?php
                        }
                    ?>
                </select>
            <div class="short_Djoumessi_btn">
                <input type="submit" name="valideC" id="btn">
            </div>
        </form>
    </div>

    <div class="rightblock_Djoumessi">
        <h2>Add price</h2>
        <form action="" method="post">
            <div class="input_Djoumessi">
                <input type="text" name="prix" id="" placeholder="Register prices">
            </div>
            <div class="short_Djoumessi_btn">
                <input type="submit" name="valideP" id="btn">
            </div>
        </form>
    </div>

    <div class="rightblock_Djoumessi">
        <h2>Define modele</h2>
        <form action="" method="post">
            <div class="input_Djoumessi">
                <input type="text" name="modele" id="" placeholder="define modele">
                <textarea name="desc_model" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="short_Djoumessi_btn">
                <input type="submit" name="valideM" id="btn">
            </div>
        </form>
    </div>

</div>