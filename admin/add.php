<?php

session_start();

include_once('../includes/cnx.php');
include_once('../includes/article.php');




$id=$_SESSION['currentid'];


if(isset( $_POST['content'],$_FILES['img'])){


$content= nl2br($_POST['content']);

$img=$_FILES['img']['name'];
$upload="../img/".$img;
move_uploaded_file($_FILES['img']['tmp_name'],$upload);
$id=$_POST['user'];




   if( empty($content) or empty($img)){

    $error = 'All fields are required !';

   }else{
       $query = $pdo->prepare("SELECT * FROM users");
       $query = $pdo -> prepare('INSERT INTO articles (article_content , article_img , article_timestamp, id_user) VALUES(?, ? , ? , ?) ');

       
       $query -> bindValue(1,$content);
       $query -> bindValue(2,$img);
       $query -> bindValue(3,time());
       $query -> bindValue(4,$id);
  
   
       $query -> execute();

       $msg = 'your article ready';
   }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style.css">
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
                       <li><a class="liste_ul-lien" href="admin/login.php">Login</a></li>
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
             <li><a class="show_ul-lien" href="admin/login.php">Login</a></li>
         </ul>
     </div>
    </div>




    <h2 class="login">Add Article</h2>

<?php  if (isset($error))  { ?>

<small style = "color:#aa0000;margin-left:32%;"><?php echo $error; ?><br><br>

<?php }?>

<?php  if (isset($msg))  { ?>

<small style = "color: green;margin-left:32%;"><?php echo $msg; ?><br><br>

<?php }?>

<form   class="form-inline my-2 my-lg-0" action="add.php" method="post" autocomplete="off" enctype="multipart/form-data" >
<input type="hidden" name="user" value="<?php echo $id; ?>">
 <textarea  name="content" placeholder="content" cols="35" rows="10"></textarea><br><br>
 <input   type="file" name="img"><br><br>
 <input    type="submit" value = "add article">
 
 
</form>

<a style="margin-Bottom: 30%;" href="crudList.php">&larr; Go back</a>
    
<script src="../js/controle.js"></script>

<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }


    </script>
</body>
</html>