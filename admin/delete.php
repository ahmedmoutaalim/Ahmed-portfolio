<?php 

session_start();
   include_once('../includes/cnx.php');
   include_once('../includes/article.php');


 
   $article = new Article; 
   $design = new Article;
   $animation = new Article;
   $project = new Article;
 




if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = $pdo -> prepare('DELETE FROM articles WHERE article_id = ? ');
    $query ->bindValue(1 , $id);
    $query -> execute();
     header('Location:delete.php');

}

$articles = $article -> fetch_all();


//------------------------------------

if(isset($_GET['ds'])){

    $ds = $_GET['ds'];

    $des = $pdo -> prepare('DELETE FROM designs WHERE id_design = ? ');
    $des ->bindValue(1 , $ds);
    $des -> execute();

    header('Location:delete.php');

}

$designs = $design ->fetch_all2();


//--------------------------------------

if(isset($_GET['an'])){

    $an = $_GET['an'];

    $anim = $pdo -> prepare('DELETE FROM animations WHERE id_animation = ? ');
    $anim ->bindValue(1 , $an);
    $anim -> execute();

    header('Location:delete.php');

}

$animations = $animation ->fetch_all3();


//-----------------------------

if(isset($_GET['pr'])){

    $pr = $_GET['pr'];

    $pro = $pdo -> prepare('DELETE FROM projects WHERE id_project = ? ');
    $pro ->bindValue(1 , $pr);
    $pro -> execute();

    header('Location:delete.php');
  
}

$projects = $project ->fetch_all4();


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/print.css">
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
                       <li><a class="liste_ul-lien" href="login.php">Login</a></li>
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
             <li><a class="show_ul-lien" href="login.php">Login</a></li>
         </ul>
     </div>
    </div>


    <h2 class="login">delete article</h2>

<div align="center"   class="delete select" >

<!-- <a class="back"  href="crudList.php" >&larr; Go back</a> -->

<h4 style="text-align: center; color: #ed5565;">Select an article to delete :</h4>

<form  style="display: flex; padding: 30px;" style="margin-top: 5%; "   action="delete.php" method="get" >

<!----------------- articles ------------------------->

<select style="margin: 10px;"   class="form-control select-css " onchange="this.form.submit();" name="id">
<option value="1">articles  </option>
  <?php  foreach ($articles as $article){ ?>  
    <option  value="<?php echo $article['article_id'] ;?>">
    <?php echo $article['article_id']; ?>
    </option>
  <?php }?>
</select> <br> <br>

<!----------------- designs ------------------------->

<select style="margin: 10px;"   class="form-control select-css " onchange="this.form.submit();" name="ds">
<option value="1">designs</option>
  <?php  foreach ($designs as $design){ ?>  
    <option  value="<?php echo $design['id_design'] ;?>">
    <?php echo $design['screen_design']; ?>
    </option>
  <?php }?>
</select> <br> <br>

<!----------------------- animations ------------------------->

<select style="margin: 10px;"   class="form-control select-css " onchange="this.form.submit();" name="an">
<option value="1">animations</option>
  <?php  foreach ($animations as $animation){ ?>  
    <option  value="<?php echo $animation['id_animation'] ;?>">
    <?php echo $animation['screen_animation']; ?>
    </option>
  <?php }?>
</select> <br> <br>

<!------------------------- projects ------------------------->

<select  style="margin: 10px;"  class="form-control select-css " onchange="this.form.submit();" name="pr">
<option value="1">projects</option>
  <?php  foreach ($projects as $project){ ?>  
    <option  value="<?php echo $project['id_project'] ;?>">
    <?php echo $project['screen_project']; ?>
    </option>
  <?php }?>
</select>





</form>



</div>

<script src="../js/js.js"></script>

<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }



</script>
</body>
</html>

