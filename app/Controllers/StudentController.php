<?php

namespace App\Controllers;

use App\Utility\Image;
use App\Supports\Database;

class StudentController extends Database{
    use Image;

    /***
     * insert data to database
     */
    public function studentCreate($name, $email, $cell, $uname){

        $photo=NULL;
        if($this->hasfile('photo')){
            $photo=$this->move($_FILES['photo'],'photo/students/');
        }
       
        $this -> create("INSERT INTO students(name,email,cell,username,photo) VALUES('$name','$email','$cell','$uname','$photo')");
    }
    /***
     * view all information
     */
    public function studentdata(){
       return $this->all('students');
    }

    /***
     * delete 
     */
    public function deletestudent($delete_id){
        return $this->delete('students',$delete_id);
    }
    /**
     * show single data
     */
    public function showsingledata($view_id){
        return $this->find('students',$view_id);
    }
    /**
     * edit data
     */
    public function updatestudent($name, $email, $cell, $uname,$edit_id){
        $photo=NULL;
        if($this->hasfile('photo')){
            $photo=$this->move($_FILES['photo'],'photo/students/');
        }
      $this -> update("UPDATE students SET name='$name',email='$email',cell='$cell',photo='$photo',username='$uname' where id='$edit_id'");
    }
    public function showstudent($edit_id){
        return $this->find('students',$edit_id);
    }
    
}