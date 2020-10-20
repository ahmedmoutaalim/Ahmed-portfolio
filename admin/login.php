<?php

// echo md5('password');
session_start();


  include_once('../includes/cnx.php');

  if (isset($_POST['username'], $_POST['password'])){
          
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if(empty($username) or empty($password)){

        $error = 'All fields are required !';
    }else{
        $sql="SELECT * FROM users WHERE user_name = ? AND user_password = ?";
        $query = $pdo->prepare($sql);
        $query -> bindValue(1, $username);
        $query -> bindValue(2, $password);
      
        $query->execute();

        $data=$query->fetch(PDO::FETCH_ASSOC);
        $userid=$data['id_user'];

        $_SESSION['currentid']=$userid;

        $num = $query -> rowCount();

        if($num == 1){

            header('Location:crudList.php');
          
            exit();
        } else {

            $error =' Incorrect details !';
     
        }

    }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Document</title>
</head>
<body>
    


<div class="container navbar">
         <header>
               <div class="lgo" >
                   <h1>Ahmed</h1>
               </div>

               <div class="liste">
                   <ul class="liste_ul">
                       <li><a class="liste_ul-lien" href="#about">about me </a></li>
                       <li><a class="liste_ul-lien" href="#skills"> skills</a></li>
                       <li><a class="liste_ul-lien" href="#work">Portfolio</a></li>
                       <li><a class="liste_ul-lien" href="#contact">Contact</a></li>
                       <li><a class="liste_ul-lien" href="#">Login</a></li>
                   </ul>

                   <div class="contain " id="menu" onclick="myFunction(this)">
                    <div  class="bar1"></div>
                    <div  class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
                </div>
              
         </header>
         
         <div class="Rmenu hide" id="list">
            <ul class="show">
             <li><a class="show_ul-lien" href="#about">about me </a></li>
             <li><a class="show_ul-lien" href="#skills"> skills</a></li>
             <li><a class="show_ul-lien" href="#work">Portfolio</a></li>
             <li><a class="show_ul-lien" href="#contact">Contact</a></li>
             <li><a class="show_ul-lien" href="#">Login</a></li>
         </ul>
     </div>
    </div>




 
<div class="container contact" id="contact">
<h2 class="login" style="text-align:center;
font-size:10rem ;
opacity: .1;">Login</h2>


<?php  if (isset($error))  { ?>

<small class="small"><?php echo $error; ?><br>

<?php }?>

    <form action="login.php" method="post" autocomplete="off">
        <input type="text" name="username" placeholder="Full name">
        <input type="password" name="password" placeholder="Password" >
        <input class="sub" type="submit" value="valider">
    </form>

    <a class="back" href="../index.php">&larr; Accueil</a>
</div>

<script src="../js/js.js"></script>

<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }



</script>
</body>
</html>

 