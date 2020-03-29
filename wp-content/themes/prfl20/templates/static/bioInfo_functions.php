function blackBox_callback (){
   $preText =  esc_attr( get_option('blackBox'));
    echo ' <input type="text" name="blackBox" placeholder="Gray Banner Text" size="50" value="'.$preText. '" > ';
   

}

function yourName_callback (){
    $preText =  esc_attr( get_option('yourName'));
     echo ' <input type="text" name="yourName" placeholder="your name" size="50" value="'.$preText. '" > ';
    
 
 }