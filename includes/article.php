<?php



class article {

    public function fetch_all(){
       global $pdo;

       $query = $pdo ->prepare("SELECT * FROM articles");
       $query -> execute();
     
       return $query-> fetchAll();

    }
    
    public function fetch_all2(){
       global $pdo;

       $query = $pdo ->prepare("SELECT * FROM designs");
       $query -> execute();
     
       return $query-> fetchAll();

    }

    public function fetch_all3(){
       global $pdo;

       $query = $pdo ->prepare("SELECT * FROM animations");
       $query -> execute();
     
       return $query-> fetchAll();

    }

    public function fetch_all4(){
       global $pdo;

       $query = $pdo ->prepare("SELECT * FROM projects");
       $query -> execute();
     
       return $query-> fetchAll();

    }



    public function fetch_data($article_id){
         global $pdo ; 

         $query = $pdo -> prepare("SELECT * FROM articles WHERE article_id=?");
         $query -> bindValue(1, $article_id );
         $query -> execute();


        return $query -> fetch();
    }
}
?>