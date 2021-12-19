<?php

namespace App\Supports;
use mysqli;

abstract class Database{
      private $host=HOST;
      private $user=USER;
      private $pass=PASS;
      private $db=DB;
      private $connect;

  /***
   * server connection
   */
     private function connection(){
        return $this -> connect = new mysqli($this->host , $this->user, $this->pass, $this->db);
     }


     protected function all($table){
     return $this->connection()->query("SELECT * FROM {$table}");

     }
     protected function create($sql){
        $this->connection()->query($sql);

     }
     protected function find($table,$id){
      $data= $this->connection()->query("SELECT * FROM  {$table} WHERE id={$id} LIMIT 1" );
      return $data->fetch_object(); 
     }
     protected function update($sql){
      $this->connection()->query($sql);
     }
     protected function delete($table,$id){
      return $this->connection()->query("DELETE FROM  {$table} WHERE id={$id}" );
     }

}

?>