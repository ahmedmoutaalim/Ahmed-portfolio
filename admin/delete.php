<?php 

session_start();
   include_once('../includes/cnx.php');
   include_once('../includes/article.php');


 
   $article = new Article; 



if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = $pdo -> prepare('DELETE FROM articles WHERE article_id = ? ');
    $query ->bindValue(1 , $id);
    $query -> execute();
     header('Location:delete.php');

}


$articles = $article -> fetch_all();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Css.css">
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


    <h2 class="login">delete article</h2>

<div align="center"   class="delete select" >



<h4 style="text-align: center; color: #ed5565;">Select an article to delete :</h4>

<form style="margin-top: 5%; "   action="delete.php" method="get" >

<select class="form-control select-css" onchange="this.form.submit();" name="id">

  <?php  foreach ($articles as $article){ ?>
      
    <option value="<?php echo $article['article_id'] ;?>">
    <?php echo $article['article_img']; ?>
    </option>
  <?php }?>
</select>




</form>


</div>

<a href="crudList.php" >&larr; Go back</a>
</body>
</html>

