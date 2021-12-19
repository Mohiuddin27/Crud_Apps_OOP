<?php

namespace App\Supports;

class Validate{
   public static function msg($msg, $type='danger')
   {
      return "<p class=\"alert alert-{$type}\">$msg<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
  }

  public static function email($email)
  {
      if(filter_var($email,FILTER_VALIDATE_EMAIL)){
          return true;
      }
      else{
          return false;
      }
  }
}


