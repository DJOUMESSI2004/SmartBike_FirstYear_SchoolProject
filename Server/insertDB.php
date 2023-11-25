<?php
// including my database file to my code
include "ConnectDB.php";
// creating a variable to send massages
$msg = "";
$gmsg = "";

// checking if the request method is post 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['p_submit']) &&
        !empty($_POST['p_name']) &&!empty($_POST['p_poid']) &&!empty($_POST['p_vitesse']) &&!empty($_POST['p_siege']) &&
        !empty($_POST['p_amort']) &&!empty($_POST['p_chargeur']) &&!empty($_POST['p_taille']) &&!empty($_POST['p_catego']) &&
        !empty($_POST['p_price']) &&!empty($_POST['p_desc'])){

        // we are using the htmlspecialchars() function to avoid harmfull insertion of data into our database by the user
        //so we store the input into variables
        $p_name = htmlspecialchars($_POST['p_name']);$p_poid = htmlspecialchars($_POST['p_poid']);
        $p_vitesse = htmlspecialchars($_POST['p_vitesse']);$p_siege = htmlspecialchars($_POST['p_siege']);
        $p_amort = htmlspecialchars($_POST['p_amort']);$p_chargeur = htmlspecialchars($_POST['p_chargeur']);
        $p_taille = htmlspecialchars($_POST['p_taille']);$p_catego = htmlspecialchars($_POST['p_catego']);
        $p_price = htmlspecialchars($_POST['p_price']);$p_desc = htmlspecialchars($_POST['p_desc']);
        $no_van = 1;
      
        // preparing the image to insert the name into the database
        $filedir = "../uploads/";$filename = basename($_FILES["p_image"]["name"]);
        $filepath = $filedir.$filename;$filetype = pathinfo($filepath, PATHINFO_EXTENSION);
        if(!empty($_FILES['p_image']['name'])){
            // checking the extension
            $allowedType = array('jpg','jpeg','png');
            if(in_array($filetype,$allowedType)){
                // we upload the image to the uploads folder
                if(move_uploaded_file($_FILES['p_image']['tmp_name'], $filepath)){
                    $gmsg = "good insertion";
                    // space for sql injection to database
                    $query = $db->prepare("INSERT into articles(nom_art,poid,vitesse,seige,armortisseur,chargeur,taille,description,prod_img,no_prix,no_cat,no_vandeur) values(?,?,?,?,?,?,?,?,?,?,?,?)");
                    $insert = $query->execute([$p_name,$p_poid,$p_vitesse,$p_siege,$p_amort,$p_chargeur,$p_taille,$p_desc,$filename,$p_price,$p_catego,$no_van]);
                    $gmsg = "good insertion";
                }else{
                    $msg = "something when wrong when trying to upload the file";
                }
            }else{
                $msg = "only file of types jpg, png and jpeg are require";
            }
        }else{
            $msg = "you must enter the image file ";
        }

    }else{
        $msg = "all the fields are require in the form Product";
    }

}

// inserting user info into database

if(isset($_POST['submit_c'])) {

    if(!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['adresse']) && 
    !empty($_POST['appartement']) && !empty($_POST['codep']) &&!empty($_POST['ville']) && !empty($_POST['telephone'])){

        $email = htmlspecialchars($_POST['email']); $country = htmlspecialchars($_POST['country']); $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']); $adresse = htmlspecialchars($_POST['adresse']); $appartement = htmlspecialchars($_POST['appartement']); $codep = htmlspecialchars($_POST['codep']);
        $ville = htmlspecialchars($_POST['ville']); $telephone = htmlspecialchars($_POST['telephone']);

        // function to keep prod_id client id and panier cici me permet de reduire la redundance de code
        function client_panier_article($sel_id,$id){
            include "ConnectDB.php";
            foreach($sel_id as $cli_id){
                $sel_id = $cli_id['no_client'];
            }
            $insert_panier = $db->prepare("INSERT into panier(no_client) values(?)");
            $insert = $insert_panier->execute([$sel_id]);
            
            $p_id = $db->query("SELECT * from panier where no_client = $sel_id")->fetchAll();
            foreach($p_id as $pan_id){
                $p_id = $pan_id['no_panier'];
            }
            
            // inserting in table panier articles
            $panier_art = $db->prepare("INSERT into panier_articles(no_panier,no_article) values(?,?)");
            $panier_art = $panier_art->execute([$p_id,$id]);
            
            if(!$insert){
                $msg = "something went wrong when submiting";
            }
            else{
                header("location: livraison.php?prod_id=$id&client=$sel_id&panier=$p_id");
            }
        }
        // checking if email and and phone number already exist
        $check = $db->query("SELECT * from client where email_client = '$email' limit 1")->fetchAll();
        if($check){
            $query = $db->prepare("UPDATE client set email_client = '$email', tel_client='$telephone' where email_client = $email");
            $sel_id = $db->query("SELECT * from client where email_client = '$email' ")->fetchAll();
            client_panier_article($sel_id,$id);
        }else{
            $query = $db->prepare("INSERT into client(nom_client, prenom_client,tel_client, email_client,adresse_client,appartement,town_client,postal_code,country) values(?,?,?,?,?,?,?,?,?)");
            $insert = $query->execute([$nom,$prenom,$telephone,$email,$adresse,$appartement,$ville,$codep,$country]);
            $sel_id = $db->query("SELECT * from client where email_client = '$email' ")->fetchAll();
            client_panier_article($sel_id,$id);
        }
        
    }else{
        $msg = "all the field of the form are require ";
    }
}

// passing the commande
if(isset($_POST['f_submit'])){

    $prod_id = $_GET['prod'];
    $panier_id = $_GET['panier'];

    $prix = "";
    $p_img = "";
    $prod_no = "";
    $prod_name = "";
    $no_client = "";
    $email = "";
    $prenom = "";
    $adresse = "";
    $telephone = "";
    $quatite = 1;
    $livraison = "gratuite";


    $c_prod = $db->query("SELECT * from articles where no_article = $prod_id limit 1")->fetchAll();
    foreach($c_prod as $prod){
        $prix = $prod['no_prix'];
        $prod_name = $prod['nom_art'];
        $p_img = $prod['prod_img'];
        $prod_no = $prod['no_article'];
        // $prod_name = $prod['nom_article'];
    }
    $s_prix = $db->query("SELECT * from prix where no_prix = $prix limit 1")->fetchAll();
    foreach($s_prix as $prix){
        $prix = $prix['valeur'];
    }

    $panier_id = $db->query("SELECT * from panier where no_panier = $panier_id limit 1")->fetchAll();
    foreach($panier_id as $c_panier){
        $panier_id = $c_panier['no_panier'];
        $no_client = $c_panier["no_client"];
    }
    
    $sel_client = $db->query("SELECT * from client where no_client = $no_client limit 1")->fetchAll();
    foreach($sel_client as $c_info){
        $email = $c_info['email_client'];
        $prenom = $c_info['prenom_client'];
        $adresse = $c_info['adresse_client'];
        $telephone = $c_info['tel_client'];
    }

    $ins_cmde = $db->prepare("INSERT into commande(contact, adresse, quantite, prix_total, livraison, date_cmde, no_panier) values(?,?,?,?,?,NOW(),?) ");
    $ins_cmde = $ins_cmde->execute([$telephone,$adresse,$quatite, $prix, $livraison,  $panier_id]);

    if($ins_cmde){
        header("location: ../finishMessage.php?mail=$email&addr=$adresse&tel= $telephone&p_nom=$prod_name&prenom=$prenom");
    }
}






$bmsg = "";
$gmsgn = "";
 // inserting the price categorie and rayon
 if(isset($_POST['velideR'])){

    if(!empty($_POST['rayon'])){
        $rayon = htmlspecialchars($_POST['rayon']);
        $query = $db->prepare("INSERT into rayon(nom_rayon) values (?)");
        $insert = $query->execute([$rayon]);
        $gmsgn = "Sucess😊 !!!";
    }else{
        $bmsg =  "all fields are required in form rayon";
    }

 }
 
 if(isset($_POST['valideC'])){

    if(!empty($_POST['cat']) && !empty($_POST['rayon']) && !empty($_POST['modele'])){
        $cate = htmlspecialchars($_POST['cat']);
        $no_rayon = htmlspecialchars($_POST['rayon']);
        $modele = htmlspecialchars($_POST['modele']);
        $query = $db->prepare("INSERT into categorie(nom_categorie, no_rayon, no_modele) values(?,?,?)");
        $insert = $query->execute([$cate, $no_rayon, $modele]);
        $gmsgn = "Sucess😊 !!!";
    }else{
        $bmsg = "all the fields are require in form categorie";
    }

}

if(isset($_POST['valideP'])){

    if(!empty($_POST['prix'])){
        $prix = htmlspecialchars($_POST['prix']);
        if(is_numeric($prix)){
            $query = $db->prepare("INSERT into prix(valeur) values (?)");
            $insert = $query->execute([$prix]);
            $gmsgn = "Sucess😊 !!!";
        }else{
            $bmsg = "is not numerique ";
        }
    }else{
        $bmsg = "all the fields are require in the form Prix";
    }
}


if(isset($_POST['valideM'])){
        
    if(!empty($_POST['modele']) && !empty($_POST['desc_model'])){
        $model = htmlspecialchars($_POST['modele']);
        $desc_model = htmlspecialchars($_POST['desc_model']);
        $query = $db->prepare("INSERT into modele(nom_modele, description) values (?,?)");
        $insert = $query->execute([$model, $desc_model]);
        $gmsgn = "Sucess😊 !!!";
    }else{
        $bmsg = "All the fields are require in the form modele";
    }

}








?>
