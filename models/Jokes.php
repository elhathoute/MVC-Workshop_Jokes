<?php 

class Jokes{
    
   
     static public function getAll($type){
        $stm = DB::connex()->prepare("select * from jokes ORDER by id $type ");
        $stm->execute();

        return $stm->fetchAll();
    
    }
    static public function getJoke($data){
        try{
            $stm = DB::connex()->prepare("select * from jokes where id=?");
            $stm->execute([$data['id']]);
            $joke=$stm->fetch(PDO::FETCH_OBJ);
            return $joke;
        }catch(PDOException $e){

            echo 'error is : '.$e->getMessage();
        }
       
    
    }

   static public function addJokes($data){
   
    $stm = DB::connex()->prepare("insert into jokes(text) values(?)");
       if( $stm->execute([$data['text']])){
            return true;
       }
       else{
            return false;
       }

       

   }


   static public function updateJokes($data){
    $stm = DB::connex()->prepare("UPDATE jokes SET text=? WHERE id=?");

        // die(print_r($data));
    $stm->execute([$data['text'],$data['id']]);
       if($stm->execute()){

            return true;
       }else{
            return false;
       }
   }


   static public function deleteJokes($data){
    //   die(print_r($data));
    $stm = DB::connex()->prepare("delete from jokes  WHERE id=?");

    $stm->execute([$data]);
       if($stm->execute()){

            return true;
       }else{
            return false;
       }
   }
}

?>