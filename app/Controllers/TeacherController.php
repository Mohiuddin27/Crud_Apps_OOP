<?php

namespace App\Controllers;

use App\Utility\Image;
use App\Supports\Database;

class TeacherController extends Database{
    use Image;

    /***
     * insert data to database
     */
    public function teacherCreate($name, $email, $cell, $uname){

        $photo=NULL;
        if($this->hasfile('photo')){
            $photo=$this->move($_FILES['photo'],'photo/teachers/');
        }
       
        $this -> create("INSERT INTO teachers(name,email,cell,username,photo) VALUES('$name','$email','$cell','$uname','$photo')");
    }
    /***
     * view all information
     */
    public function teacherdata(){
       return $this->all('teachers');
    }

    /***
     * delete 
     */
    public function deleteteacher($delete_id){
        return $this->delete('teachers',$delete_id);
    }
    /**
     * show single data
     */
    public function showsingledata($view_id){
        return $this->find('teachers',$view_id);
    }
    /**
     * edit data
     */
    public function updateteacher($name, $email, $cell,$uname,$edit_id){
        $photo=NULL;
        if($this->hasfile('photo')){
            $photo=$this->move($_FILES['photo'],'photo/teachers/');
        }
       
      $this -> update("UPDATE teachers SET name='$name',email='$email',cell='$cell',photo='$photo',username='$uname' where id='$edit_id'");
    }
    public function showteacher($edit_id){
        return $this->find('teachers',$edit_id);
    }
}