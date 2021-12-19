<?php

namespace App\Controllers;

use App\Utility\Image;
use App\Supports\Database;

class StaffController extends Database{
    use Image;

    /***
     * insert data to database
     */
    public function staffCreate($name, $email, $cell, $uname){

        $photo=NULL;
        if($this->hasfile('photo')){
            $photo=$this->move($_FILES['photo'],'photo/staff/');
        }
       
        $this -> create("INSERT INTO staffs(name,email,cell,username,photo) VALUES('$name','$email','$cell','$uname','$photo')");
    }
    /***
     * view all information
     */
    public function staffdata(){
       return $this->all('staffs');
    }

    /***
     * delete 
     */
    public function deletestaff($delete_id){
        return $this->delete('staffs',$delete_id);
    }
    /**
     * show single data
     */
    public function showsingledata($view_id){
        return $this->find('staffs',$view_id);
    }
    /**
     * edit data
     */
    public function updatestaff($name, $email, $cell,$uname,$edit_id){
        $photo=NULL;
        if($this->hasfile('photo')){
            $photo=$this->move($_FILES['photo'],'photo/staff/');
        }
       
      $this -> update("UPDATE staffs SET name='$name',email='$email',cell='$cell',photo='$photo',username='$uname' where id='$edit_id'");
    }
    public function showstaff($edit_id){
        return $this->find('staffs',$edit_id);
    }
}