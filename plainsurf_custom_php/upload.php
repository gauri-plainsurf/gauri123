<?php

if(isset($_FILES['file'])){
    $file=$_FILES['file'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp'];
    $file_size = $file['size'];
     $file_error = $file['error'];
     
     
     $file_ext = explode('.',$file_name);
     $file_ext = strtolower(end($file_ext));
     
     $allowed = array('txt','png');
     if(in_array($file_ext, $allowed)){
         if($file_error === 0){
             if($file_size<=209752){
                  $file_name_new = uniqid('',true) . '.' .$file_ext;
                  $file_destination = 'uploads/' .$file_name_new;
                   if(move_uploaded_file($file_tmp, $file_destination)){
                       echo $file_destination;
                      
             }
             }
         }
     }
     
    
}


