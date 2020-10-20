  
<?php
 session_start();
   include_once('../includes/cnx.php');
   include_once('../includes/suggest.php');
   
   $suggest = new suggest;
   
   $sug = $suggest -> call();

   if(isset($_GET['delete'])){
      $id = $_GET['delete'];

      $query = $pdo -> prepare("DELETE FROM suggests WHERE id_suggest = '$id' ");
      $query ->bindValue(1 , $id);
      $query -> execute();


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
   
<h4 style="text-align:center;
font-size:10rem ;
opacity: .1;">crud </h4>


<div class="box">

  <a href="add.php">add Articale</a>
  <a href="delete.php">delete Articale</a>
  <a href="logout.php">Logout</a>

</div>




           <button class="showbtn" id="show" > suggests</button>
    


<section  style="   margin-left: auto;
    margin-right: auto;
    width: 30em" class="hd" id="hidden">


<?php foreach ($sug as $suggest) { ?>
 
 <li class="lign">

 <p style="color: white;" href="suggest.php?id=<?php echo $suggest['id_suggest'] ;?>">
 <span style="color: #48CFAD;" >name :</span>   <?php echo $suggest['suggest_name'] ; ?>
   </p><br>
   
   
    <p style="color: white;" > <span style="color: #48CFAD;" >Email :</span> <?php echo $suggest['suggest_email']; ?></p><br>
    
    <p style="color: white;" ><span style="color: #48CFAD;"  >Suggest :</span>   <?php echo $suggest['suggest_message']; ?></p><br>


  <a style=" text-decoration:none; " href="crudList.php?delete=<?php echo $suggest['id_suggest']; ?>">delete</a><br><br>

 </li>
<?php  } ?>   

</section>




<script src="../js/suggests.js"></script>    
  
<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }

</script>
    </body>
</html>