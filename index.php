<?php

include_once('includes/cnx.php');
include_once('includes/article.php');

$article = new Article;
$articles = $article ->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Ahmed portfolio</title>
</head>
<body>
<!-----------------------------------------navbar--------------------------------->
    <div class="container navbar">
         <header>
               <div class="lgo" >
                   <h1  >Ahmed</h1>
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

  


 <!--------------------------------premiere section----------------------------------->
   <div class="container main-info-section">
       <div class="text">
           <h1>
               <span class="spn">H</span>
               <span class="m-left">i</span>
               <span class="m-left">,</span>
               <br>
               <span class="spn">I</span>
               <span class="m-left">'</span>
               <span class="m-left">m</span>
               <span class="name spn">A</span>
               <span class="m-left name">h</span>
               <span class="m-left name">m</span>
               <span class="m-left name">e</span>
               <span class="m-left name">d</span>
               <span class="m-left">,</span>
               <br>
               <span class="spn">W</span>
               <span class="m-left">e</span>
               <span class="m-left">b</span>
               <span class="spn">D</span>
               <span class="m-left">e</span>
               <span class="m-left">s</span>
               <span class="m-left">i</span>
               <span class="m-left">g</span>
               <span class="m-left">n</span>
               <span class="m-left">e</span>
               <span class="m-left">r</span>
               <span class="m-left">.</span>
           </h1>
           <p>css/JavaScript</p>
           <a  class="btn" href="#contact">contact me</a>
        </div>


          <div class="profile-image">
              <img src="img/ahmed.png" alt="myimg">
          </div>  
    </div>

<!-------------------------------------------douxieme section----------------------------------------->

    <div class="container about ctr" id="about">
       <h1>About</h1>
       <div class="about-me-info">
       <?php foreach ($articles as $article) { ?>
           <p>
         <?php echo $article['article_content'] ; ?>
           </p>
       <?php } ?>
       </div>
           <img class="image"  src="img/pointer.png" alt="">
    </div>


<!---------------------------------------------troisiemé section--------------------------->    

   <div class="container skills ctr skl" id="skills">
      <h1>Skills</h1>
      <p class="skills-info"> Le Lorem Ipsum est simplement du faux texte employé dans la composition et 
        la mise en page avant impression. Le Lorem Ipsum 
        est le faux texte standard de l'imprimerie depuis les années</p>
         <div class="html"> 

             <div class="tag-html">
                 <p>HTML</p>
             </div>

             <div class="progressbar">
                 <div class="bar-html"></div>
             </div>
             
         </div>


         <div class="html"> 

             <div class="tag-css">
                 <p>Css</p>
             </div>

             <div class="progressbar">
                 <div class="bar-css"></div>
             </div>

         </div>

         <div class="html"> 

             <div class="tag-javascript">
                 <p>JavaScript</p>
             </div>

             <div class="progressbar">
                 <div class="bar-javascript"></div>
             </div>

         </div>
         <div class="html"> 

             <div class="tag-designing">
                 <p>Php</p>
             </div>

             <div class="progressbar">
                 <div class="bar-design"></div>
             </div>

         </div>
         <div class="html"> 

             <div class="tag-designing">
                 <p>MySql</p>
             </div>

             <div class="progressbar">
                 <div class="bar-design"></div>
             </div>

         </div>

   </div>


   <div class="container work ctr" id="work">
       <h1>Work</h1>
       <div class="work-category">
           <button id="designing" class="active" > Web Designing</button>
           <button id="animation" > Web Animation</button>
           <button id="project" >React projects</button>
       </div>
     <section class="selectAll screen"> 
       <div class="category-designing "> 
           <a href=""><img src="img/1.png"></a>
           <!-- <a href=""><img src="img/2.png"></a>
           <a href=""><img src="img/3.png"></a>
           <a href=""><img src="img/2.png"></a>
           <a href=""><img src="img/3.png"></a> -->
        </div>
       <div class="category-animation hideCategory"> 
           <a href=""><img src="img/1.png"></a>
           <a href=""><img src="img/2.png"></a>
           <!-- <a href=""><img src="img/3.png"></a>
           <a href=""><img src="img/2.png"></a> -->
           
        </div>
       <div class="category-project hideCategory"> 
           <a href=""><img src="img/1.png"></a>
           <a href=""><img src="img/2.png"></a>
           <a href=""><img src="img/3.png"></a>
           <a href=""><img src="img/2.png"></a>
        </div>
    </section>    
   </div>

   <!------------------------------------------------quatrieme section----------------->
<div class="container contact" id="contact">
    <h1>Contact</h1>
    <form>
        <input type="text" placeholder="Full name">
        <input type="email" placeholder="Email@exemple.com" >
        <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
        <input class="envoyer" type="submit">
    </form>
</div>


<footer>
    <hr>
    <p>2020 Copyright. all Rights Reserved.  </p>

</footer>


<script src="js/java.js"></script>

<script>
    function myFunction(x) {
      x.classList.toggle("change");
    }


    </script>
<!-- <script src="js/Animation.gsap.min.js"></script>
<script src="js/CSSPlugin.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/TimeLineLite.min.js"></script>
<script src="js/TweenMax.min.js"></script> -->

</body>
</html>