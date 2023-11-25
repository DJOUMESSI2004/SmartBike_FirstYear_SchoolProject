<?php

session_start();


if(isset($_POST['email']) && isset($_POST['password'])){
 
    if($_POST['email'] == "smartbike@gmail.com"  && $_POST['password'] == "12345"){
        $_SESSION['authenticate'] = true;
        header("location: index.php");
        exit();
    }else{
        $_SESSION['authenticate'] = false;
        $error = "Wrong username and password combination";
    }
}else{
    $error = "you are require to fill the form";
}

?>
<style>
    .LoginFormContainer{
        width: 350px;
        /* height: 300px; */
        margin: 10%;
        margin-left: 35%;
        background-color: whitesmoke;
        border: 2px solid darkslateblue;
        border-radius: 15px;
        padding: 5px;
    }
    #dimesionforall{
        width: 90%;
        margin-left: 5%;
        margin-top: 2%;
        margin-bottom: 2%;
    }
    .Admin{
        height: 40px;
        text-align: center;
        color: white;
        font-size: 20px;
        padding: 3px;
        padding-top: 10px;
        font-weight: bolder;
        background-color: darkcyan;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    #dimesionforall input{
        width: 102%;
        height: 40px;
        background: none;
    }
    .endform button{
        margin-left: 82%;
        background: green;
        border: 2px solid darkcyan;
        padding: 3px;
        color: white;
        font-weight: bolder;
        cursor: pointer;
    }
    .endform button:hover{
        border: 3px solid darkcyan;
    }
    .endform{
        margin-left: 5%;
        width: 90%;
        border-bottom: 1px solid darkcyan;
        padding-bottom: 20px;
        padding-top: 20px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .legal_f{
        line-height: 15px;
        font-size: 12px;
    }
    
</style>

<div class="LoginFormContainer">
    <form action="" method="post">
        <div class="Admin" id="dimesionforall">
            Admin Connection Form
        </div>
        <div id="dimesionforall" style="margin-top:7%;">
            <input type="email" name="email" placeholder="Enter your email"/>
        </div>
        <div id="dimesionforall">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div  class="endform">
            <button>Submit</button>
        </div>
        <div id="dimesionforall" class="legal_f">
            📢 make sure your are the owner of this website !! <br>
            🐱‍👤 After 3 attempts the page will be block !!
        </div>
        <?php
            if($error){
                ?>
                <div id="dimesionforall" class="legal_f">
                    <?php echo $error; ?>
                </div>
                <?php
            }
        ?>
        
    </form>
</div>